<?php get_header(); ?>

<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <?php

                    if ( is_home() && is_front_page() ) :
                        ?>
                        <h1 class="page-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                    <?php
                    else :
                        ?>
                        <h1 class="page-title"><?php wp_title(''); ?></h1>
                    <?php
                    endif; ?>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Home','freelancershub'); ?></a></li>
                        <li><?php wp_title(''); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Page Area -->
<section class="blog-page-area ptb-100">
    <div class="container">
        <div class="row">
            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post();
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-image">
                        <?php if (has_post_thumbnail()){
                            the_post_thumbnail();
                        } ?>
                    </div>

                    <div class="single-blog-item">
                        <ul class="date">
                            <li><?php echo get_the_date()?></li>
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
                                <h3><?php the_title() ?></h3>
                            </a>
                            <p><?php the_excerpt(); ?></p>
                        </div>

                        <div class="blog-btn">
                            <a href="<?php the_permalink(); ?>" class="blog-btn-one"><?php _e('Read More','freelancershub') ?></a>
                        </div>
                    </div>
                </div>
            </div>
                <?php endwhile;
                endif;
                ?>

            <div class="col-lg-12 col-md-12">
                <div class="pagination-area">
                    <?php freelancershub_pagination();
                    wp_reset_query();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Page Area -->

<?php get_footer(); ?>