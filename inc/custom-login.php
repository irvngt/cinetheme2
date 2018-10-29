<?php
//https://codex.wordpress.org/Customizing_the_Login_Form
function cinetheme_login_scripts () {
  wp_enqueue_style( 'custom-properties', get_stylesheet_directory_uri() . '/css/custom_properties.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'login-page-css', get_template_directory_uri() . '/css/login_page.css', array('custom-properties'), '1.0.0', 'all' );
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'login-page-js', get_template_directory_uri() . '/js/login_page.js', array('jquery'), '1.0.0', true );
}
add_action( 'login_enqueue_scripts', 'cinetheme_login_scripts' );

function cinetheme_login_logo_url () {
  return home_url(); /* redirige al home el icono de wp en loginPagen  */
}
add_filter( 'login_headerurl', 'cinetheme_login_logo_url' );

function cinetheme_login_logo_url_title() { /* titulo del logo de LoginPage */
  return get_bloginfo( 'title' ) . ' | ' .  get_bloginfo( 'description' );
}
add_filter( 'login_headertitle', 'cinetheme_login_logo_url_title' );

?>