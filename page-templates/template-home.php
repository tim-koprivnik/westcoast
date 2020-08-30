<?php
/**
 * Template Name: Template: Home
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

<div class="home-hero-banner-top">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xl-7 col-lg-8">
                <div class="skip-bins-holder">
                    <div class="overlay-image-arrow">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/home-hero-arrow-up.png" alt="" class="img" width="100%">
                    </div>
                    <div class="title">
                        <i class="fa fa-arrow-circle-up"></i> Skip Bins instant quoute
                    </div>
                    <div class="description">
                        Simply type your suburb above andd you will be provided with an instant price
                    </div>
                </div>
            </div>
            <div class="offset-xl-1 col-xl-4 col-lg-4">
                <div class="seven-day-skip-info">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/home-hero-right-info.png" alt="" Xclass="img" width="100%">
                    <div class="title">7-Day skip bin hire direct to your home covering Perth to Albany</div>
                </div>
            </div>
        </div>

        <div class="home-hero-slider">
            <div class="slider">
                <div class="slider-wrapper">
                    <div class="slide">
                        <div class="image"></div>
                        <div class="entry-content">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/home-slider-truck-1.png" alt="" class="img">
                            </div>
                            <div class="info">
                                We deliver the right skip bin for your residential and commercial projects.
                            </div>
                            <div class="slider-nav">
                                <a href="#" target="blank">
                                    <i class="fa fa-arrow-circle-left"></i>
                                </a>
                                <a href="#" target="blank">
                                    <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-product-info">
    <div class="home-special-offer-background-overlay">
        <div class="container">
            <div class="home-special-offer">
                <div class="discount-circle">
                    <div class="save">Save</div>
                    <div class="percent">20%</div>
                </div>
                <div class="entry-content">
                    <div class="title">15 Day Storm Special on 9m3 Skip Bins</div>
                    <div class="description">BIN Services - Perth, Fermantle, Kwinana, Rockingham, Mandurah, Pinjarra, Waroona, Harvey, Australing, Bunbury, Busseltion, Margaret River</div>
                    <a href="#" class="button">Find Out More Information</a>
                    <a href="#" class="button button-sm">Find Out More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="home-select-bin">
        <div class="container">
            <h2><i class="fa fa-arrow-circle-down"></i> Select the right skip bin for your project</h2>
            <div class="home-bins">
                <div class="home-bin">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/product-placeholder.png" alt="product placeholder" width="100%" class="bin-img">
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="title">4 Cubic Metre Skip</div>
                            <ul>
                                <li>Garden & Household clean-up</li>
                                <li>Heavy Loads (dirt, concrete, bricks or rubble)</li>
                                <li>Ideal for narrow alleys or small streets</li>
                                <li>Building Sites</li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="home-skip-circles">
                                <div class="row">
                                    <div class="offset-lg-0 col-lg-6 offset-md-2 col-md-4 offset-sm-0 col-sm-6 col-6">
                                        <div class="circle first">
                                            <div class="content-holder">
                                                Approx x 4 trailers
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/home-trailer.png" alt="home-trailer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-4 col-sm-6 col-6">
                                        <div class="circle second">
                                            <div class="content-holder">
                                                Approx x 16 wheelie bins
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/home-bin.png" alt="home-bin">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="abs-holder-button">
                        Get a quote for this skip
                    </a>
                </div>
                <div class="home-bin">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/6m3-Skip-Bin.png" alt="product placeholder" width="100%" class="bin-img">
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="title">6 Cubic Metre Skip</div>
                            <ul>
                                <li>Garden & Household clean-up</li>
                                <li>Heavy Loads (dirt, concrete, bricks or rubble)</li>
                                <li>Ideal for narrow alleys or small streets</li>
                                <li>Building Sites</li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="home-skip-circles">
                                <div class="row">
                                    <div class="offset-lg-0 col-lg-6 offset-md-2 col-md-4 offset-sm-0 col-sm-6 col-6">
                                        <div class="circle first">
                                            <div class="content-holder">
                                                Approx x 6 trailers
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/home-trailer.png" alt="home-trailer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-4 col-sm-6 col-6">
                                        <div class="circle second">
                                            <div class="content-holder">
                                                Approx x 24 wheelie bins
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/home-bin.png" alt="home-bin">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="abs-holder-button">
                        Get a quote for this skip
                    </a>
                </div>
                <div class="home-bin">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/9m3-Skip-Bin.png" alt="product placeholder" width="100%" class="bin-img">
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="title">9 Cubic Metre Skip</div>
                            <ul>
                                <li>Garden & Household clean-up</li>
                                <li>Heavy Loads (dirt, concrete, bricks or rubble)</li>
                                <li>Ideal for narrow alleys or small streets</li>
                                <li>Building Sites</li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="home-skip-circles">
                                <div class="row">
                                    <div class="offset-lg-0 col-lg-6 offset-md-2 col-md-4 offset-sm-0 col-sm-6 col-6">
                                        <div class="circle first">
                                            <div class="content-holder">
                                                Approx x 9 trailers
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/home-trailer.png" alt="home-trailer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-4 col-sm-6 col-6">
                                        <div class="circle second">
                                            <div class="content-holder">
                                                Approx x 32 wheelie bins
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/home-bin.png" alt="home-bin">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="abs-holder-button">
                        Get a quote for this skip
                    </a>
                </div>
                <div class="home-bin">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/15m3-Skip-Bin.png" alt="product placeholder" width="100%" class="bin-img">
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="title">15m3 Hook Lift Bin</div>
                            <ul>
                                <li>Garden & Household clean-up</li>
                                <li>Heavy Loads (dirt, concrete, bricks or rubble)</li>
                                <li>Ideal for narrow alleys or small streets</li>
                                <li>Building Sites</li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="home-skip-circles">
                                <div class="row">
                                    <div class="offset-lg-0 col-lg-6 offset-md-2 col-md-4 offset-sm-0 col-sm-6 col-6">
                                        <div class="circle first">
                                            <div class="content-holder">
                                                Approx x 15 trailers
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/home-trailer.png" alt="home-trailer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-4 col-sm-6 col-6">
                                        <div class="circle second">
                                            <div class="content-holder">
                                                Approx x 64 wheelie bins
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/home-bin.png" alt="home-bin">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="abs-holder-button">
                        Get a quote for this skip
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-we-accept">
    <div class="container">
        <div class="title-holder Xalign-items-end">
            <h2>We accept the following waste</h2>
            <a href="#" class="button outline">read the full list of acceptable waste</a>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="circle">
                    <div class="abs-holder">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/home-we-accept-1.png" alt="we-accept-icon">
                    </div>
                </div>
                <div class="title">Commercial Waste</div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="circle">
                    <div class="abs-holder">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/home-we-accept-2.png" alt="we-accept-icon">
                    </div>
                </div>
                <div class="title">Building Waste</div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="circle">
                    <div class="abs-holder">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/home-we-accept-3.png" alt="we-accept-icon">
                    </div>
                </div>
                <div class="title">Green Waste</div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="circle">
                    <div class="abs-holder">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/home-we-accept-4.png" alt="we-accept-icon">
                    </div>
                </div>
                <div class="title">Household Waste</div>
            </div>
            <a href="#" class="button button-sm outline">read the full list of acceptable waste</a>
        </div>
    </div>
</div>

<?php
get_footer();