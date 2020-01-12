<?php
global $freelancershub_section_id;
$freelancershub_section_meta = get_post_meta($freelancershub_section_id, 'freelancershub_section_services', true);
$freelancershub_services_heading = $freelancershub_section_meta['freelancershub_services_title'];
$freelancershub_services_subheading = $freelancershub_section_meta['freelancershub_services_subtitle'];
?>

<section class="services-section">
    <div class="container">
        <?php if ($freelancershub_services_heading) { ?>
            <div class="section-title">
                <span><?php echo esc_html($freelancershub_services_subheading); ?></span>
                <h3><?php echo esc_html($freelancershub_services_heading); ?></h3>
            </div>
        <?php } ?>

        <div class="row">
            <?php

            $args = array(
                'posts_per_page' => 6,
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

                            <h3><?php the_title() ?></h3>
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
        <div class="shape-img1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/12.svg"
                                     alt="image"></div>
        <div class="shape-img2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/13.svg"
                                     alt="image"></div>
        <div class="shape-img3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/14.png"
                                     alt="image"></div>
        <div class="shape-img4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/15.png"
                                     alt="image"></div>
        <div class="shape-img5"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/2.png"
                                     alt="image"></div>
    </div>
</section>