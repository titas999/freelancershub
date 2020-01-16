<?php get_header(); ?>

<!-- Start Error Area -->
<section class="error-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="error-content">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/404.png" alt="<?php _e('error', 'freelancershub'); ?>">

                    <h3><?php _e('Page Not Found', 'freelancershub'); ?></h3>
                    <p><?php _e('The page you are looking for might have been removed had its name changed or is temporarily unavailable.', 'freelancershub'); ?></p>

                    <a href="<?php echo esc_url(home_url('/')); ?>" class="default-btn-one">
                        <?php _e('Go to Home', 'freelancershub'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Error Area -->

<?php get_footer(); ?>