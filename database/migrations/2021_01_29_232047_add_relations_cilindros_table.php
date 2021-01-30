<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationsCilindrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cilindros_gas', function (Blueprint $table) {
            
            //Agregar Columnas y Relaciones a la tabla de cilindros_gas en la base de datos

            $table->foreignId('estadocili_id')->references('id')->on('estado_cilindro');
            $table->foreignId('boquicili_id')->references('id')->on('boquilla_cilindro');
            $table->foreignId('pesocili_id')->references('id')->on('peso_cilindro');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('cilindros_gas', function (Blueprint $table) {
            
            //Quitar Relaciones entre tablas

            $table->dropForeign(['estadocili_id']);    
            $table->dropForeign(['boquicili_id']);
            $table->dropForeign(['pesocili_id']);

            //Eliminar Columnas de la tabla Cilindros

            $table->dropColumn('estadocili_id');
            $table->dropColumn('boquicili_id');
            $table->dropColumn('pesocili_id');

        });
    }
}
