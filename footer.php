<?php
/**
* Template footer.php
*/
?>
<footer class="site__footer">
  <!-- <h3>Pied de page</h3> -->
  <section class="footer_widget">
    <div><?php dynamic_sidebar( 'Pied-page-1' ); ?></div>
    <div><?php dynamic_sidebar( 'Pied-page-2' ); ?></div>
    <div><?php dynamic_sidebar( 'Pied-page-3' ); ?></div>
  </section>
  <section class="footer_lien">
    <div><?php wp_nav_menu(array('menu'=>'lien-externe')); ?></div>
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
