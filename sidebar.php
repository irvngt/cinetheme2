<aside class="Sidebar"> 
  <?php 
  if (is_active_sidebar('main_sidebar')):
    dynamic_sidebar('main_sidebar'); 
  else:
  ?>
    <article class="Widget">
      <h3><?php _e('Buscar','cinetheme'); ?></h3> <!-- funcion __e trae implisito un eco -->
      <?php  get_search_form();?>
    </article>
  <?php 
  endif;
   ?>
</aside>