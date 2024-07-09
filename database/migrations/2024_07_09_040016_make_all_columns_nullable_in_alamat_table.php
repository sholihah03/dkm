<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('alamat', function (Blueprint $table) {
            $table->text('alamat_lengkap')->nullable()->change();
            $table->string('rt')->nullable()->change();
            $table->string('rw')->nullable()->change();
            $table->string('kelurahan')->nullable()->change();
            $table->string('kabupaten')->nullable()->change();
            $table->string('kecamatan')->nullable()->change();
            $table->string('provinsi')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('alamat', function (Blueprint $table) {
            $table->text('alamat_lengkap')->nullable(false)->change();
            $table->string('rt')->nullable(false)->change();
            $table->string('rw')->nullable(false)->change();
            $table->string('kelurahan')->nullable(false)->change();
            $table->string('kabupaten')->nullable(false)->change();
            $table->string('kecamatan')->nullable(false)->change();
            $table->string('provinsi')->nullable(false)->change();
        });
    }
};
