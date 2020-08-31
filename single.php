<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="post-header-holder">
	<header class="entry-header" <?php if ( has_post_thumbnail() ) { ?> 
			style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);" 
			<?php } ?>>
		<div class="container">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	</header>
</div>

<div class="post-header-metadata">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-5">
				<i class="fa fa-calendar"></i> Posted <?php echo get_the_date('d.m.Y'); ?>
			</div>
			<div class="col-lg-6 col-7">
				<i class="fa fa-bars"></i> Posted in <?php echo get_the_category()[0]->cat_name; ?>
			</div>
		</div>
	</div>
</div>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php // get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<div class="col-lg-7">
				<main class="site-main" id="main">
					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'single' );
						// understrap_post_nav();

						// If comments are open or we have at least one comment, load up the comment template.
						// if ( comments_open() || get_comments_number() ) {
						// 	comments_template();
						// }
					}
					?>
				</main><!-- #main -->
			</div>

			<div class="offset-lg-1 col-lg-4 col-11">
				<div class="sidebar-blog-categories">
					<h3>Blog Categories</h3>
					<ul>
						<li>lorem ipsum</li>
						<li>lorem ipsum</li>
						<li>lorem ipsum</li>
						<li>lorem ipsum</li>
						<li>lorem ipsum</li>
						<li>lorem ipsum</li>
					</ul>
				</div>
			</div>

			<!-- Do the right sidebar check -->
			<?php // get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

		<div class="post-navigation-options">
			<?php echo understrap_post_nav(); ?>
		</div>

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
