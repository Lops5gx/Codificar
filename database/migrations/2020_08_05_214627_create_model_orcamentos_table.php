<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelOrcamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Orcamento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('id_cliente')->unsigned();
            $table->integer('id_funcionario')->unsigned();
            $table->foreign('id_cliente')->references('id')->on('Cliente')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_funcionario')->references('id')->on('Funcionario')->onDelete('cascade')->onUpdate('cascade');
            $table->string('descricao');
            $table->double('valor');
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
        Schema::dropIfExists('Orcamento');
    }
}
