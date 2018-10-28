<?php
  function cinetheme_custom_meta_description () {
    if ( is_home () || is_front_page() ) {
      $description = get_bloginfo('description');
    } else if ( is_category() || is_tag() ) {
      $description = strip_tags( term_description() );
    } else if ( is_single() || is_page() ) {
      the_post();
      $description = htmlentities( get_the_excerpt(), ENT_HTML5, 'UTF-8' );
      rewind_posts();
    } else if ( is_author() ) {
      $description = get_the_author_meta('description');
    } else if ( is_search() ) {
      $description = __('Resultados de la búsqueda: ', 'cinetheme') . get_search_query();
    } else if ( is_404() ) {
      $description = __('Error 404: No Encontrado. ', 'cinetheme') . get_bloginfo('description');
    } else {
      $description = get_bloginfo('description');
    }
    echo $description;
  }
?>