@extends('leiaute')
@section('titulo', 'Lista de Cursos')
@section('subtitulo', 'Lista de Cursos')
@section('conteudo')

<p>
    <a class="btn btn-default" href="/curso/criar">Incluir</a>
</p>
<table class="table table-bordered">
    <tr>
        <th>Nome Curso</th>
        <th>Modalidade</th>
        <th>Coordenador</th>
        <th>Ações</th>
    </tr>

<?php foreach ($cursos as $curso) : ?>
        <tr>
            <td><?php echo $curso->curso_nome; ?></td>
            <td><?php echo $curso->curso_modalidade; ?></td>
            <td><?php echo $curso->professor->nome; ?></td>
            <td><a class="btn btn-default" href="/curso/editar/<?php echo $curso->id; ?>">Editar</a>
                <a class="btn btn-default" href="/curso/remover/<?php echo $curso->id; ?>" onclick="return confirm('Deseja remover o curso <?php echo $curso->curso_nome; ?>?');">Remover</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
@endsection
