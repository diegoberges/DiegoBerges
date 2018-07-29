<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

    <title> <?php parametro("titulo"); ?> </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
	<script type="text/javascript">
    	window.cookieconsent_options = {"message":"Utilizamos cookies para que tengas una mejor experiencia en nuestra web. Si sigues navegando consideramos que las aceptas.","dismiss":"Acepto","learnMore":"Más Información","link":"http://diegoberges.com/ayuda-cookies.php","theme":"dark-bottom"};
	</script>
	<script type="text/javascript" src="//s3.amazonaws.com/cc.silktide.com/cookieconsent.latest.min.js"></script>
	<!-- End Cookie Consent plugin -->
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-32393631-1', 'auto');
	  ga('send', 'pageview');
	
	</script>
    <!-- Recaptcha -->
	<script src='https://www.google.com/recaptcha/api.js'></script> 
  </head>

  <body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="<?php parametro("curriculum");  ?>"><a href="index.php"><i class="fa fa-paperclip fa-fw"></i>Curriculum</a></li>
            <li class="<?php parametro("proyectos");  ?>"><a href="proyectos.php"><i class="fa fa-laptop fa-fw"></i>Proyectos</a></li>
            <li><a href="https://es.linkedin.com/in/diegoberges" target="_blank"><i class="fa fa-linkedin-square fa-fw"></i>Linkedin</a></li>
            <li class="<?php parametro("contacto");  ?>"><a href="contacto.php"><i class="fa fa-phone fa-fw"></i>Contacto</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          	<li><a href="http://elcss.com" target="_blank"><i class="fa fa-bars fa-fw"></i>Blog</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>