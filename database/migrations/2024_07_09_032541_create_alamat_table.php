<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlamatTable extends Migration
{
    public function up()
    {
        Schema::create('alamat', function (Blueprint $table) {
            $table->id('id_alamat');
            $table->text('alamat_lengkap');
            $table->string('rt');
            $table->string('rw');
            $table->string('kelurahan');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('provinsi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('alamat');
    }
}
