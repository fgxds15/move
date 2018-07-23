<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard 4MOVE </title>
    <!-- Bootstrap -->
    <link href="/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="/css/custom.min.css" rel="stylesheet">
	   @yield('stylesheet')
    <!-- jQuery -->
    <script src="/jquery/dist/jquery.min.js"></script>
    @yield('javascript')
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title">4move</span></a>
            </div>
            <div class="clearfix"></div>
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li>
          					<a href="/home" >
          						<i class="fa fa-home"></i> Home 
          					</a>
                  </li>
                  @if ( Session::get('user')['atendente'] === 1)
                  <li>
          					<a href="/admin/atendente" >
          						<i  class="fa fa-users"></i> Atendentes 
          					</a>
                  </li>@endif
                  @if ( Session::get('user')['id_filial'] === 0)
                  <li>
					<a href="/admin/categorias" >
						<i class="fa fa-newspaper-o"></i> Categorias 
					</a>
                  </li>
                  @endif
          @if ( Session::get('user')['chamado'] === 1)
          <li>
            <a href="/admin/chamado" >     
              <i class="fa fa-tasks"></i> Chamados
            </a>
          </li>
          @endif
          @if ( Session::get('user')['preferencial'] === 1)
          <li>
            <a href="/admin/fila" >     
              <i class="fa fa-male"></i> Fila
            </a>
          </li>
          @endif
          @if ( Session::get('user')['guiche'] === 1)
          <li>
            <a href="/admin/guiche" >     
              <i class="fa fa-clone"></i> Guiche
            </a>
          </li>
          @endif
           @if ( Session::get('user')['id_filial'] === 0)
          <li>
          <a href="/admin/filiais" >     
            <i class="fa fa-map-signs"></i> Filiais
          </a>
          </li>
          @endif
          @if ( Session::get('user')['id_filial'] === 0)
                  <li>
          <a href="/admin/ferramentas" >     
            <i class="fa fa-wrench"></i> Ferramentas
          </a>
          </li>
          @endif
          @if ( Session::get('user')['id_filial'] === 0)
                  <li>
          <a href="/admin/administrador" >     
            <i class="fa fa-globe"></i> Administradores
          </a>
          </li>
          @endif
          @if ( Session::get('user')['id_filial'] === 0)
                  <li>
          <a href="/admin/motivo" >     
            <i class="fa fa-flag"></i> Motivos
          </a>
          </li>
          @endif
                  <!--li>
          <a  >     
            <i class="fa fa-wrench"></i> Ferramentas
             <ul class="nav child_menu">
                      <li><a href="/arquivos" > Arquivos </a></li>
                      <li><a href="/urls/1">Pagina de captura Passageiro</a></li>
                      <li><a href="/urls/2">Pagina de captura Motorista</a></li>
                      <li><a href="/urls/3">Pagina de captura Taxista</a></li>
                      <li><a href="/urls/4">Pagina de captura Afiliado</a></li>
                    </ul>
              </a> 
                  </li-->
               
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="/logoff"><i class="fa fa-sign-out pull-right"></i> </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
         @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div >
            <center>Copyright © 4MOVE - 2017</center>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    
    <!-- Bootstrap -->
    <script src="/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="/Flot/jquery.flot.js"></script>
    <script src="/Flot/jquery.flot.pie.js"></script>
    <script src="/Flot/jquery.flot.time.js"></script>
    <script src="/Flot/jquery.flot.stack.js"></script>
    <script src="/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/moment/min/moment.min.js"></script>
    <script src="/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/js/custom.min.js"></script>
	
  </body>
</html>
