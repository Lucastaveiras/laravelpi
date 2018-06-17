<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disciplina;
use App\Http\Requests\DisciplinaRequest;


class DisciplinaController extends Controller{

  public function __construct(){

        $this->middleware('auth');
  }

  public function listar (){

      return view('disciplina/listar', ['disciplinas'=>Disciplina::all()]);
  }
  public function criar(){

      return view('disciplina/criar', ['disciplina'=> new Disciplina]);
  }
  public function editar ($id){

      return view('disciplina/editar', ['disciplina'=>Disciplina::find($id)]);
  }
  public function remover($id){

      $disciplina = Disciplina::find($id);
      $disciplina -> delete();

      return redirect ('disciplina/listar');
  }
  public function salvar(DisciplinaRequest $request){

      $disciplina = new Disciplina();
      if ($request->id){
      $disciplina=Disciplina::find($request->id);
      }
      $disciplina->disciplina_codigo = $request->disciplina_codigo;
      $disciplina->disciplina_nome = $request->disciplina_nome;
      $disciplina->disciplina_carga = $request->disciplina_carga;

      $disciplina->save();

      return redirect('disciplina/listar');

      }

  }
