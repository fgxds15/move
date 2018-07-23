<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>4Move</title>

    <!-- Bootstrap -->
    <link href="/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
  
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="/lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/lib/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="/lib/device-mockups/device-mockups.min.css">
    <link href="/css/new-age.min.css" rel="stylesheet">
    <style type="text/css">
        @font-face {
             font-family: BebasNeue-Regular;
             src: url('font/BebasNeue Regular.ttf');
        }
        body {
              font: BebasNeue-Regular, Arial, Tahoma, Sans-serif;
        }
    </style>
    @yield('stylesheet')
    <!-- jQuery -->
    <script src="/jquery/dist/jquery.min.js"></script>
    @yield('javascript')
    <!-- Theme CSS -->
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">
     
    <header style="background:url(images/background.png);
                background-size:100% 100% ; font: BebasNeue-Regular, Arial, Tahoma, Sans-serif;">
        @yield('content')
    </header>

   
    <footer>
        <div class="container">
            <p>&copy; 2017 4Move</p>
        </div>
    </footer>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    

</body>

</html>
