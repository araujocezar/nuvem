<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstanciaContainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instancia_containers', function (Blueprint $table) {
            $table->id();
            $table->string('hashcode_maquina');
            $table->bigInteger('user_id');
            $table->bigInteger('container_id');

            $table->foreign('hashcode_maquina')->references('hashcode')->on('maquinas');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('container_id')->references('id')->on('containers');

            $table->dateTime('dataHora_instanciado');
            $table->dateTime('dataHora_finalizado');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instancia_containers');
    }
}