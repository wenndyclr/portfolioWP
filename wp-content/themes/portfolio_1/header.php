<!DOCTYPE html>
<html lang="fr">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--méta générée par WP :-->
	<meta charset="<?php bloginfo('charset'); ?>">
	<link rel="stylesheet" type="text/css" href="wp-content/themes/portfolio_1/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<?php
				$args=[
					'menu' 				=> 'Menu principal',
					'theme_location'	=> 'main_menu',
					'container' 		=> 'div',
					'container_class' 	=> 'collapse navbar-collapse',
					'menu_class' 		=> 'navbar-nav'
					];
				wp_nav_menu($args); 
			?>		
		</nav>
	</header>