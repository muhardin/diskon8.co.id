<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\ShopProduct;
use App\Wallet;
use App\User;
use App\Shop;
use App\Footer;
use Hash;

class ApiController extends Controller
{
    
    
    public function index()
    {
        
    }

    public function dashboard()
    {
        $user = auth()->user();
        //dd( $user);
            $rows = DB::table('products')
            ->orderby('id','desc')->get();
    $data = array();
    /*$data['api_status'] = 1;
    $data['api_message'] = 'success';*/
    $data = [
        'meta' => [
            'status'=>true,
            'message'=>'Berhasil',
            'code'=>200
        ],
        'data' => [
            'profit'=>1,
            'quantity'=>12,
            'visitor'=>10,
            'product'=>1,
            'sales'=>1
        ]
    ];
        
        
        //$data['items'] = $rows;
        return $data;
    }

    public function productadd(Request $request)
    {
        $rows       = DB::table('products')
                        ->where('id',$request->product_id)
                        ->orderby('id','desc')->first();
        $shop       = DB::table('shops')->where('user_id',$request->user_id)->first();
        $chkshop    = DB::table('shop_products')->where('user_id',$request->user_id)->where('product_id',$request->product_id)->first();
        $chksumshop = DB::table('shop_products')->where('user_id',$request->user_id)
                        ->where('status',1)
                        ->count();
        $user = DB::table('users')->where('id',$request->user_id)->first();
        $chkpackage =    DB::table('reseller_packages')->where('id',$user->reseller_type)->first();
        //dd($chkpackage);
        if($chksumshop >= $chkpackage->maximum_product_sale ){
        //if($chksumshop >= 1 ){
            $data = array();
            $data = [
                'meta' => [
                    'status'    =>false,
                    'message'   =>'Product Active Telah Melebihi Ambang Batas Non Aktivkan Product Lain',
                    'code'      =>400
                ],
            ];
        }
        elseif($chkshop){
            $data = array();
            $data = [
                'meta' => [
                    'status'=>false,
                    'message'=>'Product Telah Ditambahkan',
                    'code'=>400
                ],
            ];
        }
        elseif(!$request->user_id){
            $data = array();
            $data = [
                'meta' => [
                    'status'=>false,
                    'message'=>'Login Terlebih Dahulu',
                    'code'=>400
                ],
            ];
        }else{
            $add = New ShopProduct();
            $add->user_id       = $request->user_id;
            $add->shop_id       = $shop->id;
            $add->product_id    = $rows->id;
            $add->agent_price   = $request->price;
            $add->detail_product= $rows->description;
            $add->profit        = $request->priceprofit;
            $add->save();

            $data = array();
            $data = [
                'meta' => [
                    'status'=>true,
                    'message'=>'Berhasil',
                    'code'=>200
                ],
                'data' => [
                    'id'=>$rows->id,
                    'quantity'=>12,
                    'visitor'=>10,
                    'product'=>1,
                    'sales'=>1
                ]
            ];
        }
        //$add = New ShopProduct();
        //$add->user_id = Auth()->
        //$data['items'] = $rows;

        return $data;
    }
    public function productupdate(Request $request)
    {
        $rows    = DB::table('products')
                    ->where('id',$request->product_id)
                    ->orderby('id','desc')->first();
        $shop    = DB::table('shops')->where('user_id',@$request->user_id)->first();
        $chkshop = DB::table('shop_products')->where('user_id',@$request->user_id)->where('product_id',@$request->product_id)->first();

                $editor_content=$request->content;
                if(@$editor_content){
                $dom = new \DomDocument('1.0', 'UTF-8');
                libxml_use_internal_errors(true);
                $dom->loadHtml($editor_content);
                $images = $dom->getElementsByTagName('img');
                foreach ($images as $k => $img) {
                        $data = $img->getAttribute('src');
                        list($type, $data) = explode(';', $data);
                        $data = base64_decode($data);
                        //now you will save the image to your upload folder, here you can media library of choice or use storage function, but here i will be using normal public_path.
                        $image_name = "/uploads/". 'post_' . time() . $k . '.png';
                        //you can save it with any nae of choice or any extension of choice. or you may wish to leave it as the default extension depends on how you want to save the image.
                        
                        $path = public_path() . $image_name;
                        file_put_contents($path, $data);
                        $img->removeAttribute('src');
                        $img->setAttribute('src', $image_name);
                        //after saving the file we will then replace the img src link to the saved directory link
                    };

            @$editor_content_save= $dom->saveHTML();
                }
            $add                    = ShopProduct::find($request->_id);
            $add->agent_price       = $request->price;
            $add->profit            = $request->priceprofit;
            $add->detail_product    = @$editor_content_save;
            $add->harga_coret       = $request->display_price;
            $add->is_harga_coret    = $request->display_price_show;
            $add->reset       = 0;
            $add->update();
            
            $data = array();
            $data = [
                'meta' => [
                    'status'=>true,
                    'message'=>'Berhasil',
                    'code'=>200
                ],
                'data' => [
                    'id'=>@$request->_id,
                    'quantity'=>12,
                    'visitor'=>10,
                    'product'=>1,
                    'profit'=>1,
                    'display_price'=>1,
                    'detail_product'=>1,
                    'sales'=>1
                ]
            ];
        
        //$add = New ShopProduct();
        //$add->user_id = Auth()->
        //$data['items'] = $rows;
        return $data;

    }
    public function productstatus($id)
    {
            $add               = ShopProduct::find($id);
            $add->status       =$_GET['stat'];
            $add->update();
            
            $data = array();
            $data = [
                'meta' => [
                    'status'=>true,
                    'message'=>'Berhasil',
                    'code'=>200
                ],
                'data' => [
                    'id'=>@$id,
                    'quantity'=>12,
                    'visitor'=>10,
                    'product'=>1,
                    'profit'=>1,
                    'display_price'=>1,
                    'detail_product'=>1,
                    'sales'=>1
                ]
            ];
        
        return $data;
    }
    public function products()
    {
        $rows = DB::table('products')
                ->orderby('id','desc')->get();
        $data = array();
        /*$data['api_status'] = 1;
        $data['api_message'] = 'success';*/
        $data = [
            'meta' => [
                'status'=>true,
                'message'=>'Berhasil',
                'code'=>'200'
            ],
            'data' => [
                'profit'=>1,
                'quantity'=>12,
                'visitor'=>10,
                'product'=>1
            ]
        ];
        //$data['items'] = $rows;
        return $data;
    }
    public function gajian(Request $request)
    {
        $amount = DB::table('wallets')->where('user_id',$request->user_id)
                ->sum('balanced');
        $tax = 0;
        $data = array();
       
        $data = [
            'meta' => [
                'status'=>true,
                'message'=>'Berhasil',
                'code'=>'200'
            ],
            'data' => [
                'tax'   =>$tax,
                'total'=>$request->nominal,
                'visitor'=>10,
                'product'=>1
            ]
        ];
        //$data['items'] = $rows;
        return $data;
    }
    public function smscode(Request $request)
    {
        
                $data = User::find($request->user_id);
                $data->smscode = rand(1111,9999);
                $data->update();

                $shop = Shop::where('user_id',$request->user_id)->first();
                $curl = curl_init();
                curl_setopt_array($curl, [
                CURLOPT_URL => 'https://portal.bulkgate.com/api/1.0/simple/transactional',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => json_encode([
                    'application_id' => '4799',
                    'application_token' => '5CyWVSHiTfpDCSsJDEqlQqQBNex05IuYN3tumwaI2CsQ3m2LBS',
                    //'number' => '62'.@$shop->phone,
                    'number' => '62'.$shop->phone,
                    'text' => 'SMS Code :'.@$data->smscode.' Salam Sukses, ULTIMATE246',
                    'sender_id' => '100',
                    'sender_id_value' => 'BulkGate'
                ]),
                CURLOPT_HTTPHEADER => [
                    'Content-Type: application/json'
                ],
            ]);
            $response = curl_exec($curl);
            curl_close($curl);

        $tax = 0;
        $data = array();
       
        $data = [
            'meta' => [
                'status'=>true,
                'message'=>'Berhasil',
                'code'=>'200'
            ],
            'data' => [
                'tax'   =>$tax,
                'total'=>$request->nominal,
                'visitor'=>10,
                'product'=>1
            ]
        ];
        //$data['items'] = $rows;
        return $data;
    }
    public function resetdesc(Request $request)
    {
        
        DB::table('shop_products')->where('id',$request->shoproduct_id)->update([
                    'reset'=>1
                ]);
        $data = array();
               $data = [
            'meta' => [
                'status'=>true,
                'message'=>'Berhasil',
                'code'=>'200'
            ]
        ];
        return $data;
    }
    
