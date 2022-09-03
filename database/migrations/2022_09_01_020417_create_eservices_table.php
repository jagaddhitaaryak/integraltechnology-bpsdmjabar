<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eservices', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('tanggal');
            $table->string('nama_kegiatan');
            $table->string('jml_peserta');
            $table->string('jadwal');
            $table->string('data_peserta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eservices');
    }
};
