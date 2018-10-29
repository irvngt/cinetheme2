<?php  

/**
 * My Awesome WordPress Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage cinetheme
 * @since 1.0.0
 * @version 1.0.0
 */

 global $google_fonts; /*variable global que nos sirve para llamarla cuando queramos cambiar fuentes */
 global $font_awesome; 
 global $hamburgers; 

 $google_fonts='https://fonts.googleapis.com/css?family=Righteous|Ubuntu'; /* varGlobal para llamarlo en en front, admin y login page */
 $font_awesome ='https://use.fontawesome.com/releases/v5.0.13/css/all.css';
$hamburgers ='https://cdnjs.cloudflare.com/ajax/libs/hamburgers/0.9.3/hamburgers.min.css';

//https://codex.wordpress.org/Content_Width
//Establecer el ancho máximo permitido para cualquier contenido en el tema, como oEmbeds e imágenes
if(!isset($content_width)){
  $content_width=800;

}

if ( !function_exists('cinetheme_scripts') ):
  function cinetheme_scripts () {
    global $google_fonts;
    global $font_awesome; 
    global $hamburgers; 
    wp_enqueue_style( 'google-fonts', $google_fonts, array(), '1.0.0', 'all' );
    wp_enqueue_style( 'font_awesome', $font_awesome, array(), '5.0.13', 'all' );
    wp_enqueue_style( 'hamburgers', $hamburgers, array(), '0.9.3', 'all' ); 
    wp_enqueue_style( 'custom_properties', get_template_directory_uri().'/css/custom_properties.css', array('google-fonts'), '1.0.0', 'all' );
    wp_enqueue_style( 'style', get_stylesheet_uri(), array('google-fonts','font_awesome','hamburgers, custom_properties'), '1.0.0', 'all' );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js', array('jquery'), '1.0.0', true );
  }
endif;
add_action('wp_enqueue_scripts', 'cinetheme_scripts');


function cinetheme_menus(){
  register_nav_menus(array(
    'main_menu' =>__('Menu Pricipal', 'cinetheme'),
    'social_menu'=>__('Menu Redes Sociales', 'cinetheme'),
  ));
}
add_action('init','cinetheme_menus');

function cinetheme_register_sidebars(){
  register_sidebar(array(
    'name'=>__('Sidebar Principal', 'cinetheme'),
    'id'=>'main_sidebar',
    'description'=>__('ESTE ES Sidebar Principal', 'cinetheme'),
    'before_widget'=>__('<article id="%1$s" class="Widget %2$s">'),
    'after_widget'=>__(' </article>'),
    'before_title'=>__('<h3>'),
    'after_title'=>__('</h3>'),
  ));
}

add_action('widgets_init', 'cinetheme_register_sidebars');


function cinetheme_setup(){
  load_theme_textdomain('cinetheme', get_template_directory().'/languages');
  add_theme_support('post-thumbnails');

    add_theme_support('html5', array(
    'comment-list',
    'comment-form',
    'search-form',
    'gallery',
    'caption'
  ));

  //https://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats',  array (
    'aside',
    'gallery',
    'link',
    'image',
    'quote',
    'status',
    'video',
    'audio',
    'chat'
  ) );
  
  /*permite que los themes y plugins administren el título<title>, si se activa,no debe usarse wp_title()*/
  add_theme_support('title-tag');

  /* Feed RSS */
  add_theme_support('automatic-feed-links');

  //Ocultar Tags innecesarios del head
  //Versión de WordPress
  remove_action('wp_head', 'wp_generator');
  //Imprime sugerencias de recursos para los navegadores para precargar, pre-renderizar y pre-conectarse a sitios web
  remove_action('wp_head', 'wp_resource_hints', 2);
  //Muestre el enlace al punto final del servicio Really Simple Discovery
  remove_action('wp_head', 'rsd_link');
  //Muestre el enlace al archivo de manifiesto de Windows Live Writer
  remove_action('wp_head', 'wlwmanifest_link');
  //Inyecta rel = shortlink en el encabezado si se define un shortlink para la página actual.
  remove_action('wp_head', 'wp_shortlink_wp_head');

  //Quitar scripts para soporte a emojis
  //remove_action('wp_print_styles', 'print_emoji_styles');
  //remove_action('wp_head', 'print_emoji_detection_script', 7);

  //Quitar la barra de administración en el Frontend
  /* add_filter('show_admin_bar', '__return_false'); */
}

add_action('after_setup_theme','cinetheme_setup');

require_once get_template_directory() . '/inc/custom-header.php';
require_once get_template_directory() . '/inc/customizer.php';
require_once get_template_directory() . '/inc/custom-excerpt.php';
require_once get_template_directory() . '/inc/custom-description.php';
require_once get_template_directory() . '/inc/custom-login.php';
require_once get_template_directory() . '/inc/custom-admin.php';