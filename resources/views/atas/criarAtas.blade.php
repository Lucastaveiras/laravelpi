@extends('leiaute')
@section('titulo', 'Criar ata de reunião')
@section('subtitulo', 'Criar ata de reunião')
@section('conteudo')

@if ($errors->any())
   <ul class="alert alert-warning">
@foreach($errors->all() as $error)
   <li>{{ $error }}</li>
@endforeach
   </ul>
@endif



<form action="/atas/salvar" class="form-horizontal" method="post">
  {{ csrf_field() }}
  <h3>Titulo para a reunião: </h3>
  <input type="text" value="{{$ata->atas_Titulo}}" name="atas_Titulo"><br>
  <h3>Ata:</h3>
  <textarea rows="4" cols="50" name = "atas_AtaTexto">{{$ata->atas_AtaTexto}}</textarea><br>
  <h3>Data marcada:</h3>
  <input type="date" value="{{$ata->atas_Data}}" name = "atas_Data"><br>
  <button type="submit" class="btn">Salvar</button>
</form>

@endsection
