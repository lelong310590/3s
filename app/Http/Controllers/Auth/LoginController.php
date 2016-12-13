<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Requests\AuthenticationRequest;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function getLogin()
    {
        return view('dashboard.modules.login');
    }

    public function postLogin(AuthenticationRequest $request)
    {
        $credentials = array(
            'email' => $request->login_email,
            'password' => $request->login_password,
            'status' => 1
        );
        
        $remember = $request->input('remember_me');

        if (Auth::attempt($credentials, $remember)) {
            if (Auth::user()->level > 2) {
                return redirect()->route('getLogout');
            }
            return redirect('dashboard');
        } else {
            return redirect()->back();
        }

    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('getLogin');
    }
}
