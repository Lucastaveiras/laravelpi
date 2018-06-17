<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
  protected  $fillable = ['curso_nome', 'curso_tipo', 'curso_modalidade', 'curso_local', 'curso_habilitacao', 'curso_turno', 'curso_vaga', 'curso_cargahoraria', 'curso_regime', 'curso_periodo'];


public function professor()
{
	return $this->belongsTo("App\Professor");
}
}
