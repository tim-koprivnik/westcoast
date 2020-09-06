<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Just+Another+Hand&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
	<script defer src="https://unpkg.com/swiper/swiper-bundle.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<div class="top-header">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-5 col-md-6">
						<div class="mobile-logo-holder">
							<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo"></a>
						</div>
					</div>
					<div class="col-lg-7 col-md-6">
						<div class="top-header-contact">
							<a href="tel:1800 927 831"><i class="fa fa-phone"></i> 1800 927 831</a>
							<a href="mailto:info@westcoastwaste.com.au" class="top-header-contact-email"><i class="fa fa-envelope-o"></i> info@westcoastwaste.com.au</a>
							<div class="mobile-menu-dropdown">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
									<!-- <span class="navbar-toggler-icon"></span> -->
									<span>Menu </span><i class="fa fa-bars"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<nav id="main-nav" class="navbar navbar-expand-xl navbar-dark " aria-labelledby="main-nav-label"> <!-- default: navbar-expand-md; removing "bg-primary" -->

			<div class="container">

				<div class="search-input-holder">
					<!-- <div class="title">Quote: </div> -->
					<input type="text" placeholder="Quote: Type Suburb or Postcode" id="header-product-autocomplete">
					<span class="vertical-line"></span> 
					<div id="search-input-reset-btn">
						<i class="fa fa-times"></i>
					</div>
				</div>
			
				<div class="mobile-menu-dropdown">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
						<!-- <span class="navbar-toggler-icon"></span> -->
						<span>Menu </span><i class="fa fa-bars"></i>
					</button>
				</div>

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			
			</div><!-- .container -->

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->

	<div id="quick-select-bins">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<div class="steps">
						<div class="step one active">
							<div class="title">
								<i class="fa fa-arrow-circle-up"></i>
								Step 1: <strong>Suburb Selected</strong>
							</div>
							<div class="icon">
								<i class="fa fa-check-circle"></i>
							</div>
						</div>
						<div class="step two">
							<div class="title">
								<i class="fa fa-arrow-circle-down"></i>
								Step 2: <strong>Select the skip that suits your needs</strong>
							</div>
							<div class="icon">
								<i class="fa fa-check-circle"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="offset-lg-1 col-lg-4">
					<div class="price-info">
						All prices below reflect the price you will pay to hire a skip-bin from West Coast Waste for 7 days, delivered to your floor.
					</div>
				</div>
			</div>
			
			<div class="select-all-bins">
				<div class="row">
					<div class="col-lg-9">
						<div class="row">
							<?php
								$args = array(
									'post_type' => 'product',
									'orderby' => 'title',
									'order' => 'ASC',
									'product_cat' => 'Bin',
									'posts_per_page' => 5,
								);
								$index = 0;
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post(); 
								global $product;
								$index++;
								$variation_html = '';

								if ( $product->is_type( 'variable' ) ) {
									$available_variations = $product->get_available_variations();
									foreach ( $available_variations as $variations ) {
										$attribute_depo = $variations['attributes']['attribute_depo'];
										$attribute_distance = $variations['attributes']['attribute_distance'];
										$price_html = $variations['price_html'];
										$variation_html .= '<div
																data-depo="$attribute_depo"
																data-distance="$attribute_distance">';
										$variation_html .= $price_html;
										$variation_html .= '</div>';
									}
								}

							?>
							<div class="col-lg-4 col-md-6 col-sm-12">
								<a href="<?php the_permalink(); ?>">
									<div class="quick-select-bin">
										<div class="title">
											<?php the_title(); ?>
										</div>
										<div class="img">
											<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' ); ?>
											<img src="<?php echo $image[0]; ?>">
										</div>
										<div class="price">
											<?php echo $product->get_price_html(); ?>
											<?php // echo $variation_html ?>
										</div>
										<div class="hire">
											Up to 7 Day Hire inc. GST
										</div>
										<div class="meta-info">
											<div class="info">
												<div>
													<img src="<?php echo get_template_directory_uri(); ?>/img/home-trailer.png" alt="home-trailer">
												</div>
												x <?php the_field('approx_trailer'); ?> 
											</div>
											<div class="info">
												<div>
													<img src="<?php echo get_template_directory_uri(); ?>/img/home-bin.png" alt="home-bin" width="66%;">
												</div>
												x <?php the_field('approx_bin'); ?> 
											</div>
										</div>
										<a href="<?php the_permalink(); ?>" class="quick-button">
											Order this skip bin
										</a>
									</div>
								</a>
							</div> <!-- .col -->
							<?php endwhile; ?>
							<?php wp_reset_query(); ?>
						</div> <!-- .row -->
					</div>
				</div>
			</div>
		</div>
	</div>
