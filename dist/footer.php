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
			<div class="col-12 col-md-3 mb-4 mb-lg-0 align-self-start">
				<div class="box box-contact">
					<div class="title mb-4">
						<h2>Contáctanos</h2>
					</div>
					<div class="list mb-5">
						<ul class="list-group">
							<li>
								<a href="" class="d-block link-footer mb-1">
									<span class="icon icon-location"></span>
									<span class="align-bottom ml-2"> Lorem, ipsum dolor.</span>
								</a>
							</li>
							<li>
								<a href="" class="d-block link-footer mb-1">
									<span class="icon icon-email"></span>
									<span class="align-bottom ml-2"> Lorem, ipsum dolor.</span>
								</a>
							</li>
							<li>
								<a href="" class="d-block link-footer mb-1">
									<span class="icon icon-phone"></span>
									<span class="align-bottom ml-2"> 777 888 00</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="term">
						<a href="" class="link-footer underline d-block">
							Términos y condiciones
						</a>
						<a href="" class="link-footer underline d-block">
							Politica de privacidad
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 mb-4 mb-lg-0 align-self-end">
				<ul class="list-group list-group-horizontal list-social justify-content-center">
					<li>
						<a href="https://www.facebook.com/casa.add/" target="_blank" class="d-block px-3 px-md-2">
							<span class="icon icon-face"></span>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/casa.add/" target="_blank" class="d-block px-3 px-md-2">
							<span class="icon icon-insta"></span>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-12 col-md-3 mb-4 mb-lg-0 align-self-start">
			 	<div class="box box-instagram">
					<div class="title mb-4">
						<h2>Instagram</h2>
					</div>
					<div class="list d-block mt-2">
						<ul class="list-group list-group-horizontal list-instagram">
							<li>
								<a href="" class="item">
									<span class="image">
										<img src="https://casaadd.ddatechsolutions.com/wp-content/uploads/2020/08/insta-01.jpg" alt="photo">
									</span>
								</a>
							</li>
							<li>
								<a href="" class="item">
									<span class="image">
										<img src="https://casaadd.ddatechsolutions.com/wp-content/uploads/2020/08/insta-02.jpg" alt="photo">
									</span>
								</a>
							</li>
							<li>
								<a href="" class="item">
									<span class="image">
										<img src="https://casaadd.ddatechsolutions.com/wp-content/uploads/2020/08/insta-03.jpg" alt="photo">
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

