<?php
/**
* Template footer.php
*/
?>
<footer class="site__footer">
  <!-- <h3>Pied de page</h3> -->
  <section class="footer_widget">
    <div><?php dynamic_sidebar( 'pied-page-1' ); ?></div>
    <div><?php dynamic_sidebar( 'pied-page-2' ); ?></div>
    <div><?php dynamic_sidebar( 'pied-page-3' ); ?></div>
  </section>
  <section class="footer_lien">
    <div><?php wp_nav_menu(array(
      'menu'=>'lien-externe-1',
      'container'=>'nav',
      'container_class'=>'footer__lien__nav',)); ?></div>
    <div><?php  ?></div>
    <div><?php  ?></div>
  </section>
 
  <ul>
    <li><a href="https://github.com/montasserZid/2023-31w/tree/tp1">TP1 sur GitHub</a></li>
    <li><a href="https://github.com/montasserZid/carrousel-31w">Caroussel sur GitHub</a></li>
  </ul>
</footer>
<?php wp_footer(); ?>
</body>
</html>
