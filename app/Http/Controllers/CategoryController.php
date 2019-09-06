<?php

namespace App\Http\Controllers;

use App\Category;
use File;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
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
            'name' => 'required',
        ]);
        $destinationPath = public_path('/images/category/');
        $data   = New Category();
        if ($request->hasfile('category')) {
            //File::delete('images/slides/' . @$data->favicon);
            $img    = $request->file('category');
            $name   = 'category-'.time() . '.'. $img->getClientOriginalExtension();
            $img->move($destinationPath, $name);
            $data->gambar  = $name;
           
        }
        $data->name=$request->name;
        $data->save();
        //return redirect()->back()->with('success','Berhasil Update Data');
        return redirect()->route('category.index');
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
        $data = Category::findOrFail($id);

        return view('categories.edit', compact('data'));
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
        $this->validate($request, [
            'name' => 'required',
        ]);
        
        $destinationPath = public_path('/images/category/');
        $category = Category::find($id);
        if ($request->hasfile('category')) {
            File::delete('images/category/' . @$category->gambar);
            $img            = $request->file('category');
            $name           = 'category-'.time() . '.'. $img->getClientOriginalExtension();
            $img->move($destinationPath, $name);
            $category->gambar   = $name;
        }
        $category->name  = $request->name;
        $category->update();
        //$category->fill($input)->save();

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('category.index');
    }
}
