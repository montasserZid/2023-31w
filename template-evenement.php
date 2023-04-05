<?php
/**
 * Template name: Evenement
 */
get_header(); ?>

<main class="site__main">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( has_post_thumbnail() ) : ?>
    <div class="post-thumbnail">
      <?php the_post_thumbnail( 'full' ); ?>
    </div><!-- .post-thumbnail -->
    <?php endif; ?>

    <header class="entry-header">
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header><!-- .entry-header -->

    <div class="entry-content">
      <?php the_content(); ?>
      <p><strong>L'adresse de l'événement :</strong> <?php the_field('adresse_evt'); ?></p>
      <p><strong>Date et heure de l'événement :</strong> <?php the_field('date_de_levenement_'); ?></p>
      
    </div><!-- .entry-content -->
  </article><!-- #post-<?php the_ID(); ?> -->

  <?php endwhile; endif; ?>
</main><!-- .site__main -->

<?php get_footer(); ?>