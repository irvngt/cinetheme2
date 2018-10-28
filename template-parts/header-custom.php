<header class="WP-Header">
  <?php
    if ( has_custom_header()  ):
      the_custom_header_markup();
    endif;
  ?>
  <div class="WP-Header-branding">
    <h1 class="WP-Header-title">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>
    <p  class="WP-Header-description">
      <?php bloginfo( 'description' ); ?>
    </p>
  </div>
</header>
