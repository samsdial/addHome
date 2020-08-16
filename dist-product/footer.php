<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
<footer class="py-5">
	<div class="container py-5">
		<div class="row">
			<div class="col-md-3 align-self-start">
				<div class="box box-contact">
					<div class="title mb-4">
						<h2>Contacto</h2>
					</div>
					<div class="list mb-3">
						<ul class="list-group">
							<li>
								<a href="" class="d-block link mb-1">
									<span class="icon"></span>
									<span> Lorem, ipsum dolor.</span>
								</a>
							</li>
							<li>
								<a href="" class="d-block link mb-1">
									<span class="icon"></span>
									<span> Lorem, ipsum dolor.</span>
								</a>
							</li>
							<li>
								<a href="" class="d-block link mb-1">
									<span class="icon"></span>
									<span> 777 888 00</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="term">
						<a href="" class="link d-block">
							Términos y condiciones
						</a>
						<a href="" class="link d-block">
							Politica de privacidad
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 align-self-end">
				<ul class="list-group list-group-horizontal list-social justify-content-center">
					<li>
						<a href="" class="d-block px-3 px-md-2">
							<span class="icon icon_face"></span>
						</a>
					</li>
					<li>
						<a href="" class="d-block px-3 px-md-2">
							<span class="icon icon_insta"></span>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-3 align-self-start">
			 	<div class="box box-instagram">
					<div class="title mb-4">
						<h2>Instagram</h2>
					</div>
					<div class="list d-block mt-2">
						<ul class="list-group list-group-horizontal list-instagram">
							<li>
								<a href="" class="item">
									<span class="image">
										<img src="https://picsum.photos/70/" alt="photo">
									</span>
								</a>
							</li>
							<li>
								<a href="" class="item">
									<span class="image">
										<img src="https://picsum.photos/70/" alt="photo">
									</span>
								</a>
							</li>
							<li>
								<a href="" class="item">
									<span class="image">
										<img src="https://picsum.photos/70/" alt="photo">
									</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<footer class="py-4 border_top">
	<div class="container">
		<div class="col-12">
			<small class="cl--white"><?php understrap_site_info(); ?></small>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>

