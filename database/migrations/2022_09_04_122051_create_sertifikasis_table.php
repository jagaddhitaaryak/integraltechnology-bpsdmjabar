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
        Schema::create('sertifikasis', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('nama_kegiatan');
            $table->string('bidang_penyelenggara');
            $table->string('jml_peserta');
            $table->string('link_sertifikat');
            $table->string('foto_kegiatan')->nullable();
            $table->string('data_peserta')->nullable();
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
        Schema::dropIfExists('sertifikasis');
    }
};
