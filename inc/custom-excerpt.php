<?php  
  function cinetheme_excerpt_more()
  {
    return '<a href="'.get_permalink().'"> '.__(' leer más...','cinetheme').'<i class="fab fa-readme"></i> </a>';

  }
  add_filter('excerpt_more','cinetheme_excerpt_more');

  function cinetheme_excerpt_length () {
    return 20;
  }
  add_filter('excerpt_length', 'cinetheme_excerpt_length');
?>