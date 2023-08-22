<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWisudaJenisPekerjaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisuda_jenis_pekerjaans', function (Blueprint $table) {
            $table->integer("idx");
            $table->integer("id_pekerjaan");
            $table->string("jenis_pekerjaan");
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
        Schema::dropIfExists('wisuda_jenis_pekerjaans');
    }
}
