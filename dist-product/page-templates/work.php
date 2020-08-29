<?php
/**
 * Template Name: Work
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>
<!-- WORK -->
<section class="w-100 work">
	<!-- ***CONTAINER*** -->
		<div class="box-work d-flex flex-column flex-lg-row">
				<figure class="flex-column flex-lg-row">
					<!-- <img src="<?php // bloginfo('template_directory') ?>/images/png/work.jpg"  alt=""> -->
					<?php $imagen_caracteristica = get_field( 'imagen_caracteristica' ); ?>
					<?php if ( $imagen_caracteristica ) : ?>
						<img src="<?php echo esc_url( $imagen_caracteristica['url'] ); ?>" class="img-fluid" style="width: 1800px;" alt="<?php echo esc_attr( $imagen_caracteristica['alt'] ); ?>" />
					<?php endif; ?>
				</figure>
				<div class="box-work-info align-self-center flex-column flex-lg-row">
					<?php
						while ( have_posts() ) {
							the_post();
							get_template_part( 'loop-templates/content', 'alternative' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) {
								comments_template();
							}
						}
					?>
					<div class="register mb-5 mb-xl-0">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item" role="presentation">
									<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Modelo</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Monitor</a>
								</li>
							</ul>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
									<div class="tap-content py-4">
										<?php the_field( 'form-model' ); ?>
									</div>
								</div>
								<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
									<div class="tap-content py-4">
										<?php the_field( 'form_monitor' ); ?>
									</div>
								</div>
							</div>


						<!-- <form id="restister" onsubmit="return false;">
							<div class="row">
								<div class="col-12 col-xl-7 mb-4">
									<label for="">
										<span class="align-baseline">Nombre real o artístico*</span>
									</label>
									<input type="text" class="form-control name" id="name" name="name">
									<small class="error d-none form-text text-muted">Agregué su nombre completo.</small>
								</div>
								<div class="col-12 col-xl-5 mb-4">
									<label for="">
										<span class="align-baseline">
											Teléfono de contacto*
										</span>
									</label>
									<input type="text" class="form-control phone" id="phone" name="phone">
									<small class="error d-none form-text text-muted">Ingrese su numero telefónico.</small>
								</div>
							</div>
							<div class="row">
								<div class="col-12 mb-4">
									<label for="" >
										<span class="align-baseline">
											Correo electrónico*
										</span>
									</label>
									<input type="text" class="form-control email" id="email" name="email">
									<small class="error d-none form-text text-muted">Ingrese un email valido.</small>
								</div>
							</div>
							<div class="row">
								<div class="col-12 mb-4">
									<label for="" >
										<span class="align-baseline">
											Mensaje
										</span>
									</label>
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
								</div>
							</div>
							<div class="row pt-3">
								<div class="col-12">
									<button type="submit" id="submit" class="btn btn_primary">Enviar <i class="fa fa-angle-right"></i></button>
									<div class="alerta">
										<p></p>
									</div>
								</div>
							</div>
						</form> -->
					</div>
				</div>
		</div>
	<!-- ***CONTAINER*** -->
</section>
<!-- WORK END -->
<?php
get_footer();
