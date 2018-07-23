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
    <link href="/iCheck/skins/flat/green.css rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="/css/custom.min.css" rel="stylesheet">
	@yield('stylesheet')
    @yield('javascript')
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title">4MOVE</span></a>
            </div>
            <div class="clearfix"></div>
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li>
					<a href="#" >
						<i class="fa fa-home"></i> Home 
					</a>
                  </li>
                  <li>
					<a>
						<i class="fa fa-edit"></i> Contatos 
					</a>
                  </li>
                  <li>
					<a>
						<i class="fa fa-desktop"></i> Vídeos 
					</a>
                  </li>
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

    <!-- jQuery -->
    <script src="/jquery/dist/jquery.min.js"></script>
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
