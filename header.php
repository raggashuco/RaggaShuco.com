<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
  <meta name="description" content="RaggaShucoのホームページ">
  <meta name="keywords" content="RaggaShuco, Dance, Electronic, reggae, sound">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/html5reset.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/jquery.bxslider.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/csshake.min.css">
  <link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/jquery.bxslider.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/pageTop.js"></script>
  <script>
    $(function(){
      $('.flyerList').bxSlider({
        auto: true,
        speed: 1000,
        pause: 10000,
        minSlides: 2,
        maxSlides: 2,
        slideWidth: 640,
        captions: true,
        pager: false
      });
    });
  </script>
  <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
  <?php wp_head(); ?>
</head>
<body>
  <div class="page">
    <div class="wrapper">
      <!-- Header -->
      <header>
        <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
        <!-- Navigation -->
          <?php wp_nav_menu(array('theme_location' => 'nav')); ?>
        <!-- /Navigation -->
      </header>
      <!-- /Header -->