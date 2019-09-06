<?php

namespace App\Http\Controllers;
use App\Product;
use App\Order;
use DB;
use Auth;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['ordactive']='active';
        $data['collectiondata'] = $confirms = Order::select('orders.*', 'products.name as product_name', 'users.name as ordered_by')
            ->where('order_status', 'pending')
            ->leftJoin('products', 'products.id', '=', 'orders.product_id')
            ->leftJoin('users', 'users.id', '=', 'orders.user_id')
            ->get();
        //dd($confirms);
        return view('admin.orders.order',$data);
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
        $data['ordactive']='active';
        $data['collectiondata'] = $confirms = Order::select('orders.*', 'products.name as product_name', 'users.name as ordered_by')
            ->where('order_status', 'pending')
            ->leftJoin('products', 'products.id', '=', 'orders.product_id')
            ->leftJoin('users', 'users.id', '=', 'orders.user_id')
            ->first();
        //dd($confirms);
        return view('admin.orders.orderdetail',$data);
    }
}
