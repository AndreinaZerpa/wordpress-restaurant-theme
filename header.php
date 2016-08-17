<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PIADINA</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
  <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/style.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/bootstrap.min.css">


      <link href='http://fonts.googleapis.com/css?family=Raleway:200,400,600' rel='stylesheet' type='text/css'>
  		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/demo.css" />
  		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/component.css" />
  		<script src="<?php bloginfo('template_url')?>/js/modernizr.custom.js"></script>


<?php wp_head();?>
</head>
<body>

<header>
<nav class=" navbar-default">
    <div class="container">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="http://localhost/wordpress/wp-content/uploads/2016/08/PIADINA2.png" alt="" style="margin-bottom:2px;" /></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <?php wp_nav_menu(
     array(
     'container' => false,
     'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
     'theme_location' => 'menu'
     )); ?>


      </div></div>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->

</nav>

</header
