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
			<main class="Main">
			<h2>Contenido Principal</h2>
			<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et reprehenderit obcaecati beatae perferendis ipsam dolorum ipsa ducimus minima optio ullam vitae repellat, veritatis cum dolorem delectus amet distinctio fugiat? Aliquid.</p>
			<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae obcaecati eligendi animi ratione quisquam quibusdam aut assumenda laudantium harum veritatis quas aperiam, est architecto blanditiis aliquam consequatur pariatur quo tempore!</p>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus rem et quia repellendus quis! Nulla suscipit porro repudiandae accusantium non modi, laudantium eum voluptas quae, cum, dolorum quia neque hic?</p>
			<img src="http://placeimg.com/400/400/any" alt="">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis velit dolorem est cum? Enim eligendi doloribus laboriosam facere nobis exercitationem sunt dicta totam impedit, nihil dignissimos quod vel asperiores? Quis?</p>
			</main>
			<aside> </aside>
	</section>
	<footer class="Footer">
		<section class="Footer-conainer">
			<div>
				<nav class="SocialMedia">
					<ul>
						<li><a href="http://" targt="_blank"></a></li>
						<li><a href="http://" targt="_blank"></a></li>
						<li><a href="http://" targt="_blank"></a></li>
						<li><a href="http://" targt="_blank"></a></li>
						<li><a href="http://" targt="_blank"></a></li>
					</ul>
				</nav>
			</div>
			<div>
			<p>
				&copy;<?php echo date('Y'); ?>  
				<a href="">@negreteirv</a>
			</p></div>
		</section>
	</footer>
	<?php  wp_footer(); ?>
</body>
</html>