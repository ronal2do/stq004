<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Voluntario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('voluntarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('nascimento');
            $table->string('bairro');
            $table->string('endereco');
            $table->string('tel');
            $table->string('ocupacao');
            $table->string('dias');
            $table->string('periodo');
            $table->string('horas');
            $table->string('message');
           

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
        Schema::drop('voluntarios');
    }
}
