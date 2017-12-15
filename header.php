
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title></title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

        <?php wp_head(); ?>

    </head>
    <body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo('url')?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" width="80%" height="200%"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="<?php bloginfo('url')?>">Home</a></li>
            <li><a href="<?php bloginfo('url')?>/?page_id=252">About</a></li>
            <li><a href="<?php bloginfo('url')?>/?page_id=2">Portfolio</a></li>
            <li><a href="<?php bloginfo('url')?>/?page_id=254">Blog</a></li>
            <li><a href="<?php bloginfo('url')?>/?page_id=464">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

   <?php 

    //wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
