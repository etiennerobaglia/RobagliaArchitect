<section class="category">
    <h2 class="category-title">
        <?php echo $args ?>
    </h2>
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
                $link = get_permalink();
                $miniature = get_post_meta( get_the_ID(), "miniature", true );
                $categories = get_the_category( get_the_ID() );
                $availableCategories = null;

                foreach ($categories as &$categoryname) {
                    $availableCategories .= $categoryname->name;
                };
                if(strpos($availableCategories, $args) !== false){
                    ?>
                    <a
                class="projet" 
                href="<?php echo $link; ?>"
            >
                <img
                    class="projet-image"
                    alt="<?php echo $nom_court ?>" 
                    title="<?php echo $nom_court ?>" 
                    src=" <?php echo $miniature["guid"] ?>"
                    style="max-width: <?php echo rand(150, 210) ?>px"
                >
                </img>
            </a>
    <?php
            }
        }
    ?>
</section>