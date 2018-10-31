<figure class="PostCard">
<?php  the_post_thumbnail(); ?>
<figcaption>
  <h2>
    <a href="<?php the_permalink();?>"><?php the_title();?></a>
  </h2> 
  <?php the_excerpt(); ?>
  <?php get_template_part('template-parts/content-single'); ?>
</figcaption>
</figure>