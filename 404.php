<?php
/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header();
?>
<main class="site__main">
    <div class="error-404">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/404-error.png'); ?>" alt="Erreur 404">
        <h1>Erreur 404</h1>
        <h2>Page introuvable , vouz pouvez tenter une recherche</h2>
        <div class="erreur-componant">
        <?= get_search_form();
 ?>
    <h2>Nos choix de Cours</h2>
 <?php
            if(in_category('cours'))
            if (isset($category))
            {
            $lemenu = "cours";
            }
            wp_nav_menu(array(

            "container" => "nav"

            ))
        ?>
     <h2>Nos notes de cours</h2>
<?php
    wp_nav_menu(array(
            "menu" => "note-wp",
            "container" => "nav",
            "container_class" => "menu__erreur"
    ));
    ?>

        </div>
    </div>
</main>
<?php get_footer(); ?>
