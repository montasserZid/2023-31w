<?php
// Enfiler la feuille de style
function ajouter_styles() {
    wp_enqueue_style('31w-style-principal', // id de la feuille de style
                get_template_directory_uri() . '/style.css', // adresse url de la feuille de style
                array(), // les dépendances avec les autres feuilles de style
                filemtime(get_template_directory() . '/style.css')); // la de la dernière feuille de style
}
add_action( 'wp_enqueue_scripts', 'ajouter_styles' );
// add theme support
add_theme_support('html5', array(
            'search-form',
            'comment-list',
            'comment-form',
            'gallery', 
            'caption', 
            'style', 
            'script'));
   add_theme_support( 'title-tag' );


   add_theme_support( 'custom-logo', array(
       'height' => 150,
       'width'  => 150,
   ) );
// ----------------enregistrement des menus-------------
   function enregistrer_menus() {
       register_nav_menus( array(
           'menu_principal' => 'Menu principal',
           'menu_secondaire' => 'Menu secondaire',
       ) );
   }