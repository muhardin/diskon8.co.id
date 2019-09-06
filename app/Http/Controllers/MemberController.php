<?php

namespace App\Http\Controllers;
use App\Product;
use DB;
use Auth;
use App\user;
use App\Shop;
use App\Frontslide;
use App\FooterDetail;
use File;
use App;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    private $dataShop;
    private $baseUrl;

    public function __construct()
    {
        $this->middleware('auth');
        $this->baseUrl = App::make('url')->to('/');
        $this->dataShop = DB::table('shops')->where('domain', $this->baseUrl)->first();
        //dd($this->dataShop);
    }
    

    public function index()
    {
        return view('members.dashboard');
    }
    public function catalog()
    {
        $data['collection']= Product::get();
        return view('members.catalog',$data);
    }
    public function detailproduct($id=null)
    {
        //$data['collection']       = $datapic = Product::find($id);
        $data['collectiondetail']   = $datapic = Product::find($id);
        $data['limitprofit']        = $datapic->profit_limit;
        //$data['pricepackage']       = DB::table('reseller_packages')->where('id',$datapic->id)->where('reseller_package_id',3)->first();
        $data['pricepackage']       = $packproduct = DB::table('product_prices')
                                    ->where('product_id',$datapic->id)
                                    ->where('reseller_package_id',Auth::user()->reseller_type)->first();
        $data['collectionpicture']  = DB::table('product_assets')->where('product_id',$datapic->id)->get();

        $data['stockproduct'] = DB::table('product_stocks')
                                ->where('product_id',$datapic->id)->get();
        //dd($data['stockproduct']);
        return view('members.detailproduct',$data);
    }
    public function product()
    {
        if(@$_GET['active']==1){
            $data['active'] = 'active';
            $data['collection']= DB::table('shop_products')
            ->where('user_id',Auth::user()->id)
            ->join('products','products.id','=','shop_products.product_id')
            ->where('shop_products.status',1)
            ->select('products.*','shop_products.agent_price','shop_products.profit','shop_products.status as shop_products_status')->get();
        }
        elseif(@$_GET['active'] == '0')
        {
            $data['activenon'] = 'active';
            $data['collection']= DB::table('shop_products')
            ->where('user_id',Auth::user()->id)
            ->join('products','products.id','=','shop_products.product_id')
            ->where('shop_products.status',0)
            ->select('products.*','shop_products.agent_price','shop_products.profit','shop_products.status as shop_products_status')->get();
        }
        else{
            $data['activeall'] = 'active';
            $data['collection']= DB::table('shop_products')
            ->where('user_id',Auth::user()->id)
            ->join('products','products.id','=','shop_products.product_id')
            //->where('shop_products.status',0)
            ->select('products.*','shop_products.agent_price','shop_products.profit','shop_products.status as shop_products_status')->get();
        }
        
        //dd(@$_GET['active']);
        //$data['active']="active";
        return view('members.product',$data);
    }
    public function productdetail($id=null)
    {
        
        $data['activedetail']='active';
        $data['id']=$id;
        $data['collectionproduct']= DB::table('shop_products')
                                    ->join('products','products.id','=','shop_products.product_id')
                                    ->where('products.id',$id)
                                    ->where('shop_products.user_id',Auth::user()->id)
                                    ->select('products.*','shop_products.agent_price as price_sell','shop_products.profit','shop_products.id as shop_product_id','shop_products.detail_product','shop_products.harga_coret','shop_products.status','shop_products.reset','shop_products.is_harga_coret')->first();
        
        $data['collectionpack'] = DB::table('product_prices')->where('product_id',$id)->where('reseller_package_id',Auth::user()->reseller_type)->first();
        //dd($data['collectionpack']);
        return view('members.productdetail',$data);
    }
    public function updateproduct(Request $request)
    {
        
         
    }


    public function addproductpost(Request $request)
    {
        $data['collection']= $datapic = Product::get();
        return view('members.product',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function team()
    {
        return view('members.team');
    }
    public function teamadd()
    {
        return view('members.teamadd');
    }
    public function gajian()
    {
        if(@$_REQUEST['request']=='yes'){
            $data['requestact'] = 'active';
            $data['collection'] = DB::table('withdraws')->where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        }else{
            $data['mutasiact'] = 'active';
            $data['collection'] = DB::table('wallets')->where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        }
        $data['collectionsaldo'] = DB::table('wallets')->where('user_id',Auth::user()->id)->get();
        //$data['collectionoutstanding'] = DB::table('withdraws')->where('status',0)->where('user_id',Auth::user()->id)->sum('balanced');
        $data['collectionoutstanding'] = DB::table('withdraws')->where('user_id',Auth::user()->id)->get();
        return view('members.gajian',$data);
    }
    public function coupon()
    {
        return view('members.coupon');
    }
    public function order()
    {
        return view('members.order');
    }
    public function landingpage()
    {
        return view('members.landingpage');
    }
    public function apps()
    {
        return view('members.apps');
    }



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
    public function setting()
    {
        $data['globaleact']='active';
        $data['user'] = User::find(Auth::user()->id);
        return view('members.settings.setting',$data);
    }
    public function profile()
    {
        $data['profileact']='active';
        $data['user'] = $user = User::find(Auth::user()->id);
        $data['shop'] = Shop::where('user_id',$user->id)->first();
        return view('members.settings.profileaccount',$data);
    }
    public function password()
    {
        $data['passwordact']='active';
        $data['user'] = User::find(Auth::user()->id);
        return view('members.settings.password',$data);
    }
    public function bank()
    {
        $data['bankact']='active';
        $data['user'] = User::find(Auth::user()->id);
        return view('members.settings.bank',$data);
    }
    public function profiletoko()
    {
        $data['storeact']   ='active';
        $data['shop']       = Shop::where('user_id',Auth::user()->id)->first();
        return view('members.settings.profiletoko',$data);
    }
    public function logo()
    {
        $data['logoact']   ='active';
        $data['shop']       = Shop::where('user_id',Auth::user()->id)->first();
        return view('members.settings.logo',$data);
    }
    public function logoupdate(Request $request)
    {
        $shop = Shop::where('user_id',Auth::user()->id)->first();
        $data = Shop::find($shop->id);
        /*if($request->hasfile('logo'))
            {
            File::delete('assets/uploads/' . $data->photo);
            $file = $request->file('photo');
            $extensionphoto = $file->getClientOriginalExtension();
            $filenamephoto ="logo".time().'.'.$extensionphoto;
            $file->move('assets/uploads/', $filenamephoto);
            $data->logo=$filenamephoto;
            }
        if($request->hasfile('favicon'))
            {
            File::delete('assets/uploads/' . $data->photo);
            $file = $request->file('photo');
            $extensionphoto = $file->getClientOriginalExtension();
            $filenamephoto ="favicon".time().'.'.$extensionphoto;
            $file->move('assets/uploads/', $filenamephoto);
            $data->favicon=$filenamephoto;
            }*/
            $destinationPath = public_path('/images/');
            if ($request->hasfile('logo')) {
                File::delete('images/' . @$data->phlogooto);
                $img = $request->file('logo');
                $name = 'logo-'.time() . '.'. $img->getClientOriginalExtension();
                $img->move($destinationPath, $name);
                $data->logo = $name;
            }

            if ($request->hasfile('favicon')) {
                File::delete('images/' . @$data->favicon);
                $img = $request->file('favicon');
                $name = 'favicon-'.time() . '.'. $img->getClientOriginalExtension();
                $img->move($destinationPath, $name);
                $data->favicon = $name;
            }
            $data->save();
        return redirect()->back()->with('success','Berhasil Update Data');
    }

    public function productasset($id=null)
    {
        
        $data['id']   =$id;
        
        $data['collectionproduct']= DB::table('shop_products')
                                    ->join('products','products.id','=','shop_products.product_id')
                                    ->where('products.id',$id)
                                    ->where('shop_products.user_id',Auth::user()->id)
                                    ->select('products.*','shop_products.agent_price as price_sell','shop_products.profit','shop_products.id as shop_product_id','shop_products.detail_product','shop_products.harga_coret','shop_products.status','shop_products.reset','shop_products.is_harga_coret')->first();
        if(@$_GET['cat']){
            $data[@$_GET['cat']]   ='active';
            $data['productPicture'] = DB::table('product_assets')->where('product_id',$id)->where('type','=',@$_GET['cat'])->get();
        }else{
            $data['assetact']   ='active';
            $data['productPicture'] = DB::table('product_assets')->where('product_id',$id)->get();
        }
        
        //dd($id);
        $data['collectionpack'] = DB::table('product_prices')->where('product_id',$id)->where('reseller_package_id',Auth::user()->reseller_type)->first();
        return view('members.products.asset',$data);
    }
    public function frontslide()
    {
        $data['slideact']   ='active';
        $data['collection']       = DB::table('frontslides')->where('shop_id',$this->dataShop->id)->get();
        return view('members.settings.frontslide',$data);

    }
    public function frontslidepost(Request $request)
    {
        $destinationPath = public_path('/images/slides/');
        if ($request->hasfile('slide')) {
            $data   = New Frontslide();
            //File::delete('images/slides/' . @$data->favicon);
            $img    = $request->file('slide');
            $name   = 'slide-'.time() . '.'. $img->getClientOriginalExtension();
            $img->move($destinationPath, $name);
            $data->picture  = $name;
            $data->link     = $request->link;
            $data->shop_id  = $this->dataShop->id;
            $data->save();
            return redirect()->back()->with('success','Berhasil Update Data');
        }else{
            return redirect()->back()->with('warning','Fail Update Data');
        }
       
    }
    public function mainfooter()
    {
        $data['footeract']   ='active';
        $data['collection']  = DB::table('footer_details')->where('shop_id',$this->dataShop->id)->get();
        $data['collectionedit']  = DB::table('footer_details')->where('shop_id',$this->dataShop->id)->where('id',@$_GET['id'])->first();
        return view('members.settings.footer',$data);
       
    }
    public function footerdetailpost(Request $request)
    {
        
        $destinationPath = public_path('/images/footer/');
        if($request->id){
            $data   = FooterDetail::find($request->id);
        }else{
            $data   = New FooterDetail();
        }
        
        if ($request->hasfile('picture')) {
            //File::delete('images/slides/' . @$data->favicon);
            $img    = $request->file('picture');
            $name   = 'footer-'.time() . '.'. $img->getClientOriginalExtension();
            $img->move($destinationPath, $name);
            $data->picture  = $name;
        }
        $data->link     = $request->link;
        $data->content  = $request->content;
        $data->shop_id  = $this->dataShop->id;
        $data->save();
        return redirect()->back()->with('success','Berhasil Update Data');
       
    }
}
