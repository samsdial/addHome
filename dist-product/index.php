<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<section class="w-100 banner bgc--primary">
	<!-- ***CONTAINER*** -->
		<div class="box-banner d-flex">
				<div class="box-banner-info text-white align-self-center">
					<div class="title mb-3">
						<h1>Casa ADD</h1>
					</div>
					<div class="paragraf mb-5">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus sit laboriosam ratione, velit harum dolorem quia doloribus distinctio, explicabo perferendis sunt sed tenetur ipsum ipsa enim molestias quaerat incidunt eius.
						</p>
					</div>
					<div class="action">
						<button class="btn btn_secondary">Conoce Más</button>
					</div>
				</div>
			<figure >
				<img src="https://picsum.photos/750/850" alt="">
			</figure>
		</div>
	<!-- ***CONTAINER*** -->
</section>
<!-- ***ABOUT*** -->
<section class="about">
	<div class="container">
		<div class="row">
			<div class="col py-5">
				<div class="box-result-intro py-5">
					<h2> Con nosotros, tu dedicación tiene resultados</h2>
				</div>
			</div>
		</div>
		<div class="row pb-5">
			<div class="col-md-4 mb-5">
				<div class="box-result">
					<figure class="mb-5"><img src="https://picsum.photos/240/240" alt=""></figure>
					<div class="title mb-5">
						<h2>Lorem ipsum dolor sit.</h2>
					</div>
					<div class="paragraf mb-5">
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, velit. Ipsa tempora culpa fugit voluptatibus atque. Animi, sapiente laudantium. Cum in saepe soluta nostrum enim incidunt quaerat nulla eaque! Dolorem, quia. Distinctio omnis nemo voluptate, labore hic, aspernatur iste incidunt ducimus perferendis vel recusandae rem blanditiis saepe nisi veniam aut!
						</p>
					</div>
					<div class="action">
						<a href="" class="link">
							pregunta lo que quieras >
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-5">
				<div class="box-result">
					<figure class="mb-5"><img src="https://picsum.photos/240/240" alt=""></figure>
					<div class="title mb-5">
						<h2>Lorem ipsum dolor sit.</h2>
					</div>
					<div class="paragraf mb-5">
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, velit. Ipsa tempora culpa fugit voluptatibus atque. Animi, sapiente laudantium. Cum in saepe soluta nostrum enim incidunt quaerat nulla eaque! Dolorem, quia. Distinctio omnis nemo voluptate, labore hic, aspernatur iste incidunt ducimus perferendis vel recusandae rem blanditiis saepe nisi veniam aut!
						</p>
					</div>
					<div class="action">
						<a href="" class="link">
							pregunta lo que quieras >
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-5">
				<div class="box-result">
					<figure class="mb-5"><img src="https://picsum.photos/240/240" alt=""></figure>
					<div class="title mb-5">
						<h2>Lorem ipsum dolor sit.</h2>
					</div>
					<div class="paragraf mb-5">
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, velit. Ipsa tempora culpa fugit voluptatibus atque. Animi, sapiente laudantium. Cum in saepe soluta nostrum enim incidunt quaerat nulla eaque! Dolorem, quia. Distinctio omnis nemo voluptate, labore hic, aspernatur iste incidunt ducimus perferendis vel recusandae rem blanditiis saepe nisi veniam aut!
						</p>
					</div>
					<div class="action">
						<a href="" class="link">
							pregunta lo que quieras >
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ***ABOUT END*** -->
<!-- ***OFFER*** -->
<section class="offer">
	<div class="d-flex flex-column flex-lg-row">
		<div class="flex-lg-fill">
			<div class="box-offer box-offer-max" style="background-image: url('https://picsum.photos/1080/858')">
				<div class="title text-white p-5">
					<h2>Un estudio de calidad en Bogotá</h2>
				</div>
			</div>
		</div>
		<div class="flex-lg-fill">
			<div class="d-flex flex-column">
				<div>
					<div class="row no-gutters">
						<div class="col">
							<div class="box-offer p-5">
								<div class="title">
									<h2>Las Mejores condiciones de limpieza</h2>
								</div>
							</div>
						</div>
						<div class="col">
							<!-- <figure><img src="https://picsum.photos/600/500" class="img-fluid" alt=""></figure> -->
							<div class="box-offer box-offer-min"style="background-image: url('https://picsum.photos/600/600')"></div>
						</div>
					</div>
				</div>
				<div>
					<div class="row no-gutters">
						<div class="col">
							<!-- <figure><img src="https://picsum.photos/600/500" class="img-fluid" alt=""></figure> -->
							<div class="box-offer box-offer-min"style="background-image: url('https://picsum.photos/600/600')"></div>
						</div>
						<div class="col">
							<div class="box-offer p-5">
								<div class="title">
									<h2>Equipo humano que busca tu crecimiento</h2>
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
				<a href="" class="link">
					pregunta lo que quieras >
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
					<h2>Con nosotros, tu dedicación tiene resultados</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<ul class="box-benefit box-benefit-slider">
					<li>
						<div class="card">
							<img src="https://picsum.photos/240/240" alt="" class="card-img-top">
							<div class="card-body">
								<h2 class="card-title">Lorem, ipsum dolor.</h2>
								<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti qui sed ab architecto molestias aliquam impedit, perferendis accusamus unde. Architecto commodi quas reprehenderit saepe vitae quis suscipit incidunt molestiae explicabo.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="card">
							<img src="https://picsum.photos/240/240" alt="" class="card-img-top">
							<div class="card-body">
								<h2 class="card-title">Lorem, ipsum dolor.</h2>
								<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti qui sed ab architecto molestias aliquam impedit, perferendis accusamus unde. Architecto commodi quas reprehenderit saepe vitae quis suscipit incidunt molestiae explicabo.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="card">
							<img src="https://picsum.photos/240/240" alt="" class="card-img-top">
							<div class="card-body">
								<h2 class="card-title">Lorem, ipsum dolor.</h2>
								<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti qui sed ab architecto molestias aliquam impedit, perferendis accusamus unde. Architecto commodi quas reprehenderit saepe vitae quis suscipit incidunt molestiae explicabo.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="card">
							<img src="https://picsum.photos/240/240" alt="" class="card-img-top">
							<div class="card-body">
								<h2 class="card-title">Lorem, ipsum dolor.</h2>
								<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti qui sed ab architecto molestias aliquam impedit, perferendis accusamus unde. Architecto commodi quas reprehenderit saepe vitae quis suscipit incidunt molestiae explicabo.</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col text-center py-5">
				<div class="action">
					<a href="" class="link text-white">
						pregunta lo que quieras >
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
			<div class="col py-5">
				<div class="box-benefit-intro py-5">
					<div class="title">
						<h2>Bitacora</h2>
					</div>
					<div class="paragraf">
						<p class="">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum voluptates provident ipsa, impedit minima id amet cumque nobis repellat enim molestiae? Cum velit totam voluptatem? Obcaecati commodi sunt vero earum.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-8">
				<div class="d-flex flex-column flex-lg-row">
					<div class="flex-lg-fill">
							<img src="https://picsum.photos/532/300" alt="" class="img-fluid">
					</div>
					<div class="flex-lg-fill">
						<div class="box-blog box-blog-info">
							<div class="date">
								<div class="day">29</div>
								<div class="info">Mazo 2020</div>
							</div>
							<div class="title">
								<h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum.</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="d-flex flex-column flex-lg-row">
					<div class="flex-lg-fill order-lg-2">
							<img src="https://picsum.photos/532/300" alt="" class="img-fluid">
					</div>
					<div class="flex-lg-fill order-lg-1">
						<div class="box-blog box-blog-info text-right">
							<div class="date">
								<div class="day">29</div>
								<div class="info">Mazo 2020</div>
							</div>
							<div class="title">
								<h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum.</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col text-center py-5">
				<div class="action">
					<a href="" class="link">
						Leer los articulos >
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ***BLOG END*** -->

<section class="w-100 banner bgc--primarylight">
	<!-- ***CONTAINER*** -->
		<div class="box-banner d-flex">
			<figure>
				<img src="https://picsum.photos/850/850" alt="">
			</figure>
				<div class="box-banner-info text-white align-self-center">
					<div class="title mb-3">
						<h2>Atrevete a soñar con nosotros</h2>
					</div>
					<div class="paragraf mb-5">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus sit laboriosam ratione, velit harum dolorem quia doloribus distinctio, explicabo perferendis sunt sed tenetur ipsum ipsa enim molestias quaerat incidunt eius.
						</p>
					</div>
					<div class="action">
						<button class="btn btn_primary">Agendar</button>
					</div>
				</div>

		</div>
	<!-- ***CONTAINER*** -->
</section>
<?php
get_footer();
