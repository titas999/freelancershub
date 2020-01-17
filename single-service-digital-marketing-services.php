<?php
get_header(); ?>
<section class="services-section">
    <div class="container">

        <div class="row">
            <?php

            $args = array(
                'posts_per_page' => 6,
                'ignore_sticky_posts' => 1,
                'post_type' => 'dmservice',
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

                            <a href="<?php the_permalink(); ?>"><h3><?php the_title() ?></h3></a>
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
<?php get_footer(); ?>
