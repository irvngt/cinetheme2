<?php if ( get_next_post_link() || get_preview_post_link( ) ): ?>
  <div class="Pagination">
    <nav>
      <?php
        //https://codex.wordpress.org/Pagination
        echo paginate_links( array(
          'prev_text' => __('<span>&laquo; Anteriores</span>', 'mawt'),
          'next_text' => __('<span>Siguientes &raquo;</span>', 'mawt')
        ) );
      ?>
    </nav>
  </div>
<?php endif; ?>