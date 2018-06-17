<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Atas;
use App\Http\Requests;
use App\Http\Requests\AtasRequest;

class AtasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function listar(Request $request)
    {
         
         
         if ($request->termo){
            $atas = DB::table('atas')
                    ->where('atas_titulo','like', '%'.$request->termo.'%')
                    ->orWhere('atas_ataTexto','like', '%'.$request->termo.'%')
                    ->paginate(5);
         }
         else
         {
             $atas = Atas::paginate(5);
             
         }
         return view('atas/listarAtas', ['atas' => $atas]);
    
    }
    
    public function editar($id)
    {
        $ata = Atas::find($id);
        return view('atas/editarAtas', ['ata' => $ata]);
    }
    
    public function criar()
    {
        return view('atas/criarAtas', ['ata'=> new Atas]);
    }
    public function remover($id){
    
        $ata = Atas::find($id);
        $ata -> delete();
        return redirect ('atas/listar');
    }
    public function salvar(AtasRequest $request){
        $ata = new Atas();
        if ($request->id){
            $ata=Atas::find($request->id);
        }
        $ata->atas_Titulo = $request->atas_Titulo;
        $ata->atas_AtaTexto = $request->atas_AtaTexto;
        $ata->atas_Data = $request->atas_Data;
        
        $ata->save();
    
        return redirect('atas/listar');
    }
}
