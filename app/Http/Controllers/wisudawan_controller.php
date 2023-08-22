<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wisudawan_data;

class wisudawan_controller extends Controller
{
    public function wisudawan(){
        $wisudawan=wisudawan_data::all();
        // dd($wisudawan);
        return view('wisudawan', compact('wisudawan'));
    }
}
