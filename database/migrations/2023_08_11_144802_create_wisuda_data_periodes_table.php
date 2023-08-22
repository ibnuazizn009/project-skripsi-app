<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWisudaDataPeriodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisuda_data_periodes', function (Blueprint $table) {
            $table->integer('idx');
            $table->integer('id_periode');
            $table->integer('periode');
            $table->string('status_aktif_periode');
            $table->string('id_semester');
            $table->date('tgl_buka_daftar');
            $table->date('tgl_tutup_daftar');
            $table->date('tgl_tutup_perpanjangan');
            $table->date('tgl_gladi');
            $table->date('tgl_bagi_toga');
            $table->date('tgl_pelaksanaan');
            $table->string('scan_sk_wisuda');
            $table->string('username');
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
        Schema::dropIfExists('wisuda_data_periodes');
    }
}
