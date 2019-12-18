<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;


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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('guest')->except('logout');
    }

    public function getIndex() {
        return view('backend/login');
    }
    public function login(Request $request) {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
            ] 
        );
        
        $arr = ['email' => $request->get('email'), 'password' => $request->get('password')];
        if (Auth::attempt($arr, false)){ //False la nho' dang nhap hay khong.
            return redirect()->intended('admin/home');
        } else {
            return back()->withInput()->with('error','Tài khoản hoặc mật khẩu không đúng');
        }
    }
}
