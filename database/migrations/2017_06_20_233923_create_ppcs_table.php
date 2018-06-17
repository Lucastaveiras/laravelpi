<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePpcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('ppcs', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->string('ppc_perfilcurso');
          $table->string('ppc_perfilegresso');
          $table->string('ppc_formaacesso');
          $table->string('ppc_representacaografica');
          $table->string('ppc_avaliacaoaprendizagem');
          $table->string('ppc_avaliacaocurso');
          $table->string('ppc_tcc');
          $table->string('ppc_estagio');
          $table->string('ppc_politicapcd');
  });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ppcs');
    }
}
