<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CouponController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $coupons = Coupon::select('coupons.*', 'products.name as product_name')
            ->leftJoin('products', 'products.id', '=', 'coupons.product_id')
            ->get();
        return view('coupons.index', compact('coupons'));
    }

    
    public function create()
    {
        $products = Product::select('products.*')
            ->leftJoin('shop_products', 'products.id', '=', 'shop_products.product_id')
            ->where('shop_products.user_id', Auth::user()->id)
            ->get();

        return view('coupons.create', compact('products'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required',
            'discount' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        Coupon::create($request->all());

        return redirect()->route('coupon.index');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $data = Coupon::findOrFail($id);

        return view('coupons.edit', compact('data'));
    }

    
    public function update(Request $request, $id)
    {
        $coupon = Coupon::findOrFail($id);

        $this->validate($request, [
            'product_id' => 'required',
            'discount' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $input = $request->all();
        $coupon->fill($input)->save();

        return redirect()->route('coupon.index');
    }

    
    public function destroy($id)
    {
        $coupon = Coupon::find($id);
        $coupon->delete();

        return redirect()->route('coupon.index');
    }
}
