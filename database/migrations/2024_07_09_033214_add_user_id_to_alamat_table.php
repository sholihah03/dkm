<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToAlamatTable extends Migration
{
    public function up()
    {
        Schema::table('alamat', function (Blueprint $table) {
            $table->unsignedBigInteger('idUser');

            $table->foreign('idUser')
                ->references('idUser')->on('newusers')
                ->onDelete('cascade'); // Opsional: hapus juga alamat jika user dihapus
        });
    }

    public function down()
    {
        Schema::table('alamat', function (Blueprint $table) {
            $table->dropForeign(['idUser']);
            $table->dropColumn('idUser');
        });
    }
}
