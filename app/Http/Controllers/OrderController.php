<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\RajaOngkir;
use DB;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->rajaOngkir = new RajaOngkir;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexEx()
    {
        $orders = Order::select('orders.*', 'products.name as product_name', 'users.name as ordered_by')
            ->where('order_status', 'paid')
            ->leftJoin('products', 'products.id', '=', 'orders.product_id')
            ->leftJoin('users', 'users.id', '=', 'orders.user_id')
            ->get();
        return view('orders.index', compact('orders'));
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

    public function tracking()
    {
        return view('orders.tracking');
    }

    public function trackOrder(Request $request)
    {
        $params['waybill'] = $request->waybill;
        $params['courier'] = 'jne';
        $response = $this->rajaOngkir->waybill($params);
            // dd($response);
        $checkShipping = $response['rajaongkir']['result'];
        // dd($checkShipping);

        return view('orders.trackingHistory', compact('checkShipping'));
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
        $order = order::find($id);
        $order->delete();

        return redirect()->route('order.index');
    }

    public function index()
    {
            $prospects = Order::select('orders.*', 'products.name as product_name', 'users.name as ordered_by', 'shops.phone as phone', 'shops.company_name as company_name','shops.email as email')
                ->where('order_status', 'prospect')
                ->leftJoin('products', 'products.id', '=', 'orders.product_id')
                ->leftJoin('users', 'users.id', '=', 'orders.user_id')
                ->leftJoin('shops', 'shops.user_id', '=', 'orders.shop_id')
                ->get();

            $orders = Order::select('orders.*', 'products.name as product_name', 'users.name as ordered_by', 'shops.phone as phone', 'shops.company_name as company_name','shops.email as email')
                ->where('order_status', 'paid')
                ->leftJoin('products', 'products.id', '=', 'orders.product_id')
                ->leftJoin('users', 'users.id', '=', 'orders.user_id')
                ->leftJoin('shops', 'shops.user_id', '=', 'orders.shop_id')
                ->get();

            $all = Order::select('orders.*', 'products.name as product_name', 'products.main_image','users.name as ordered_by', 'shops.phone as phone', 'shops.company_name as company_name','shops.email as email')
                //->where('order_status', 'pending')
                ->leftJoin('products', 'products.id', '=', 'orders.product_id')
                ->leftJoin('users', 'users.id', '=', 'orders.user_id')
                ->leftJoin('shops', 'shops.user_id', '=', 'orders.shop_id')
                ->get();

            $confirms = Order::select('orders.*', 'products.name as product_name', 'users.name as ordered_by', 'shops.phone as phone', 'shops.company_name as company_name','shops.email as email')
                        ->where('order_status', 'processing')
                        ->leftJoin('products', 'products.id', '=', 'orders.product_id')
                        ->leftJoin('users', 'users.id', '=', 'orders.user_id')
                        ->leftJoin('shops', 'shops.user_id', '=', 'orders.shop_id')
                        ->get();

            $packings = Order::select('orders.*', 'products.name as product_name', 'users.name as ordered_by', 'shops.phone as phone', 'shops.company_name as company_name','shops.email as email')
                        ->where('order_status', 'packing')
                        ->leftJoin('products', 'products.id', '=', 'orders.product_id')
                        ->leftJoin('users', 'users.id', '=', 'orders.user_id')
                        ->leftJoin('shops', 'shops.user_id', '=', 'orders.shop_id')
                        ->get();
            $delivering = Order::select('orders.*', 'products.name as product_name', 'users.name as ordered_by', 'shops.phone as phone', 'shops.company_name as company_name','shops.email as email')
                        ->where('order_status', 'delivering')
                        ->leftJoin('products', 'products.id', '=', 'orders.product_id')
                        ->leftJoin('users', 'users.id', '=', 'orders.user_id')
                        ->leftJoin('shops', 'shops.user_id', '=', 'orders.shop_id')
                        ->get();

            $success = Order::select('orders.*', 'products.name as product_name', 'users.name as ordered_by', 'shops.phone as phone', 'shops.company_name as company_name','shops.email as email')
                        ->where('order_status', 'success')
                        ->leftJoin('products', 'products.id', '=', 'orders.product_id')
                        ->leftJoin('users', 'users.id', '=', 'orders.user_id')
                        ->leftJoin('shops', 'shops.user_id', '=', 'orders.shop_id')
                        ->get();

        return view('orders.index', compact('orders', 'prospects', 'all', 'confirms', 'packings', 'delivering', 'success'));
    }


    public function indexcs(){
            $prospects = Order::select('orders.*', 'products.name as product_name', 'users.name as ordered_by', 'shops.phone as phone','shops.company_name as company_name','shops.email as email')
                        ->where('order_status', 'prospect')
                        ->leftJoin('products', 'products.id', '=', 'orders.product_id')
                        ->leftJoin('users', 'users.id', '=', 'orders.user_id')
                        ->leftJoin('shops', 'shops.user_id', '=', 'orders.shop_id')
                        ->get();

            $orders = Order::select('orders.*', 'products.name as product_name', 'users.name as ordered_by', 'shops.phone as phone','shops.company_name as company_name','shops.email as email')
                        ->where('order_status', 'paid')
                        ->leftJoin('products', 'products.id', '=', 'orders.product_id')
                        ->leftJoin('users', 'users.id', '=', 'orders.user_id')
                        ->leftJoin('shops', 'shops.user_id', '=', 'orders.shop_id')
                        ->get();

            $pendings = Order::select('orders.*', 'products.name as product_name', 'users.name as ordered_by', 'shops.phone as phone','shops.company_name as company_name','shops.email as email')
                        ->where('order_status', 'pending')
                        ->leftJoin('products', 'products.id', '=', 'orders.product_id')
                        ->leftJoin('users', 'users.id', '=', 'orders.user_id')
                        ->leftJoin('shops', 'shops.user_id', '=', 'orders.shop_id')
                        ->get();

            $confirms = Order::select('orders.*', 'products.name as product_name', 'users.name as ordered_by', 'shops.phone as phone','shops.company_name as company_name','shops.email as email')
                        ->where('order_status', 'processing')
                        ->leftJoin('products', 'products.id', '=', 'orders.product_id')
                        ->leftJoin('users', 'users.id', '=', 'orders.user_id')
                        ->leftJoin('shops', 'shops.user_id', '=', 'orders.shop_id')
                        ->get();

            $packings = Order::select('orders.*', 'products.name as product_name', 'users.name as ordered_by', 'shops.phone as phone','shops.company_name as company_name','shops.email as email')
                        ->where('order_status', 'packing')
                        ->leftJoin('products', 'products.id', '=', 'orders.product_id')
                        ->leftJoin('users', 'users.id', '=', 'orders.user_id')
                        ->leftJoin('shops', 'shops.user_id', '=', 'orders.shop_id')
                        ->get();
            $delivering = Order::select('orders.*', 'products.name as product_name', 'users.name as ordered_by', 'shops.phone as phone','shops.company_name as company_name','shops.email as email')
                        ->where('order_status', 'delivering')
                        ->leftJoin('products', 'products.id', '=', 'orders.product_id')
                        ->leftJoin('users', 'users.id', '=', 'orders.user_id')
                        ->leftJoin('shops', 'shops.user_id', '=', 'orders.shop_id')
                        ->get();

            $success = Order::select('orders.*', 'products.name as product_name', 'users.name as ordered_by', 'shops.phone as phone','shops.company_name as company_name','shops.email as email')
                        ->where('order_status', 'success')
                        ->leftJoin('products', 'products.id', '=', 'orders.product_id')
                        ->leftJoin('users', 'users.id', '=', 'orders.user_id')
                        ->leftJoin('shops', 'shops.user_id', '=', 'orders.shop_id')
                        ->get();

        return view('orders.indexs', compact('orders', 'prospects', 'pendings', 'confirms', 'packings', 'delivering', 'success'));
    }
    public function detail($id=null)
    {
        $data['orderdetail'] = Order::select('orders.*', 'products.name as product_name','products.main_image','user_addresses.phone as address_phone','user_addresses.address as address_tujuan','user_addresses.zip_code as zip_address','users.name as ordered_by','users.email as user_email','shops.phone as phone','shops.company_name as company_name','shops.email as email','shops.domain','shops.nama_pemilik')
                                //->where('order_status', 'pending')
                                ->where('orders.id', @$id)
                                ->leftJoin('products', 'products.id', '=', 'orders.product_id')
                                ->leftJoin('users', 'users.id', '=', 'orders.user_id')
                                ->leftJoin('shops', 'shops.id', '=', 'orders.shop_id')
                                ->leftJoin('user_addresses', 'user_addresses.id', '=', 'orders.address_id')
                                ->first();
                                $data['profit'] = DB::table('order_details')->where('order_id',$id)->sum('profit');
        //dd($data['orderdetail']);
        return view('orders.orderdetail',$data);
    }
}
