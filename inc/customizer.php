<?php
function cinetheme_customize_register( $wp_customize ) {
  $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
  $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

  if ( isset( $wp_customize->selective_refresh ) ) { /* si la opcion que activamos de selctive refresh (custom-header.php) */
    $wp_customize->selective_refresh->add_partial( 'blogname', array( /* se agrega el nombre del blogname */
      'selector' => '.WP-Header-title', /* .WP-Header-title esta en (header-custom.php) */
      'render_callback' => 'cinetheme_customize_blogname'
    ) );
    $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
      'selector' => '.WP-Header-description',
      'render_callback' => 'cinetheme_customize_blogdescription',
    ) );
  }
}
add_action( 'customize_register', 'cinetheme_customize_register' );

function cinetheme_customize_blogname () {
  bloginfo( 'name' );
}

function cinetheme_customize_blogdescription () {
  bloginfo( 'description' );
}
?>