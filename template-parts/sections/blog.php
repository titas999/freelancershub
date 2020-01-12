<?php
global $freelancershub_section_id;
$freelancershub_section_meta = get_post_meta($freelancershub_section_id,'freelancershub_section_blog',true);
$freelancershub_blog_heading = $freelancershub_section_meta['freelancershub_latest_blog_title'];
$freelancershub_blog_subheading = $freelancershub_section_meta['freelancershub_latest_blog_subtitle'];

?>

<section class="blog-section">
    <div class="container">
        <?php if ($freelancershub_blog_heading){ ?>
        <div class="section-title">
            <span><?php echo esc_html($freelancershub_blog_subheading);?></span>
            <h3><?php echo esc_html($freelancershub_blog_heading);?></h3>
        </div>
        <?php } ?>

        <div class="row">
            <?php
            $args = array(
                'posts_per_page' => 3,
                'ignore_sticky_posts' => 1,
                'paged' => $paged
            );

            $query = new WP_Query($args);
            if (have_posts()):
            while ($query->have_posts()):
            $query->the_post();
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-image">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        }
                        ?>
                    </div>

                    <div class="single-blog-item">
                        <ul class="date">
                            <li><?php echo get_the_date();?></li>
                        </ul>

                        <ul class="blog-list">
                            <li>
                                <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><i class="fa fa-user-alt"></i><?php echo (get_the_author_meta('display_name')); ?></a>
                            </li>
                            <li>
                                <i class="far fa-comments"></i>
                                <?php
                                $freelancershub_comment_count = get_comments_number();
                                if ($freelancershub_comment_count<=1) {
                                    printf(
                                        $freelancershub_comment_count .' '.
                                        esc_html__( 'Comment', 'freelancershub' )
                                    );
                                } else {
                                    printf(
                                        $freelancershub_comment_count.' '.
                                        esc_html__( 'Comments', 'freelancershub' )
                                    );
                                }
                                ?>
                            </li>
                        </ul>

                        <div class="blog-content">
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                            <p><?php the_excerpt(); ?></p>
                        </div>

                        <div class="blog-btn">
                            <a href="<?php the_permalink(); ?>" class="blog-btn-one"><?php _e('Read More','freelancershub'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            endwhile;
            endif;
            wp_reset_query();
            ?>

        </div>
    </div>
</section>