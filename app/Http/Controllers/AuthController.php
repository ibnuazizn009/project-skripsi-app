<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // public function _construct(){
    //     $this->middleware('auth:api', ['execpt' => ['login', 'register']]);

    // }

    public function login_form(){
        return view('login');
    }

    public function login(LoginRequest $request){
        // dd($request->email);
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect('login');
    }
    public function roles(Request $request){
        // if($request->user()->hasRole('pimpinan')){
        //     return 'role page';
        // }

        return $request;
        // abort(403);
    }
}
