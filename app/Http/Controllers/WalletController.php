<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Mail\SendMailable;
use App\WalletActivity;
use Carbon\Carbon;
use App\Wallet;
use App\User;
use App\Withdraw;
use Auth;
use Mail;

class WalletController extends Controller
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
        $wallets = Wallet::select('wallets.*', 'users.name as user_name')
            ->leftJoin('users', 'users.id', '=', 'wallets.user_id')
            ->where('wallets.user_id', '=', Auth::user()->id)
            ->get();

        $walletActivity = WalletActivity::select('wallet_activities.*', 'users.name as user_name', 'wallets.balanced')
        ->leftJoin('wallets', 'wallets.id', '=', 'wallet_activities.wallet_id')
        ->leftJoin('users', 'users.id', '=', 'wallets.user_id')
        ->where('wallets.user_id', '=', Auth::user()->id)
        ->orderBy('wallet_activities.id', 'desc')
        ->get();

        return view('wallets.index', compact('wallets', 'walletActivity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $wallets = Wallet::all();
        return view('wallets.create', compact('wallets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $wallets = new wallet;
        // $wallets->withdraw   =  $request->withdraw;
        //
        // $p=wallet::select('balanced')->where('id', $request->id)->first();
        //
        //     if ($wallets->withdraw  =  $request->withdraw == $p['balanced']){
        //         $wallets->withdraw  =  $request->withdraw;
        //
        //         $bal=DB::table('wallet')->select('balanced')->where('id', $request->id)->update(['balanced'=> $p['balanced']-$request->balanced]);
        //     }elseif ($wallets->withdraw  = $request->withdraw > $p['balanced']){
        //         return redirect()->back();
        //     }else{
        //         $wallets->withdraw = $request->withdraw;
        //     }
        //
        // $wallets->save();
        // return redirect()->back();

        $date = Carbon::now();

        $data = Wallet::where('id', '=', $request->id)->get();
        $walletActivity = WalletActivity::create([
            'wallet_id' => $request->id,
            'wallet_out' => $request->withdraw,
            'title' => 'Withdraw ' .$date. ' Status Waiting',
        ]);

        // Potong saldo
        $wallet = Wallet::findOrFail($request->id);
        $wallet->balanced = $wallet->balanced - $request->withdraw;
        $wallet->withdraw = $wallet->withdraw + $request->withdraw;
        $wallet->save();

        return redirect('wallet');
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

    public function adminWallet()
    {
        /*$walletActivity = WalletActivity::select('wallet_activities.*', 'wallets.balanced as balanced', 'users.name as reseller_name', 'users.id as user_id')
        ->leftJoin('wallets', 'wallets.id', '=', 'wallet_activities.wallet_id')
        ->leftJoin('users', 'users.id', '=', 'wallets.user_id')
        ->where('wallet_activities.title', 'LIKE', '%Waiting%')
        ->get();*/
        $walletActivity = Withdraw::select('withdraws.*','users.name as reseller_name', 'users.id as user_id','users.email','shops.company_name')
            //->leftJoin('wallets', 'wallets.id', '=', 'withdraws.wallet_id')
            ->leftJoin('users', 'users.id', '=', 'withdraws.user_id')
            ->leftJoin('shops', 'shops.user_id', '=', 'withdraws.user_id')
            //->where('wallet_activities.title', 'LIKE', '%Waiting%')
            ->get();
        return view('wallets.admin', compact('walletActivity'));
    }

    public function resellerWallet($id)
        {
        $wallets = Wallet::select('wallets.*', 'users.name as user_name')
            ->leftJoin('users', 'users.id', '=', 'wallets.user_id')
            ->where('wallets.user_id', '=', $id)
            ->get();

        $walletActivity = WalletActivity::select('wallet_activities.*', 'users.name as user_name', 'wallets.balanced')
        ->leftJoin('wallets', 'wallets.id', '=', 'wallet_activities.wallet_id')
        ->leftJoin('users', 'users.id', '=', 'wallets.user_id')
        ->where('wallets.user_id', '=', $id)
        ->orderBy('wallet_activities.id', 'desc')
        ->get();

        return view('wallets.reseller', compact('wallets', 'walletActivity'));
    }

    public function statusWallet(Request $req, $id)
    {
        $date = Carbon::now();
        switch ($req->status) {
            case 'Approved':
                $wd = Withdraw::find($id);
                if(!$wd)
                {
                    return redirect()->back()->with('warning','Invalid Data');  
                }
                $wd->status = 1;
                $wd->save();

                return redirect()->back()->with('success','Berhasil Update Data');
            break;
            case 'Rejected';
                $wd = Withdraw::find($id);
                if(!$wd)
                {
                    return redirect()->back()->with('warning','Invalid Data');  
                }
                $wd->status = 3;
                $wd->save();
                return redirect()->back()->with('warning','Withdraw Berhasil Ditolak');
            break;
        }
        
        

    }
    /*public function statusWallet(Request $req, $id)
    {
        $date = Carbon::now();
        return redirect()->back()->with('success','Berhasil Update Data');
        
        
        switch ($req->status) {
            case 'Approved':
            $walletActivity = WalletActivity::findOrFail($id);
            $walletActivity->title = 'Withdraw ' .$date. ' Status Approved';
            $wallet = Wallet::find($walletActivity->wallet_id);
            $name = user::find($wallet->user_id);

            Mail::to($name->email)->send(new SendMailable($name, $walletActivity, $wallet));
            $walletActivity->save();
            return redirect()->back();
            break;

            case 'Rejected':
            $walletActivity = WalletActivity::findOrFail($id);
            $walletActivity->title = 'Withdraw ' .$date. ' Status Rejected';
            $walletActivity->save();

            // Kembalikan saldo yang terpotong saat withdraw
            $wallet = Wallet::findOrFail($walletActivity->wallet_id);
            $wallet->balanced = $wallet->balanced + $walletActivity->wallet_out;
            $wallet->withdraw = $wallet->withdraw - $walletActivity->wallet_out;
            $wallet->save();

            return redirect()->back();
                break;

            default:
            return redirect()->back();
            break;
        }

    }*/

    public function historyWallet()
    {
      $walletActivity = WalletActivity::select('wallet_activities.*', 'wallets.balanced as balanced', 'users.name as reseller_name', 'users.id as user_id')
      ->leftJoin('wallets', 'wallets.id', '=', 'wallet_activities.wallet_id')
      ->leftJoin('users', 'users.id', '=', 'wallets.user_id')
      ->where('wallet_activities.title', 'NOT LIKE', '%Waiting%')
      ->get();

      return view('wallets.history', compact('walletActivity'));
    }
}
