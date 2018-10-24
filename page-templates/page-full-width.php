<?php 
/* Template Name: Página sin Sidebar */
get_header(); ?>
<div class="Content-container Page FullWidth">
  <main class="Main">
    <?php while ( have_posts() ) : the_post(); ?>
      <section class="PostContent">
        <article><?php the_content(); ?></article>
      </section>
    <?php endwhile; ?>
  </main>
</div>
<?php  get_footer(); ?>
