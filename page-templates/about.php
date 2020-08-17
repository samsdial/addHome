<?php
/**
 * Template Name: About
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
<!-- ***ABOUT*** -->
<section class="about mb-5">
	<div class="container">
		<div class="row">
			<div class="col py-5">
				<div class="box-about-intro py-5 cl-primary">
					<h2>Nosotros</h2>
				</div>
			</div>
		</div>
		<div class="row align-items-start">
			<div class="col-12 col-lg-7 pl-3 order-1 order-lg-2 mb-4">
				<figure class="pl-lg-5 ml-lg-5"><img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/png/about-001.jpg" alt=""></figure>
			</div>
			<div class="col-12 col-lg-5 order-2 order-lg-1">
				<div class="box-about">
					<div class="subtitle">
						<h2>
							Somos el espacio seguro en Bogotá que estabas buscando para iniciar o potenciar  tu carrera como modelo webcam.
						</h2>
					</div>
					<div class="paragraf">
						<p class="">
							Sabemos que eres una persona valiente y quieres sacar brillo a tu personalidad y a tu trabajo. Queremos ofrecerte el apoyo que necesitas para sacar máximo provecho de una industria en crecimiento, ofreciendo todos los servicios, asesorías y soluciones que necesitas para llegar a la cima.
						</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- ***ABOUT END*** -->
<!-- ***ABOUT-intro*** -->
<section class="about-placeholder bgc--primary">
	<figure class="mb-3 mb-lg-0"><img src="<?php bloginfo('template_directory') ?>/images/png/about-002.jpg" class="img-fluid w-100" alt=""></figure>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-lg-5 py-5">
				<div class="box-about-placeholder">
					<div class="paragraf text-white">
						<p class="mb-3">
							Llevamos un par de años en el mercado y hemos trabajado con más de 80 modelos on-line con quienes hemos hecho un gran equipo desde el primer momento. Muchas de ellas están con nosotros desde el comienzo y sus historias son nuestro más grande orgullo.
						</p>
						<p>
							En Casa ADD, ofrecemos respeto en todos los puntos de contacto (desde el administrador, el consumidor, los usuarios, los socios, los fotógrafos, el psicólogo hasta las demás modelos).
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>
<!-- ***ABOUT-intro END*** -->
<!-- ***beginning*** -->
<section class="beginning">
	<div class="container">
		<div class="row">
			<div class="col py-5">
				<div class="title-intro py-5 mt-3">
					<h2>Nuestros principios</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-4 mb-5 pb-3">
				<div class="box-begin">
					<figure class="mb-5 text-center text-lg-left"><img src="<?php bloginfo('template_directory') ?>/images/png/begin--001.png" alt="" class="d-inline-block"></figure>
					<div class="card-body text-center text-sm-left">
						<div class="title mb-4">
							<h2>Dedicación</h2>
						</div>
						<div class="paragraf mb-5">
							<p>
								Este es un oficio de dedicación, cortesía y servicio que exige respeto. No quiere decir que sea difícil ni tensionante pero exige constancia y disciplina.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 mb-5 pb-3">
				<div class="box-begin">
					<figure class="mb-5 text-center text-lg-left"><img src="<?php bloginfo('template_directory') ?>/images/png/begin--002.png" alt=""></figure>
					<div class="card-body text-center text-sm-left">

					<div class="title mb-4">
						<h2>Profesionalismo</h2>
					</div>
					<div class="paragraf mb-5">
						<p>
							Todo lo hacemos y lo solicitamos con parámetros de conducta y moral que te dignifiquen laboral y humanamente.
						</p>
					</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 mb-5 pb-3">
				<div class="box-begin">
					<figure class="mb-5 text-center text-lg-left"><img src="<?php bloginfo('template_directory') ?>/images/png/begin--003.png" alt=""></figure>
					<div class="card-body text-center text-sm-left">

					<div class="title mb-4">
						<h2>Empatía</h2>
					</div>
					<div class="paragraf mb-5">
						<p>
							Entendemos que la convivencia en paz y armonía requiere sentir lo que sienten los demás y crear acuerdos de beneficio mutuo.
						</p>
					</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 mb-5 pb-3">
				<div class="box-begin">
					<figure class="mb-5 text-center text-lg-left"><img src="<?php bloginfo('template_directory') ?>/images/png/begin--004.png" alt=""></figure>
					<div class="card-body text-center text-sm-left">
						<div class="title mb-4">
							<h2>Confianza</h2>
						</div>
						<div class="paragraf mb-5">
							<p>
								Sabemos que la confianza se gana con lealtad, cultivando buenas experiencias y honrando las palabras con acciones.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 mb-5 pb-3">
				<div class="box-begin">
					<figure class="mb-5 text-center text-lg-left"><img src="<?php bloginfo('template_directory') ?>/images/png/begin--005.png" alt=""></figure>
					<div class="card-body text-center text-sm-left">
					<div class="title mb-4">
						<h2>Responsabilidad compartida</h2>
					</div>
					<div class="paragraf mb-5">
						<p>
							Dirigimos nuestro trabajo al bienestar común y no solo al beneficio personal. Cuando creces, todos crecemos.
						</p>
					</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 mb-5 pb-3">
				<div class="box-begin">
					<figure class="mb-5 text-center text-lg-left"><img src="<?php bloginfo('template_directory') ?>/images/png/begin--006.png" alt=""></figure>
					<div class="card-body text-center text-sm-left">
						<div class="title mb-4">
							<h2>Calidad</h2>
						</div>
						<div class="paragraf mb-5">
							<p>
								Nuestra vocación es de servicio a tus seguidores. Todos debemos aportar a que la experiencia que tengan sea de primera calidad.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row pb-5">
			<div class="col text-center box-about-prefotter pb-5">
				<div class="subtitle mb-5">
					<h2>
					Conoce nuestros estudios, nuestros equipos <br> y las personas que harán parte de tu nuevo equipo.
					</h2>
				</div>
				<div class="action">
					<a href="" class="link">
						Agenda tu visita <i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ***beginning END*** -->
<section class="w-100 prefotter bgc--primarylight box-shadow-top mb-5">
	<!-- ***CONTAINER*** -->
		<div class="box-prefotter d-lg-flex w-100 w-lg-70">
				<figure class="w-100 w-lg-70">
					<img src="https://casaadd.ddatechsolutions.com/wp-content/uploads/2020/08/banner-fot.jpg" class="img-fluid w-100" alt="">
				</figure>
				<div class="box-prefotter-info text-white align-self-center text-center w-100 w-lg-50 px-5 py-5 py-lg-0">
					<div class="title mb-3">
						<h2>Atrévete a soñar <br> con nosotros. </h2>
					</div>
					<div class="paragraf mb-5">
						<p>
							Visita nuestras instalaciones en Bogotá y hablemos <br> de tu futuro como modelo webcam de Casa ADD.
						</p>
					</div>
					<div class="action mt-2">
						<a href=""class="btn btn_primary">Agenda tu visita</a>
					</div>
				</div>
		</div>
	<!-- ***CONTAINER*** -->
</section>

<?php
get_footer();
