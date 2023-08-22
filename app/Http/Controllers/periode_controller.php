<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\wisuda_data_periode;

class periode_controller extends Controller
{
    public function periode(){
        $periode=wisuda_data_periode::all();
        // dd($periode);
        return view('periode', compact('periode'));
    }

    public function tambah(){
        return view('tambah_periode');
    }

    public function tambah_periode(Request $request){
        try {
            DB::table('wisuda_data_periodes')->insert([
                'idx' => $request->idx,
                'id_periode' => $request->id_periode,
                'periode' => $request->periode,
                'status_aktif_periode' => $request->status_aktif_periode,
                'id_semester' => $request->id_semester,
                'tgl_buka_daftar' => $request->tgl_buka_daftar,
                'tgl_tutup_daftar' => $request->tgl_tutup_daftar,
                'tgl_tutup_perpanjangan' => $request->tgl_tutup_perpanjangan,
                'tgl_gladi' => $request->tgl_gladi,
                'tgl_bagi_toga' => $request->tgl_bagi_toga,
                'tgl_pelaksanaan' => $request->tgl_pelaksanaan,
                'scan_sk_wisuda' => $request->scan_sk_wisuda,
                'username' => $request->username,
            ]);
        session()->flash('message', ' Successfully Added Data');
        return redirect('/periode');
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
            session()->flash('message',' Unsuccessfull Added Data');
            error_log($th);
            return redirect('/periode');
        }
       
    }

    public function edit_periode($idx){
        $periode = wisuda_data_periode::where('idx', $idx)->get();
        return view('edit_periode', compact('periode'));
    }

    public function update_periode(int $idx, Request $request){
        $input=$request->all();
       try {
        DB::table('wisuda_data_periodes')->where('idx', $request->idx)->update([
            'periode' => $request->periode,
            'status_aktif_periode' => $request->status_aktif_periode,
            'tgl_buka_daftar' => $request->tgl_buka_daftar,
            'tgl_tutup_daftar' => $request->tgl_tutup_daftar,
            'tgl_tutup_perpanjangan' => $request->tgl_tutup_perpanjangan,
            'tgl_gladi' => $request->tgl_gladi,
            'tgl_bagi_toga' => $request->tgl_bagi_toga,
            'tgl_pelaksanaan' => $request->tgl_pelaksanaan,
            'scan_sk_wisuda' => $request->scan_sk_wisuda,
            
        ]);
        session()->flash('message', ' Successfully Updated');
        return redirect('/periode');
       } catch (\Throwable $th) {
        return $th;
        session()->flash('message',' Unsuccessfull Updated');
        error_log($th);
        return redirect('/periode');
       }
    }

    public function delete_periode($idx){
        try {
            DB::table('wisuda_data_periodes')->where('idx',$idx)->delete();
            session()->flash('message_delete',' Successfully Deleted');
            return redirect('/periode');
        } catch (\Throwable $th) {
            session()->flash('message_delete',' Unsuccessfull Deleted');
            return $th;
        }
    }
}
