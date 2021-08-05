<?php get_header(); ?>

<main class="page-container">
    <h1 class="page-titre">
        <span class="page-titre-text">
            <?php echo the_title(); ?>
        </span>
        <span class="page-titre-bar"></span>
    </h1>        
    <section class="page-text">
            <?php echo the_content(); ?>
    </section>
</main>

<?php get_footer(); ?>