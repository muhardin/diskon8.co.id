<?php

namespace App\Http\Controllers;

use App\Reseller;
use App\ResellerPackage;
use Illuminate\Http\Request;

class ResellerPackageController extends Controller
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
    public function index()
    {
        $packages = ResellerPackage::all();

        return view('resellerPackages.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resellerPackages.create');
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
            'title' => 'required',
            'price' => 'required',
            'description_price' => 'required',
            'maximum_product_sale' => 'required',
            'minimum_price_sale' => 'required',
            'benefit' => 'required',
        ]);

        ResellerPackage::create($request->all());

        return redirect()->route('resellerPackage.index');
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
        $data = ResellerPackage::findOrFail($id);

        return view('resellerPackages.edit', compact('data'));
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
        $resellerPackage = ResellerPackage::findOrFail($id);

        $this->validate($request, [
            'title' => 'required',
            'price' => 'required',
            'description_price' => 'required',
            'maximum_product_sale' => 'required',
            'minimum_price_sale' => 'required',
            'benefit' => 'required',
        ]);

        $input = $request->all();
        $resellerPackage->fill($input)->save();

        return redirect()->route('resellerPackage.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resellerPackage = ResellerPackage::find($id);        
        $resellerPackage->delete();

        return redirect()->route('resellerPackage.index');
    }
}
