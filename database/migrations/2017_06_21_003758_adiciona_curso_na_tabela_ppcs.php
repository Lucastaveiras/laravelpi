<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaCursoNaTabelaPpcs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('ppcs', function (Blueprint $table) {
        $table->integer("curso_id")
              ->unsigned()
              ->nullable();
        $table->foreign("curso_id")
              ->references("id")
              ->on("cursos");
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('ppcs', function (Blueprint $table) {
        $table->dropForeign("ppcs_curso_id_foreign");
        $table->dropColumn("curso_id");
  });
 }
}
