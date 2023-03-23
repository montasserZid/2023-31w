<?php
/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header() ?>
<main class="site__main">
    <h3>single.php</h3>
<?php 
if (have_posts()):
   while(have_posts()): the_post();
        the_title('<h1>','</h1>');
        ?> <p style="color:red;font-family: 'Montserrat', sans-serif;font-size:1.2rem"><?php the_field('enseignant'); ?> <br> <?php the_field('domaine');
        ?> </p> <?php
        the_content(); 
        //get template part pour tester getcategory template pour cibler
    endwhile;    
endif;
?>   
</main> 
<?php get_footer(); ?>

