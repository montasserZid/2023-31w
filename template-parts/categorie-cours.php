<?php
/**
 * template-parts qui permet d'afficher 
 * un article provenant d'un conteneur de class blocflex
 * * pour un article de la catégorie cours
 */
$titre = get_the_title();
$sigle = substr($titre, 0, 7);
$titre_long = substr($titre, 7, -5);
$duree = "90h";
$enseignant = get_field('enseignant');
$excerpt = wp_trim_words(get_the_excerpt(), 15);
?>
<article class="blocflex__article">
  <h2><a href="<?php the_permalink(); ?>"><?php echo esc_html($sigle); ?></a></h2>
  <h3><?php echo esc_html($titre_long); ?></h3>
  <p><?php echo esc_html($excerpt); ?></p>
  <?php if (!empty($enseignant)) : ?>
  <p><strong>Enseignant :</strong> <?php echo esc_html($enseignant); ?></p>
  <?php endif; ?>
  <p><strong>Durée :</strong> <?php echo esc_html($duree); ?></p>
</article>
