<?php 
    get_header(null, "single");
?>

<main class="projet-content">

    <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post();

        $nom_court = get_post_meta( get_the_ID(), "nom_court", true );
        $nom_complet = get_post_meta( get_the_ID(), "nom_complet", true );
        $description_technique = get_post_meta( get_the_ID(), "description_technique", true );
        $description_architectural = get_post_meta( get_the_ID(), "description_architectural", true );
        $periode = get_post_meta( get_the_ID(), "periode", true );
        $label_prix = get_post_meta( get_the_ID(), "label-prix", true );

        $miniature = get_post_meta( get_the_ID(), "miniature", true );
        $grande_photo_1 = get_post_meta( get_the_ID(), "grande_photo_1", true );
        $grande_photo_2 = get_post_meta( get_the_ID(), "grande_photo_2", true );
        $petite_photo_1 = get_post_meta( get_the_ID(), "petite_photo_1", true );
        $petite_photo_2 = get_post_meta( get_the_ID(), "petite_photo_2", true );
        $petite_photo_3 = get_post_meta( get_the_ID(), "petite_photo_3", true );
    ?>

    <img class="projet-photo-grande photo-grande-1" src="<?php echo $grande_photo_1["guid"] ?>">
    <!-- <img class="projet-photo-grande photo-grande-2" src="<?php echo $grande_photo_2["guid"] ?>"> -->


    <section class="projet-article">
        <div class="projet-text">
            <h1 class="projet-titre">
                <?php echo $nom_complet ?>
           </h1>
            <div class="projet-description">
                <div class="description-technique">
                    <?php echo $description_technique ?>
                </div>
                <div class="description-architecural">
                    <?php echo $description_architectural ?>
                </div>
            </div>
        </div>
        <div class="projet-side-text">
            <p class="projet-periode">
                <?php echo $periode ?>
            </p>
            <p class="projet-label-prix">
                <?php echo $label_prix ?>
            </p>
        </div>
            
    </section>


    <section class="projet-photo-gallerie">
        <img class="projet-photo-petite photo-petite-1" src="<?php echo $petite_photo_1["guid"] ?>">
        <img class="projet-photo-petite photo-petite-3" src="<?php echo $petite_photo_3["guid"] ?>">
        <img class="projet-photo-petite photo-petite-2" src="<?php echo $petite_photo_2["guid"] ?>">
    </section>


    <?php endwhile; endif; ?>

</main>

<?php 
get_footer(null, "single");
?>