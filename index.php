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
    
    // ----------------- Particuliers, maisons, villas, appartements ----------------- 
    get_template_part('template-parts/category',false, 'particuliers, maisons, villas, appartements');
    
    // ----------------- ASSISTANCE A LA MAITRISE D'OUVRAGE CONSEIL ----------------- 
    get_template_part('template-parts/category',false, 'assistance à la maîtrise d&#39;ouvrage, conseil');

    ?>
</main>

<?php 
get_footer();
?>
