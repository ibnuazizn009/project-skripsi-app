<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\wisuda_status_domisili;

class domisili_controller extends Controller
{
    public function status_domisili(){
        $domisili=wisuda_status_domisili::all();
        // dd($domisili);
        return view('status_domisili', compact('domisili'));
    }

    public function tambah(){
        return view('tambah_domisili');
    }

    public function tambah_domisili(Request $request){
        try {
            DB::table('wisuda_status_domisilis')->insert([
                'idx' => $request->idx,
                'id_domisili' => $request->id_domisili,
                'status_domisili' => $request->status_domisili
            ]);
        session()->flash('message', ' Successfully Added Data');
        return redirect('/status-domisili');
        } catch (\Throwable $th) {
            //throw $th;
            session()->flash('message',' Unsuccessfull Added Data');
            error_log($th);
            return redirect('/status-domisili');
        }
       
    }

    public function edit_domisili($idx){
        $domisili = wisuda_status_domisili::where('idx', $idx)->get();
        return view('edit_domisili', compact('domisili'));
    }

    public function update_domisili(int $idx, Request $request){
        $input=$request->all();
       try {
        DB::table('wisuda_status_domisilis')->where('idx', $request->idx)->update([
            'status_domisili' => $request->status_domisili
        ]);
        session()->flash('message', ' Successfully Updated');
        return redirect('/status-domisili');
       } catch (\Throwable $th) {
        return $th;
        session()->flash('message',' Unsuccessfull Updated');
        error_log($th);
        return redirect('/status-domisili');
       }
    }

    public function delete_domisili($idx){
        try {
            DB::table('wisuda_status_domisilis')->where('idx',$idx)->delete();
            session()->flash('message_delete',' Successfully Deleted');
            return redirect('/status-domisili');
        } catch (\Throwable $th) {
            session()->flash('message_delete',' Unsuccessfull Deleted');
            return $th;
        }
    }
}
