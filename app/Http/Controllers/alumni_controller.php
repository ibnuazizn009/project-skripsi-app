<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\wisuda_status_alumni;

class alumni_controller extends Controller
{
    public function status_alumni(){
        $alumni = wisuda_status_alumni::all();
        return view('status_alumni', compact('alumni'));
    }

    public function tambah(){
        return view('tambah_alumni');
    }

    public function tambah_alumni(Request $request){
        try {
            DB::table('wisuda_status_alumnis')->insert([
                'idx' => $request->idx,
                'id_status' => $request->id_status,
                'status_alumni' => $request->status_alumni
            ]);
        session()->flash('message', ' Successfully Added Data');
        return redirect('/status-alumni');
        } catch (\Throwable $th) {
            //throw $th;
            session()->flash('message',' Unsuccessfull Added Data');
            error_log($th);
            return redirect('/status-alumni');
        }
       
    }

    public function edit_alumni($idx){
        $alumni = wisuda_status_alumni::where('idx', $idx)->get();
        return view('edit_alumni', compact('alumni'));
       
    }

    public function update_alumni(int $idx, Request $request){
        $input=$request->all();
       try {
        //code...
        DB::table('wisuda_status_alumnis')->where('idx', $request->idx)->update([
            'status_alumni' => $request->status_alumni
        ]);
        session()->flash('message', ' Successfully Updated');
        return redirect('/status-alumni');
       } catch (\Throwable $th) {
        //throw $th;
        session()->flash('message',' Unsuccessfull Updated');
        error_log($th);
        return redirect('/status-alumni');
       }
    }

    public function delete_alumni($idx){
        try {
            DB::table('wisuda_status_alumnis')->where('idx',$idx)->delete();
            session()->flash('message_delete',' Successfully Deleted');
            return redirect('/status-alumni');
        } catch (\Throwable $th) {
            session()->flash('message_delete',' Unsuccessfull Deleted');
            return $th;
        }
    }
}
