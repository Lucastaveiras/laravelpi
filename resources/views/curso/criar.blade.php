@extends('leiaute')
@section('titulo', 'Cadastro de Curso')
@section('subtitulo', 'Incluir Curso')
@section('conteudo')
<br>

 @if ($errors->any())
   <ul class="alert alert-warning">
@foreach($errors->all() as $error)
   <li>{{ $error }}</li>
@endforeach
   </ul>
@endif

<form action="/curso/salvar" class="form-horizontal" method="post">
{{ csrf_field() }}
<fieldset>

<div class="curso_tipo">
    <label for="tipo"> Tipo do Curso: </label>
          <input type="text" placeholder=""  name="curso_tipo" size="40" value=""/>
</div>
<div class="curso_nome">
    <label for="nome"> Nome Curso: </label>
         <input type="text" placeholder="Analise e Desenvolvimento de Sistemas"  name="curso_nome" size="40" value=""/>
</div>
<div class="curso_modalidade">
      <label for="curso_modalidade"> Modalidade: </label>
      <select name="curso_modalidade">
          <option value="EAD"> EAD </option>
          <option value="SemiPresencial"> Semipresencial </option>
          <option value="Presencial"> Presencial </option>
      </select>
</div>
<div class="curso_local">
    <label for="curso_local"> Local de Oferta: </label>
    <select name="curso_local"/>
        <option value="Asa Sul"> Asa Sul </option>
        <option value="Asa_Norte"> Asa Norte </option>
    </select>
</div>
<div class="curso_habilitacao">
    <label for="curso_habilitacao"> Habilitação do Curso: </label>
    <input type="text" name="curso_habilitacao" size"40" value""/>
</div>
<div class="curso_turno">
    <label for="curso_turno"> Turno de Funcionamento </label>
    <select name="curso_turno">
        <option value="Matutino"> Matutino </option>
        <option value="Diurno"> Diurno </option>
        <option value="Noturno"> Noturno </option>
    </select>
</div>
<div class="curso_vaga">
    <label for="curso_vaga"> Quantidade de Vagas: </label>
    <input type="number" placeholder="100" name="curso_vaga" size="25" value=""/>
</div>
<div class="curso_cargahoraria">
    <label for="curso_cargahoraria"> Carga Horaria: </label>
    <input type="number" placeholder="200" name="curso_cargahoraria" size="25" value=""/>
</div>
</fieldset>
<fieldset>
<br>
<h4> Estrutura Curricular</h4>
<br>
<div>
    <label for="curso_regime"> Regime Letivo: </label>
    <select name="curso_regime">
        <option value="Semestral"> Semestral </option>
    </select>
</div>
<div>
    <label for="curso_periodo"> Periodos: </label>
    <input type="text" placeholder="100" required="required" name="curso_periodo" size="25" value=""/>
</div>
</fieldset>
<br>
<fieldset>
<h4> Coordenador do Curso </h4>
<br>
    <label for="professor_id"> Nome: </label>
    <select name="professor_id">
       <option value="">-- Selecione o coordenador --</option>
       @foreach($professors as $professor)
      <option value="{{$professor->id}}">{{$professor->nome}}</option>
      @endforeach"
    </select>
<a href="/professor/criar"> Adicionar Coordenador</a>
</fieldset>
<br>
<div class="">
    <label class="control-label"></label>
    <div class="">
         <button class="btn btn-default" type="submit" class="btn">Salvar</button>
         <button class="btn btn-default" type="reset" class="btn">Limpar</button>
         <a class="btn btn-default" href="/curso/listar">Desistir</a>
    </div>
</div>
</form>
@endsection
