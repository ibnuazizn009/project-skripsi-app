<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewProdiJenjangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('view_prodi_jenjangs', function (Blueprint $table) {
            $table->string("kode_dikti");
            $table->integer("kode_fak");
            $table->integer("id_fakultas");
            $table->string("nama_resmi");
            $table->string("nama_fakultas");
            $table->string("nama_kajur")->nullable();
            $table->string("nip_kajur")->nullable();
            $table->integer("kode_jur");
            $table->integer("id_jenjang");
            $table->string("jenjang");
            $table->string("jurusan");
            $table->string("nama_jurusan");
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
        Schema::dropIfExists('view_prodi_jenjangs');
    }
}
