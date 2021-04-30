<section class="category">
    <h2 class="category-title">
        <?php echo ucfirst($args) ?>
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
            while ( $loop->have_posts() ) { 
                $loop->the_post();
                $nom_court = get_post_meta( get_the_ID(), "nom_court", true );
                $nom_complet = get_post_meta( get_the_ID(), "nom_complet", true );
                $link = get_permalink();
                $categories = get_the_category( get_the_ID() );
                $availableCategories = null;
                
                $miniature = get_post_meta( get_the_ID(), "miniature", true );

                $miniature_full = wp_get_attachment_image_src( $miniature["ID"], 'large' );
                $miniature_srcset = wp_get_attachment_image_srcset( $miniature["ID"], 'large' );
                $miniature_sizes = wp_get_attachment_image_sizes( $miniature["ID"], 'large' );


                foreach ($categories as &$categoryname) {
                    $availableCategories .= $categoryname->name;
                };
                if(strpos($availableCategories, $args) !== false){
                    ?>

        <a class="category-link"  href="<?php echo $link; ?>">
            <img
                class="category-link-image"
                alt="<?php echo $nom_court ?>" 
                title="<?php echo $nom_court ?>" 

                src="<?php echo $miniature_full ?>"
                srcset="<?php echo $miniature_srcset ?>"
                sizes="<?php echo $miniature_sizes ?>"
            >
            <span class="category-link-name"><?php echo ucfirst(strtolower($nom_complet)) ?></span>
        </a>
            <?php
                    }
                }
            ?>
    </div>
</section>