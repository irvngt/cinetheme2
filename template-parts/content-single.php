<p>
  <small>
    <i class="fas fa-calendar"></i>
    <?php the_time( get_option('date_format') ); ?> <!--fecha de publicacion -->
    &bull;
    <i class="fas fa-user-circle"></i>
    <?php the_author_posts_link(); ?>
  </small>
</p>
<p>
  <i class="fas fa-tags"></i>
  <?php _e('Categorías: ', 'cinetheme'); the_category(', '); ?>
</p>
<p>
  <i class="fas fa-hashtag"></i>
  <?php the_tags(); ?>
</p>
<p>
  <i class="fab fa-wpforms"></i>
  <?php _e('Formato de Entrada: ', 'cinetheme'); echo ( get_post_format( $post ) ) ?  get_post_format( $post ):'standard';?>  <!-- operador terniario para que imprima stardar por default (se puede usar para dar estilos a tipo de formato de post) -->
</p>