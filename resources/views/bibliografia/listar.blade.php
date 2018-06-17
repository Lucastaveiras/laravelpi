@extends('leiaute')
@section('titulo', 'Bibliografia')
@section('subtitulo', 'Acervo Bibliográfico')
@section('conteudo')

<a class="btn btn-default" href="/bibliografia/criar">Incluir</a>
    <br></br>
    <table class="table table-bordered">
        <tr>
            <th>Titulo</th>
            <th>Autor</th>
            <th>ISBN</th>
            <th>Editora</th>
            <th>Ações</th>
        </tr>

    <?php foreach ($bibliografias as $bibliografia) : ?>
            <tr>
                <td><?php echo $bibliografia->bibliografia_titulo; ?></td>
                <td><?php echo $bibliografia->bibliografia_autor; ?></td>
                <td><?php echo $bibliografia->bibliografia_isbn; ?></td>
                <td><?php echo $bibliografia->bibliografia_editora; ?></td>
                <td><a class="btn btn-default" href="/bibliografia/editar/<?php echo $bibliografia->id; ?>">Editar</a>
                    <a class="btn btn-default" href="/bibliografia/remover/<?php echo $bibliografia->id; ?>" onclick="return confirm('Deseja remover o livro <?php echo $bibliografia->bibliografia_titulo; ?> ?');">Remover</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    @endsection
