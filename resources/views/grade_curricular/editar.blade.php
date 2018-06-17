<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Editar Grade Curricular</title>
<meta name="description" content="editar grade curricular">
<link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
@include('menu')
</head>

<body>

<h1> </h1>
<h2>Editar Grade Curricular</h2>
<br>
<h4> Editar da Grade Curricular </h4>
<br>
<table>
  <tr>
    <td><div class="tipo">
    <label for="tipo"> Curso: </label>
          <input type="text" placeholder="" required="required" name="tipo_curso" size="40" value="<?php //echo $curso->tipo; ?>"/>
</div>
	<div class="tipo">
    <label for="tipo"> Carga Horaria Total:: </label>
          <input type="text" placeholder="" required="required" name="tipo_curso" size="40" value="<?php //echo $curso->tipo; ?>"/>
</div>
	<div class="tipo">
    <label for="tipo"> Carga horaria disciplina obrigatoria: </label>
          <input type="text" placeholder="" required="required" name="tipo_curso" size="40" value="<?php //echo $curso->tipo; ?>"/>
</div>

	<div class="tipo">
    <label for="tipo"> Carga horaria Extra Curricular:: </label>
          <input type="text" placeholder="" required="required" name="tipo_curso" size="40" value="<?php //echo $curso->tipo; ?>"/>
</div>
	<div class="tipo">
    <label for="tipo"> Carga Horaria Ativ. complementar: </label>
          <input type="text" placeholder="" required="required" name="tipo_curso" size="40" value="<?php //echo $curso->tipo; ?>"/>
</div>
	 <div class="tipo">
    <label for="tipo"> Grau:: </label>
          <input type="text" placeholder="" required="required" name="tipo_curso" size="40" value="<?php //echo $curso->tipo; ?>"/>
</div>

    <div class="tipo">
    <label for="tipo"> Habilitacao: </label>
          <input type="text" placeholder="" required="required" name="tipo_curso" size="40" value="<?php //echo $curso->tipo; ?>"/>
</div>
	<div class="tipo">
    <label for="tipo"> Semestres: </label>
          <input type="text" placeholder="" required="required" name="tipo_curso" size="40" value="<?php //echo $curso->tipo; ?>"/>
</div>
</td>
	<td><div class="tipo">
    <label for="tipo"> Código Curriculo: </label>
          <input type="text" placeholder="" required="required" name="tipo_curso" size="40" value="<?php //echo $curso->tipo; ?>"/>
</div>
	<div class="tipo">
    <label for="tipo"> Creditos total: </label>
          <input type="text" placeholder="" required="required" name="tipo_curso" size="40" value="<?php //echo $curso->tipo; ?>"/>
</div>
	<div class="tipo">
    <label for="tipo"> Creditos disciplina Obrigatoria: </label>
          <input type="text" placeholder="" required="required" name="tipo_curso" size="40" value="<?php //echo $curso->tipo; ?>"/>
</div>
	<div class="tipo">
    <label for="tipo"> Credito disciplina optativa: </label>
          <input type="text" placeholder="" required="required" name="tipo_curso" size="40" value="<?php //echo $curso->tipo; ?>"/>
</div>
	<<div class="tipo">
    <label for="tipo"> Credito extra curricular: </label>
          <input type="text" placeholder="" required="required" name="tipo_curso" size="40" value="<?php //echo $curso->tipo; ?>"/>
</div>
	<div class="tipo">
    <label for="tipo"> Credito ativ. complementar: </label>
          <input type="text" placeholder="" required="required" name="tipo_curso" size="40" value="<?php //echo $curso->tipo; ?>"/>
</div>
	<div class="tipo">
    <label for="tipo"> Data Início: </label>
          <input type="text" placeholder="" required="required" name="tipo_curso" size="40" value="<?php //echo $curso->tipo; ?>"/>
</div>
	<div class="tipo">
    <label for="tipo"> Data Termino: </label>
          <input type="text" placeholder="" required="required" name="tipo_curso" size="40" value="<?php //echo $curso->tipo; ?>"/>
</div>
</td>
  </tr>

</table>
</br>
</br>
</br>

<form class="form-horizontal">
<table>
<div class="form-group">
  <label class="col-md-4 control-label" for="checkboxes"></label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="checkboxes-0">
<tr>
	<td>
	<h1>Disciplinas</h1>
      <br>Linguagem de Programação</br>
	  <br>Engenharia de Software</br>
	  <br>Redes de Computadores</br>
	  <br>Linguagem de programação Orientada a objetos Início Início</br>
	  <br>Projeto Pedagógico de curso - Desenv. de aplicacao I</br>


  </div>
  </td>
  <td>
  <h1> Semestre</h1>
 <div class="checkbox">
    <label for="checkboxes-1">


	  <select id="selectbasic" name="selectbasic">
        <option value="1">1</option>
        <option value="2">2</option>
		<option value="3">3</option>
        <option value="4">4</option>
		<option value="5">5</option>
      </select>
    </label></br>
	<br><select id="selectbasic" name="selectbasic">
        <option value="1">1</option>
        <option value="2">2</option>
		<option value="3">3</option>
        <option value="4">4</option>
		<option value="5">5</option>
      </select>
    </label></br>
	<br><select id="selectbasic" name="selectbasic">
        <option value="1">1</option>
        <option value="2">2</option>
		<option value="3">3</option>
        <option value="4">4</option>
		<option value="5">5</option>
      </select>
    </label></br>
	<br><select id="selectbasic" name="selectbasic">
        <option value="1">1</option>
        <option value="2">2</option>
		<option value="3">3</option>
        <option value="4">4</option>
		<option value="5">5</option>
      </select>
    </label></br>
	<br><select id="selectbasic" name="selectbasic">
        <option value="1">1</option>
        <option value="2">2</option>
		<option value="3">3</option>
        <option value="4">4</option>
		<option value="5">5</option>
      </select>
    </label></br>

	</div>
  </div>
</div>
</td>
</fieldset>
</Table>
</form>
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->


<!-- Multiple Checkboxes -->
</br>
</br>
</br>
<div class="form-group">
  <label class="col-md-4 control-label" for="checkboxes"> <h1>Disciplinas Optativas</h1> </label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
      Etica
    </label>
	</div>
  <div class="checkbox">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Libras
    </label>
	</div>
  </div>
</div>

</fieldset>
</form>
</br>
</br>
</br>
<div class="">
    <label class="control-label"></label>
    <div class="">
         <button type="submit" class="btn">Salvar</button>
         <a href="/grade_curricular/listar">Cancelar</button>
    </div>
</div>
</form>
</form>
<table>

</body>
</html>
