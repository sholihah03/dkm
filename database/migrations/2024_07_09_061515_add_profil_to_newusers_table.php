<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('newusers', function (Blueprint $table) {
            $table->string('profil')->nullable(); // Menambahkan kolom profil yang mengizinkan null
        });
    }

    public function down(): void
    {
        Schema::table('newusers', function (Blueprint $table) {
            $table->dropColumn('profil'); // Menghapus kolom profil jika migration di-rollback
        });
    }
};
