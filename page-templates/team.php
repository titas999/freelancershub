<?php
/**
 * Template Name: Team
 */
get_header();

$freelancershub_current_page_id = get_the_ID();
$freelancershub_page_meta = get_post_meta($freelancershub_current_page_id, 'freelancershub_web_apps_details_meta', true);
$freelancershub_page = get_post($freelancershub_current_page_id);
$freelancershub_page_title = $freelancershub_page->post_title;
$freelancershub_page_description = $freelancershub_page->post_content;


?>

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

    <!-- Start Team Page Section -->
    <section class="team-page-section">
        <div class="container">
            <div class="row">
                <?php

                $args = array(
                    'posts_per_page' => -1,
                    'ignore_sticky_posts' => 1,
                    'post_type' => 'teammember',
                    'paged' => $paged
                );

                $query = new WP_Query($args);
                if (have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();

                        ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="team-item-area">
                                <div class="team-image">
                                    <?php if (has_post_thumbnail()){
                                        the_post_thumbnail();
                                    } ?>
                                </div>

                                <div class="team-content">
                                    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                    <span>CEO & Founder</span>

                                    <ul class="team-social">
                                        <li>
                                            <a href="#">
                                                <i class="flaticon-facebook-logo"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="flaticon-twitter"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="flaticon-paypal"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="flaticon-linkedin-letters"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                wp_reset_query();
                ?>

            </div>
        </div>

        <div class="team-animation">
            <div class="shape-img1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/7.png"
                                         alt="image"></div>
            <div class="shape-img2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/9.png"
                                         alt="image"></div>
            <div class="shape-img3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/7.png"
                                         alt="image"></div>
            <div class="shape-img4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/9.png"
                                         alt="image"></div>
            <div class="shape-img5"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/9.png"
                                         alt="image"></div>
        </div>
    </section>
    <!-- End Team Page Section -->

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