<!-- Start Footer Section -->
<section class="footer-section ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer-area">
                    <?php if (is_active_sidebar('sidebar-1')){
                        dynamic_sidebar('sidebar-1');
                    } ?>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item-area">
                    <?php if (is_active_sidebar('sidebar-2')){
                        dynamic_sidebar('sidebar-2');
                    } ?>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item-area">
                    <?php if (is_active_sidebar('sidebar-3')){
                        dynamic_sidebar('sidebar-3');
                    } ?>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer-item-area">
                <?php if (is_active_sidebar('sidebar-4')){
                    dynamic_sidebar('sidebar-4');
                } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="default-animation">
        <div class="shape-img1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/12.svg" alt="image"></div>
        <div class="shape-img2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/13.svg" alt="image"></div>
        <div class="shape-img3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/14.png" alt="image"></div>
        <div class="shape-img4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/15.png" alt="image"></div>
        <div class="shape-img5"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/2.png" alt="image"></div>
    </div>
</section>
<!-- End Footer Section -->

<!-- Start Copy Right Section -->
<div class="copyright-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <?php $freelancershub_footer_copy = get_option( 'freelancershub_themes_options' ); ?>
                <p>
                    <?php echo $freelancershub_footer_copy['footer_copyright_1'];?>
                </p>
            </div>

            <div class="col-lg-6 col-md-6">
                <ul>
                    <?php echo $freelancershub_footer_copy['footer_copyright_2'];?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Copy Right Section -->

<!-- Start Go Top Section -->
<div class="go-top">
    <i class="fas fa-chevron-up"></i>
    <i class="fas fa-chevron-up"></i>
</div>
<!-- End Go Top Section -->
<?php wp_footer(); ?>
</body>
</html>