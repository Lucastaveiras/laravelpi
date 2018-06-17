<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

Route::group(['prefix' => 'curso'], function(){
    Route::get('listar', "CursoController@listar");
    Route::get('criar', "CursoController@criar");
    Route::get('editar/{id}', "CursoController@editar" );
    Route::get('remover/{id}', "CursoController@remover");
    Route::post('salvar', "CursoController@salvar");
});

Route::group(['prefix' => 'professor'], function(){
  Route::get('listar', 'ProfessorController@listar');
  Route::get('criar', 'ProfessorController@criar');
  Route::get('remover/{id}', 'ProfessorController@remover');
  Route::get('editar/{id}', 'ProfessorController@editar');
  Route::post('salvar', 'ProfessorController@salvar');
});

Route::group(['prefix' => 'bibliografia'], function(){
  Route::get('listar', 'BibliografiaController@listar');
  Route::get('criar', 'BibliografiaController@criar');
  Route::get('editar/{id}', 'BibliografiaController@editar');
  Route::get('remover/{id}', 'BibliografiaController@remover');
  Route::post('salvar', 'BibliografiaController@salvar');
});

Route::get('/menu', function() {
    return view('menu');
});

Route::group(['prefix' => 'atas'], function(){
    Route::get('listar', "AtasController@listar");
    Route::post('listar', "AtasController@listar");
    Route::get('criar', "AtasController@criar");
    Route::get('remover/{id}', "AtasController@remover");
    Route::get('editar/{id}', "AtasController@editar" );
    Route::post('salvar', "AtasController@salvar");

});

Route::group(['prefix' => 'ppc'], function(){
  Route::get('listar', 'PPCController@listar');
  Route::get('criar', 'PPCController@criar');
  Route::get('remover/{id}', 'PPCController@remover');
  Route::get('editar/{id}', 'PPCController@editar');
  Route::post('salvar', 'PPCController@salvar');
});

Route::group(['prefix' => 'grade_curricular'], function(){
  Route::get('listar', 'GradeCurricularController@listar');
  Route::get('criar', 'GradeCurricularController@criar');
  Route::get('remover/{id}', 'GradeCurricularController@remover');
  Route::get('editar/{id}', 'GradeCurricularController@editar');
  Route::post('salvar', 'GradeCurricularController@salvar');
});

Route::group(['prefix' => 'plano'], function(){
    Route::get('listar', "PlanoEnsinoController@listar");
    Route::get('criar', "PlanoEnsinoController@criar");
    Route::get('remover/{planoEnsino}', "PlanoEnsinoController@remover");
    Route::get('editar/{planoEnsino}', "PlanoEnsinoController@editar" );
    Route::post('salvar', "PlanoEnsinoController@salvar");

});

Route::group(['prefix' => 'disciplina'], function(){
    Route::get('listar', "DisciplinaController@listar");
    Route::get('criar', "DisciplinaController@criar");
    Route::get('remover/{id}', "DisciplinaController@removerr");
    Route::get('editar/{id}', "DisciplinaController@editar");
    Route::post('salvar', "DisciplinaController@salvar");

});

Auth::routes();
Route::get('/home', 'HomeController@index');
