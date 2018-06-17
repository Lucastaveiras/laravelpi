@extends('leiaute')
@section('titulo', 'Lista de Atas')
@section('subtitulo', 'Lista de Atas')
@section('conteudo')

<form action="/atas/listar" class="form-horizontal" method="post">
{{ csrf_field() }}
<input type="text" placeholder="Pesquise" name="termo">
<button type="submit" class="btn">Pesquisar</button>
</form>
<div class="table-responsive">
<a href="criar" class="btn btn-default">Criar ata de reunião</a>

<table class="table table-bordered">
  <tr>
    <th>Título</th>
    <th>Conteúdo</th>
    <th>Data da reunião</th>
    <th>Data da ultima alteração</th>
  </tr>
  @foreach ($atas as $ata)
        
    
    <tr>
      <td>
        {{ $ata->atas_titulo }}
      </td>
      <td>
        {{ $ata->atas_ataTexto }}
      </td>
      <td>
        {{ $ata->atas_data }}
      </td>
      <td>
        {{ $ata->updated_at }}
      </td>
      <td>
        <a href="remover/{{$ata->id}}" class="btn btn-default">Remover</a>
        <br>
        <a href="editar/{{$ata->id}}" class="btn btn-default">Editar</a>
      </td>
    </tr>
  @endforeach
</table>
{{ $atas->links() }}

@endsection
