<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header-centered">
  <a href="<?php echo get_home_url() ?>">
    <img
      class="header-logo header-logo-centered"
      src="<?php echo get_theme_file_uri( '/assets/images/logo.svg' ); ?>">
  </a>
</header>
