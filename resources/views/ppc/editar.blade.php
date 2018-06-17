@extends('leiaute')
@section('titulo', 'Cadastro de PPC')
@section('subtitulo', 'Alterar PPC')
@section('conteudo')
<br>

@if ($errors->any())
  <ul class="alert alert-warning">
@foreach($errors->all() as $error)
  <li>{{ $error }}</li>
@endforeach
  </ul>
@endif


<form action="/ppc/salvar" class="form-horizontal" method="post">
{{ csrf_field() }}


<input type="hidden" name="id" size="15" value="<?php echo $ppcs->id; ?>"/>
<table style="width:100%">
  <tr>
    <th>
      <div class="curso_id">
          <label for="curso_id">Curso: </label>
          <select name="curso_id">
              @foreach($cursos as $curso )
              @if ($ppcs->curso_id == $curso->id)
              <option value="{{$curso->id}}" selected>{{$curso->curso_nome}}</option>
              @else
              <option value="{{$curso->id}}">{{$curso->curso_nome}}</option>
              @endif
            @endforeach

          </select>
      </div>
    </th>
  </tr>
    <th>
      <div class="ppc_perfilcurso">
            <label for="ppc_perfilcurso"> Perfil Curso: </label>
            <br>
            <textarea rows="4" cols="50"  name="ppc_perfilcurso"><?php echo $ppcs->ppc_perfilcurso;?></textarea>
      </div>
    </th>
    <th>
      <div class="ppc_perfilegresso">
            <label for="ppc_perfilegresso"> Perfil Egresso: </label>
            <br>
            <textarea rows="4" cols="50"name="ppc_perfilegresso"><?php echo $ppcs->ppc_perfilegresso;?></textarea>
      </div>
    </th>
  </tr>
  <tr>
  <th>

    <div class="ppc_formaacesso">
          <label for="ppc_formaacesso"> Forma de acesso ao Curso: </label>
          <br>
          <textarea rows="4" cols="50" name="ppc_formaacesso"><?php echo $ppcs->ppc_formaacesso;?></textarea>
    </div>
  </th>

  <th>
    <div class="ppc_representacaografica">
          <label for="ppc_representacaografica"> Representação Gráfica de Um Perfil de Formação: </label>
          <br>
          <textarea rows="4" cols="50" name="ppc_representacaografica"><?php echo $ppcs->ppc_representacaografica; ?></textarea>
    </div>
  </th>
</tr>

<tr>
  <th>
    <div class="ppc_avaliacaoaprendizagem">
          <label for="ppc_avaliacaoaprendizagem"> Sistema avaliação do Processo de Aprendizagem: </label>
          <br>
          <textarea rows="4" cols="50" name="ppc_avaliacaoaprendizagem"><?php echo $ppcs->ppc_avaliacaoaprendizagem; ?></textarea>
    </div>
  </th>
  <th>
    <div class="ppc_avaliacaocurso">
          <label for="ppc_avaliacaocurso"> Sistema avaliação do Projeto do Curso: </label>
          <br>
          <textarea rows="4" cols="50" name="ppc_avaliacaocurso"><?php echo $ppcs->ppc_avaliacaocurso; ?></textarea>
    </div>
   </th>
 </tr>

 <tr>
   <th>
     <div class="ppc_tcc">
         <label for="ppc_tcc"> Trabalho de Conclusão de Curso: </label>
         <select name="ppc_tcc">
             <option value="">---</option>
             <option value="sim" <?php if ($ppcs->ppc_tcc == 'sim') echo "selected" ?>> Sim </option>
             <option value="nao"<?php if ($ppcs->ppc_tcc == 'nao') echo "selected" ?>> Não </option>
         </select>
     </div>
   </th>
   <th>
     <div class="ppc_estagio">
         <label for="ppc_estagio"> Estágio Curricular: </label>
         <select name="ppc_estagio">
           <option value="">---</option>
             <option value="sim" <?php if ($ppcs->ppc_estagio == 'sim') echo "selected" ?>> Sim </option>
             <option value="nao"<?php if ($ppcs->ppc_estagio == 'nao') echo "selected" ?>> Não </option>
         </select>
     </div>
   </th>
 </tr>
<br>
  <td>
   <div class="ppc_politicapcd">
      <label for="politica-deficientes"> Política de Atendimento a Pessoas com Deficiencia e/ou Mobilidade Reduzida: </label>
      <br>
      <textarea rows="4" cols="110" name="ppc_politicapcd"><?php echo $ppcs->ppc_politicapcd; ?></textarea>
   </div>
  <td>
 </table>

<br>

</div>
</fieldset>
<br>
    <div class="">
         <button type="submit"class="btn btn-default">Salvar</button>
         <a class="btn btn-default" href="/ppc/listar">Desistir</a>
    </div>
</div>
</form>
@endsection
