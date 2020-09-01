<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

			<?php // echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

			<div class="archive-post-image" <?php if ( has_post_thumbnail() ) { ?> 
			style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);" 
			<?php } ?>>
				
			</div>

			<?php
			the_title(
				sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
				'</a></h2>'
			);
			?>

			<?php if ( 'post' === get_post_type() ) : ?>

				<div Xclass="entry-meta">
					<?php // understrap_posted_on(); ?>
				</div><!-- .entry-meta -->

			<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php // the_excerpt(); ?>
		<?php the_post_summary(); ?>

		<div class="entry-metadata">
			<div class="row align-items-center">
				<div class="col-6">
					<a href="<?php the_permalink(); ?>" class="button">Read Post</a>
				</div>
				<div class="col-6">
					<div class="date">
						<i class="fa fa-calendar"></i> <?php echo get_the_date('d.m.Y'); ?>
					</div>
				</div>
			</div>
		</div>

		<?php
		// wp_link_pages(
		// 	array(
		// 		'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
		// 		'after'  => '</div>',
		// 	)
		// );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php // understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
