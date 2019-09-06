<?php

namespace App\Http\Controllers;

use App\Reseller;
use App\ResellerPackage;
use App\Shop;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ResellerController extends Controller
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
        $resellers = User::select('users.*', 'reseller_packages.title as reseller_type_name')
            ->leftJoin('reseller_packages', 'reseller_packages.id', '=', 'users.reseller_type')
            ->where('user_type', 'reseller')
            ->get();
        return view('resellers.index', compact('resellers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packages = ResellerPackage::all();

        return view('resellers.create', compact('packages'));
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
            'name'          => 'required',
            'email'         => 'required',
            'password'      => 'required|min:4|confirmed',
            'reseller_type' => 'required',
        ]);

        $request->merge([
            'password'  => Hash::make($request->password),
            'user_type' => 'reseller',
            'status'    => 'active'
        ]);

        $user = User::create($request->all());
        Shop::create([
            'user_id'       => $user->id,
            'domain'        => $request->domain,
            'company_name'  => $request->company_name,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'no_rekening'   => $request->no_rekening,
            'nama_pemilik'  => $request->nama_pemilik,
            'nama_bank'     => $request->nama_bank,
        ]);

        return redirect()->route('reseller.index');
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
        // $data = Reseller::findOrFail($id);
        // $data = User::findOrFail($id);
        $data = Shop::where('user_id', '=', $id)->first();
        $packages = ResellerPackage::all();
        if($data == null || $packages == null)
          return "Data Kosong";
        else
          return view('resellers.edit', compact('data', 'packages'));
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
        // $resellers = Reseller::findOrFail($id);
        $users = User::where('id', '=', $id)->firstOrFail();
        $resellers = Shop::where('user_id', '=', $id)->firstOrFail();

        // $this->validate($request, [
        //     'email' => 'required',
        //     'reseller_type' => 'required',
        // ]);

        if ($request->password) {
            $this->validate($request, [
                'password' => 'required|min:8|confirmed',
            ]);

            $request->merge([
                'password' => Hash::make($request->password),
            ]);
        }

        $input = $request->all();
        $resellers->fill($input)->save();
        $users->reseller_type = $request->reseller_package_id;
        $users->save();

        return redirect()->back();
        // return redirect()->route('reseller.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $reseller = Reseller::find($id);
        $reseller = User::where('id', '=', $id)->firstOrFail();
        $reseller->delete();
        return redirect()->route('reseller.index');
    }
}
