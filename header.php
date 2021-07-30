<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <?php 
  if(is_home() == false): ?>
  <title><?php echo ucwords(str_replace("-"," ",$args)); ?> | Robaglia Architecte</title>
  <?php else: ?>
  <title>Robaglia Architecte</title>
  <?php endif; 
  ?>
  <meta itemprop="description" name="description" content="Description : Architecture, urbanisme, paysage, maitrîse d'oeuvre, conseil, marché public, privé et particulier."/>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header">
    <a class="header-link" href="<?php echo get_home_url() ?>">
    <img
      class="header-logo"
      src="<?php echo get_theme_file_uri( '/assets/images/logo.svg' ); ?>">
    </a>
    <div class="header-menu">
      <a href="<?php echo get_home_url() ?>" class="header-menu-item letter-spaced-small">
        Projets
      </a>
      <a href="<?php echo get_home_url() ?>/agence/" class="header-menu-item letter-spaced-small">
        L'agence
      </a>
      <a href="<?php echo get_home_url() ?>/revue-de-presse/" class="header-menu-item letter-spaced-small">
        Presse
      </a>
      <a href="<?php echo get_home_url() ?>/contact/" class="header-menu-item letter-spaced-small">
        Contact
      </a>
    </div>
    <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
    <a class="header-hamburger" >
      <svg class="header-hamburger-lines" height="20px" viewBox="0 0 20 20">
      <path fill="black" d="M3.314,4.8h13.372c0.41,0,0.743-0.333,0.743-0.743c0-0.41-0.333-0.743-0.743-0.743H3.314
        c-0.41,0-0.743,0.333-0.743,0.743C2.571,4.467,2.904,4.8,3.314,4.8z M16.686,15.2H3.314c-0.41,0-0.743,0.333-0.743,0.743
        s0.333,0.743,0.743,0.743h13.372c0.41,0,0.743-0.333,0.743-0.743S17.096,15.2,16.686,15.2z M16.686,9.257H3.314
        c-0.41,0-0.743,0.333-0.743,0.743s0.333,0.743,0.743,0.743h13.372c0.41,0,0.743-0.333,0.743-0.743S17.096,9.257,16.686,9.257z"></path>
    </svg>
      <svg class="header-hamburger-cross" height="20px" viewBox="0 0 20 20">
							<path fill="black" d="M11.469,10l7.08-7.08c0.406-0.406,0.406-1.064,0-1.469c-0.406-0.406-1.063-0.406-1.469,0L10,8.53l-7.081-7.08
							c-0.406-0.406-1.064-0.406-1.469,0c-0.406,0.406-0.406,1.063,0,1.469L8.531,10L1.45,17.081c-0.406,0.406-0.406,1.064,0,1.469
							c0.203,0.203,0.469,0.304,0.735,0.304c0.266,0,0.531-0.101,0.735-0.304L10,11.469l7.08,7.081c0.203,0.203,0.469,0.304,0.735,0.304
							c0.267,0,0.532-0.101,0.735-0.304c0.406-0.406,0.406-1.064,0-1.469L11.469,10z"></path>
						</svg>
    </a>
<script>



</script>
  </header>
