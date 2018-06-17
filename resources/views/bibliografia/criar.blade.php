@extends('leiaute')
@section('titulo', 'Cadastro de Livro')
@section('subtitulo', 'Incluir Livro')
@section('conteudo')
<br></br>
@if ($errors->any())
  <ul class="alert alert-warning">
@foreach($errors->all() as $error)
  <li>{{ $error }}</li>
@endforeach
  </ul>
@endif
<form action="/bibliografia/salvar" class="form-horizontal" method="post">
{{ csrf_field() }}
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title text-center">Referência Bibliográfica</h3>
  </div>
  <div class="panel-body">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Título</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="bibliografia_titulo" placeholder="Título" value="" required="true"/>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Autor</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="bibliografia_autor" placeholder="Autor" value="" required="true"/>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">ISBN</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="bibliografia_isbn" placeholder="ISBN" value="" required="true"/>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Editora</label>
        <div class="col-sm-5">
        <select class="form-control" name="bibliografia_editora">
            <option value="Person"> Person </option>
        </select>
      </div>
    </div>
  </div>
</div>

    <div>
        <label class="control-label"></label>
        <div class="">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="/bibliografia/listar">Desistir</a>
        </div>
    </div>
</form>
@endsection
