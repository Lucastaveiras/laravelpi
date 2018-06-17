<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\PPC;
use App\Curso;
use App\Http\Requests\PpcRequest;

class PPCController extends Controller {

  public function __construct(){

        $this->middleware('auth');
  }

    public function listar (){

return view('ppc/listar', ['ppcs'=>PPC::all()]);
}

public function criar(){
    $cursos = Curso::all();

    return view('ppc/criar', ['ppcs'=> new PPC, 'cursos' => $cursos]);


}
    public function editar ($id){
  $cursos = Curso::all();

return view('ppc/editar', ['ppcs'=>PPC::find($id), 'cursos' => $cursos]);
}
    public function remover($id){

$ppc = PPC::find($id);
$ppc -> delete();

return redirect ('ppc/listar');
}
    public function salvar(PpcRequest $request){

      $ppc = new Ppc();
      if ($request->id){
      $ppc=Ppc::find($request->id);
      }
      $ppc->curso_id = $request->curso_id;
      $ppc->ppc_perfilcurso = $request->ppc_perfilcurso;
      $ppc->ppc_perfilegresso = $request->ppc_perfilegresso;
      $ppc->ppc_formaacesso = $request->ppc_formaacesso;
      $ppc->ppc_representacaografica = $request->ppc_representacaografica;
      $ppc->ppc_avaliacaoaprendizagem = $request->ppc_avaliacaoaprendizagem;
      $ppc->ppc_avaliacaocurso = $request->ppc_avaliacaocurso;
      $ppc->ppc_tcc = $request->ppc_tcc;
      $ppc->ppc_estagio = $request->ppc_estagio;
      $ppc->ppc_politicapcd = $request->ppc_politicapcd;

      $ppc->save();

      return redirect('ppc/listar');

    }

}
