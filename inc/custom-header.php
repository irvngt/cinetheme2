<?php  

function cinetheme_custom_header(){
   /* activar logo configurable */
   add_theme_support('custom-logo', array(
    'height'=>100,
    'width'=>100,
    'flex-height'=>true,
    'flex-width'=>true
   ));
}

add_action('after_setup_theme','cinetheme_custom_header' );