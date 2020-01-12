<?php
global $freelancershub_section_id;
$freelancershub_section_meta = get_post_meta($freelancershub_section_id,'freelancershub_section_features',true);
$freelancershub_features_heading = $freelancershub_section_meta['freelancershub_features_title'];
$freelancershub_features_subheading = $freelancershub_section_meta['freelancershub_features_subtitle'];
$freelancershub_features_description = $freelancershub_section_meta['freelancershub_features_description'];

?>

<section class="features-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="features-content-area">
                    <span><?php echo esc_html($freelancershub_features_subheading);?></span>
                    <h3><?php echo esc_html($freelancershub_features_heading);?></h3>
                    <?php echo apply_filters('the_content', $freelancershub_features_description);?>
                    <?php $features_btn_text = $freelancershub_section_meta['freelancershub_features_btn_text'];
                    if ($features_btn_text){
                    ?>
                    <div class="features-btn">
                        <a href="<?php echo esc_url($freelancershub_section_meta['freelancershub_features_btn_url']);?>" class="features-btn-one"><?php echo esc_html($features_btn_text);?></a>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <?php
                    $color = array(
                            'bg-f1eff8','bg-fbe6d4','bg-f0fffc','bg-f8e1eb'
                    )
                    ?>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-features-item bg-f1eff8">
                            <div class="icon">
                                <i class="flaticon-seo"></i>
                            </div>

                            <h3>Seo Consultancy</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-features-item bg-fbe6d4">
                            <div class="icon">
                                <i class="flaticon-analytics"></i>
                            </div>

                            <h3>Competitor Analysis</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-features-item bg-f0fffc">
                            <div class="icon">
                                <i class="flaticon-laptop"></i>
                            </div>

                            <h3>Social Media Marketing</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-features-item bg-f8e1eb">
                            <div class="icon">
                                <i class="flaticon-analysis-1"></i>
                            </div>

                            <h3>Competitor Analysis</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="features-animation">
        <div class="shape-img1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/8.png" alt="image"></div>
        <div class="shape-img2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/5.png" alt="image"></div>
    </div>
</section>