<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

    <div class="footer-we-accept">
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

    <div class="footer-testimonial-holder">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8 offset-lg-2 offset-1 col-10 offset-1">
                    <div class="testimonial">
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="quote">"Amazing customer service and very good price will be definitely getting another one through these guys when needed so much help thankyou."</div>
                        <div class="author">Damon, facebook review</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-contact-form-holder">
        <div class="container">
            <div class="row">
                <div class="offset-1 col-10 offset-1">
                    <div class="footer-contact-form">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="contact">
                                        <h2>Want to know more?</h2>
                                        <p>To find out more about our services please contact us using any of the methods below, or alternatively fill in the contact form and a representative will be in touch as soon as possible.</p>
                                        <a href="tel:1800 927 831"><i class="fa fa-phone"></i> Call today 1800 927 831</a>
                                        <a href="mailto:info@westcoastwaste.com.au"><i class="fa fa-envelope"></i> Email info@westcoastwaste.com.au</a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form">
                                        <?php echo do_shortcode('[contact-form-7 id="24" title="Footer Contact Form"]'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            © Copyright West Coast Waste 2020 <span>//</span> <a href="#">Terms & Conditions</a> <span>//</span> <a href="https://thedude23.github.io/tk_portfolio/" target="blank">Website by Tim Koprivnik</a> 
        </div>
    </div>

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

