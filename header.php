<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
         Remove this if you use the .htaccess -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Place favicon.ico and apple-touch-icon.png in the root directory, if you can: mathiasbynens.be/notes/touch-icons -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <!-- CSS : implied media="all" -->
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

  <!-- (Almost) All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="<?php bloginfo('template_url'); ?>/js/libs/modernizr-2.0.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/libs/respond.min.js"></script>

  <!-- Grab Google CDN's jQuery. fall back to local if necessary, we're doing it here, rather than footer, so that plugins have it available when they almost all bind to wp_head() -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write("<script src='<?php bloginfo('template_url'); ?>/js/libs/jquery-1.6.2.min.js'>\x3C/script>")</script>

  <!-- Wordpress Head Items -->
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
  <div id="container">
    <header role="banner">
      <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
      <p class="description"><?php bloginfo('description'); ?></p>
    </header>

