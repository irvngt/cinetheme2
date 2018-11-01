<aside class="Author">
  <h3><?php _e('Información del Autor:', 'cinetheme'); ?></h3>
  <div class="Author-info">
    <figure>
      <?php echo get_avatar( get_the_author_meta('ID'), 100 ); ?>
    </figure>
    <ul>
      <li>
        <i class="fas fa-user-circle"></i>
        <?php the_author(); ?>
      </li>
      <li>
        <i class="fas fa-male"></i>
        <?php echo get_the_author_meta('first_name') .' ' . get_the_author_meta('last_name'); ?>
      </li>
      <li>
        <i class="fas fa-envelope"></i>
        <?php echo get_the_author_meta('user_email'); ?>
      </li>
      <li>
        <i class="fas fa-sitemap"></i>
        <a href="<?php echo get_the_author_meta('user_url'); ?>" target="_blank">
          <?php echo get_the_author_meta('user_url'); ?>
        </a>
      </li>
      <li>
        <i class="fas fa-calendar"></i>
        <?php echo get_the_author_meta('user_registered'); ?>
      </li>
      <li>
        <i class="fas fa-key"></i>
        <?php echo get_the_author_meta('roles')[0]; ?>
      </li>
      <li>
        <i class="fas fa-address-book"></i>
        <?php echo get_the_author_meta('description'); ?>
      </li>
      <li>
        <?php echo get_the_author_posts(); ?>
        <i class="fas fa-newspaper"></i>
      </li>
      <li>
        <a href="<?php echo get_the_author_meta('facebook'); ?>" target="_blank">
          <i class="fab fa-facebook"></i>
        </a>
      </li>
      <li>
        <a href="<?php echo get_the_author_meta('twitter'); ?>" target="_blank">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
    </ul>
  </div>
</aside>