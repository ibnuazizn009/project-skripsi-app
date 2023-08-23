<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\wisuda_jenis_pekerjaan;

class pekerjaan_controller extends Controller
{
    public function status_pekerjaan(Request $request){
        $acc_name = $request->user()->name;
        $acc_email = $request->user()->email;
        $role_name = $request->user()->getRoleNames();
        $pekerjaan=wisuda_jenis_pekerjaan::all();
        // dd($pekerjaan);
        return view('status_pekerjaan', compact('pekerjaan', 'acc_name', 'acc_email', 'role_name'));
    }

    public function tambah(Request $request){
        $acc_name = $request->user()->name;
        $acc_email = $request->user()->email;
        $role_name = $request->user()->getRoleNames();
        return view('tambah_pekerjaan', compact('acc_name', 'acc_email', 'role_name'));
    }

    public function tambah_pekerjaan(Request $request){
        try {
            DB::table('wisuda_jenis_pekerjaans')->insert([
                'idx' => $request->idx,
                'id_pekerjaan' => $request->id_pekerjaan,
                'jenis_pekerjaan' => $request->jenis_pekerjaan
            ]);
        session()->flash('message', ' Successfully Added Data');
        return redirect('/status-pekerjaan');
        } catch (\Throwable $th) {
            //throw $th;
            session()->flash('message',' Unsuccessfull Added Data');
            error_log($th);
            return redirect('/status-pekerjaan');
        }
       
    }

    public function edit_pekerjaan($idx, Request $request){
        $acc_name = $request->user()->name;
        $acc_email = $request->user()->email;
        $role_name = $request->user()->getRoleNames();
        $pekerjaan = wisuda_jenis_pekerjaan::where('idx', $idx)->get();
        return view('edit_pekerjaan', compact('pekerjaan', 'acc_name', 'acc_email', 'role_name'));
    }

    public function update_pekerjaan(int $idx, Request $request){
        $input=$request->all();
       try {
        //code...
        DB::table('wisuda_jenis_pekerjaans')->where('idx', $request->idx)->update([
            'jenis_pekerjaan' => $request->jenis_pekerjaan
        ]);
        session()->flash('message', ' Successfully Updated');
        return redirect('/status-pekerjaan');
       } catch (\Throwable $th) {
        //throw $th;
        return $th;
        session()->flash('message',' Unsuccessfull Updated');
        error_log($th);
        return redirect('/status-pekerjaan');
       }
    }

    public function delete_pekerjaan($idx){
        try {
            DB::table('wisuda_jenis_pekerjaans')->where('idx',$idx)->delete();
            session()->flash('message_delete',' Successfully Deleted');
            return redirect('/status-pekerjaan');
        } catch (\Throwable $th) {
            session()->flash('message_delete',' Unsuccessfull Deleted');
            return $th;
        }
    }
    
}
