<?php
/**
 * Template Name: Staff
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
<!-- EQUIPMENT -->
<section class="staff">
	<div class="container">
		<div class="row">
			<div class="col py-3 py-lg-5">
				<div class="box-staff-intro py-3 py-lg-5 cl-primary">
					<h2>Staff</h2>
				</div>
			</div>
		</div>
		<div class="row pt-4">
			<div class="col pt-5">
				<div class="d-flex flex-column flex-lg-row">
					<div class="box-staff-card flex-column flex-lg-row">
						<div class="box-staff">
							<figure class="mb-4"><img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/png/staff-s-001.jpg" alt=""></figure>
							<div class="card-body ">
								<div class="title mb-3">
									<h2>Equipo humano de monitoría</h2>
								</div>
								<div class="paragraf mb-5">
									<p>
										Talento humano calificativo y dedicado, dispuestos a resolver, enseñar y apoyarte.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="box-staff-card flex-column flex-lg-row">
						<div class="box-staff">
							<figure class="mb-4"><img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/png/staff-s-002.jpg" alt=""></figure>
							<div class="card-body ">
								<div class="title mb-3">
									<h2>Equipos de tecnología</h2>
								</div>
								<div class="paragraf mb-5">
									<p>
										¿Qué es de un equipo humano sin un buen equipo de tecnología? Nos hicimos esa pregunta un día y trajimos
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="d-flex flex-column flex-lg-row">
					<div class="box-staff-card flex-column flex-lg-row">
						<div class="box-staff">
							<figure class="mb-4"><img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/png/staff-s-003.jpg" alt=""></figure>
							<div class="card-body">
								<div class="title mb-3">
									<h2>Equipo humano de entrenamiento e instrumentos para crecimiento profesional</h2>
								</div>
								<div class="paragraf mb-5">
									<p>
										Crecer significa ser apoyado y guiado, por eso Casa ADD cuenta con excelentes coachs y tutores.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="box-staff-card flex-column flex-lg-row">
						<div class="box-staff">
							<figure class="mb-4"><img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/png/staff-s-005.jpg" alt=""></figure>
							<div class="card-body ">
								<div class="title mb-3">
									<h2>Equipo humano de aseo</h2>
								</div>
								<div class="paragraf mb-5">
									<p>
										Un estudio impecable requiere un talento humano impecable y aquí los tienes.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="d-flex flex-column flex-lg-row">
					<div class="box-staff-card flex-column flex-lg-row">
						<div class="box-staff">
							<figure class="mb-4"><img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/png/staff-s-002.jpg" alt=""></figure>
							<div class="card-body">
								<div class="title mb-3">
									<h2>Infraestructura de calidad (Cuartos, zonas comunes, zona adminitrativa)</h2>
								</div>
								<div class="paragraf mb-5">
									<p>
										Espacios en constate renovación y zonas comunes a la altura.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="box-staff-card flex-column flex-lg-row">
						<div class="box-staff">
							<figure class="mb-4"><img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/png/staff-s-006.jpg" alt=""></figure>
							<div class="card-body ">
								<div class="title mb-3">
									<h2>Equipo humano administrativo</h2>
								</div>
								<div class="paragraf mb-5">
									<p>
										Apoyo, integridad, legalidad, reponsabilidad y dedicación es el sello administrativo de Casa ADD.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row py-5">
			<div class="col text-center py-5">
				<div class="subtitle  mb-3">
					<h2 class="txt_size--med">¿Te interesa ser parte de nuestro gran equipo?</h2>
				</div>
				<div class="action">
					<a href="" class="link">
						Trabaja con nosotros <i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
