<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Shop;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function logout()
    {
        @$link = Shop::where('user_id',Session::get('reseller_id'))->first();
        if($link)
        {
            Auth::logout();
            return redirect($link->domain);
        }else{
            Auth::logout();
            return redirect('/');
        }
    }
    public function authenticated(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => 'active'])) {
            // Authentication passed...
            if(Auth::user()->user_type == 'reseller'){
                Session::put('reseller_id',Auth::user()->id);
                return redirect()->intended('member');
            }elseif(Auth::user()->user_type == 'customer'){
                Session::put('reseller_id',Auth::user()->id);
                return redirect()->intended('/cart');
            }
            else{
                return redirect()->intended('home');
            }
           
        }
    }
}
