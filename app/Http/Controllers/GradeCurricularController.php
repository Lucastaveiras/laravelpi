<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradeCurricularController extends Controller
{

      public function listar()
      {
        return view('grade_curricular/listar');

      }

      public function criar()
      {
        return view('grade_curricular/criar');
      }

      public function salvar()
      {
        return redirect ('grade_curricular/listar');
      }

      public function editar()
      {
        return view('grade_curricular/editar');
      }

      public function remover()
      {
        return redirect('grade_curricular/listar');
      }
}
