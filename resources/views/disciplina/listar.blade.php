@extends('leiaute')
@section('titulo', 'Disciplinas')
@section('subtitulo', 'Disciplinas')
@section('conteudo')

<a class="btn btn-default" href="/disciplina/criar">Incluir</a>
    <br></br>
    <table class="table table-bordered">
        <tr>
            <th>Codigo</th>
            <th>Nome</th>
            <th>Carga Horaria</th>
            <th>Ações</th>
        </tr>

    <?php foreach ($disciplinas as $disciplina) : ?>
            <tr>
                <td><?php echo $disciplina->disciplina_codigo; ?></td>
                <td><?php echo $disciplina->disciplina_nome; ?></td>
                <td><?php echo $disciplina->disciplina_carga; ?></td>
                <td><a class="btn btn-default" href="/disciplina/editar/<?php echo $disciplina->id; ?>">Editar</a>
                    <a class="btn btn-default" href="/disciplina/remover/<?php echo $disciplina->id; ?>" onclick="return confirm('Deseja remover a disciplina <?php echo $disciplina->disciplina_nome; ?> ?');">Remover</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    @endsection
