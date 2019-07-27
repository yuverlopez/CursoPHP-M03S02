<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarioProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('USER_PRODUCTO', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idProd');
            $table->foreign('idProd')->references('id')->on('PRODUCTO')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('idUserCreate');
            $table->foreign('idUserCreate')->references('id')->on('USUARIO')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('idUserUpdate');
            $table->foreign('idUserUpdate')->references('id')->on('USUARIO')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('USER_PRODUCTO');
    }
}
