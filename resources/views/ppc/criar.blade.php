@extends('leiaute')
@section('titulo', 'Cadastro de PPC')
@section('subtitulo', 'Incluir PPC')
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
<fieldset>

<div class="tabela_ppc">
  <table style="width:100%">
    <tr>
      <th>
        <div class="curso_id">
            <label for="curso_id">Curso: </label>
            <select name="curso_id">
                <option value="">-- Selecione o curso --</option>
                @foreach($cursos as $curso )
                <option value="{{$curso->id}}">{{$curso->curso_nome}}</option>
              @endforeach

            </select>
        </div>
      </th>
    </tr>
      <th>
        <div class="ppc_perfilcurso">
              <label for="ppc_perfilcurso"> Perfil Curso: </label>
              <br>
              <textarea rows="4" cols="50"  name="ppc_perfilcurso" value="">
              </textarea>
        </div>
      </th>
      <th>
        <div class="ppc_perfilegresso">
              <label for="ppc_perfilegresso"> Perfil Egresso: </label>
              <br>
              <textarea rows="4" cols="50"name="ppc_perfilegresso" value="">
              </textarea>
        </div>
      </th>
    </tr>
    <tr>
    <th>

      <div class="ppc_formaacesso">
            <label for="ppc_formaacesso"> Forma de acesso ao Curso: </label>
            <br>
            <textarea rows="4" cols="50" name="ppc_formaacesso" value="">
            </textarea>
      </div>
    </th>

    <th>
      <div class="ppc_representacaografica">
            <label for="ppc_representacaografica"> Representação Gráfica de Um Perfil de Formação: </label>
            <br>
            <textarea rows="4" cols="50" name="ppc_representacaografica" value="">
            </textarea>
      </div>
    </th>
  </tr>

  <tr>
    <th>
      <div class="ppc_avaliacaoaprendizagem">
            <label for="ppc_avaliacaoaprendizagem"> Sistema avaliação do Processo de Aprendizagem: </label>
            <br>
            <textarea rows="4" cols="50" name="ppc_avaliacaoaprendizagem" value="">
            </textarea>
      </div>
    </th>
    <th>
      <div class="ppc_avaliacaocurso">
            <label for="ppc_avaliacaocurso"> Sistema avaliação do Projeto do Curso: </label>
            <br>
            <textarea rows="4" cols="50" name="ppc_avaliacaocurso" value="">
            </textarea>
      </div>
     </th>
   </tr>

   <tr>
     <th>
       <div class="ppc_tcc">
           <label for="ppc_tcc"> Trabalho de Conclusão de Curso: </label>
           <select name="ppc_tcc">
               <option value="">---</option>
               <option value="sim"> Sim </option>
               <option value="nao"> Não </option>
           </select>
       </div>
     </th>
     <th>
       <div class="ppc_estagio">
           <label for="ppc_estagio"> Estágio Curricular: </label>
           <select name="ppc_estagio">
             <option value="">---</option>
               <option value="sim"> Sim </option>
               <option value="nao"> Não </option>
           </select>
       </div>

     </th>
   </tr>
</table>
</div>
<br>
<div class="ppc_politicapcd">
      <label for="politica-deficientes"> Política de Atendimento a Pessoas com Deficiencia e/ou Mobilidade Reduzida: </label>
      <br>
      <textarea rows="4" cols="110" name="ppc_politicapcd" value="">
      </textarea>
</div>
</div>
</fieldset>

<br>
<div class="">
    <label class="control-label"></label>
    <div class="">
         <button type="submit" class="btn">Salvar</button>
         <button type="reset" class="btn">Limpar</button>
         <a href="/ppc/listar">Desistir</a>
    </div>

</form>
@endsection
