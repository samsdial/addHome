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

	<footer class="entry-footer py-5">
		<div class="row align-items-center">
			<div class="col">
				<i class="fa fa-bookmark cl-primary"></i> <span>Blog,</span>
				<?php understrap_entry_footer(); ?>
			</div>
			<div class="col">
				<ul class="list-group list-group-horizontal-sm align-items-end">
					<li class="list-group-item"><span>Compartir</span></li>
					<li class="list-group-item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
					<li class="list-group-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li class="list-group-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
				</ul>
			</div>
		</div>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
