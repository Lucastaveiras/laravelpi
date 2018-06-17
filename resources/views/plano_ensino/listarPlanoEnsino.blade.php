@extends('leiaute')
@section('titulo', 'Plano de ensino')
@section('subtitulo', 'Plano de ensino')
@section('conteudo')

<input class="" type="text" placeholder="Pesquise">
<button class="btn btn-outline-success" type="submit">Pesquisar</button>
<div class="table-responsive">
<a href="criar" class="btn btn-default">Criar Plano de ensino</a>

<table class="table table-bordered">
  <tr>
    <th>Curso</th>
    <th>Disciplina</th>
    <th>Turno</th>
    <th>Data de inicio do semestre</th>
  </tr>
  @for ($i = 0; $i < 10; $i++)
    <tr>
      <td>
        Curso {{$i}}
      </td>
      <td>
        Disciplina {{$i}}
      </td>
      <td>
        Todos
      </td>
      <td>
        01/01/201{{$i}}
      </td>
      <td>
        <a href="remover/{{$i}}" class="btn btn-default">Remover</a>
        <br>
        <a href="editar/{{$i}}" class="btn btn-default">Editar</a>
      </td>
    </tr>
  @endfor

</table>
<br>
<button class="btn btn-outline-success" type="button">Ante.</button>
<button class="btn btn-outline-success" type="button">Prox.</button>
@endsection
