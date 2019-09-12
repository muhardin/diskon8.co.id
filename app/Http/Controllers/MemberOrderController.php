<?php

namespace App\Http\Controllers;
use App\Product;
use App\Order;
use DB;
use Auth;
use Illuminate\Http\Request;

class MemberOrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(@$_GET['status']=='processing'){

            $data['cnfactive']='active';
            
        }elseif(@$_GET['status']=='paid'){

            $data['piadactive']='active';
        
        }elseif(@$_GET['status']=='delivering'){

            $data['deldactive']='active';
        
        
        }elseif(@$_GET['status']=='packing'){

            $data['packactive']='active';
        
        }
        elseif(@$_GET['status']=='success'){

            $data['successact']='active';
        
        }
        else{
            $data['ordactive']='active';
        }

        if(!@$_GET['status']){
            $data['collectiondata'] = $confirms = Order::select('orders.*', 'products.name as product_name', 'users.name as ordered_by')
            //->where('order_status', 'pending')
            ->where('orders.reseller_id',Auth::user()->id)
            ->leftJoin('products', 'products.id', '=', 'orders.product_id')
            ->leftJoin('users', 'users.id', '=', 'orders.user_id')
            ->get();
        }else{
            $data['collectiondata'] = $confirms = Order::select('orders.*', 'products.name as product_name', 'users.name as ordered_by')
            ->where('order_status', @$_GET['status'])
            ->where('orders.reseller_id',Auth::user()->id)
            ->leftJoin('products', 'products.id', '=', 'orders.product_id')
            ->leftJoin('users', 'users.id', '=', 'orders.user_id')
            ->get();
        }
        
        //dd($confirms);
        return view('members.orders.order',$data);
    }
    public function prospek()
    {
        $data['proactive']='active';
        $data['collectionprospek']=$prospects = Order::select('orders.*', 'products.name as product_name', 'users.name as ordered_by')
        ->where('order_status', 'prospect')
        ->leftJoin('products', 'products.id', '=', 'orders.product_id')
        ->leftJoin('users', 'users.id', '=', 'orders.user_id')
        ->get();
        return view('members.orders.prospek',$data);
    }

    public function prospect()
    {
        $prospects = Order::select('orders.*', 'products.name as product_name', 'users.name as ordered_by')
            ->where('order_status', 'prospect')
            ->leftJoin('products', 'products.id', '=', 'orders.product_id')
            ->leftJoin('users', 'users.id', '=', 'orders.user_id')
            ->get();
        return view('orders.prospect', compact('prospects'));
    }

    public function confirm()
    {
        $confirms = Order::select('orders.*', 'products.name as product_name', 'users.name as ordered_by')
            ->where('order_status', 'pending')
            ->leftJoin('products', 'products.id', '=', 'orders.product_id')
            ->leftJoin('users', 'users.id', '=', 'orders.user_id')
            ->get();

        return view('orders.confirm', compact('confirms'));
    }

    public function packing()
    {
        $packings = Order::select('orders.*', 'products.name as product_name', 'users.name as ordered_by')
            ->where('order_status', 'packing')
            ->leftJoin('products', 'products.id', '=', 'orders.product_id')
            ->leftJoin('users', 'users.id', '=', 'orders.user_id')
            ->get();

        return view('orders.packing', compact('packings'));
    }

    public function delivering()
    {
        $delivering = Order::select('orders.*', 'products.name as product_name', 'users.name as ordered_by')
            ->where('order_status', 'delivering')
            ->leftJoin('products', 'products.id', '=', 'orders.product_id')
            ->leftJoin('users', 'users.id', '=', 'orders.user_id')
            ->get();

        return view('orders.delivering', compact('delivering'));
    }

    public function success()
    {
        $success = Order::select('orders.*', 'products.name as product_name', 'users.name as ordered_by')
            ->where('order_status', 'success')
            ->leftJoin('products', 'products.id', '=', 'orders.product_id')
            ->leftJoin('users', 'users.id', '=', 'orders.user_id')
            ->get();

        return view('orders.success', compact('success'));
    }
    public function detail($id=null)
    {
        $data['ordactive']   ='active';
        $data['orderdetail'] = Order::select('orders.*', 'products.name as product_name','products.main_image', 'users.name as ordered_by','users.email as user_email','shops.phone as phone','shops.company_name as company_name','shops.email as email','user_addresses.email as order_email','user_addresses.contact_person','user_addresses.phone as address_phone','user_addresses.address as address_tujuan','user_addresses.zip_code as zip_address')
                                //->where('order_status', 'pending')
                                ->where('orders.id', @$id)
                                ->where('orders.reseller_id', @Auth::user()->id)
                                ->leftJoin('products', 'products.id', '=', 'orders.product_id')
                                ->leftJoin('users', 'users.id', '=', 'orders.user_id')
                                ->leftJoin('shops', 'shops.user_id', '=', 'orders.shop_id')
                                ->leftJoin('user_addresses', 'user_addresses.id', '=', 'orders.address_id')
                                ->first();
        //dd($confirms);
        if(!$data['orderdetail']){
            return redirect()->back(); 
        }
        $data['profit']     = DB::table('order_details')->where('order_id',$id)->sum('profit');
        $data['dataitem']   = DB::table('order_details')
                                ->leftjoin('products','products.id','=','order_details.product_id')
                                ->select('order_details.*','products.name','products.main_image')
                                ->where('order_id',$id)->get();                      
        return view('members.orders.orderdetail',$data);
    }
}
