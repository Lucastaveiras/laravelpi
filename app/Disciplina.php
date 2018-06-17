<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
  protected  $fillable = ['disciplina_codigo', 'disciplina_nome', 'disciplina_carga'];

}
