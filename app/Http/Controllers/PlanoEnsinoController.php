<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Curso;
use App\Bibliografia;
use App\Http\Requests;
//use App\Http\Requests\PlanoEnsinoRequest;

class PlanoEnsinoController extends Controller
{

      public function listar()
      {
        return view('plano_ensino/listarPlanoEnsino');

      }

      public function editar()
      {
        return view('plano_ensino/editarPlanoEnsino');
      }

      public function criar()
      {
        $cursos = Curso::all();
        $bibliografias = Bibliografia::all();
        //$disciplinas = Disciplina::all();
        
        return view('plano_ensino/criarPlanoEnsino', ['cursos' => $cursos, 'bibliografias' => $bibliografias]);
      }
      public function remover($id){

        $curso = \App\PlanoEnsino::find($id);
        $curso -> delete();
        return redirect ('plano_ensino/listarPlanoEnsino');
      }
      public function salvar(PlanoEnsinoRequest $request){

        $curso = new \App\PlanoEnsino();
        $curso->save();

        return redirect('plano_ensino/listarPlanoEnsino');
      }
}
