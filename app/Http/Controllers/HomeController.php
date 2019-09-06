<?php

namespace App\Http\Controllers;



use App\ResellerDashboard;

use Illuminate\Http\Request;

use App\ShopProduct;
use App\Order;
use Auth;


class HomeController extends Controller

{
 
    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('auth');

    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function index()

    {

        $information = ResellerDashboard::first();
        if(Auth::user()->user_type=='reseller'){
            return redirect('/member');
        }

        // total produk
        $products = ShopProduct::where('user_id', '=', Auth::user()->id)->get();
        $products = count($products);

        // jumlah transaksi
        $transactions = Order::where('user_id', '=', Auth::user()->id)->get();
        $transactions = count($transactions);

        // produk terjual
        $sold = Order::where('user_id', '=', Auth::user()->id)
        ->where('order_status', '=', 'success')
        ->get();

        $sold = count($sold);

        // profit reseller
        $profit = Order::select('orders.*', 'shop_products.profit as resellerProfit')
        ->where('orders.order_status', '=', 'success')
        ->leftJoin('shops', 'shops.id', '=', 'orders.shop_id')
        ->leftJoin('shop_products', 'shop_products.product_id', '=', 'orders.product_id')
        ->where('shop_products.user_id', '=', Auth::user()->id)
        ->get();

        // hitung profit
        $resellerProfit = 0;
        foreach ($profit as $key => $prft)
        {
          $resellerProfit += $prft->resellerProfit;
        }

        return view('home', compact('information', 'products', 'transactions', 'sold', 'resellerProfit'));

    }

}
