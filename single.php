<?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post();

        $lieu = get_post_meta( get_the_ID(), "lieu", true );
        $nom_court = get_post_meta( get_the_ID(), "nom_court", true );
        $nom_complet = get_post_meta( get_the_ID(), "nom_complet", true );
        $description_technique = get_post_meta( get_the_ID(), "description_technique", true );
        $description_architectural = get_post_meta( get_the_ID(), "description_architectural", true );
        $periode = get_post_meta( get_the_ID(), "periode", true );
        $label_prix = get_post_meta( get_the_ID(), "label-prix", true );



            
        // print_r(get_intermediate_image_sizes())
        // Array ( [0] => thumbnail [1] => medium [2] => medium_large [3] => large [4] => 1536x1536 [5] => 2048x2048 ) 
        

        function linked_image($img_cpt_name) {
            $nom_projet_court = get_post_meta( get_the_ID(), "nom_court", true );

            $img_src = get_post_meta( get_the_ID(), $img_cpt_name, true );
            $img_full = wp_get_attachment_image_src( $img_src["ID"], "full")[0];
            // $img_full = $img_src["guid"];
            $img_alt = $nom_projet_court.'-'.$img_cpt_name;
            

            if($img_src) {
                    $img_sizes = wp_get_attachment_image_sizes( $img_src["ID"], 'large' );
                    $img_srcset = wp_get_attachment_image_srcset( $img_src["ID"], 'large' );
                    echo 
                    // '<a href="'.$img_full.'">
                    '<div class="projet-photo-container img-box-shadow">
                        <img 
                            class="'.esc_attr(str_replace('_', '-', $img_cpt_name)).' projet-photo-grande"
                            srcset="'.esc_attr($img_srcset).'"
                            sizes="'.esc_attr($img_sizes).'"
                            src="'.esc_attr($img_full).'"
                            title="'.esc_attr($img_alt).'"
                        />
                    </div>';
                    // </a>
            }

        }
        get_header(null, $nom_court);
    ?>

<!-- <div class="projet-content-wrapper"> -->
    <main class="projet-content">
        <section class="projet-article">
            <div class="projet-text">
                <div class="projet-text-bar"></div>
                <h1 class="projet-titre letter-spaced-large">
                    <?php echo $nom_complet ?>
                </h1>
                <div class="projet-location letter-spaced-small">
                    <?php echo ucfirst($lieu) ?>
                </div>
                <div class="projet-side-text">
                    <p class="projet-periode letter-spaced-small">
                        <?php echo $periode ?>
                    </p>
                    <p class="projet-label-prix letter-spaced-small">
                        <?php echo $label_prix ?>
                    </p>
                </div>
                <div class="projet-description ">
                    <div class="description-technique letter-spaced-small">
                        <?php echo $description_technique ?>
                    </div>
                    <!-- <div class="description-architecural letter-spaced-small">
                        <?php echo $description_architectural ?>
                    </div> -->
                </div>
            </div>
        </section>
        <section class="projet-photo-slider">
            <?php  linked_image("photo_1") ?>
            <?php  linked_image("photo_2") ?>
            <?php  linked_image("photo_3") ?>
            <?php  linked_image("photo_4") ?>
            <?php  linked_image("photo_5") ?>
        </section>
    </main>
<!-- </div> -->

<?php endwhile; endif; ?>
<?php 
get_footer(null, "single");
?>