<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaDisciplinas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('disciplinas', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->string("disciplina_codigo");
          $table->string("disciplina_nome");
          $table->string("disciplina_carga");
    });
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
