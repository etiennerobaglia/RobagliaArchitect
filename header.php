<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<?php if($args != null): ?>
  <title><?php echo ucwords(str_replace("-"," ",$args)); ?> | Robaglia Architecte</title>
  <?php else: ?>
    <title>Robaglia Architecte</title>
    <?php endif; ?>
    <meta itemprop="description" name="description" content="Description : Architecture, urbanisme, paysage, maitrîse d'oeuvre, conseil, marché public, privé et particulier."/>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="header-centered">
      <a class="header-link" href="<?php echo get_home_url() ?>">
        <img
        class="header-logo header-logo-centered"
        src="<?php echo get_theme_file_uri( '/assets/images/logo.svg' ); ?>">
        <?php if(is_home() == false): ?>
          <span class="header-return">
            <svg class="header-return-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
            <span class="header-return-text">Retour</span>
          </span>
        <?php endif; ?>
      </a>
    </header>