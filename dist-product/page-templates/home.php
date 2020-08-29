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
	<?php if ( get_field( 'one_item' ) == 1 ) : ?>
		<?php // echo 'true'; ?>
		<?php if( have_rows('banner') ): ?>
		<ul class="js-home-slider">
		<?php while( have_rows('banner') ): the_row();?>
			<li>
				<div class="box-banner d-lg-flex w-100 w-lg-70">
					<figure  class="order-1 order-lg-2 w-100 w-lg-70">
						<img src="<?php the_sub_field('image'); ?>" class="img-fluid w-100" alt="">
					</figure>
					<div class="order-2 order-lg-1 box-banner-info text-white align-self-center text-center text-lg-left w-100 w-lg-70 py-5 py-lg-0">
						<div class="title mb-3">
							<h1>
							<?php the_sub_field('title'); ?>
							</h1>
						</div>
						<div class="paragraf mb-5 mr-lg-5 pr-lg-5">
							<p>
							<?php the_sub_field('text'); ?>
							</p>
						</div>
						<div class="action">
							<a href="<?php the_sub_field('ulr_link'); ?>" class="btn btn_secondary"><?php the_sub_field('button_text'); ?></a>
						</div>
					</div>
				</div>
			</li>
			<?php endwhile; ?>
		</ul>
		<?php endif; ?>
	<?php else : ?>
		<?php // echo 'false'; ?>
		<?php if( have_rows('banner') ): ?>
		<?php while( have_rows('banner') ): the_row();?>
			<div class="box-banner d-lg-flex w-100 w-lg-70">
				<figure  class="order-1 order-lg-2 w-100 w-lg-70">
					<img src="<?php the_sub_field('image'); ?>" class="img-fluid w-100" alt="">
				</figure>
				<div class="order-2 order-lg-1 box-banner-info text-white align-self-center text-center text-lg-left w-100 w-lg-70 py-5 py-lg-0">
					<div class="title mb-3">
						<h1>
						<?php the_sub_field('title'); ?>
						</h1>
					</div>
					<div class="paragraf mb-5 mr-lg-5 pr-lg-5">
						<p>
						<?php the_sub_field('text'); ?>
						</p>
					</div>
					<div class="action">
						<a href="<?php the_sub_field('ulr_link'); ?>" class="btn btn_secondary"><?php the_sub_field('button_text'); ?></a>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		<?php endif; ?>
	<?php endif; ?>

		<div class="box-social">
			<ul class="box-social-list">
				<li>
					<a href="<?php the_field('instagram', 'option'); ?>" target="_blank" class="">
						<span class="text-social">Instagram</span>
						<span class="icon icon-insta"></span>
					</a>
				</li>
				<li>
					<a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="">
						<span class="text-social">Facebook</span>
						<span class="icon icon-face"></span>
					</a>
				</li>
			</ul>
		</div>
		<div class="whatsaap">
			<a href="https://api.whatsapp.com/send?phone=57<?php the_field('phone', 'option'); ?>&text=&source=&data=&app_absent=" target="_blank" class="">
				<img src="<?php bloginfo('template_directory') ?>/images/png/whatsaap.png"  alt="">
			</a>
		</div>
	<!-- ***CONTAINER*** -->
