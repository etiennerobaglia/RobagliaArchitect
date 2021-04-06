<?php 
    get_header();
?>

<main class="categories">

    <?php
    //  ----------------- PROJETS EN COURS ----------------- 
    get_template_part('template-parts/category',false, 'projets en cours');

    // ----------------- EQUIPEMENT PUBLICS ----------------- 
    get_template_part('template-parts/category',false, 'equipements publics');
    
    // ----------------- INFRASTRUCTURES ET TRANSPORTS ----------------- 
    get_template_part('template-parts/category',false, 'infrastructures et transports');

    // ----------------- URBANISMES ETUDES DE PAYSAGES ----------------- 
    get_template_part('template-parts/category',false, 'urbanisme, études de paysage');

    // ----------------- ASSISTANCE A LA MAITRISE D'OUVRAGE CONSEIL ----------------- 
    get_template_part('template-parts/category',false, 'assistance à la maîtrise d&#39;ouvrage, conseil');

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