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

<div id="myModal" class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<footer class="py-5">
	<div class="container py-5">
		<div class="row">
			<div class="col-12 col-md-4 col-lg-3 mb-4 mb-lg-0 align-self-start">
				<div class="box box-contact">
					<div class="title mb-4">
						<h2>Contáctanos</h2>
					</div>
					<div class="list mb-5">
						<ul class="list-group">
							<li>
								<a href="<?php the_field('location_url', 'option'); ?>" class="d-block link-footer mb-1">
									<span class="icon icon-location"></span>
									<span class="align-bottom ml-2"> <?php the_field('location', 'option'); ?></span>
								</a>
							</li>
							<li>
								<a href="mailto:<?php the_field('email', 'option'); ?>" target="_blank" class="d-block link-footer mb-1">
									<span class="icon icon-email"></span>
									<span class="align-bottom ml-2"><?php the_field('email', 'option'); ?></span>
								</a>
							</li>
							<li>
								<a href="https://api.whatsapp.com/send?phone=57<?php the_field('phone', 'option'); ?>&text=&source=&data=&app_absent=" target="_blank" class="d-block link-footer mb-1">
									<span class="icon icon-phone"></span>
									<span class="align-bottom ml-2"><?php the_field('phone', 'option'); ?></span>
								</a>
							</li>
						</ul>
					</div>
					<div class="term">
						<a href="<?php the_field('link_terminos', 'option'); ?>" class="link-footer underline d-block">
							<?php the_field('texto_terminos', 'option'); ?>
							<!-- Términos y condiciones -->
						</a>
						<a href="<?php the_field('link_politicas', 'option'); ?>" class="link-footer underline d-block">
						<?php the_field('texto_politicas', 'option'); ?>
							<!-- Politica de privacidad -->
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4 col-lg-6 mb-4 mb-lg-0 align-self-end">
				<ul class="list-group list-group-horizontal list-social justify-content-center">
					<li>
						<a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="d-block px-3 px-md-2">
							<span class="icon icon-face"></span>
						</a>
					</li>
					<li>
						<a href="<?php the_field('instagram', 'option'); ?>" target="_blank" class="d-block px-3 px-md-2">
							<span class="icon icon-insta"></span>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-12 col-md-4 col-lg-3 mb-4 mb-lg-0 align-self-start">
			 	<div class="box box-instagram">
					<div class="title mb-4">
						<h2>Instagram</h2>
					</div>
					<div class="list d-block mt-2">
					<?php if( have_rows('insta_list', 'option') ): ?>
						<ul class="list-group list-group-horizontal list-instagram">
							<?php while( have_rows('insta_list', 'option') ): the_row();?>
							<li>
								<a href="<?php the_sub_field('url'); ?>" class="item">
									<span class="image">
										<img src="<?php the_sub_field('image'); ?>" alt="photo">
									</span>
								</a>
							</li>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<footer class="py-4 border_top">
	<div class="container">
		<div class="col-12">
			<small class="cl--white box-copy">
				<ul class="list-group list-group-horizontal">
					<?php the_field('html_copy', 'option'); ?>
				</ul>
			</small>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>