</section>
<!-- ***ABOUT -- Con nosotros*** -->
<section class="about mb-5 pb-5 box-shadow">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-7">
				<div class="box-result-intro py-5">
					<h2>
						<!-- Con nosotros, tu dedicación tiene resultados -->
						<?php the_field( 'about_title' ); ?>
					</h2>
				</div>
			</div>
		</div>
		<div class="row pb-5">
			<div class="col-12 mb-5">
				<?php if( have_rows('about_list') ): ?>
					<ul class="box-result-slider">
						<?php while( have_rows('about_list') ): the_row();?>
							<li>
								<div class="box-result text-center text-lg-left">
									<figure class="mb-5">
										<img src="<?php the_sub_field('image'); ?>" alt="" class="mx-auto mx-lg-0">
									</figure>
									<div class="title mb-5">
										<h2>
											<?php the_sub_field('tilte'); ?>
										</h2>
									</div>
									<div class="paragraf mb-5">
										<p>
											<?php the_sub_field('paragraf'); ?>
										</p>
									</div>
									<div class="action">
										<a href="<?php the_sub_field('link_botton'); ?>" class="link">
											<?php the_sub_field('text_link'); ?> <i class="fa fa-angle-right"></i>
										</a>
									</div>
								</div>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
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
					<h2>
						<?php the_field( 'offer_title' ); ?>
					</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="row no-gutters">
		<?php if ( have_rows( 'offer_item' ) ) : ?>
			<?php while ( have_rows( 'offer_item' ) ) : the_row(); ?>
				<div class="col-12 col-lg-7">
					<div class="box-offer box-offer-max" style="background-image: url('')">
						<div class="title text-white p-5">
							<?php the_sub_field( 'titulo' ); ?>
						</div>
						<?php if ( have_rows( 'gallery' ) ) : ?>
							<div class="gallery">
								<ul class="js-slider-offer">
									<?php while ( have_rows( 'gallery' ) ) : the_row(); ?>
									<li>
										<div class="box-offer box-offer-max" style="background-image: url('<?php the_sub_field( 'image' ); ?>')">
										</div>
									</li>
									<?php endwhile; ?>
								</ul>
							</div>
						<?php endif; ?>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		<div class="col-12 col-lg-5">
			<div class="d-flex flex-column">
				<div>
					<div class="row no-gutters">
						<?php if ( have_rows( 'offer_item_two' ) ) : ?>
							<?php while ( have_rows( 'offer_item_two' ) ) : the_row(); ?>
								<div class="col-lg-6 d-none d-lg-inline-block">
									<div class="box-offer p-5">
										<div class="title">
											<?php the_sub_field( 'titulo' ); ?>
										</div>
									</div>
								</div>
								<div class="col-12 col-lg-6">
									<div class="box-offer box-offer-min" style="background-image: url('<?php the_sub_field( 'image' ); ?>')">
										<div class="title text-white p-5 d-block d-lg-none">
											<?php the_sub_field( 'titulo' ); ?>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
				<div>
					<div class="row no-gutters">
						<?php if ( have_rows( 'offer_item_three' ) ) : ?>
							<?php while ( have_rows( 'offer_item_three' ) ) : the_row(); ?>
								<div class="col-12 col-lg-6 d-lg-inline-block">
									<div class="box-offer box-offer-min" style="background-image: url('<?php the_sub_field( 'image' ); ?>')">
										<div class="title text-white p-5 d-block d-lg-none">
											<?php the_sub_field( 'titulo' ); ?>
										</div>
									</div>
								</div>
								<div class="col-lg-6 d-none d-lg-inline-block">
									<div class="box-offer p-5">
										<div class="title">
											<?php the_sub_field( 'titulo' ); ?>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col text-center py-5">
			<div class="action">
			<?php $offer_text_link = get_field( 'offer_text_link' ); ?>
			<?php if ( $offer_text_link ) : ?>
				<a href="<?php echo esc_url( $offer_text_link); ?>" class="link">
					<!-- Cuéntanos si te interesa  -->
					<?php the_field( 'offer_text' ); ?>
					<i class="fa fa-angle-right"></i>
				</a>
			<?php endif; ?>
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
				<?php if( have_rows('benefit_list') ): ?>
					<ul class="box-benefit box-benefit-slider">
					<?php while( have_rows('benefit_list') ): the_row();?>
						<li>
							<div class="card">
								<img src="<?php the_sub_field('image'); ?>" alt="" class="card-img-top">
								<div class="card-body">
									<h2 class="card-title">
										<?php the_sub_field('title'); ?>
									</h2>
									<p class="card-text">
										<?php the_sub_field('paragraf'); ?>
									</p>
								</div>
							</div>
						</li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
		<div class="row">
			<div class="col text-center py-5">
				<div class="action">
				<?php $benefit_boton_url = get_field( 'benefit_boton_url' ); ?>
					<?php if ( $benefit_boton_url ) : ?>
						<a href="<?php echo esc_url( $benefit_boton_url); ?>" class="link text-white">
							<?php the_field( 'benefit_boton_text' ); ?>
							<i class="fa fa-angle-right"></i>
						</a>
					<?php endif; ?>
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
						<h2><?php the_field( 'blog_title' ); ?></h2>
					</div>
					<div class="paragraf">
						<p>
							<?php the_field( 'blog_paragraf' ); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-11">
			<?php $blog_one = get_field( 'blog_one' ); ?>
			<?php if ( $blog_one ) : ?>
				<?php foreach ( $blog_one as $post ) : ?>
					<?php setup_postdata ( $post ); ?>
					<div class="box-blog-card d-flex flex-column flex-lg-row">
					<div class="flex-lg-fill order-2 order-lg-1">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php echo get_the_post_thumbnail_url( $blog_one->ID, 'full' ) ?>" alt="<?php the_title(); ?>" class="img-fluid w-100">
						</a>
					</div>
					<div class="flex-lg-fill order-1 order-lg-2">
						<div class="box-blog box-blog-info">
							<div class="date">
								<div class="day">
								<?php echo get_the_date('j'); ?>
								</div>
								<div class="info"><?php echo get_the_date('F'); ?> <br> <?php echo get_the_date('Y'); ?></div>
							</div>
							<div class="title">
								<h2><?php the_title(); ?></h2>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
			<?php $blog_two = get_field( 'blog_two' ); ?>
			<?php if ( $blog_two ) : ?>
				<?php foreach ( $blog_two as $post ) : ?>
					<?php setup_postdata ( $post ); ?>
					<div class="box-blog-card d-flex flex-column flex-lg-row">
						<div class="flex-lg- order-1 order-lg-2">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php echo get_the_post_thumbnail_url( $blog_two->ID, 'full' ) ?>" alt="<?php the_title(); ?>" class="img-fluid w-100">
							</a>
						</div>
						<div class="flex-lg-fill order-lg-1">
							<div class="box-blog box-blog-info text-right">
								<div class="date">
									<div class="day">
									<?php echo get_the_date('j'); ?>
									</div>
									<div class="info"><?php echo get_the_date('F'); ?> <br> <?php echo get_the_date('Y'); ?></div>
								</div>
								<div class="title">
									<h2><?php the_title(); ?></h2>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
			<?php $blog_three = get_field( 'blog_three' ); ?>
			<?php if ( $blog_three ) : ?>
				<?php foreach ( $blog_three as $post ) : ?>
					<?php setup_postdata ( $post ); ?>
					<div class="box-blog-card d-flex flex-column flex-lg-row">
					<div class="flex-lg-fill order-2 order-lg-1">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php echo get_the_post_thumbnail_url( $blog_three->ID, 'full' ) ?>" alt="<?php the_title(); ?>" class="img-fluid w-100">
						</a>
					</div>
					<div class="flex-lg-fill order-1 order-lg-2">
						<div class="box-blog box-blog-info">
							<div class="date">
								<div class="day">
								<?php echo get_the_date('j'); ?>
								</div>
								<div class="info"><?php echo get_the_date('F'); ?> <br> <?php echo get_the_date('Y'); ?></div>
							</div>
							<div class="title">
								<h2><?php the_title(); ?></h2>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>

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
<!-- ***PREFotter*** -->
<section class="w-100 prefotter bgc--primarylight box-shadow-top mb-5">
	<!-- ***CONTAINER*** -->
		<div class="box-prefotter d-lg-flex w-100 w-lg-70">
				<figure class="w-100 w-lg-70">
					<img src="<?php the_field('prefooter_image', 'option'); ?>" class="img-fluid w-100" alt="Atrevete a Soñar">
				</figure>
				<div class="box-prefotter-info text-white align-self-center text-center w-100 w-lg-50 px-5 py-5 py-lg-0">
					<div class="title mb-3">
						<?php the_field('prefooter_titulo', 'option'); ?>
					</div>
					<div class="paragraf mb-5">
						<?php the_field('texto_prefooter', 'option'); ?>
					</div>
					<div class="action mt-2">
						<a href="<?php the_field('prefooter_link', 'option'); ?>" target="_blank"  class="btn btn_primary"><?php the_field('prefooter_text', 'option'); ?></a>
					</div>
				</div>
		</div>
	<!-- ***CONTAINER*** -->
</section>
<!-- ***PREFotter END*** -->
<?php
get_footer();
