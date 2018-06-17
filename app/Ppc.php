<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ppc extends Model
{
  protected  $fillable = ['curso_id', 'ppc_perfilcurso','ppc_perfilegresso','ppc_perfilegresso','ppc_representacaografica','ppc_avaliacaoaprendizagem','ppc_avaliacaocurso','ppc_tcc','ppc_estagio','ppc_politicapcd'];

  public function curso() {
    return $this->belongsTo('App\Curso');
  }

}
