<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductPrice;
use App\Shop;
use App\ShopProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $products = Product::select('products.*', 'categories.name as category_name', 'shop_products.agent_price as reseller_price', 'shop_products.shop_id', 'shop_products.id as shop_products_id' )
            ->leftJoin('shop_products', 'products.id', '=', 'shop_products.product_id')
            ->leftJoin('categories', 'products.category_id', '=', 'categories.id')
            ->where('products.name','like',"%".$cari."%")
            ->paginate(10);

        $priceLists = [];
        foreach ($products as $key => $value) {
            $productPrice = ProductPrice::select('reseller_packages.title as package_title', 'product_prices.*')
                ->leftJoin('reseller_packages', 'product_prices.reseller_package_id', '=', 'reseller_packages.id')
                ->where('product_id', $value->id)
                ->get();

            $priceLists[$key] = $productPrice;
        }

        return view('catalogs.index', compact('products', 'priceLists'));
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
        $this->validate($request, [
            'profit' => 'required',
        ]);

        $shop = Shop::where('user_id', Auth::user()->id)->first();
        $productPrice = ProductPrice::where('reseller_package_id', $shop->reseller_package_id)->where('product_id', $request->product_id)->first();

        $request->merge([
            'user_id' => Auth::user()->id,
            'shop_id' => $shop->id,
            'product_id' => $request->product_id,
            'agent_price' => $productPrice->agent_price,
            'profit' => $request->profit,
        ]);

        ShopProduct::create($request->all());

        return redirect()->route('catalog.index');
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
}
