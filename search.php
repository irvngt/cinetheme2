<?php get_header(); ?>
<div class="Content-container">
  <main class="Main">
    <div class="Search-results">
      <h3><?php  _e( 'Resultados para la búsqueda:', 'cinetheme' ); ?></h3>
      <mark><?php echo get_search_query(); ?></mark>
    </div>
    <?php
      if ( have_posts() ): while ( have_posts() ): the_post();
        get_template_part( 'template-parts/content-search' );
      endwhile; 
      else:
        get_template_part( 'template-parts/content-none' );
      endif;
    ?>
  </main>
  <?php
    get_template_part( 'template-parts/pagination' );
    get_sidebar();
  ?>
</div>
<?php get_footer(); ?>