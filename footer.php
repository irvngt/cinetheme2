</section>
	<footer class="Footer">
		<section class="Footer-conainer">
			<div>
				<?php  
				if(has_nav_menu('social_menu')):
					wp_nav_menu(array(
						'theme_location' => 'social_menu',
						'container' => 'nav',
						'container_class' => 'SocialMedia',
						'link_before' => '<span class="sr-text">', /* etiqueta antes y despues del enlace */
						'link_after' => '</span>'
					));
				endif; 
					?>
			</div>
			<div>
			<p>
				&copy;<?php echo date('Y').__(' Derechos Reservados','cinetheme');?>  
				<a href="">@negreteirv</a>
			</p></div>
		</section>
	</footer>
	<?php  wp_footer(); ?>
</body>
</html>