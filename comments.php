<aside class="Comments">
  <?php if ( have_comments() ): ?>
    <h3>
      <?php
        comments_number( /* funcion numero de comentarios */
          __('No hay comentarios aún', 'cinetheme'), /*texto que se imprime cuando no hay coments */
          __('Hay un comentario publicado', 'cinetheme'), /*cuando hay 1 coment */
          __('Hay % comentarios', 'cinetheme') /* de dos coments en adelante */
        );
      ?>
    </h3>
    <ol class="commentlist">
      <?php wp_list_comments(); ?> <!-- imprimimos lista de comentarios
       -->
    </ol>
  <?php endif; ?>
  <?php comment_form(); ?>
</aside>