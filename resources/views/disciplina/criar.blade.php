@extends('leiaute')
@section('titulo', 'Cadastro de Disciplina')
@section('subtitulo', 'Incluir Disciplina')
@section('conteudo')
<br></br>
@if ($errors->any())
  <ul class="alert alert-warning">
@foreach($errors->all() as $error)
  <li>{{ $error }}</li>
@endforeach
  </ul>
@endif
<form action="/disciplina/salvar" class="form-horizontal" method="post">
{{ csrf_field() }}
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title text-center">Criar Disciplina</h3>
  </div>
  <div class="panel-body">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Codigo da Disciplina</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="disciplina_codigo" placeholder="ADS0000" value="" required="true"/>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nome da Disciplina</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="disciplina_nome" placeholder="Engenharia de SOftware" value="" required="true"/>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Carga Horaria</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="disciplina_carga" placeholder="60" value="" required="true"/>
        </div>
    </div>
  </div>
</div>
    <div>
        <label class="control-label"></label>
        <div class="">
            <button type="submit" class="btn btn-default">Salvar</button>
            <a class"btn btn-default" href="/disciplina/listar">Desistir</a>
        </div>
    </div>
</form>
@endsection
