<?php get_header(); ?>


<main class="projet-content">
    <section class="projet-article">
        <div class="projet-text">
            <h1 class="projet-titre">
                <?php echo the_title(); ?>
           </h1>
            <div class="projet-description">
                <div class="description-architectural">
                    <?php echo the_content(); ?>
                </div>
            </div>
		</div>
    </section>
</main>

<?php get_footer(); ?>