<?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post();

        $nom_court = get_post_meta( get_the_ID(), "nom_court", true );
        $nom_complet = get_post_meta( get_the_ID(), "nom_complet", true );
        $description_technique = get_post_meta( get_the_ID(), "description_technique", true );
        $description_architectural = get_post_meta( get_the_ID(), "description_architectural", true );
        $periode = get_post_meta( get_the_ID(), "periode", true );
        $label_prix = get_post_meta( get_the_ID(), "label-prix", true );



            
        // print_r(get_intermediate_image_sizes())
        // Array ( [0] => thumbnail [1] => medium [2] => medium_large [3] => large [4] => 1536x1536 [5] => 2048x2048 ) 
        

        function linked_image($img_cpt_name, $class) {
            $nom_projet_court = get_post_meta( get_the_ID(), "nom_court", true );
            
            $img_src = get_post_meta( get_the_ID(), $img_cpt_name, true );
            $img_full = $img_src["guid"];
            $img_alt = $nom_projet_court.'-'.$img_cpt_name;
            
            if ($class == "petite") {
                $img_sizes = wp_get_attachment_image_sizes( $img_src["ID"], 'medium_large' );
                $img_srcset = wp_get_attachment_image_srcset( $img_src["ID"], 'medium_large' );
                echo '<a href="'.$img_full.'" class="'.esc_attr(str_replace('_', '-', $img_cpt_name)).' projet-photo-petite">
                        <img 
                            src="'.esc_attr($img_full).'"
                            srcset="'.esc_attr($img_srcset).'"
                            sizes="'.esc_attr($img_sizes).'"
                            title="'.esc_attr($img_alt).'"
                        />
                        </a>';
            }
            elseif ($class=="grande") {
                $img_sizes = wp_get_attachment_image_sizes( $img_src["ID"], 'large' );
                $img_srcset = wp_get_attachment_image_srcset( $img_src["ID"], 'large' );
                echo '<a href="'.$img_full.'" >
                <img 
                    class="'.esc_attr(str_replace('_', '-', $img_cpt_name)).' projet-photo-grande"
                    src="'.esc_attr($img_full).'"
                    srcset="'.esc_attr($img_srcset).'"
                    sizes="'.esc_attr($img_sizes).'"
                    title="'.esc_attr($img_alt).'"
                />
                </a>';
            }

        }
        get_header(null, $nom_court);
    ?>

<main class="projet-content">
    

    <?php  linked_image("grande_photo_1", "grande") ?>
    
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
        <?php  linked_image("petite_photo_1", "petite") ?>
        <?php  linked_image("petite_photo_2", "petite") ?>
        <?php  linked_image("petite_photo_3", "petite") ?>
    </section>
    <?php  linked_image("grande_photo_2", "grande") ?>
    <?php endwhile; endif; ?>
    
</main>

<?php 
get_footer(null, "single");
?>