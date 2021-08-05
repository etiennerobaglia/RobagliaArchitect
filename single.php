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
                            loading="lazy"
                            decoding="async"
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

    <main class="projet-content">
        <section class="projet-article">
            <div class="projet-text">
                <div class="projet-titre-container">
                    <h1 class="projet-titre letter-spaced-large">
                        <?php echo $nom_complet ?>
                    </h1>
                    <div>
                        <svg class="arrow-right" viewBox="0 0 20 20">
                            <path fill="black" d="M14.989,9.491L6.071,0.537C5.78,0.246,5.308,0.244,5.017,0.535c-0.294,0.29-0.294,0.763-0.003,1.054l8.394,8.428L5.014,18.41c-0.291,0.291-0.291,0.763,0,1.054c0.146,0.146,0.335,0.218,0.527,0.218c0.19,0,0.382-0.073,0.527-0.218l8.918-8.919C15.277,10.254,15.277,9.784,14.989,9.491z"></path>
                        </svg>
                    </div>
                </div>
                <div class="projet-location letter-spaced-small">
                    <?php echo ucfirst($lieu) ?>
                </div>
                <div class="projet-text-bar"></div>
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

<?php endwhile; endif; ?>
<?php 
get_footer(null, "single");
?>