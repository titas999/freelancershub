<section class="team-section ptb-100">
    <div class="container">
        <div class="section-title">
            <span>Team</span>
            <h3>Meet Our Team</h3>
        </div>

        <div class="row">
            <?php

            $args = array(
                'posts_per_page' => 3,
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
        <div class="shape-img1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/7.png" alt="image"></div>
        <div class="shape-img2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/9.png" alt="image"></div>
        <div class="shape-img3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/7.png" alt="image"></div>
        <div class="shape-img4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/9.png" alt="image"></div>
        <div class="shape-img5"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/9.png" alt="image"></div>
    </div>
</section>