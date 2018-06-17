<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Curso;
use App\Http\Requests\CursoRequest;

class CursoController extends Controller {

public function __construct(){

      $this->middleware('auth');
}

public function listar (){

    return view('curso/listar', ['cursos'=>Curso::all()]);
}
public function criar(){

    return view('curso/criar', ['curso'=> new Curso, 'professors' => \App\Professor::all()]);
}
public function editar ($id){

    return view('curso/editar', ['curso'=>Curso::find($id), 'professors' => \App\Professor::all()]);
}
public function remover($id){

    $curso = Curso::find($id);
    $curso -> delete();

    return redirect ('curso/listar');
}
public function salvar(CursoRequest $request){

    $curso = new Curso();
    if ($request->id){
    $curso=Curso::find($request->id);
    }
    $curso->professor_id = $request->professor_id;
    $curso->curso_nome = $request->curso_nome;
    $curso->curso_tipo = $request->curso_tipo;
    $curso->curso_modalidade = $request->curso_modalidade;
    $curso->curso_local = $request->curso_local;
    $curso->curso_habilitacao = $request->curso_habilitacao;
    $curso->curso_turno = $request->curso_turno;
    $curso->curso_vaga = $request->curso_vaga;
    $curso->curso_cargahoraria = $request->curso_cargahoraria;
    $curso->curso_regime = $request->curso_regime;
    $curso->curso_periodo = $request->curso_periodo;
    $curso->save();

    return redirect('curso/listar');

    }

}
