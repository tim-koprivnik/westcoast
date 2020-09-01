<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php // get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<div class="col-lg-7">
				<main class="site-main" id="main">

					<?php
					if ( have_posts() ) {
					?>
						<header class="page-header">
							<h1>Recent Blog Posts</h1>
							<?php
							//the_archive_title( '<h1 class="page-title">', '</h1>' );
							// the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
						</header>

						<div class="row">
							<?php
							// Start the loop.
							while ( have_posts() ) {
							?>
							<div class="col-lg-6">
							<?php 
								the_post(); 
								get_template_part( 'loop-templates/content', get_post_format() );
							?>
							</div>
							<?php
							}
							} else {
								get_template_part( 'loop-templates/content', 'none' );
							}
							?>
						</div>

				</main><!-- #main -->
			</div>
			
			<div class="offset-lg-1 col-lg-4 col-11">
				<div class="sidebar-blog-categories">
					<h3>Blog Categories</h3>
					<ul>
						<?php 
							$categories = get_categories();
							foreach($categories as $category) {
								echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
							}
						?>
					</ul>
				</div>
			</div>

		</div><!-- .row -->

		<div class="post-navigation-options">
			<?php
			// Display the pagination component.
			understrap_pagination();
			// Do the right sidebar check.
			get_template_part( 'global-templates/right-sidebar-check' );
			?>
		</div>

	</div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();
