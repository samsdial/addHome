<?php
/**
 * Template Name: Home
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
<section class="w-100 banner bgc--primary box-shadow">
	<!-- ***CONTAINER*** -->
		<div class="box-banner d-lg-flex w-100 w-lg-70">
			<figure  class="order-1 order-lg-2 w-100 w-lg-70">
				<img src="<?php bloginfo('template_directory') ?>/images/png/banner.jpg" class="img-fluid w-100" alt="">
			</figure>
			<div class="order-2 order-lg-1 box-banner-info text-white align-self-center text-center text-lg-left w-100 w-lg-70 py-5 py-lg-0">
				<div class="title mb-3">
					<h1>Casa ADD</h1>
				</div>
				<div class="paragraf mb-5 mr-lg-5 pr-lg-5">
					<p>
						Somos el espacio seguro que estabas buscando para iniciar o continuar tu carrera como modelo webcam. Cumple tus metas personales profesionalmente aprovechando todos los servicios y asesorías que te ofrecemos.
					</p>
				</div>
				<div class="action">
					<button class="btn btn_secondary">Conoce Más</button>
				</div>
			</div>
		</div>
		<div class="box-social">
			<ul class="box-social-list">
				<li>
					<a href="https://www.instagram.com/casa.add/" target="_blank" class="">
						<span class="text-social">Instagram</span>
						<span class="icon icon-insta"></span>
					</a>
				</li>
				<li>
					<a href="https://www.facebook.com/casa.add/" target="_blank" class="">
						<span class="text-social">Facebook</span>
						<span class="icon icon-face"></span>
					</a>
				</li>
			</ul>
		</div>
		<div class="whatsaap">
			<a href="https://api.whatsapp.com/send?phone=57350%205232208&text=&source=&data=&app_absent=" class="">
				<img src="<?php bloginfo('template_directory') ?>/images/png/whatsaap.png"  alt="">
			</a>
		</div>
	<!-- ***CONTAINER*** -->
</section>
<!-- ***ABOUT*** -->
<section class="about mb-5 pb-5 box-shadow">
	<div class="container">
		<div class="row">
			<div class="col-7">
				<div class="box-result-intro py-5">
					<h2>Con nosotros, tu dedicación tiene resultados</h2>
				</div>
			</div>
		</div>
		<div class="row pb-5">
			<div class="col-12 mb-5">
				<ul class="box-result-slider">
					<li>
						<div class="box-result text-center text-lg-left">
							<figure class="mb-5"><img src="<?php bloginfo('template_directory') ?>/images/png/vocation.png" alt="" class="mx-auto mx-lg-0"></figure>
							<div class="title mb-5">
								<h2>100% vocación <br> webcam</h2>
							</div>
							<div class="paragraf mb-5">
								<p>
									Somos profesionales en múltiples áreas y te respetamos a tí, a nuestro staff y a nuestro espacio. Tu crecimiento, resultados, calidad de vida y seguridad son nuestra prioridad.
								</p>
							</div>
							<div class="action">
								<a href="index.php/trabaja-con-nosotros/" class="link">
									Pregunta lo que quieras <i class="fa fa-angle-right"></i>
								</a>
							</div>
						</div>
					</li>
					<li>
						<div class="box-result text-center text-lg-left">
							<figure class="mb-5"><img src="<?php bloginfo('template_directory') ?>/images/png/wevalue.png" alt="" class="mx-auto mx-lg-0"></figure>
							<div class="title mb-5">
								<h2>Valoramos <br> tu confianza</h2>
							</div>
							<div class="paragraf mb-5">
								<p>
									Nos atrevemos a soñar junto a ti. En nosotros encuentras aliados y soporte de calidad. Te aseguramos que tu experiencia con nosotros será discreta y memorable.
								</p>
							</div>
							<div class="action">
								<a href="index.php/trabaja-con-nosotros/" class="link">
									Pregunta lo que quieras <i class="fa fa-angle-right"></i>
								</a>
							</div>
						</div>
					</li>
					<li>
						<div class="box-result text-center text-lg-left">
							<figure class="mb-5"><img src="https://casaadd.ddatechsolutions.com/wp-content/uploads/2020/08/wework.png" alt="" class="mx-auto mx-lg-0"></figure>
							<div class="title mb-5">
								<h2>Respetamos <br> tu trabajo</h2>
							</div>
							<div class="paragraf mb-5">
								<p>
									Tus pagos serán puntuales y no habrá cartas ocultas. Comprendemos que tienes metas por cumplir y te garantizamos que nuestro cumplimiento será impecable.
								</p>
							</div>
							<div class="action">
								<a href="index.php/trabaja-con-nosotros/" class="link">
									Pregunta lo que quieras <i class="fa fa-angle-right"></i>
								</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- ***ABOUT END*** -->
<!-- ***OFFER*** -->
<section class="offer">
	<div class="container">
		<div class="row">
			<div class="col py-5">
				<div class="box-benefit-intro py-5 cl-primary">
					<h2>Te ofrecemos</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="d-flex flex-column flex-lg-row">
		<div class="flex-lg-fill">
			<div class="box-offer box-offer-max" style="background-image: url('https://casaadd.ddatechsolutions.com/wp-content/uploads/2020/08/rooms-001.jpg')">
				<div class="title text-white p-5">
					<h2>Un estudio de calidad <br> en Bogotá</h2>
				</div>
			</div>
		</div>
		<div class="flex-lg-fill">
			<div class="d-flex flex-column">
				<div>
					<div class="row no-gutters">
						<div class="col-lg-6 d-none d-lg-inline-block">
							<div class="box-offer p-5">
								<div class="title">
									<h2>Las Mejores <br> condiciones <br> de limpieza</h2>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="box-offer box-offer-min"style="background-image: url('https://casaadd.ddatechsolutions.com/wp-content/uploads/2020/08/staff.jpg')">
								<div class="title text-white p-5 d-block d-lg-none">
									<h2>Las Mejores <br> condiciones <br> de limpieza</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div>
					<div class="row no-gutters">
						<div class="col-12 col-lg-6 d-lg-inline-block">
							<div class="box-offer box-offer-min"style="background-image: url('https://casaadd.ddatechsolutions.com/wp-content/uploads/2020/08/staff-002.jpg')">
								<div class="title text-white p-5 d-block d-lg-none">
									<h2>Equipo humano <br> que busca tu <br> crecimiento</h2>
								</div>
							</div>
						</div>
						<div class="col-lg-6 d-none d-lg-inline-block">
							<div class="box-offer p-5">
								<div class="title">
									<h2>Equipo humano <br> que busca <br> tu crecimiento</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col text-center py-5">
			<div class="action">
				<a href="index.php/trabaja-con-nosotros/" class="link">
					Cuéntanos si te interesa <i class="fa fa-angle-right"></i>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- ***OFFER END*** -->

<!-- ***BENEFIT*** -->
<section class="benefit bgc_grad--primary">
	<div class="container">
		<div class="row">
			<div class="col py-5">
				<div class="box-benefit-intro py-5 text-white">
					<h2>Beneficios</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col col py-3">
				<ul class="box-benefit box-benefit-slider">
					<li>
						<div class="card">
							<img src="https://casaadd.ddatechsolutions.com/wp-content/uploads/2020/08/benefics-02.jpg" alt="" class="card-img-top">
							<div class="card-body">
								<h2 class="card-title">Legalidad</h2>
								<p class="card-text">
									Cumplirás con todas las normas legales para que lo único que tengas que hacer es esforzarte por ser la mejor modelo webcam de todas.
								</p>
							</div>
						</div>
					</li>
					<li>
						<div class="card">
							<img src="https://casaadd.ddatechsolutions.com/wp-content/uploads/2020/08/benefics-03.jpg" alt="" class="card-img-top">
							<div class="card-body">
								<h2 class="card-title">Buenas finanzas</h2>
								<p class="card-text">
									Seguirás una contabilidad que te permitirá nacionalizar tus ganancias rápido y seguro con la posibilidad de negociar altas tasas de cambio del dólar.
								</p>
							</div>
						</div>
					</li>
					<li>
						<div class="card">
							<img src="https://casaadd.ddatechsolutions.com/wp-content/uploads/2020/08/benefics-04.jpg" alt="" class="card-img-top">
							<div class="card-body">
								<h2 class="card-title">Ambiente amigable</h2>
								<p class="card-text">
									En nuestras instalaciones siempre podrás hacer relaciones interpersonales de calidad, respeto y empatía.
								</p>
							</div>
						</div>
					</li>
					<li>
						<div class="card">
							<img src="https://casaadd.ddatechsolutions.com/wp-content/uploads/2020/08/benefics-05.jpg" alt="" class="card-img-top">
							<div class="card-body">
								<h2 class="card-title">Tu propio equipo</h2>
								<p class="card-text">
									Trabajamos como una unidad. Somos dedicados individual y colectivamente.
								</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col text-center py-5">
				<div class="action">
					<a href="index.php/trabaja-con-nosotros/" class="link text-white">
						Hablemos de tu futuro <i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ***BENEFIT END*** -->
<!-- ***BLOG*** -->
<section class="blog">
	<div class="container">
		<div class="row">
			<div class="col pt-5 py-lg-5">
				<div class="box-blog pt-5 py-lg-5">
					<div class="title-intro cl-primary mb-5">
						<h2>Bitacora de viaje webcam</h2>
					</div>
					<div class="paragraf">
						<p class="">
							Acá encuentras información, noticias y experiencias
							que te guiaran en tu proceso personal y profesional
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-11">
				<div class="box-blog-card d-flex flex-column flex-lg-row">
					<div class="flex-lg-fill order-2 order-lg-1">
						<img src="https://casaadd.ddatechsolutions.com/wp-content/uploads/2020/08/thum-min-003.jpg" alt="" class="img-fluid w-100">
					</div>
					<div class="flex-lg-fill order-1 order-lg-2">
						<div class="box-blog box-blog-info">
							<div class="date">
								<div class="day">29</div>
								<div class="info">Mazo <br> 2020</div>
							</div>
							<div class="title">
								<h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum.</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="box-blog-card d-flex flex-column flex-lg-row">
					<div class="flex-lg- order-1 order-lg-2">
							<img src="https://casaadd.ddatechsolutions.com/wp-content/uploads/2020/08/thum-min-002.jpg" alt="" class="img-fluid w-100">
					</div>
					<div class="flex-lg-fill order-lg-1">
						<div class="box-blog box-blog-info text-right">
							<div class="date">
								<div class="day">29</div>
								<div class="info">Mazo <br> 2020</div>
							</div>
							<div class="title">
								<h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum.</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="box-blog-card d-flex flex-column flex-lg-row">
					<div class="flex-lg-fill order-2 order-lg-1">
						<img src="https://casaadd.ddatechsolutions.com/wp-content/uploads/2020/08/thum-min-003.jpg" alt="" class="img-fluid w-100">
					</div>
					<div class="flex-lg-fill order-1 order-lg-2">
						<div class="box-blog box-blog-info">
							<div class="date">
								<div class="day">29</div>
								<div class="info">Mazo <br> 2020</div>
							</div>
							<div class="title">
								<h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum.</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row py-5">
			<div class="col text-center py-5">
				<div class="action">
					<a href="index.php/blog" class="link">
						Leer los artículos <i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ***BLOG END*** -->
<section class="w-100 prefotter bgc--primarylight box-shadow-top mb-5">
	<!-- ***CONTAINER*** -->
		<div class="box-prefotter d-lg-flex w-100 w-lg-70">
				<figure class="w-100 w-lg-70">
					<img src="https://casaadd.ddatechsolutions.com/wp-content/uploads/2020/08/banner-fot.jpg" class="img-fluid w-100" alt="">
				</figure>
				<div class="box-prefotter-info text-white align-self-center text-center w-100 w-lg-50 px-5 py-5 py-lg-0">
					<div class="title mb-3">
						<h2>Atrévete a soñar <br> con nosotros</h2>
					</div>
					<div class="paragraf mb-5">
						<p>
							Visita nuestras instalaciones en Bogotá y hablemos <br>
							abiertamente. Tus dudas son nuestras inquietudes.
						</p>
					</div>
					<div class="action mt-2">
						<a href="mailto:contacto@casaadd.com.co" target="_blank"  class="btn btn_primary">Agendar tu visita</a>
					</div>
				</div>
		</div>
	<!-- ***CONTAINER*** -->
</section>
<?php
get_footer();
