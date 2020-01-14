<?php get_header(); ?>

<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2><?php wp_title(''); ?></h2>
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

<?php
while (have_posts()):
    the_post();
?>
<section class="blog-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog-details-desc">
                    <div class="article-image">
                        <?php if (has_post_thumbnail()){
                            the_post_thumbnail();
                        } ?>
                    </div>

                    <div class="article-content">
                        <div class="entry-meta">
                            <ul>
                                <li><span><?php _e('Posted On:','freelancershub'); ?></span> <a href="#"><?php echo get_the_date()?></a></li>
                                <li><span><?php _e('Posted By:','freelancershub'); ?></span> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo (get_the_author_meta('display_name')); ?></a></li>
                            </ul>
                        </div>

                        <h3><?php the_title() ?></h3>

                        <?php the_content(); ?>
                    </div>

                    <div class="article-footer">

                        <div class="article-share">
                            <ul class="social">
                                <li><span>Share:</span></li>
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="post-navigation">
                        <div class="navigation-links">
                            <div class="nav-previous">
                                <a href="#"><i class="fa fa-arrow-left"></i> Prev Post</a>
                            </div>

                            <div class="nav-next">
                                <a href="#">Next Post <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>
<?php endwhile; ?>

<?php get_footer(); ?>