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
					<img src="<?php bloginfo('template_directory') ?>/images/png/work.jpg" class="img-fluid" style="width: 1800px;" alt="">
				</figure>
				<div class="box-work-info align-self-center flex-column flex-lg-row">
					<div class="title mb-4 cl-primary">
						<h2>Trabaja <br> con nosotros</h2>
					</div>
					<div class="paragraf mb-5">
						<p>
							Déjanos resolver cualquier inquietud que tengas. Escríbenos para pedir una entrevista, para agendar una visita en Bogotá o simplemente para decirnos lo que quieras.
						</p>
					</div>
					<div class="register mb-5 mb-xl-0">
						<form id="restister" onsubmit="return false;">
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
						</form>
					</div>
				</div>
		</div>
	<!-- ***CONTAINER*** -->
</section>
<!-- WORK END -->
<?php
get_footer();
