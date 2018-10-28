<?php get_header(); ?>
<div class="Content-container">
  <main class="Main">
    <?php while ( have_posts() ) : the_post(); ?>
      <section class="PostContent">
        <article><?php the_content(); ?></article>
        <h3><?php _e('Información de la Pubicación', 'mawt'); ?></h3>
        <?php get_template_part( 'template-parts/content-single' ); ?>
      </section>
    <?php endwhile; ?>
  </main>
  <?php
    comments_template();
    get_sidebar();
  ?>
</div>
<?php get_footer(); ?>