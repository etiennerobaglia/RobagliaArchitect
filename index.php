<?php 
    get_header();
?>

<main class="categories">
    <?php

    // ----------------- EQUIPEMENT PUBLICS ----------------- 
    get_template_part('template-parts/category',false, 'equipements publics');
    
    // ----------------- LOGEMENTS ----------------- 
    get_template_part('template-parts/category',false, 'logements');
    
    // ----------------- INFRASTRUCTURES ET TRANSPORTS ----------------- 
    get_template_part('template-parts/category',false, 'infrastructures et transports');
    
    // ----------------- URBANISMES ETUDES DE PAYSAGES ----------------- 
    get_template_part('template-parts/category',false, 'urbanisme, études de paysage');
    
    ?>
</main>

<?php 
get_footer();
?>
