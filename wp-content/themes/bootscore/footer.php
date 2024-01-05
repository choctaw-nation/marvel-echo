<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 *
 * @version 5.3.0
 */

?>

<footer>

  <div class="bootscore-footer py-5" style="background:url(/wp-content/uploads/2023/12/black-scratch-background.jpg); background-size: cover;">
    <div class="<?= bootscore_container_class(); ?>">

      <!-- Top Footer Widget -->
      <?php if (is_active_sidebar('top-footer')) : ?>
        <?php dynamic_sidebar('top footer'); ?>
      <?php endif; ?>

      <div class="row">
        <div class="col-md-2 p-3">
          <a class="navbar-brand" href="<?= esc_url(home_url()); ?>"><img src="/wp-content/uploads/2023/12/cno-seal.svg" alt="Choctaw Nation of Oklahoma Seal" class="logo" style="height: 200px;"></a>
        </div>

        <div class="col-md-5 p-3">
          <p><a href="https://www.choctawnation.com/">The Choctaw Nation of Oklahoma</a></p>
          <p><a href="https://choctawculturalcenter.com/">Choctaw Cultural Center</a></p>
          <p><a href="https://www.choctawnation.com/about/language/">Learn Choctaw Language</a></p>
          <p><a href="https://www.choctawnation.com/about/culture/traditions/stickball/">Stickball</a></p>
        </div>

        <div class="col-md-5 p-3">
          <p><a href="https://www.marvel.com/">Marvel</a></p>
          <p><a href="https://www.marvel.com/characters/echo-maya-lopez/in-comics">ECHO: Maya Lopez in Comics</a></p>
          <p><a href="https://ondisneyplus.disney.com/show/echo">ECHO on Disney Plus</a></p>
        </div>

      </div>

      <!-- Bootstrap 5 Nav Walker Footer Menu -->
      <?php
      wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'container'      => false,
        'menu_class'     => '',
        'fallback_cb'    => '__return_false',
        'items_wrap'     => '<ul id="footer-menu" class="nav %2$s">%3$s</ul>',
        'depth'          => 1,
        'walker'         => new bootstrap_5_wp_nav_menu_walker()
      ));
      ?>

    </div>
  </div>

  <div class="bootscore-info bg-dark text-light py-2 text-center">
    <div class="<?= bootscore_container_class(); ?> justify-content-center d-flex">
      <?php if (is_active_sidebar('footer-info')) : ?>
        <?php dynamic_sidebar('footer-info'); ?>
      <?php endif; ?>
      <p class="bootscore-copyright m-0 p-0 w-75"><span class="cr-symbol">&copy;</span>&nbsp;<?= date('Y'); ?> Choctaw Nation of Oklahoma. All Rights Reserved.</p>
    </div>
  </div>

</footer>

<!-- To top button -->
<a href="#" class="btn btn-primary shadow top-button position-fixed zi-1020"><i class="fa-solid fa-chevron-up"></i><span class="visually-hidden-focusable">To top</span></a>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
