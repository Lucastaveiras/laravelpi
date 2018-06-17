
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <style type="text/css" class="ng-binding ng-scope">
  #cssmenu,
  #cssmenu ul,
  #cssmenu ul li,
  #cssmenu ul li a {
  margin: 0;
  padding: 0;
  border: 0;
  list-style: none;
  line-height: 1;
  display: block;
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
#cssmenu {
  border-bottom: 3px solid #333333;
  padding: 0 5px;
  width: auto;
  font-family: Helvetica, Arial, sans-serif;
  background: #dddddd;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
#cssmenu:after,
#cssmenu ul:after {
  content: ".";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}
#cssmenu ul li {
  display: inline-block;
}
#cssmenu.align-right ul li {
  float: right;
}
#cssmenu.align-center ul {
  text-align: center;
}
#cssmenu ul li a {
  font-size: 14px;
  padding: 15px;
  text-decoration: none;
  color: #0e83cd;
}
#cssmenu ul li:hover a,
#cssmenu ul li a:hover,
#cssmenu ul li.active a {
  color: #333333;
}
@media all and (max-width: 640px) {
  #cssmenu {
    padding: 0;
    border-radius: 0;
    border: 0;
  }
  #cssmenu ul li,
  #cssmenu.align-center,
  #cssmenu.align-right {
    display: block;
  }
}
</style>
    <img src="http://www.iesb.br/Cms_Data/Sites/Portal/Themes/portal/img/logo.png">
<div class="menu">
      <div id="cssmenu" class="align-center">
  <ul>
     <li><a href="" ><i class="fa fa-fw fa-home"></i> Inicio</a></li>
     <li><a href="/professor/listar" >Professor</a></li>
     <li><a href="/curso/listar" >Curso</a></li>
     <li><a href="/ppc/listar">PPC</a></li>
     <li><a href="/disciplina/listar">Disciplina</a></li>
     <li><a href="/grade_curricular/listar">Grade Curricular</a></li>
     <li><a href="/plano/listar">Plano de Ensino</a></li>
     <li><a href="/atas/listar" >Atas</a></li>
     <li><a href="/bibliografia/listar" >Bibliografia</a></li>
     <li><a href="#"><i class="fa fa-fw fa-lock"></i> Permissões</a></li>
     <li><a href="#"><i class="fa fa-fw fa-question"></i> Ajuda</a></li>
     <li><a href="#"><i class="fa fa-fw fa-phone"></i> Contato</a></li>
     <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-fw fa-unlock"></i>Sair</color>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
  </ul>
</div>
<div>

</div>
