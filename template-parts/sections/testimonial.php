<?php
global $freelancershub_section_id;
$freelancershub_section_meta = get_post_meta($freelancershub_section_id, 'freelancershub_section_testimonial', true);
$freelancershub_testimonial_heading = $freelancershub_section_meta['freelancershub_testimonial_section_title'];
$freelancershub_testimonial_subheading = $freelancershub_section_meta['freelancershub_testimonial_section_subtitle'];
$freelancershub_testimonial_content = $freelancershub_section_meta['freelancershub_testimonial_section_content'];

?>

<section class="testimonial-section ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <?php if ($freelancershub_testimonial_heading) { ?>
                    <div class="testimonial-content-area">
                        <span><?php echo esc_html($freelancershub_testimonial_subheading); ?></span>
                        <h3><?php echo esc_html($freelancershub_testimonial_heading); ?></h3>
                        <?php echo apply_filters('the_content', $freelancershub_testimonial_content); ?>
                    </div>
                <?php } ?>
            </div>

            <div class="col-lg-8">
                <div class="testimonial-slides owl-carousel owl-theme">
                    <?php

                    $args = array(
                        'posts_per_page' => 8,
                        'ignore_sticky_posts' => 1,
                        'post_type' => 'testimonial',
                        'paged' => $paged
                    );

                    $query = new WP_Query($args);
                    if (have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();

                            ?>
                            <div class="testimonial-single-item">
                                <div class="testimonial-image">
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail();
                                    } ?>
                                </div>

                                <div class="testimonial-content-text">
                                    <h3><?php the_title() ?></h3>
                                    <div class="icon">
                                        <i class="flaticon-quote"></i>
                                    </div>
                                    <p><?php the_content(); ?></p>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    wp_reset_query();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>