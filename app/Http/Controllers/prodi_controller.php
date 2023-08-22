<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\view_prodi_jenjang;

class prodi_controller extends Controller
{
    public function prodi(){
        $prodi=view_prodi_jenjang::all();
        return view('prodi', compact('prodi'));
    }

    public function tambah(){
        return view('tambah_prodi');
    }

    public function tambah_prodi(Request $request){
        try {
            DB::table('view_prodi_jenjangs')->insert([
                'kode_dikti' => $request->kode_dikti,
                'kode_fak' => $request->kode_fak,
                'id_fakultas' => $request->id_fakultas,
                'nama_resmi' => $request->nama_resmi,
                'nama_fakultas' => $request->nama_fakultas,
                'nama_kajur' => $request->nama_kajur,
                'nip_kajur' => $request->nip_kajur,
                'kode_jur' => $request->kode_jur,
                'id_jenjang' => $request->id_jenjang,
                'jenjang' => $request->jenjang,
                'jurusan' => $request->jurusan,
                'nama_jurusan' => $request->nama_jurusan
            ]);
        session()->flash('message', ' Successfully Added Data');
        return redirect('/prodi');
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
            session()->flash('message',' Unsuccessfull Added Data');
            error_log($th);
            return redirect('/prodi');
        }
       
    }

    public function edit_prodi($dikti){
        $prodi = view_prodi_jenjang::where('kode_dikti', $dikti)->get();
        return view('edit_prodi', compact('prodi'));
    }

    public function update_prodi(int $dikti, Request $request){
        $input=$request->all();
       try {
        DB::table('view_prodi_jenjangs')->where('kode_dikti', $request->kode_dikti)->update([
            'nama_resmi' => $request->nama_resmi,
            'nama_fakultas' => $request->nama_fakultas,
            'nama_kajur' => $request->nama_kajur,
            'nip_kajur' => $request->nip_kajur,
            'jenjang' => $request->jenjang,
            'jurusan' => $request->jurusan,
            'nama_jurusan' => $request->nama_jurusan
        ]);
        session()->flash('message', ' Successfully Updated');
        return redirect('/prodi');
       } catch (\Throwable $th) {
        return $th;
        session()->flash('message',' Unsuccessfull Updated');
        error_log($th);
        return redirect('/prodi');
       }
    }

    public function delete_prodi($dikti){
        try {
            DB::table('view_prodi_jenjangs')->where('kode_dikti',$dikti)->delete();
            session()->flash('message_delete',' Successfully Deleted');
            return redirect('/prodi');
        } catch (\Throwable $th) {
            session()->flash('message_delete',' Unsuccessfull Deleted');
            return $th;
        }
    }
}
