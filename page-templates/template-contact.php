<?php
/**
 * Template Name: Template: Contact
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
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

<div class="wrapper contact-us" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php // get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<div class="col-lg-7">
				<main class="site-main" id="main">

					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'page' );
					}
					?>

				</main><!-- #main -->
			</div>

			<div class="offset-lg-1 col-lg-4 col-12">
                <div class="iframe-holder">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3332.7796832677254!2d115.68761931573275!3d-33.35070519978716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a31e25ce15611a5%3A0xc8e04c2e2e970369!2sWest%20Coast%20Waste!5e0!3m2!1sen!2ssi!4v1598952883997!5m2!1sen!2ssi" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="iframe-holder">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3332.7796832677254!2d115.68761931573275!3d-33.35070519978716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a31e25ce15611a5%3A0xc8e04c2e2e970369!2sWest%20Coast%20Waste!5e0!3m2!1sen!2ssi!4v1598952883997!5m2!1sen!2ssi" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="iframe-holder">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3332.7796832677254!2d115.68761931573275!3d-33.35070519978716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a31e25ce15611a5%3A0xc8e04c2e2e970369!2sWest%20Coast%20Waste!5e0!3m2!1sen!2ssi!4v1598952883997!5m2!1sen!2ssi" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
			</div>

			<!-- Do the right sidebar check -->
			<?php // get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