    public function gajianpost(Request $request)
    {
        $user_id = $request->user_id;
        $chksms = User::find($user_id);

        if($chksms->smscode != $request->smscode){
            $data = array();
            $data = [
                'meta' => [
                    'status'=>true,
                    'message'=>'Kode SMS Salah',
                    'code'=>'409',
                    'msg'=>'Gagal',
                    'msgbox'=>'warning'
                ]
            ];
        }else{
            
            $amount = DB::table('wallets')->where('user_id',$request->user_id)
                    ->sum('balanced');

                    if($amount < $request->nominal){
                        $data = array();
                        $data = [
                            'meta' => [
                                'status'=>true,
                                'message'=>'Saldo Lebih',
                                'msg'=>'Gagal',
                                'msgbox'=>'warning',
                                'code'=>'409'
                            ]
                        ];
                            }else{
                                $wallet = New Wallet();
                                $wallet->user_id = $request->user_id;
                                $wallet->balanced = "-".$request->nominal;
                                $wallet->type = 'Debit';
                                $wallet->desc = "Withdraw";
                                $wallet->save();

                    DB::table('withdraws')->insert([
                        'user_id'      =>$user_id,
                        'codetransfer' =>"WD".rand(1111,9999),
                        'balanced'       =>$request->nominal,
                        'desc'       =>'Withdraw'
                    ]);

                    $tax = 0;
                    $data = array();
                    $data = [
                        'meta' => [
                            'status'=>true,
                            'message'=>'Berhasil',
                            'msg'=>'Berhasil',
                            'msgbox'=>'success',
                            'code'=>'200'
                        ],
                        'data' => [
                            'tax'=>$tax,
                            'total'=>$amount,
                            'visitor'=>10,
                            'product'=>1
                        ]
                    ]; 
                    }
                    
            //$data['items'] = $rows;
        }
        return $data;
    }
    public function ordertract(Request $request)
    {
        $tax = 0;
        $data = array();
        $data = [
            'meta' => [
                'status'=>true,
                'message'=>'Berhasil',
                'code'=>'200'
            ],
            'data' => [
                'tax'=>@$tax,
                'total'=>@$amount,
                'visitor'=>10,
                'product'=>1
            ]
        ];
        //$data['items'] = $rows;
        return $data;
    }
    public function updatepassword(Request $request)
    {
        $user = User::find($request->user_id);
        
        if(Hash::check($request->oldpassword, $user->password)){

            $user->password = Hash::make($request->password);
            $user->address = $request->address;
            $user->update();
            
            $data = array();
            $data = [
                    'meta' => [
                        'status'=>true,
                        'message'=>'Profile Berhasil Diubah',
                        'code'=>'200',
                        'msg'=>'Berhasil'
                    ]
                    ];
        }else{
            $data = array();
               $data = [
                'meta'      => [
                'status'    =>true,
                'message'   =>'Password Lama Salah',
                'code'      =>'200',
                'msg'       =>'Gagal'
            ]
        ];
        }
        
        return $data;
    }
    public function updateprofile(Request $request)
    {
        $user = User::find($request->user_id);
        
        
            if(!$request->address){
                $status =false;
                $message = 'Address Harus Diisi';
            }elseif(!$request->kodepos){
                $status =false;
                $message = 'Kode Pos Harus Diisi';
            }
                else{
                $user->name     = $request->txtname;
                $user->address  = $request->address;
                $user->kodepos  = $request->kodepos;
                $user->district = $request->district;
                $user->city     = $request->city;
                $user->province = $request->province;
                $user->update();
                $status =true;
                $message = 'Berhasil Update Data';
            }
            

            $data = array();
               $data = [
                'meta'      => [
                'status'    =>$status,
                'message'   =>$message,
                'code'      =>'200'
            ]
        ];
        
        
        return $data;
    }
    public function updatebank(Request $request)
    {
        $user = User::find($request->user_id);
            if(!$request->no_rekening){
                $status =false;
                $message = 'no_rekening Harus Diisi';
            }elseif(!$request->nama_pemilik){
                $status =false;
                $message = 'nama_pemilik Pos Harus Diisi';
            
            }elseif(!$request->nama_bank){
                $status =false;
                $message = 'nama_bank Pos Harus Diisi';
            }
                else{
                $user->no_rekening  = $request->no_rekening;
                $user->nama_pemilik = $request->nama_pemilik;
                $user->nama_bank    = $request->nama_bank;
                $user->update();
                $status     =  true;
                $message    = 'Berhasil Update Data';
            }
            
            $data = array();
               $data = [
                'meta'      => [
                'status'    =>$status,
                'message'   =>$message,
                'code'      =>'200'
            ]
        ];
        
        
        return $data;
    }
    public function profiletoko(Request $request)
    {
        $user = Shop::find($request->shop_id);
            if(!$request->shop_id){
                $status =false;
                $message = 'ID Tidak Valid';

            }elseif(!$request->nama_toko){
                $status =false;
                $message = 'Nama Toko Harus Diisi';
            
            }elseif(!$request->phone){
                $status =false;
                $message = 'Phone Harus Diisi';
            }

            else{
                $user->company_name  = $request->nama_toko;
                $user->phone         = $request->phone;
                $user->update();
                
                $status     =  true;
                $message    = 'Berhasil Update Data';
            }
            
            $data = array();
            $data = [
                'meta'      => [
                'status'    =>$status,
                'message'   =>$message,
                'code'      =>'200'
                ]
            ];
        
        
        return $data;
    }
    
