<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class olap_online extends Controller
{
    //
    public function olap_online(Request $request){
        $acc_name = $request->user()->name;
        $acc_email = $request->user()->email;
        $role_name = $request->user()->getRoleNames();
                            
        $predikat_by_jurusan = DB::table('view_prodi_jenjangs')
                            ->leftJoin('wisudawan_datas', 'view_prodi_jenjangs.kode_jur', '=', 'wisudawan_datas.kode_jur')
                            ->select('wisudawan_datas.kode_fak', 'view_prodi_jenjangs.nama_jurusan', 'wisudawan_datas.kode_jur', 'wisudawan_datas.kode_fak', DB::raw('sum(if(wisudawan_datas.predikat = "Cukup", 1 , 0)) as jumlah_cukup'))
                            ->addSelect( DB::raw('sum(if(wisudawan_datas.predikat = "Memuaskan", 1 , 0)) as jumlah_memuaskan'))
                            ->where('wisudawan_datas.predikat', 'Cukup')
                            ->orWhere('wisudawan_datas.predikat', 'Memuaskan')
                            ->orderBy('wisudawan_datas.kode_jur', 'asc')
                            ->groupBy('wisudawan_datas.kode_jur')
                            ->get();
        
        $predikat_by_fakultas = DB::table('view_prodi_jenjangs')
                            ->leftJoin('wisudawan_datas', 'view_prodi_jenjangs.kode_jur', '=', 'wisudawan_datas.kode_jur')
                            ->select('wisudawan_datas.kode_fak','view_prodi_jenjangs.nama_fakultas', 'wisudawan_datas.kode_jur', 'wisudawan_datas.kode_fak', DB::raw('sum(if(wisudawan_datas.predikat = "Cukup", 1 , 0)) as jumlah_cukup'))
                            ->addSelect( DB::raw('sum(if(wisudawan_datas.predikat = "Memuaskan", 1 , 0)) as jumlah_memuaskan'))
                            ->where('wisudawan_datas.predikat', 'Cukup')
                            ->orWhere('wisudawan_datas.predikat', 'Memuaskan')
                            ->orderBy('wisudawan_datas.kode_fak', 'asc')
                            ->groupBy('wisudawan_datas.kode_fak')
                            ->get();                    
        
        $by_nama_jurusan = [];
        $by_jumlah_jurusan_memuaskan = [];
        $by_jumlah_jurusan_cukup = [];
        foreach($predikat_by_jurusan as $key=>$val){
            $by_nama_jurusan[]=$val->nama_jurusan;
            $by_jumlah_jurusan_memuaskan[]=$val->jumlah_memuaskan;
            $by_jumlah_jurusan_cukup[]=$val->jumlah_cukup;
        }

        $by_nama_fakultas = [];
        $by_jumlah_fakultas_memuaskan = [];
        $by_jumlah_fakultas_cukup = [];
        foreach ($predikat_by_fakultas as $key => $val) {
            $by_nama_fakultas[]=$val->nama_fakultas;
            $by_jumlah_fakultas_memuaskan[]=$val->jumlah_memuaskan;
            $by_jumlah_fakultas_cukup[]=$val->jumlah_cukup;
        }

        // dd($by_jumlah_fakultas_cukup);
        return view('olap_data', compact('by_nama_jurusan', 'by_jumlah_jurusan_memuaskan', 'by_jumlah_jurusan_cukup', 'by_nama_fakultas', 'by_jumlah_fakultas_memuaskan', 'by_jumlah_fakultas_cukup', 'acc_name', 'acc_email', 'role_name'));
                        
    }
}
