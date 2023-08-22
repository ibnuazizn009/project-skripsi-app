<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Charts\ChartFakultas;
use DB;

class home extends Controller
{

    public function home(){
        // Query Jumlah Fakultas
        $jm_fakultas = DB::table('wisudawan_datas')
                    ->select(DB::raw('kode_fak, count(kode_fak) as jumlah_fak'))
                    ->groupBy('kode_fak')
                    ->get();
        
        // Query Jumlah Jurusan S2
        $jm_jurusan_S2 = DB::table('wisudawan_datas')
                    ->select(DB::raw('kode_jur, count(kode_jur) as jumlah_jur'))
                    ->where('jenjang', 'S2')
                    ->groupBy('kode_jur')
                    ->get();


        // Query Nama Fakultas
        $nama_fakultas = DB::table('view_prodi_jenjangs')
                        ->select(DB::raw('nama_fakultas, count(nama_fakultas) as jumlah_nama'))
                        ->orderBy('kode_fak', 'asc')
                        ->groupBy('nama_fakultas')
                        ->get();
        
         // Query Nama Jurusan S2
        //  $nama_jurusan_S2 = DB::table('view_prodi_jenjangs')
        //                     ->select(DB::raw('SUBSTRING_INDEX(nama_jurusan, " - " ,1) as jurusan, kode_jur'))
        //                     ->where('jenjang', 'S2')
        //                     ->orderBy('kode_jur', 'asc')
        //                     ->groupBy('nama_jurusan')
        //                     ->get();

        // Query untuk mencari jumlah mahasiswa berdasarkan jurusan jenjang S1
        $join_table = DB::table('view_prodi_jenjangs')
                        ->join('wisudawan_datas', 'view_prodi_jenjangs.kode_jur', '=', 'wisudawan_datas.kode_jur')
                        ->select('view_prodi_jenjangs.nama_jurusan', 'wisudawan_datas.kode_jur', DB::raw('count(wisudawan_datas.kode_jur) as jumlah_mahasiswa'))
                        ->where('wisudawan_datas.jenjang', 'S1')
                        ->orderBy('wisudawan_datas.kode_jur', 'asc')
                        ->groupBy('wisudawan_datas.kode_jur')
                        ->get();
        
        // Query untuk mencari jumlah mahasiswa berdasarkan jurusan jenjang S2
        $join_table_S2 = DB::table('view_prodi_jenjangs')
                        ->join('wisudawan_datas', 'view_prodi_jenjangs.kode_jur', '=', 'wisudawan_datas.kode_jur')
                        ->select('view_prodi_jenjangs.nama_jurusan', 'wisudawan_datas.kode_jur', DB::raw('count(wisudawan_datas.kode_jur) as jumlah_mahasiswa'))
                        ->where('wisudawan_datas.jenjang', 'S2')
                        ->orderBy('wisudawan_datas.kode_jur', 'asc')
                        ->groupBy('wisudawan_datas.kode_jur')
                        ->get();

        
        
        // rerturn jumlah fakultas
        $result_jumlah = [];
        foreach($jm_fakultas as $key=>$val){
            $result_jumlah[] = $val->jumlah_fak;
        }
     
        // return nama fakultas
        $fakultas_result=[];
        foreach($nama_fakultas as $nf){
            $fakultas_result[]=$nf->nama_fakultas;
        }

        // return nama jurusan dan jumlah mahasiswa jenjang S1
        $result_join_jurusan=[];
        $result_join_jumlah=[];
        foreach($join_table as $key=>$val){
            $result_join_jurusan[] = $val->nama_jurusan;
            $result_join_jumlah[] = $val->jumlah_mahasiswa;
        }

        // return nama jurusan dan jumlah mahasiswa jenjang S2
        $result_join_jurusan_S2=[];
        $result_join_jumlah_S2=[];
        foreach($join_table_S2 as $key=>$val){
            $result_join_jurusan_S2[] = $val->nama_jurusan;
            $result_join_jumlah_S2[] = $val->jumlah_mahasiswa;
        }
       
        return view('home', compact('fakultas_result', 'result_jumlah', 'result_join_jurusan', 'result_join_jumlah', 'result_join_jurusan_S2', 'result_join_jumlah_S2'));
    }

    public function welcome(){
        // dd($request->user()->hasRole('admin'));
        return view('welcome');
    }
}
