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
    <!-- Font Awesome 
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress 
    <link href="/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck 
    <link href="/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar 
    <link href="/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap     <link href="/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker     
    <link href="/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    Custom Theme Style     
	   @yield('stylesheet')
    <!-- jQuery -->
    <link href="/css/custom.min.css" rel="stylesheet">
    <script src="/jquery/dist/jquery.min.js"></script>
    @yield('javascript')
    <style type="text/css">
    .welcome {
            width: 600px;
            position: absolute;
            left: 40%;
            top: 50%;
            margin-left: -150px;
            margin-top: -150px;
            background: #fff;
            padding: 0px;
            padding-top: 15px;
            border-radius: 25px;

        }
    .padrao {
        width:100%; 
        height:50px; 
        font-size:30px; 
        background:none; 
        border:none ;
        border-bottom: 5px solid ;
        padding: 0px;
    }
     @font-face {
             font-family: BebasNeue-Regular;
             src: url('font/BebasNeue Regular.ttf');
        }
        body {
              font: BebasNeue-Regular, Arial, Tahoma, Sans-serif;
        }
</style>
  </head>
  <body class="nav-md" style="background:url('/images/background.jpg');  background-repeat: no-repeat;
    background-size:110%; overflow:hidden; font: BebasNeue-Regular, Arial, Tahoma, Sans-serif;" class="container body" >
    <div  >
      <div class="">
        <!-- page content -->
        <div class="right_col" role="main" style="margin-left: 0px;">
         @yield('content')
        </div>
        <!-- /page content -->
      </div>
    </div>

    
    <!-- Bootstrap 
    <script src="/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick     <script src="/fastclick/lib/fastclick.js"></script>
    <!-- NProgress 
    <script src="/nprogress/nprogress.js"></script>
    <!-- Chart.js     <script src="/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js 
    <script src="/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar 
    <script src="/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck 
    <script src="/iCheck/icheck.min.js"></script>
    <!-- Skycons 
    <script src="/skycons/skycons.js"></script>
    <!-- Flot     <script src="/Flot/jquery.flot.js"></script>
    <script src="/Flot/jquery.flot.pie.js"></script>
    <script src="/Flot/jquery.flot.time.js"></script>
    <script src="/Flot/jquery.flot.stack.js"></script>
    <script src="/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins 
    <script src="/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS 
    <script src="/DateJS/build/date.js"></script>
    <!-- JQVMap 
    <script src="/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker 
    <script src="/moment/min/moment.min.js"></script>
    <script src="/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts 
    <script src="/js/custom.min.js"></script-->
    <!-- Bootstrap -->
    <script src="/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- PNotify -->
    <script src="/pnotify/dist/pnotify.js"></script>
    <script src="/pnotify/dist/pnotify.buttons.js"></script>
    <script src="/pnotify/dist/pnotify.nonblock.js"></script>
  </body>
</html>
