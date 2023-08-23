<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wisudawan_data;

class wisudawan_controller extends Controller
{
    public function wisudawan(Request $request){
        $acc_name = $request->user()->name;
        $acc_email = $request->user()->email;
        $role_name = $request->user()->getRoleNames();
        $wisudawan=wisudawan_data::all();
        // dd($wisudawan);
        return view('wisudawan', compact('wisudawan', 'acc_name', 'acc_email', 'role_name'));
    }
}
