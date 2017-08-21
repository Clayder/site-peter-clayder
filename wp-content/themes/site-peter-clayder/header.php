<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('title'); ?></title>
  <!--
  <meta name="description" content="Desenvolvedor Web" />
  <meta name="keywords" content="Desenvolvimento web, PHP, JavaScript, Rio de Janeiro, Rio das Ostras, CSS, Sites, Sistemas web, Ecommerce, Lojas Virtuais" />
  <meta name="author" content="Peter Clayder" />
  -->
  <?php wp_head(); ?>
  <!--
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <link rel="stylesheet" href="http://localhost/www/peter-dev/site-peter-wordpress/site-estatico/css/style.css">
  <link rel="stylesheet" href="http://localhost/www/peter-dev/site-peter-wordpress/site-estatico/css/my-style.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/www/peter-dev/site-estatico/css/component.css" />
  <script src="https://use.fontawesome.com/35cbc79996.js"></script>
  <script src="js/modernizr.custom.js"></script>
  -->
</head>

<?php echo (is_page('home'))? "<body class='home'>" : "<body class='paginas'>";

