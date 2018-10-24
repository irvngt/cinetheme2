<div class="Content-container">
  <main class="Main">
    <?php  
      if(have_posts()): while(have_posts()): the_post();
        get_template_part('template-parts/content-main');
      endwhile;
      else:
        get_template_part('template-parts/content-none');
      endif;
     ?>
    </main>
    <?php
    get_template_part('template-parts/pagination');
    get_sidebar(); ?>
</div>
