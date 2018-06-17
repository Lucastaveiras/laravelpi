@extends('leiaute')
@section('titulo', 'Projeto Pedagogico de Curso')
@section('subtitulo', 'Lista de Projeto Pedagogico de Curso')
@section('conteudo')
<p>
    <a class="btn btn-default" href="/ppc/criar">Incluir</a>
</p>
<table class="table table-bordered">
    <tr>
        <th>Nome Curso</th>
        <th>Data de Atualização</th>
        <th>Ações </th>


    </tr>

<?php foreach ($ppcs as $ppc) : ?>
        <tr>
            <td><?php echo $ppc->curso->curso_nome; ?></td>
            <td><?php echo $ppc->updated_at; ?></td>
            <td><a class="btn btn-default" href="/ppc/editar/<?php echo $ppc->id; ?>">Editar</a>
                <a class="btn btn-default" href="/ppc/remover/<?php echo $ppc->id; ?>" onclick="return confirm('Deseja remover o PPC do curso <?php echo $ppc->curso->curso_nome; ?>?');">Remover</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>


</table>
@endsection
