<section class="category">
    <h2 class="category-title letter-spaced-large">
        <span class="category-title-text">
            <?php echo ucfirst($args) ?>
        </span>
        <span class="category-title-bar"></span>
    </h2>
    <div class="category-links">
    <?php
            $projects = array(
                'post_type'      => 'projet',
                'post_status' => 'publish',
                'posts_per_page' => -1, 
                'orderby' => 'title', 
                'order' => 'ASC',
                'cat' => 'home',
            );
            $loop = new WP_Query($projects);
            $count=0;
            while ( $loop->have_posts() ) { 
                $loop->the_post();
                $lieu = get_post_meta( get_the_ID(), "lieu", true );
                $nom_court = get_post_meta( get_the_ID(), "nom_court", true );
                $nom_complet = get_post_meta( get_the_ID(), "nom_complet", true );
                $link = get_permalink();
                $categories = get_the_category( get_the_ID() );
                $availableCategories = null;
                
                $miniature = get_post_meta( get_the_ID(), "miniature", true );

                $miniature_full = wp_get_attachment_image_src( $miniature["ID"], "large" )[0];
                $miniature_srcset = wp_get_attachment_image_srcset( $miniature["ID"], 'large' );
                $miniature_sizes = wp_get_attachment_image_sizes( $miniature["ID"], 'large' );


                foreach ($categories as $key=>&$categoryname) {
                    $availableCategories .= $categoryname->name;
                };
                if(strpos($availableCategories, $args) !== false){
                    $count++;
                    ?>

        <a class="category-link"  href="<?php echo $link; ?>">
            <div class="category-link-image-container img-box-shadow">
                <img
                    class="category-link-image"
                    alt="<?php echo $nom_court ?>" 
                    loading="lazy"
                    decoding="async"
                    
                    src="<?php echo $miniature_full ?>"
                    srcset="<?php echo $miniature_srcset ?>"
                    sizes="<?php echo $miniature_sizes ?>"
                >
            </div>
            <div class="category-link-info">
                <div class="category-link-name letter-spaced-small"><?php echo ucfirst($nom_complet) ?></div>
                <div class="category-link-location letter-spaced-small"><?php echo ucfirst($lieu) ?></div>
            </div>
        </a>
            <?php
                    }
                }
            ?>
    </div>
</section>