<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Lista de Grades Curriculares</title>
<link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
@include('menu')
</head>
<body>
<h1>Grade Curricular</h1>
<legend>Tecnologo em Analise e desenvolvimento de Sistemas</legend>

<p>
    <a href="/grade_curricular/criar">Incluir</a>
</p>
<table class="table">
    <tr>
        <th>Disciplinas</th>
        <th>Semestre</th>
        <th>Creditos</th>
        <th>Pre Requisitos</th>
    </tr>
    <tr>
        <td>Fundamesntos de Lógica
		</br>
			Logica de programacao orientada a objetos
		</br>
			Redes de computadores Incluir
		</br>
			Arquitetura de Computadores
		</br>
			Tópicos de Matemática
		</br>
			Segurança da Informação
		</br>
			Linguagem de Programacao
		</br>
			Prohet. integrador-Especif. de Sistemas
		</br>
			Engenharia de Software
		</br>
			Banco de Dados I
		</br>
			Analise e projeto de sistemas
		</br>
			Linguagem de Programacao
		</br>
			Analise de Projeto de Sistemas
		</br>
			garantia e qualidade de Software
		</br>
			Projeto de Interface
		</br>
			Linguagem de programacao para web I
		</br>
			Projet. Integrador-desenv. de aplicacao I
		</br>
			Inglês Instrumental
		</br>
			Auditoria e seguran. no desenvolv. de aplicacoes
		</br>
		    Linguagem de programacao para web II
		</br>
			Programação Orientada a objetos II
		</br>
			Projeto Integrador-desenvol. de aplicacoes II
		</br>
			Programacao para dispositivos moveis
		</br>
			Empreendedorismo e gestao de carreira
		</br>
			Gerenciamento de projetos
		</br>
			Governanca de TI e mapeamento de processos
		</br>
			Projeto integrador-plano de negocio
		</br>
			Opatativa I
		</br>
			Optativa II
		</td>
        <td>1
		</br>
		</br>
		1
		</br>
		</br>
		1
		</br>
		</br>
		</br>
		1
		</br>
		</br>
		1
		</br>
		</br>
		1
		</br>
		</br>
		2
		</br>
		</br>
		2
		</br>
		</br>
		2
		</br>
		</br>
		2
		</br>
		</br>
		2
		</br>
		</br>
		3
		</br>
		</br>
		3
		</br>
		</br>
		3
		</br>
		</br>
		3
		</br>
		</br>
		3
		</br>
		</br>
		3
		</br>
		</br>
		4
		</br>
		</br>
		4
		</br>
		</br>
		4
		</br>
		</br>
		4
		</br>
		</br>
		5
		</br>
		</br>
		5
		</br>
		</br>
		5
		</br>
		</br>

		</td>
        <td>
		60
		</br>
		</br>
		90
		</br>
		</br>
		60
		</br>
		</br>
		60
		</br>
		</br>
		60
		</br>
		</br>
		60
		</br>
		</br>
		60
		</br>
		</br>
		90
		</br>
		</br>
		60
		</br>
		</br>
		60
		</br>
		</br>
		60
		</br>
		</br>
		90
		</br>
		</br>
		60
		</br>
		</br>
		60</br>
		</br>
		90</br>
		</br>
		60
		</br>
		</br>
		60
		</br>
		</br>
		60
		</br>
		</br>
		120
		</br>
		</br>
		90
		</br>
		</br>
		60
		</br>
		</br>
		60
		</br>
		</br>
		60
		</br>
		</br>
		90
		</br>
		</br>
		90
		</br>



		</td>
        <td></td>
        <td>
            <a href="/grade_curricular/editar">Editar</a>
            <a href="/grade_curricular/remover" onclick="return confirm('Deseja remover Grade Curricular ?');">Remover</a>
        </td>
    </tr>
</table>
</body>
</html>
