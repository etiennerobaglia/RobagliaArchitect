<?php 
get_header();
?>

<main class="categories">

    <?php
    //  ----------------- PROJETS EN COURS ----------------- 
    get_template_part('template-parts/category',false, 'projet en cours');

    // ----------------- EQUIPEMENT PUBLICS ----------------- 
    get_template_part('template-parts/category',false, 'équipements publics');
    
    // ----------------- INFRASTRUCTURES ET TRANSPORTS ----------------- 
    get_template_part('template-parts/category',false, 'infrastructures et transports');

    // ----------------- URBANISMES ETUDES DE PAYSAGES ----------------- 
    get_template_part('template-parts/category',false, 'urbanismes, étude de paysages');

    // ----------------- ASSISTANCE A LA MAITRISE D'OUVRAGE CONSEIL ----------------- 
    get_template_part('template-parts/category',false, 'assistance à la maîtrise');

    // ----------------- LOGEMENTS APPARTEMENTS MAISONS VILLAS ----------------- 
    get_template_part('template-parts/category',false, 'logements, appartements, maisons, villas');

    // ----------------- REVUES DE PRESSE ----------------- 
    get_template_part('template-parts/category',false, 'revue de presse');

    // ----------------- L AGENCE ----------------- 
    get_template_part('template-parts/category',false, 'l&#39;agence');
    ?>
</main>

<?php 
get_footer();
?>