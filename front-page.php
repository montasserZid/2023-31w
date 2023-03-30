<?php 
// Modèle index.php représente le modèle par defaut du théme
 ?> 
<?php get_header(); ?>
<main class="site__main">
    <!-- <code>front-page.php</code> -->
    <!-- <h3>index.php</h3> -->
    <section class="viewport">
        <h1>Tp2</h1>
        <h4>Auteur : Montasser Zid</h4>
        <h4>Cours introduction 31W a gestionnaire contenu</h4>
        <?php wp_nav_menu(array(
            "menu"=>"evenement",
            "container"=>"nav",
            "container_class"=>"menu__bloc"

        )) ?>
    </section>
    <section class="blocflex">
        <?php 
            if (have_posts()):
                while(have_posts()): the_post();?>
                <?php 
                $ma_categorie = "note-wp";
                if (in_category('galerie')){$ma_categorie = "galerie";}
                    get_template_part("template-parts/categorie", $ma_categorie);
                endwhile;
                endif;
                ?>
      
    </section>
</main>
<?php get_footer(); ?>