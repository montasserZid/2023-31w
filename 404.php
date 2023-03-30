<?php
/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header();
?>
<main class="site__main">
    <div class="error-404">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/404-error.png'); ?>" alt="Erreur 404">
        <h1>Erreur 404 - la page n'existe pas</h1>
    </div>
</main>
<?php get_footer(); ?>
