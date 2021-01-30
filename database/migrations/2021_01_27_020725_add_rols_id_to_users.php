<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRolsIdToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            
            //Agregar Relaciones a la tabla de usuarios en la base de datos

            $table->foreignId('role_id')->references('id')->on('roles');
            $table->foreignId('estatus_id')->references('id')->on('estatus');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            
            //Quitar Relaciones entre tablas

            $table->dropForeign(['role_id']);
            $table->dropColumn('role_id');

            $table->dropForeign(['estatus_id']);
            $table->dropColumn('estatus_id');

        });
    }
}
