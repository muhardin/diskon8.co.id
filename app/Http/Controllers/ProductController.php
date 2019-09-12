<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductPrice;
use App\ProductStock;
use App\ResellerPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('AuthAdmin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $resellerPackages = ResellerPackage::all();

        return view('products.create', compact('categories', 'resellerPackages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = Str::slug($request->name);
        $this->validate($request, [

        ]);

        $request->merge([
            'slug' => $slug,
            'status' => 'active',
            'unit' => 'gram',
        ]);

        $name = '';
        $destinationPath = public_path('/images/products/');

        if ($request->file('images')) {
            $img = $request->file('images');
            $name = 'products-'.time() . '.'. $img->getClientOriginalExtension();
            $img->move($destinationPath, $name);
        }

        $request->merge([
            'main_image' => $name
        ]);

        $data = Product::create($request->all());

        foreach ($request->agent_price as $key => $value) {
                //dd($request->agent_price);
            ProductPrice::create([
                'product_id' => $data->id,
                'reseller_package_id' => $request->reseller_package_id[$key],
                'agent_price' => $value,
            ]);
        }

        $stock = ProductStock::create([
            'product_id' => $data->id,
            'stock' => $request->quantity
        ]);

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Product::findOrFail($id);
        $stocks = ProductStock::where('product_id', '=', $id)->get();
        return view('products.show', compact('data', 'stocks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::select('products.*', 'categories.name as category_name')
            ->leftJoin('categories', 'categories.id', '=', 'products.category_id')
            ->where('products.id', $id)
            ->first();

        $stock = ProductStock::where('product_id', '=', $id)->get();
        $categories = Category::all();
        // $resellerPackages = ResellerPackage::all();
        $resellerPackages = ProductPrice::where('product_id', '=', $id)->get();
      //dd($resellerPackages);
        if($data == null || $resellerPackages->first() == null || $categories == null)
          return "Data Kosong";
        else
          return view('products.edit', compact('data', 'stock', 'categories', 'resellerPackages'));
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
        $product = Product::findOrFail($id);

//         $this->validate($request, [
//             'name' => 'required',
//             'brand' => 'required',
// //            'agent_price' => 'required',
// //            'selling_price' => 'required',
// //            'profit' => 'required',
// //            'discount' => 'required',
// //            'description' => 'required',
//             'category' => 'required'
//         ]);

        $input = $request->all();

        $name = '';
        $destinationPath = public_path('/images/products/');

        if ($request->file('images')) {
            $img = $request->file('images');
            $name = 'products-'.time() . '.'. $img->getClientOriginalExtension();
            $img->move($destinationPath, $name);
            $product->main_image = $name;
        }

        $product->fill($input)->save();
        $product->save();

        foreach ($request->agent_price as $key => $value) {
          $price = ProductPrice::where([
            ['product_id', '=', $id],
            ['reseller_package_id', '=', $request->reseller_package_id[$key]],
            ])->first();
          $price->agent_price = $value;
          $price->save();
        }

        return redirect()->back();
        // return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('product.index');
    }
}
