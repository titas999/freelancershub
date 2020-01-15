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
<section class="project-section pt-100">
    <div class="container">
        <?php
        if (have_posts()){
            while(have_posts()){
                the_post();
                the_content();
            }
        }
        ?>
    </div>
</section>

<?php get_footer(); ?>