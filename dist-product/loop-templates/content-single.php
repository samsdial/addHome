<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">
		<?php understrap_entry_footer(); ?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<?php understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer pt-5 pb-4">
	<?php wp_link_pages(); ?>
		<div class="d-lg-flex align-items-center">
			<div class="w-100 mb-3 mb-lg-0">
				<i class="fa fa-bookmark cl-primary"></i> <span>Blog,</span>
				<?php understrap_entry_footer(); ?>
			</div>
			<div class="flex-shrink-1">
				<ul class="list-shared list-group list-group-horizontal-sm align-items-end">
					<li class="list-group-item"><span class="text-uppercase">Compartir</span></li>
					<li class="list-group-item"><a href="https://www.facebook.com/share.php?u=$<?php the_title(); ?>&t=$<?php the_title(); ?>"><i class="fa fa-facebook-f"></i></a></li>
					<li class="list-group-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li class="list-group-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li class="list-group-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div>
		</div>
	</footer><!-- .entry-footer -->
	<div class="row">
		<div class="col pb-5 ">
			<div class="line"></div>
		</div>
	</div>
</article><!-- #post-## -->
