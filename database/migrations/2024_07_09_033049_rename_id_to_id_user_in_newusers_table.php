<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameIdToIdUserInNewusersTable extends Migration
{
    public function up()
    {
        Schema::table('newusers', function (Blueprint $table) {
            $table->renameColumn('id', 'idUser');
        });
    }

    public function down()
    {
        Schema::table('newusers', function (Blueprint $table) {
            $table->renameColumn('idUser', 'id');
        });
    }
}
