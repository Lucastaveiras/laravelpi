@extends('leiaute')
@section('titulo', 'Listar Porfessores')
@section('subtitulo', 'Lista de Professores')
@section('conteudo')
<input class="" type="text" placeholder="Pesquise">
            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            <div class="table-responsive">
                <a href="/professor/criar">NOVO</a>
                <br></br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>
                            <td>Nome</td>
                            <td>CPF</td>
                            <td>Maior Titulação</td>
                            <td>Área de Formação da Maior Titulação</td>
                            <td>Curriculos Lattes</td>
                            <td>Data de Atualização do Curriculo Lattes</td>
                            <td>OPÇÕES</td>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($professors as $professor)
                        <tr>
                            <td>#</td>
                            <td>{{ $professor->nome }}</td>
                            <td>{{ $professor->cpf }}</td>
                            <td>{{ $professor->maiortitulacao }}</td>
                            <td>{{ $professor->areaformacao }}</td>
                            <td>{{ $professor->curriculo }}</td>
                            <td>{{ $professor->dtupdtcurriculo }}</td>
                            <td>
                                <a href="/professor/editar/{{ $professor->id }}">Editar</a>
                                &nbsp; | &nbsp;
                                <a href="/professor/remover/{{ $professor->id }}" onclick="return confirm('Deseja remover o professor {{ $professor->nome }}?')">Excluir</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
@endsection
