<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCetaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cetaks', function (Blueprint $table) {
            $table->id("id_cetak");
            $table->String("no_sertifikat");
            $table->integer("id_peserta");
            $table->integer("id_kelas");
            $table->date("tgl_keluar_sertifikat");
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
        Schema::dropIfExists('cetaks');
    }
}
