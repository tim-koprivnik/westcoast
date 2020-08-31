<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php //echo esc_attr( $container ); ?> container" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php // get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<div class="col-lg-7">
				<main class="site-main" id="main">

					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
					}
					?>

				</main><!-- #main -->
			</div>

			<div class="offset-lg-1 col-lg-4 col-11">
				<div class="right-sidebar">
					<div class="discount-circle">
						<div class="save">Save</div>
						<div class="percent">20%</div>
					</div>
					<div class="entry-content">
						<div class="title">15 Day Storm Special on 9m3 Skip Bins</div>
						<div class="description">BIN Services - Perth, Fermantle, Kwinana, Rockingham, Mandurah, Pinjarra, Waroona, Harvey, Australing, Bunbury, Busseltion, Margaret River</div>
						<a href="#" class="button outline">Find Out More</a>
						<a href="#" class="button button-sm outline">Find Out More</a>
					</div>
				</div>
			</div>

			<!-- Do the right sidebar check -->
			<?php // get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
