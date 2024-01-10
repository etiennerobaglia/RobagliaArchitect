<?php
add_action( 'wp_enqueue_scripts', 'wpdocs_my_enqueue_scripts' );
function wpdocs_my_enqueue_scripts() : void {
    wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js');
}
?>