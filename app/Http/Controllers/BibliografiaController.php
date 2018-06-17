<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bibliografia;
use App\Http\Requests\BibliografiaRequest;

class BibliografiaController extends Controller{

public function __construct(){

      $this->middleware('auth');
}

public function listar(){

    return view('bibliografia/listar', ['bibliografias'=>Bibliografia::all()]);
}

public function criar(){

    return view('bibliografia/criar', ['bibliografia'=> new Bibliografia]);
}

public function editar($id){

    return view('bibliografia/editar', ['bibliografia'=>Bibliografia::find($id)]);
}

public function remover($id){

    $bibliografia = Bibliografia::find($id);
    $bibliografia -> delete();

    return redirect('bibliografia/listar');
}

public function salvar(BibliografiaRequest $request){

    $bibliografia = new Bibliografia();
    if ($request->id){
    $bibliografia=Bibliografia::find($request->id);
    }
    $bibliografia->bibliografia_titulo = $request->bibliografia_titulo;
    $bibliografia->bibliografia_autor = $request->bibliografia_autor;
    $bibliografia->bibliografia_isbn = $request->bibliografia_isbn;
    $bibliografia->bibliografia_editora = $request->bibliografia_editora;
    $bibliografia->save();

    return redirect ('bibliografia/listar');
}


}