    public function summary()
    {
        $user  = Wallet::where('user_id',$_GET['user'])->get();
        $shop  = Shop::where('user_id',$_GET['user'])->first();
        $quantity  = DB::table('order_details')
                                ->leftjoin('orders','orders.id','=','order_details.order_id')
                                ->select('order_details.*')
                                ->where('orders.shop_id',$shop->id)
                                ->where('user_id',$_GET['user'])->get();

        $product = DB::table('shop_products')->where('shop_id',$shop->id)->count();
        $sales = DB::table('orders')->where('shop_id',$shop->id)->count();
            
            $data = array();
               $data = [
                'data'      => [
                'status'    =>true,
                'quantity'  =>$quantity->sum('quantity'),
                'profit'    =>$user->where('type','Credit')->sum('balanced'),
                'visitor'   =>200,
                'product'   =>@$product,
                'sales'     =>@$sales,
                ]
            ];
        
        return $data;
    }

    public function updatefooterhome(Request $request)
    {
        $shopdata = DB::table('footers')
                    ->where('shop_id',$request->shop_id)
                    ->first();
        if($shopdata){
            $datafooter = Footer::find($shopdata->id);
        }else{
            $datafooter = New Footer();
        }
        $editor_content=$request->content;
        if($editor_content){
            $dom = new \DomDocument('1.0', 'UTF-8');
            libxml_use_internal_errors(true);
            $dom->loadHtml($editor_content);
            $images = $dom->getElementsByTagName('img');
            foreach ($images as $k => $img) {
                    $data = $img->getAttribute('src');
                    list($type, $data) = explode(';', $data);
                    $data = base64_decode($data);
                    //now you will save the image to your upload folder, here you can media library of choice or use storage function, but here i will be using normal public_path.
                    $image_name = "/uploads/". 'post_' . time() . $k . '.png';
                    //you can save it with any nae of choice or any extension of choice. or you may wish to leave it as the default extension depends on how you want to save the image.
                    
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                    //after saving the file we will then replace the img src link to the saved directory link
                };
            @$editor_content_save= $dom->saveHTML();
            $datafooter->footer_home = $editor_content_save;
            $datafooter->shop_id = $request->shop_id;
            $datafooter->save();
        }
        
       
        
        $data = array();
            $data = [
                'meta'      => [
                'status'    =>true,
                'message'   =>@$message,
                'code'      =>'200'
                ]
            ]; /*
            $data = array();
            $data = [
                'meta'      => [
                'status'    =>false,
                'message'   =>@$request->content,
                'code'      =>'200'
                ]
            ];*/
        return $data;
    }
    public function updatefooterdetail(Request $request)
    {
        $shopdata = DB::table('footers')
                    ->where('shop_id',$request->shop_id)
                    ->first();
        if($shopdata){
            $datafooter = Footer::find($shopdata->id);
        }else{
            $datafooter = New Footer();
        }
        $editor_content=$request->content;
        if($editor_content){
            $dom = new \DomDocument('1.0', 'UTF-8');
            libxml_use_internal_errors(true);
            $dom->loadHtml($editor_content);
            $images = $dom->getElementsByTagName('img');
            foreach ($images as $k => $img) {
                    $data = $img->getAttribute('src');
                    list($type, $data) = explode(';', $data);
                    $data = base64_decode($data);
                    //now you will save the image to your upload folder, here you can media library of choice or use storage function, but here i will be using normal public_path.
                    $image_name = "/uploads/". 'post_' . time() . $k . '.png';
                    //you can save it with any nae of choice or any extension of choice. or you may wish to leave it as the default extension depends on how you want to save the image.
                    
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                    //after saving the file we will then replace the img src link to the saved directory link
                };
            @$editor_content_save= $dom->saveHTML();
            $datafooter->footer_detail = $editor_content_save;
            $datafooter->shop_id = $request->shop_id;
            $datafooter->save();
        }
        
       
        
        $data = array();
            $data = [
                'meta'      => [
                'status'    =>true,
                'message'   =>@$message,
                'code'      =>'200'
                ]
            ]; /*
            $data = array();
            $data = [
                'meta'      => [
                'status'    =>false,
                'message'   =>@$request->content,
                'code'      =>'200'
                ]
            ];*/
        return $data;
    }

}
