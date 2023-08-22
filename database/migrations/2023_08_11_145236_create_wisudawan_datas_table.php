<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWisudawanDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisudawan_datas', function (Blueprint $table) {
            $table->integer("id_daftar");
            $table->date("tgl_daftar");
            $table->integer("id_periode");
            $table->integer("kode_fak");
            $table->integer("kode_jur");
            $table->bigInteger("nim");
            $table->string("nama");
            $table->string("jk");
            $table->string("tmp_lahir");
            $table->string("ipk");
            $table->string("predikat");
            $table->string("tgl_sidang");
            $table->string("jenjang");
            $table->text("judul");
            $table->string("pembimbing1");
            $table->string("pembimbing2");
            $table->string("pembimbing3");
            $table->string("gelar_s1");
            $table->string("gelar_s2");
            $table->string("gelar_s3");
            $table->string("foto");
            $table->string("scan_surat_ket_lulus");
            $table->string("scan_selesai_revisi");
            $table->string("scan_bebas_perpus_fak");
            $table->string("scan_bebas_perpus_univ");
            $table->integer("valid_surat_ket_lulus");
            $table->integer("valid_revisi_laporan");
            $table->integer("valid_perpus_fak");
            $table->integer("valid_perpus_univ");
            $table->integer("valid_jurusan");
            $table->integer("valid_fakultas");
            $table->integer("valid_akademik");
            $table->integer("valid_keuangan");
            $table->integer("id_domisili");
            $table->integer("id_status");
            $table->integer("id_pekerjaan");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wisudawan_datas');
    }
}
