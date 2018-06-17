<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfessorRequest;
use App\Professor;

class ProfessorController extends Controller
{

      public function listar()
      {
        return view('professor/professorlistar', ['professors'=>Professor::all()]);
      }

      public function criar()
      {
        return view('professor/professorcriar');
      }

      public function salvar(ProfessorRequest $request)
      {
        $professor = new Professor();
        if ($request->has('id')) {
          $professor = Professor::find($request->id);
        }
        $professor->nome = $request->nome;
        $professor->cpf = $request->cpf;
        $professor->maiortitulacao = $request->maiortitulacao;
        $professor->areaformacao = $request->areaformacao;
        $professor->curriculo = $request->curriculo;
        $professor->dtupdtcurriculo = $request->dtupdtcurriculo;
        $professor->save();
        return redirect ('professor/listar');
      }

      public function editar($id)
      {
        return view('professor/professoreditar', ['professor'=> Professor::find($id)]);
      }

      public function remover($id)
      {
        $professor = Professor::find($id);
        $professor->delete();
        return redirect('professor/listar');
      }
}
