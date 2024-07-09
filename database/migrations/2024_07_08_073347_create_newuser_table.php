<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('newusers', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('nama_lengkap')->nullable(); // Nullable
            $table->string('email')->nullable()->unique(); // Nullable
            $table->string('no_telepon');
            $table->string('password');
            $table->date('tgl_lahir')->nullable(); // Nullable
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('newusers');
    }
};
