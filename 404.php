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
        <?= get_search_form(); ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>
