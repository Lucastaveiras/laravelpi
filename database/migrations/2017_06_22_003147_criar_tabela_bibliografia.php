<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaBibliografia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('bibliografias', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->String("bibliografia_titulo");
          $table->String("bibliografia_autor");
          $table->String("bibliografia_isbn");
          $table->String("bibliografia_editora");
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
