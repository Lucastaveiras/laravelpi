@extends('leiaute')
@section('titulo', 'Cadastro de Professor')
@section('subtitulo', 'Incluir Professor')
@section('conteudo')

@if($errors->any())
<ul class="alert alert-warning">
  @foreach ($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
</ul>
@endif

<br></br>
<form action="/professor/salvar" class="form-horizontal" method="post">
{{csrf_field()}}

    <input type="hidden" name="id" size="15" value=""/>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nome Completo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="nome" placeholder="Nome Completo" value="" required="true"/>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">CPF</label>
        <div class="col-sm-10">
            <input type="text" name="cpf" placeholder="CPF" class="form-control" value="" required="true"/>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Maior Titulação</label>
        <div class="col-sm-10">
            <input type="text" name="maiortitulacao" placeholder="Maior Titulação" class="form-control" value="" required="true"/>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Área de Formação</label>
        <div class="col-sm-10">
            <input type="text" name="areaformacao" placeholder="Área de Formação" class="form-control" value="" required="true"/>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Currículo Lattes (link) </label>
        <div class="col-sm-10">
            <input type="text" name="curriculo" placeholder="Link do Currículo" class="form-control" value="" required="true"/>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Data da Atualização do Currículo </label>
        <div class="col-sm-10">
            <input type="date" name="dtupdtcurriculo" placeholder="mm/dd/aaaa" class="form-control" value="" required="true"/>
        </div>
    </div>

    <div>
        <label class="control-label"></label>
        <div class="">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="/professor/listar">Desistir</a>
        </div>
    </div>
</form>
@endsection
