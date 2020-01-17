<?php
/**
 * Template Name: Services
 */
get_header(); ?>

    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2><?php wp_title(''); ?></h2>
                        <ul>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Home', 'freelancershub'); ?></a>
                            </li>
                            <li><?php wp_title(''); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Choose Section -->
    <section class="choose-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="choose-content-area">
                        <span>Why Choose Us</span>
                        <h3>Outstanding Digital Experience</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas accumsan lacus vel facilisis. </p>

                        <div class="choose-text">
                            <i class="flaticon-check-mark"></i>
                            <h4>First Working Process</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor abore et
                                dolore magna aliqua.</p>
                        </div>

                        <div class="choose-text">
                            <i class="flaticon-check-mark"></i>
                            <h4>Dedicated Team Member</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor abore et
                                dolore magna aliqua.</p>
                        </div>

                        <div class="choose-text">
                            <i class="flaticon-check-mark"></i>
                            <h4>24/7 Support</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor abore et
                                dolore magna aliqua.</p>
                        </div>

                        <div class="choose-btn">
                            <a href="#" class="default-btn-one">Discover More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="choose-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/choose-image.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Choose Section -->

    <!-- Start Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="section-title">
                <span>Services</span>
                <h3>How We Can Help?</h3>
            </div>

            <div class="row">
                <?php

                $args = array(
                    'posts_per_page' => -1,
                    'ignore_sticky_posts' => 1,
                    'post_type' => 'service',
                    'paged' => $paged
                );

                $query = new WP_Query($args);
                if (have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();

                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-services-box">
                                <div class="icon bg-faddd4">
                                    <i class="flaticon-landing-page"></i>
                                </div>

                                <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                        <?php
                    }
                }
                wp_reset_query();
                ?>

            </div>
        </div>

        <div class="default-animation">
            <div class="shape-img1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/12.svg" alt="image"></div>
            <div class="shape-img2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/13.svg" alt="image"></div>
            <div class="shape-img3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/14.png" alt="image"></div>
            <div class="shape-img4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/15.png" alt="image"></div>
            <div class="shape-img5"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/2.png" alt="image"></div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- Start Subscribe Section -->
    <section class="subscribe-section">
        <div class="container-fluid">
            <div class="subscribe-area-content">
                <div class="subscribe-content">
                    <span class="sub-title">Get Started Instantly!</span>
                    <h2>Get the only new update from this newsletter</h2>

                    <form class="newsletter-form">
                        <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL"
                               required autocomplete="off">

                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Subscribe Section -->

    <!-- Partner section -->
    <div class="partner-section pt-100">
        <div class="container">
            <div class="partner-slider owl-carousel owl-theme">
                <div class="partner-item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partnar/1.png" alt="partner">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partnar/2.png" alt="partner">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partnar/3.png" alt="partner">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partnar/4.png" alt="partner">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partnar/1.png" alt="partner">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partnar/5.png" alt="partner">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner section -->

<?php get_footer(); ?>