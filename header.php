<!doctype html>
<html <?php language_attributes(); ?>>
<head>

<?php 
  // PAGE TITLE
  if(is_home() == false): ?>
  <title><?php echo ucwords(str_replace("-"," ",$args)); ?> | Robaglia Architecte</title>
<?php else: ?>
  <title>Robaglia Architecte</title>
<?php endif; 
  // END PAGE TITLE 
?>
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
      <svg class="header-hamburger-lines" viewBox="0 0 100 80" width="40" height="40">
        <rect width="100" height="20"></rect>
        <rect y="30" width="100" height="20"></rect>
        <rect y="60" width="100" height="20"></rect>
      </svg>
      <svg class="header-hamburger-cross" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 50 50" overflow="visible" stroke="black" stroke-width="10" stroke-linecap="round">
        <line x2="40" y2="40" />
        <line x1="40" y2="40" />
      </svg>
    </a>
<style>

.header-hamburger {
  display: none;
  position: absolute;
  cursor: pointer;
  top: 25px;
  right: 25px;
  height: 55px;
  align-items: center;
  /* height: 100%; */
  /* align-items: center; */
  /* width: 100%; */
  /* justify-content: center; */
}

.header-hamburger-cross {
  display: none;
}

.header-centered.is-active .header-hamburger-cross{
  display: block;
}

.header-centered.is-active .header-hamburger-lines{
  display: none;
}

.header-centered.is-active .header-menu{
  display: block;
  position: absolute;
  height: unset;
  display: flex;
  position: absolute;
  top: 112px;
}

.header-centered.is-active + main {
  padding-top: 3rem
}

.header-hamburger-lines {

}



</style>

<script>
var hamMenu = document.querySelector(".header-hamburger");
var header = document.querySelector(".header-centered");

hamMenu.addEventListener("click", hamClicked => {
  console.log(hamClicked);
  if (header.classList.contains("is-active")) {
    header.classList.remove("is-active")
  }
  else {
    header.classList.add("is-active")
  }
})


</script>
  </header>
