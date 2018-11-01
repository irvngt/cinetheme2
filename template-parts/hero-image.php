<?php
/* codigo para validar e insertar el titulo, descripcion y HeroImage en cada seccion de la pagina*/
if ( is_single() ):
  $title = get_the_title();
  $subtitle = get_avatar( get_the_author_id(), 100) . get_the_author();
  $hero_image = get_the_post_thumbnail_url();
elseif ( is_page() ):
  $title = get_the_title();
  $subtitle = null;
  $hero_image = get_the_post_thumbnail_url();
elseif ( is_category() ):
  /* var_dump(get_the_category()); */
  $current_cat = get_the_category();
  $title =  single_cat_title('', false);
  $subtitle = category_description( $current_cat[0] );
  $hero_image = get_header_image();
elseif ( is_tag() ):
  $current_tag = get_the_tags();
  $title =  single_cat_title('', false);
  $subtitle = tag_description( $current_tag[0] );
  $hero_image = get_header_image();
elseif ( is_author() ):
  $title =  get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name');
  $subtitle = get_the_author_posts() . ' publicaciones';
  $hero_image = get_avatar_url( get_the_author_id() );
elseif ( is_search() ):
  $title = get_search_query();
  $subtitle = __('Resultados de búsqueda', 'cinetheme');
  $hero_image = get_header_image();
elseif ( is_404() ):
  $title = __('Contenido No Encontrado', 'cinetheme');
  $subtitle = __('Error 404', 'cinetheme');
  $hero_image = get_header_image();
else:
  $title = get_bloginfo('name');
  $subtitle = get_bloginfo('description');
  $hero_image = get_header_image();
endif;
?>


<header class="HeroImage" style="
    --bg-url:url(<?php  echo $hero_image;?>);
    --bg-attach:fixed;
    --bg-size:cover;
    --bg-x:center;
    --bg-y:center;
  ">
  <div>
    <h1><?php  echo $title; ?></h1>
    <p><?php  echo $subtitle; ?></p>
  </div>
</header>