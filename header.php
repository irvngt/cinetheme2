<!DOCTYPE html>
<html <?php  language_attributes(); ?>>
<head>
	<meta <?php  bloginfo('charset'); ?>>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php  bloginfo('name'); ?></title>
	<meta name="description" content="<?php  bloginfo('description'); ?>">
	<?php  wp_head(); ?>
</head>
<body <?php  body_class(); ?>> <!-- si quieres una classe especifica con un array en body_class -->
	<header>
		<div class="logo">
			<a href="<?php  echo esc_url(home_url('/')); ?>">Logo</a>
		</div>
		<button class="Panel-btn"><?php _e('Menu Principal', 'cinetheme'); ?></button>
		<sectrion class="Panel">
			<nav class="Menu">
				<ul>
					<?php  wp_list_pages('title_li' );?> <!-- title_li quita el li Paginas del menu -->
				</ul>
			</nav> 
		</section>
	</header>
	<section class="Content ">