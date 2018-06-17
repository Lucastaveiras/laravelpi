@extends('leiaute')
@section('titulo', 'Plano de ensino - Criar')
@section('subtitulo', 'Plano de ensino - Criar')
@section('conteudo')
<form action="/plano/salvar" class="form-horizontal" method="post" id="form-ata">
  
  <h3>Curso: </h3>
  <select>
    <option value=""></option>
    @foreach ($cursos as $curso)
    <option value="{{$curso->curso_nome}}">{{$curso->curso_nome}}</option>
    @endforeach
  </select>
  
  <h3>Disciplina: </h3>
  
  <select>
      <option value="Programacao1">Programação1</option>
      <option value="Matematica">Matemática</option>
      <option value="Portugues">Português</option>
  </select>
  Carga horaria: <input type="text" value="90">
  Período: <input type="text" value="semestre 1 - Noturno">
  <h3>Ementa</h3>
  <textarea form="form-ata" rows="4" cols="50" >Descrever a ementa do curso...</textarea><br>
  <h3>Competências e habilidades</h3>
  <textarea form="form-ata" rows="4" cols="50" >Descrever as competencias e habilidades a serem adiquiridas com o curso...</textarea><br>
  <h3>Metodologia de ensino</h3>
  <textarea form="form-ata" rows="4" cols="50" >Descrever tecnicas e recursos da metodologia...</textarea><br>
  <h3>Cronograma de atividades</h3>
    <select>
      <option value="Cronograma1">Cronograma1</option>
      <option value="Cronograma2">Cronograma2</option>
      <option value="Cronograma3">Cronograma3</option>
    </select>
  <h3>Avaliação</h3>
  <textarea form="form-ata" rows="4" cols="50" >Criterios de avaliação...</textarea><br>
  
  <h3>Bibliografia</h3>
  <!--<input class="" type="text" placeholder="Pesquise bibliografia">
  <button class="btn btn-outline-success" type="submit">Pesquisar</button>-->
  <table class="table table-bordered">
    
    <tr>
      <th>Título</th>
      <th>ISBN</th>
    </tr>
    @foreach ($bibliografias as $bibliografia)
    <tr>
      <td>{{$bibliografia->bibliografia_titulo}}</td>
      <td>{{$bibliografia->bibliografia_isbn}}</td>
    </tr>
    @endforeach
  </table>
  
  <h3>Data de inicio do semestre</h3>
  <input type="date" value="{{$data = "01/02/2017"}}"><br>
  
  <button type="submit" class="btn">Salvar</button>
</form>

@endsection
