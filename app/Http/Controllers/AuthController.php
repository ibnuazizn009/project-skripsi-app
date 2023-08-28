<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use App\Models\User;
use DB;

class AuthController extends Controller
{
    // public function _construct(){
    //     $this->middleware('auth:api', ['execpt' => ['login', 'register']]);

    // }

    public function login_form(Request $request){
        return view('login');
    }

    public function login(LoginRequest $request){

        $email = $request->request->all()['email'];
        $pass = $request->request->all()['password'];

        $data_user = DB::table('users')->where('email', $email)->value('status');
        $data_password = DB::table('users')->where('email', $email)->value('password');
        $data_email = DB::table('users')->where('email', $email)->value('email');

        if(!Hash::check($pass, $data_password) || $email != $data_email){
            session()->flash('message_error', ' Email Or Password incorrect');
            return redirect('login');
        }
        
        $request->authenticate();

        $request->session()->regenerate();
        
        if($data_user != 1){
            session()->flash('message_error', ' Sorry your account has been deactive, Please contact the administrator');
            return redirect('login');
        }
        
        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function logout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
        
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
