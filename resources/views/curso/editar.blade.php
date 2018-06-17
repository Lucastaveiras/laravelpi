@extends('leiaute')
@section('titulo', 'Editar Curso')
@section('subtitulo', 'Editar Curso')
@section('conteudo')

@if ($errors->any())
  <ul class="alert alert-warning">
@foreach($errors->all() as $error)
  <li>{{ $error }}</li>
@endforeach
  </ul>
@endif

<form action="/curso/salvar" class="form-horizontal" method="post">
  {{ csrf_field() }}
<input type="hidden" name="id" size="15" value="<?php echo $curso->id; ?>"/>

<div class="curso_tipo">
    <label for="tipo"> Tipo do Curso: </label>
          <input type="text" name="curso_tipo" size="40" value="<?php echo $curso->curso_tipo; ?>"/>
</div>
<div class="curso_nome">
    <label for="curso_nome"> Nome Curso: </label>
         <input type="text" name="curso_nome" size="40" value="<?php echo $curso->curso_nome; ?>"/>
</div>
<div class="curso_modalidade">
      <label for="curso_modalidade"> Modalidade: </label>
      <select name="curso_modalidade">
          <option value="EAD" @if($curso->curso_modalidade == "EAD") {{"selected"}} @endif> EAD </option>
          <option value="SemiPresencial"@if($curso->curso_modalidade == "SemiPresencial") {{"selected"}} @endif> SemiPresencial </option>
          <option value="Presencial" @if($curso->curso_modalidade == "Presencial") {{"selected"}} @endif> Presencial </option>
      </select>
</div>
<div class="curso_local">
    <label for="curso_local"> Local de Oferta: </label>
    <select name="curso_local"/>
        <option value="Asa Sul" @if($curso->curso_local == "Asa Sul") {{"selected"}} @endif> Asa Sul </option>
        <option value="Asa Norte" @if($curso->curso_local == "Asa Norte") {{"selected"}} @endif> Asa Norte </option>
    </select>
</div>
<div class="curso_habilitacao">
    <label for="curso_habilitacao"> Habilitação do Curso: </label>
    <input type="text" name="curso_habilitacao" size"40" value"<?php echo $curso->curso_habilitacao; ?>"/>
</div>
<div class="curso_turno">
    <label for="curso_turno"> Turno de Funcionamento </label>
    <select name="curso_turno">
        <option value="Matutino" @if($curso->curso_turno == "Matutino") {{"selected"}} @endif> Matutino </option>
        <option value="Diurno" @if($curso->curso_turno == "Diurno") {{"selected"}} @endif> Diurno </option>
        <option value="Noturno" @if($curso->curso_turno == "Noturno") {{"selected"}} @endif> Noturno </option>
    </select>
</div>
<div class="curso_vaga">
    <label for="curso_vaga"> Quantidade de Vagas: </label>
    <input type="number" placeholder="100" name="curso_vaga" size="25" value="<?php echo $curso->curso_vaga; ?>"/>
</div>
<div class="curso_cargahoraria">
    <label for="curso_cargahoraria"> Carga Horaria: </label>
    <input type="number" placeholder="200" name="curso_cargahoraria" size="25" value="<?php echo $curso->curso_cargahoraria; ?>"/>
</div>
</fieldset>
<fieldset>
<br>
<h4> Estrutura Curricular</h4>
<br>
<div>
    <label for="curso_regime"> Regime Letivo: </label>
    <select name="curso_regime">
        <option value="Semestral" @if($curso->curso_regime == "Semestral") {{"selected"}} @endif> Semestral </option>
        <option value="Bimestral" @if($curso->curso_regime == "Bimestral") {{"selected"}} @endif> Bimestral </option>
    </select>
</div>
<div>
    <label for="curso_periodo"> Periodos: </label>
    <input type="text" placeholder="100" name="curso_periodo" size="25" value="<?php echo $curso->curso_periodo; ?>"/>
</div>
</fieldset>
<br>
<fieldset>
<h4> Coordenador do Curso </h4>
<br>
    <label for="professor_id"> Nome: </label>
    <select name="professor_id">
      @foreach($professors as $professor )
                @if ($curso->professor_id == $professor->id)
                <option value="{{$professor->id}}" selected>{{$professor->nome}}</option>
                @else
                <option value="{{$professor->id}}">{{$professor->nome}}</option>
                @endif
              @endforeach
    </select>
    <a class="btn btn-default" href="/coordenador/criar"> Adicionar Coordenador</a>
</fieldset>
<br>
    <div class="">
         <button class="btn btn-default" type="submit" class="btn">Salvar</button>
         <a class="btn btn-default" href="/curso/listar">Desistir</a>
    </div>
</div>
</form>
@endsection
