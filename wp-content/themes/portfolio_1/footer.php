<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="wp-content/themes/portfolio_1/image/linkedin.png" alt="logo LinkedIn" class="w-50">
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12">
						<p>Nom Prénom</p>
						<p>Adresse postale</p>
						<p>Adresse Mail</p>
						<p>Téléphone</p>						
					</div>
						<?php
						$args=[
							'menu' 				=> 'Menu footer',
							'theme_location'	=> 'footer_menu',
							'container' 		=> 'div',
							'container_class' 	=> 'col-md-12'
						];
							wp_nav_menu($args); 
						?>
				</div>
			</div>
			<div class="col-md-12">
				<p>Copyright 2019</p>
			</div>
		</div>
	</div>
	
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="wp-content/themes/portfolio_1/js/app.js" type="text/javascript"></script>

</body>
</html>