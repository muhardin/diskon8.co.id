<?php

namespace App\Http\Controllers;

use App\ResellerDashboard;
use Illuminate\Http\Request;

class ResellerDashboardController extends Controller
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
        $data = ResellerDashboard::all();
        return view('resellerDashboards.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = ResellerDashboard::first();

        return view('resellerDashboards.create', compact('data'));
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
            'information' => 'required',
        ]);

        ResellerDashboard::create($request->all());

        return redirect()->route('resellerDashboard.create');
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
        $data = ResellerDashboard::findOrFail($id);

        return view('resellerDashboards.edit', compact('data'));
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
        $ResellerDashboard = ResellerDashboard::findOrFail($id);

        $this->validate($request, [
            'information' => 'required',
        ]);

        $input = $request->all();
        $ResellerDashboard->fill($input)->save();

        return redirect()->route('resellerDashboard.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ResellerDashboard = ResellerDashboard::find($id);
        $ResellerDashboard->delete();

        return redirect()->route('resellerDashboard.index');
    }
}
