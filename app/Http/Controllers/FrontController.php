<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ShopProduct;
use App\Category;
use App\RajaOngkir;
use App\UserAddress;
use App\Footer;
use App\Model\Donation;
use App;
use DB;
use Mail;
use Alert;
use Auth;
use Veritrans_Config;
use Veritrans_Snap;
use Veritrans_Notification;


class FrontController extends Controller
{
    private $dataShop;
    private $baseUrl;
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        
        $this->baseUrl = App::make('url')->to('/');
        $this->dataShop = DB::table('shops')->where('domain', $this->baseUrl)->first();
        //$this->dataShop = DB::table('shops')->where('domain', 'https://kitakitaja.com')->first();
        $this->rajaOngkir = new RajaOngkir();

        // Set midtrans configuration
        Veritrans_Config::$serverKey    = config('services.midtrans.serverKey');
        Veritrans_Config::$isProduction = config('services.midtrans.isProduction');
        Veritrans_Config::$isSanitized  = config('services.midtrans.isSanitized');
        Veritrans_Config::$is3ds        = config('services.midtrans.is3ds');

    }

    public function index()
    {
        //$data['collectionfront']= Product::get();
        /*if(!$this->dataShop){
            return redirect('https://ultimate246.com/admin');
        }*/
        $data['collectionfront']= ShopProduct::select('shop_products.*','products.id as product_id', 'products.name', 'products.name', 'products.slug', 'products.brand', 'products.discount', 'products.main_image', 'products.status')
        ->leftJoin('products', 'shop_products.product_id', '=', 'products.id')
        ->where('shop_products.shop_id', $this->dataShop->id)
        ->orderBy('products.created_at', 'desc')->get();
        $data['category'] = Category::get();
        $data['footers'] = Footer::where('shop_id',$this->dataShop->id)->first();
        $data['frontslide'] = DB::table('frontslides')->where('shop_id',$this->dataShop->id)->get();

            $deviceid = $_SERVER['HTTP_USER_AGENT']."-".$_SERVER['REMOTE_ADDR'];
        $data['collectionsum'] = DB::table('order_carts')->where('shop_id', $this->dataShop->id)->where('status',0)->where('device', $deviceid)->sum('quantity');

        return view('fronts.front',$data);
    }
    public function productdetail($id=null)
    {

        $data['collection']= ShopProduct::select('shop_products.*', 'products.name', 'products.name', 'products.slug', 'products.brand', 'products.discount', 'products.main_image', 'products.status')
        ->leftJoin('products', 'shop_products.product_id', '=', 'products.id')
        ->where('products.id', $id)
        ->where('shop_products.shop_id', $this->dataShop->id)
        ->first();

        $data['slidePicture']     = DB::table('product_assets')->where('product_id',$id)->where('type','model')->get();
        $data['benefit']          = DB::table('benefitContent')->limit(4)->get();
        $data['productPicture']   = DB::table('product_assets')->where('product_id',$id)->get();
        $data['productComment']   = DB::table('globalComment')->get();
        $data['productPictureFooter']  = DB::table('productPicture')->where('type','footer')->where('idProduct',@$id)->get();

        $data['globalFooter']    = DB::table('footer_details')->where('shop_id',$this->dataShop->id)->get();
        $data['varian']    = DB::table('product_stocks')->where('product_id',$id)->get();
        try{
            $provinces = $this->rajaOngkir->getProvince();                    
        if ($provinces['rajaongkir']['status']['code'] === 200) {
            $data['provinceData'] = $provinces['rajaongkir']['results'];
        } else {
            $data['provinceData'] = [];
        }        
    }catch(\Exception $error){
        return $error->getMessage();
    }   
        return view('fronts.frontdetail',$data);
    }
    public function productcategory($id=null)
    {


        $data['globalFooter']    = DB::table('globalFooter')->get();
        $data['category']    = Category::get();

        $data['collection']= ShopProduct::select('shop_products.*', 'products.name', 'products.name', 'products.slug', 'products.brand', 'products.discount', 'products.main_image', 'products.status')
        ->leftJoin('products', 'shop_products.product_id', '=', 'products.id')
        ->leftJoin('categories', 'categories.id', '=', 'products.category_id')
        ->where('categories.id', $id)
        ->where('shop_products.shop_id', $this->dataShop->id)
        ->get();

        return view('fronts.category',$data);
    }

    public function getCity(Request $request)
    {
        $params['province'] = $request->provinceID;
        $cities = $this->rajaOngkir->getCity($params);
        if ($cities['rajaongkir']['status']['code'] === 200) {
            $citiesData = $cities['rajaongkir']['results'];
        } else {
            $citiesData = [];
        }

        return $citiesData;
    }
    public function getCost(Request $request){

        $params["courier"]      = $request->courirDT;
        $params['origin']       = '673';
        $params['originType']   = 'subdistrict';
        $params['destination']  = $request->destination;

        $params['destinationType'] = 'subdistrict';
        $params['weight'] = 1000;

        $cost = $this->rajaOngkir->cost($params);

        if($cost["rajaongkir"]["status"]["code"] === 200){
            $totalCost = $cost['rajaongkir']['results'][0]['costs'];
        }else{
            $totalCost = [];
        }

        return $totalCost;
    }

    public function getSubdistrict(Request $request)
    {
        $params['city'] = $request->cityID;
        $subdistrict = $this->rajaOngkir->getSubdistrict($params);
        if ($subdistrict['rajaongkir']['status']['code'] === 200) {
            $subdistrictData = $subdistrict['rajaongkir']['results'];
        } else {
            $subdistrictData = [];
        }

        return $subdistrictData;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function submitDonation(Request $request)
    {
        $validator = \Validator::make(request()->all(), [
            'courierPacketVal'      => 'required',
            'customer_name'         => 'required',
            'customer_phone'        => 'required',
            //'donation_type'         => 'required',
            'customer_email'        => 'required|email',
            'amount'                => 'required|numeric',
            'customer_address'      => 'required',
            'customer_postalcode'   => 'required',
            'ongkir'                => 'required',
            //'idProduct'             => 'required',
            
        ]);

        if ($validator->fails()) {
            return [ 
              'status'  => 'error',
              'message' => $validator->errors()->first()
            ];
        }
        
        $useraddress = New UserAddress();
            $useraddress->user_id         = 2;
            $useraddress->order_id        = 190;
            $useraddress->title           = 'Alamat utama';
            $useraddress->address         = $this->request->customer_address;
            $useraddress->city            = $request->cityID;
            $useraddress->province        = $request->provinceID;
            $useraddress->subdistrict     = $request->subdistrictID;
            $useraddress->zip_code        = $request->customer_postalcode;
            $useraddress->contact_person  = $request->customer_name;
            $useraddress->phone           = $request->customer_phone;
        $useraddress->save();

        //insert order 
        $orderID = DB::table('orders')->insertGetId([
            'product_id'     => $request->idProduct,
            'shop_id'        => $this->dataShop->id,
            'user_id'        => 2,
            'reseller_id'    => $this->dataShop->user_id,
            'quantity'       => $request->quantityBuy,
            'amount'         => $request->amount,
            'invoice_number' => "INV".rand(11111,99999),
            'order_status'   => 'pending',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s'),
        ]);
        
        /*$productshop = DB::table('shop_products')->where('shop_id',$this->dataShop->id)->where('product_id',$request->idProduct)->first();

        DB::table('order_details')->insert([
            'order_id'      => $orderID,
            'product_id'    => $request->idProduct,
            'name'          => 'Product',
            'order_type'    => 'product',
            'amount'        => $request->amount,
            'quantity'      => $request->quantityBuy,
            'profit'        => $productshop->profit,
            'order_status'  => 'pending',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);*/
        //dd($request->userName);
        
        $productshop = DB::table('shop_products')->where('shop_id',$this->dataShop->id)->where('product_id',$request->idProduct)->first();
        $productshop = DB::table('shop_products')->where('shop_id',$this->dataShop->id)->where('product_id',$request->idProduct)->first();

        $productshopDt = DB::table('products')->where('id',$request->idProduct)->first();
                $deviceid   = $_SERVER['HTTP_USER_AGENT']."-".$_SERVER['REMOTE_ADDR'];
                $ordercart  = DB::table('order_carts')
                                    ->select('order_carts.amount as agent_price','order_carts.*', 'products.name', 'products.name', 'products.slug', 'products.brand', 'products.discount', 'products.main_image', 'products.status')
                                    ->leftJoin('products', 'order_carts.product_id', '=', 'products.id')
                                    //->where('products.id', $id)
                                    ->where('order_carts.shop_id', $this->dataShop->id)
                                    ->where('order_carts.status', 0)
                                    ->where('order_carts.device', $deviceid)
                                    ->get();
                foreach ($ordercart as $ordercartdt) {
                    DB::table('order_details')->insert([
                        'order_id'      => $orderID,
                        'product_id'    => $ordercartdt->product_id,
                        'name'          => 'Product',
                        'order_type'    => 'product',
                        'amount'        => $ordercartdt->amount,
                        'price'         => $ordercartdt->price,
                        'quantity'      => $ordercartdt->quantity,
                        'profit'        => $ordercartdt->profit,
                        'order_status'  => 'pending',
                        'created_at'    => date('Y-m-d H:i:s'),
                    ]);
                    DB::table('order_carts')->where('id',$ordercartdt->id)->update([
                        'status'=>1,
                    ]);
                }

        
        \DB::transaction(function(){
            // Save donasi ke database
            /*$donation = New Donation();
            $donation->donor_name  = $this->request->donor_name;
            $donation->donor_email = $this->request->donor_email;
            $donation->donation_type = @$this->request->donation_type;
            $donation->amount = floatval($this->request->amount);
            $donation->note         = $this->request->note;
            $donation->save();*/

            $donation = Donation::create([
                /*'donor_name'      => $this->request->donor_name,
                'donor_email'       => $this->request->donor_email,
                'donation_type'     => @$this->request->donation_type,
                'amount'            => floatval($this->request->amount),
                'note'              => $this->request->note, */

                'donor_name'     => $this->request->customer_name,
                'donor_email'    => $this->request->customer_email,
                'donation_type'  => $this->request->donation_type,
                'amount'         => $this->request->amount,
                'note'           => @$this->request->note,

            ]);

            // Buat transaksi ke midtrans kemudian save snap tokennya.
            $payload = [
                'transaction_details' => [
                    'order_id'      => $donation->id,
                    'gross_amount'  => $donation->amount,
                ],
                'customer_details' => [
                    'first_name'    => $donation->donor_name,
                    'email'         => $donation->donor_email,
                    // 'phone'         => '08888888888',
                    // 'address'       => '',
                ],
                'item_details' => [
                    [
                        'id'       => $donation->donation_type,
                        'price'    => $donation->amount,
                        'quantity' => 1,
                        'name'     => ucwords(str_replace('_', ' ', 'test'))
                    ]
                ]
            ];
            $snapToken = Veritrans_Snap::getSnapToken($payload);
            $donation->snap_token = $snapToken;
            $donation->save();


            // Beri response snap token
            $this->response['snap_token'] = $snapToken;
        });

        return response()->json($this->response);
    }
    public function notificationHandler(Request $request)
    {
        $notif = new Veritrans_Notification();
        \DB::transaction(function() use($notif) {

          $transaction      = $notif->transaction_status;
          $type             = $notif->payment_type;
          $orderId          = $notif->order_id;
          $fraud            = $notif->fraud_status;
          $donation         = Donation::findOrFail($orderId);

          if ($transaction == 'capture') {

            // For credit card transaction, we need to check whether transaction is challenge by FDS or not
            if ($type == 'credit_card') {

              if($fraud == 'challenge') {
                // TODO set payment status in merchant's database to 'Challenge by FDS'
                // TODO merchant should decide whether this transaction is authorized or not in MAP
                // $donation->addUpdate("Transaction order_id: " . $orderId ." is challenged by FDS");
                $donation->setPending();
              } else {
                // TODO set payment status in merchant's database to 'Success'
                // $donation->addUpdate("Transaction order_id: " . $orderId ." successfully captured using " . $type);
                $donation->setSuccess();
              }

            }

          } elseif ($transaction == 'settlement') {

            // TODO set payment status in merchant's database to 'Settlement'
            // $donation->addUpdate("Transaction order_id: " . $orderId ." successfully transfered using " . $type);
            $donation->setSuccess();

          } elseif($transaction == 'pending'){

            // TODO set payment status in merchant's database to 'Pending'
            // $donation->addUpdate("Waiting customer to finish transaction order_id: " . $orderId . " using " . $type);
            $donation->setPending();

          } elseif ($transaction == 'deny') {

            // TODO set payment status in merchant's database to 'Failed'
            // $donation->addUpdate("Payment using " . $type . " for transaction order_id: " . $orderId . " is Failed.");
            $donation->setFailed();

          } elseif ($transaction == 'expire') {

            // TODO set payment status in merchant's database to 'expire'
            // $donation->addUpdate("Payment using " . $type . " for transaction order_id: " . $orderId . " is expired.");
            $donation->setExpired();

          } elseif ($transaction == 'cancel') {

            // TODO set payment status in merchant's database to 'Failed'
            // $donation->addUpdate("Payment using " . $type . " for transaction order_id: " . $orderId . " is canceled.");
            $donation->setFailed();

          }

        });

        return;
    }
    public function paid()
    {
        //
    }
    public function success()
    {
        return redirect('/')->with('success','berhasil');
    }

    public function submitPaidCod(Request $request)
    {
        /*return [ 
            'status'  => 'error',
            'message' => $request->akun_order
          ];*/
          
        $validator = \Validator::make(request()->all(), [
            'akun_order'            => 'required',
            'customer_name'         => 'required',
            'customer_phone'        => 'required',
            'customer_email'        => 'required|email',
            'amount'                => 'required|numeric',
            'customer_address'      => 'required',
            'customer_postalcode'   => 'required',
            'ongkir'                => 'required',
            'paidID'                => 'required',
            'courierPacketVal'      => 'required'
        ]);

        if ($validator->fails()) {
            return [ 
              'status'  => 'error',
              'message' => $validator->errors()->first()
            ];
        }

        
        if($request->akun_order=='Guest'){
            $userId=2;
        }elseif($request->akun_order=='NewMember'){
            $dtuser                 = New User();
            $dtuser->name           = $request->customer_name;
            $dtuser->email          = $request->customer_address;
            $dtuser->password       = Hash::make('user321');
            $dtuser->user_type      = 'Customer';
            $dtuser->status         = 'active';
            
            $userId =$dtuser->id;

            $email                      = $request->customer_email;
            
            $mail                       = array();
            $mail['name']               = @$request->customer_name;
            $mail['email']              = $request->customer_email;
            $mail['phone']              = $request->customer_phone;
                            $date           = \Carbon\Carbon::now();
                            $newdate        = $date->setTimezone('Asia/Jakarta');
                            $ndate          = \Carbon\Carbon::parse($newdate);
                            $newdatelast    = $ndate->format('d M Y H:i:s');
            $mail['datetime']             = @$newdatelast;
            Mail::send('email.newuser', $mail, function($message) use ($email)
            {
                $message->from("no-reply@ultimate246.com", @$this->dataShop->company_name);
                $message->subject("Information | New User");
                $message->to($email);
            }); 

        }else{
            if($request->akun_order=='NewAdd')
            {
                $userId=Auth::user()->id;
            }else{
                $userId=Auth::user()->id;
            
            }
        }

        if($request->akun_order=='Guest' or $request->akun_order=='NewMember' or $request->akun_order=='NewAdd'){
            $useraddress = New UserAddress();
            $useraddress->user_id         = $userId;
            $useraddress->order_id        = 190;
            $useraddress->title           = 'Alamat utama';
            $useraddress->address         = $this->request->customer_address;
            $useraddress->city            = $request->cityID;
            $useraddress->province        = $request->provinceID;
            $useraddress->subdistrict     = $request->subdistrictID;
            $useraddress->zip_code        = $request->customer_postalcode;
            $useraddress->contact_person  = $request->customer_name;
            $useraddress->phone           = $request->customer_phone;
            $useraddress->email           = $request->customer_email;
            $useraddress->save();

            $addressid = $useraddress->id;
        }else{
            $addressid = $request->akun_order;
        }
        

        //insert order 
        $orderID = DB::table('orders')->insertGetId([
            //'product_id'     => $request->idProduct,
            'shop_id'        => $this->dataShop->id,
            'address_id'     => $addressid,
            'user_id'        => $userId,
            'reseller_id'    => $this->dataShop->user_id,
            'payment_method' => $request->paidID,
            'quantity'       => $request->quantityBuy,
            'amount'         => $request->amount,

            'shipping_method'   => $request->courierID,
            'shipping_package'  => $request->courierPacket,
            'shipping_price'    => $request->ongkir,

            'invoice_number' => "INV".rand(11111,99999),
            'order_status'   => 'pending',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s'),
        ]);
        
        $productshop = DB::table('shop_products')->where('shop_id',$this->dataShop->id)->where('product_id',$request->idProduct)->first();
        $productshopDt = DB::table('products')->where('id',$request->idProduct)->first();

        $deviceid   = $_SERVER['HTTP_USER_AGENT']."-".$_SERVER['REMOTE_ADDR'];
        
        $ordercart  = DB::table('order_carts')
                            ->select('order_carts.amount as agent_price','order_carts.*', 'products.name', 'products.name', 'products.slug', 'products.brand', 'products.discount', 'products.main_image', 'products.status')
                            ->leftJoin('products', 'order_carts.product_id', '=', 'products.id')
                            //->where('products.id', $id)
                            ->where('order_carts.shop_id', $this->dataShop->id)
                            ->where('order_carts.status', 0)
                            ->where('order_carts.device', $deviceid)
                            ->get();
        foreach ($ordercart as $ordercartdt) {
            DB::table('order_details')->insert([
                'order_id'      => $orderID,
                'product_id'    => $ordercartdt->product_id,
                'name'          => 'Product',
                'order_type'    => 'product',
                'amount'        => $ordercartdt->amount,
                'price'         => $ordercartdt->price,
                'quantity'      => $ordercartdt->quantity,
                'profit'        => $ordercartdt->profit,
                'order_status'  => 'pending',
                'created_at'    => date('Y-m-d H:i:s'),
            ]);
            DB::table('order_carts')->where('id',$ordercartdt->id)->update([
                'status'=>1,
            ]);
        }
        
        
        //dd($request->userName);
        $detailProduct = DB::table('order_details')
                        ->leftjoin('products','products.id','=','order_details.product_id')
                        ->select('order_details.*','products.name','products.sku')
                        ->where('order_details.order_id',$orderID)
                        ->get();
       
        $email                      = $request->customer_email;
        
        $mail                       = array();
        $mail['name']               = @$request->customer_name;
        $mail['email']              = $request->customer_email;
        $mail['amount']             = $detailProduct->sum('amount')+$request->ongkir;
        $mail['phone']              = $request->customer_phone;

        $mail['productData']        = $detailProduct;
        $mail['ongkir']             = $request->ongkir;
        $mail['caraBayar']          = $request->paidID;
                        $date           = \Carbon\Carbon::now();
                        $newdate        = $date->setTimezone('Asia/Jakarta');
                        $ndate          = \Carbon\Carbon::parse($newdate);
                        $newdatelast    = $ndate->format('d M Y H:i:s');
        $mail['datetime']             = @$newdatelast;
        
        $mail['shopname']    = @$this->dataShop->company_name;
        $mail['phoneShop']   = @$this->dataShop->phone;
        $mail['emailShop']   = @$this->dataShop->email;
        $mail['domain']      = @$this->dataShop->domain;

        if($request->paidID=='transfer'){
            Mail::send('email.successtransfer', $mail, function($message) use ($email)
            {
                $message->from("no-reply@ultimate246.com", @$this->dataShop->company_name);
                $message->subject("Information | New Order");
                $message->to($email);
            }); 
        }else{
            Mail::send('email.success', $mail, function($message) use ($email)
            {
                $message->from('no-reply@ultimate246.com', @$this->dataShop->company_name);
                $message->subject("Information | New Order");
                $message->to($email);
            }); 
        }

        // Buat transaksi ke midtrans kemudian save snap tokennya.
        if($request->paidID=='now'){
        $payload = [
            'transaction_details' => [
                'order_id'      => $orderID,
                'gross_amount'  => $request->amount,
            ],
            'customer_details' => [
                'first_name'    => $request->customer_name,
                'email'         => $request->customer_email,
                'phone'         => $request->customer_phone,
                'address'       => $this->request->customer_address,
            ],
            'item_details' => [
                [
                    'id'       => 1,
                    'price'    => $request->amount,
                    'quantity' => 1,
                    'name'     => ucwords(str_replace('_', ' ', $request->customer_name))
                ]
            ]
        ];
        $snapToken = Veritrans_Snap::getSnapToken($payload);
        $donation->snap_token = $snapToken;
        $donation->save();


        // Beri response snap token
        $this->response['snap_token'] = $snapToken;
        return response()->json($this->response);
    }else{
        return redirect(url('/success'))->with('success','Berhasil');
    }

        
    }
    public function test(){
        /*$params['subdistrict_id'] = 677;
        $subdistrict = $this->rajaOngkir->getSubdistrict($params);
        if ($subdistrict['rajaongkir']['status']['code'] === 200) {
            $subdistrictData = $subdistrict['rajaongkir']['results'];
        } else {
            $subdistrictData = [];
        }
        
        return $subdistrictData;*/
        //echo "aaa";
       
        $aaa = $_SERVER['HTTP_USER_AGENT']."-".$_SERVER['REMOTE_ADDR']; 
        dd($aaa);
    }
    public function addedcart()
    {
        return redirect('/')->with('addedcart','berhasil');
    }
    public function addtocart(Request $request)
    {
        $validator = \Validator::make(request()->all(), [
            'quantityBuy'   => 'required',
            'idProduct' => 'required',
            'Shop_Id' => 'required'
        ]);

        if ($validator->fails()) {
            return [ 
              'status'  => 'error',
              'message' => $validator->errors()->first()
            ];
        }
        $deviceid       = $_SERVER['HTTP_USER_AGENT']."-".$_SERVER['REMOTE_ADDR'];
        $productshop    = DB::table('shop_products')->where('shop_id',$this->dataShop->id)->where('product_id',$request->idProduct)->first();
        $productshopDt  = DB::table('products')->where('id',$request->idProduct)->first();

        //checkproductcart
        $productcart = DB::table('order_carts')->where('shop_id',$this->dataShop->id)->where('product_id',$request->idProduct)->where('device',$deviceid)->where('status',0)->first();
        
        if($productcart){
            $productcartupdate = DB::table('order_carts')
                                ->where('id',$productcart->id)
                                ->update([
                                    'quantity'  =>$productcart->quantity + $request->quantityBuy,
                                    'amount'    =>$productcart->amount + ($request->startPrice*$request->quantityBuy)
                                ]);
        }
        else{
            DB::table('order_carts')->insert([
                'product_id'    => $request->idProduct,
                'shop_id'       => $request->Shop_Id,
                'name'          => 'Product',
                'order_type'    => 'product',
                'amount'        => $request->startPrice*$request->quantityBuy,
                'price'         => $request->startPrice,
                'quantity'      => $request->quantityBuy,
                'profit'        => $productshop->profit,
                'order_status'  => 'pending',
                'created_at'    => date('Y-m-d H:i:s'),
                'device'    => $deviceid,
            ]);
        }
        return redirect('/')->with('addedcart','berhasil');
    }
    public function cart(){ 
        /*$id=15;
        $data['collection']= ShopProduct::select('shop_products.*', 'products.name', 'products.name', 'products.slug', 'products.brand', 'products.discount', 'products.main_image', 'products.status')
        ->leftJoin('products', 'shop_products.product_id', '=', 'products.id')
        ->where('products.id', $id)
        ->where('shop_products.shop_id', 2)
        ->first();

        $data['slidePicture']     = DB::table('product_assets')->where('product_id',$id)->where('type','model')->get();
        $data['benefit']          = DB::table('benefitContent')->limit(4)->get();
        $data['productPicture']   = DB::table('product_assets')->where('product_id',$id)->get();
        $data['productComment']   = DB::table('globalComment')->get();
        $data['productPictureFooter']  = DB::table('productPicture')->where('type','footer')->where('idProduct',@$id)->get();

        $data['globalFooter']    = DB::table('globalFooter')->get();
        $data['varian']    = DB::table('product_stocks')->where('product_id',$id)->get();
        try{
            $provinces = $this->rajaOngkir->getProvince();                    
        if ($provinces['rajaongkir']['status']['code'] === 200) {
            $data['provinceData'] = $provinces['rajaongkir']['results'];
        } else {
            $data['provinceData'] = [];
        }        
        }catch(\Exception $error){
            return $error->getMessage();
        }   */
        $deviceid       = $_SERVER['HTTP_USER_AGENT']."-".$_SERVER['REMOTE_ADDR'];
        
        $data['collection']= DB::table('order_carts')
                            ->select('order_carts.amount as agent_price','order_carts.*', 'products.name', 'products.name', 'products.slug', 'products.brand', 'products.discount', 'products.main_image', 'products.status')
                            ->leftJoin('products', 'order_carts.product_id', '=', 'products.id')
                            //->where('products.id', $id)
                            ->where('order_carts.shop_id', $this->dataShop->id)
                            ->where('order_carts.status', 0)
                            ->where('order_carts.device', $deviceid)
                            ->get();
        if($data['collection']->count() < 1)
        {
            return redirect('/')->with('warning','Keranjang Belanja Kosong');
            exit();
        }
        $data['collectionsum'] = DB::table('order_carts')->where('shop_id', $this->dataShop->id)->where('status',0)->where('device', $deviceid)->sum('amount');
        $id=15;
        $data['id']= $id;
        try{
            $provinces = $this->rajaOngkir->getProvince();                    
        if ($provinces['rajaongkir']['status']['code'] === 200) {
            $data['provinceData'] = $provinces['rajaongkir']['results'];
        } else {
            $data['provinceData'] = [];
        }        
        }catch(\Exception $error){
            return $error->getMessage();
        }
        //dd($data['collection']);
        return view('fronts.cart',$data);
    }
    public function cartdelete($id=null){
        $blog = DB::table('order_carts')->where('id',$id)->delete();
        return redirect()->back()->with('success','Berhasil Delete Data');
    }
}
