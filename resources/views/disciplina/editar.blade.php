@extends('leiaute')
@section('titulo', 'Cadastro de Disciplina')
@section('subtitulo', 'Editar Disciplina')
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
<input type="hidden" name="id" size="15" value="<?php echo $disciplina->id; ?>"/>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title text-center">Editar Disciplina</h3>
  </div>
  <div class="panel-body">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Codigo da Disciplina</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="disciplina_codigo" placeholder="ADS0000" value="<?php echo $disciplina->disciplina_codigo; ?>" required="true"/>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nome da Disciplina</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="disciplina_nome" placeholder="Engenharia de SOftware" value="<?php echo $disciplina->disciplina_nome; ?>" required="true"/>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Carga Horaria</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="disciplina_carga" placeholder="60" value="<?php echo $disciplina->disciplina_carga; ?>" required="true"/>
        </div>
    </div>
  </div>
</div>
    <div>
        <label class="control-label"></label>
        <div class="">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a class"btn btn-primary" href="/disciplina/listar">Desistir</a>
        </div>
    </div>
</form>
@endsection
