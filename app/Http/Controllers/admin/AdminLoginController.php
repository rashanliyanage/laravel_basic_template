<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class AdminLoginController extends Controller
{


    public  function __construct()
    {
        $this->middleware('guest');

    }



    public function showLoginForm(){


        return view('dashboard.dashboard-login');
    }

    public function login(Request $request){

        $this->validate($request,[
           'email'=>'required|email',
            'password'=>'required|min:6'

        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('admin-dashboard'));

        }

        return redirect()->back()->with($request->only('email'));
    }

    public function logout(Request $request)
    {

    }


}
