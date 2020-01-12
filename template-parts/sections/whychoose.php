<?php
global $freelancershub_section_id;
$freelancershub_section_meta = get_post_meta($freelancershub_section_id,'freelancershub_section_call2action',true);
$freelancershub_whychoose_heading = $freelancershub_section_meta['freelancershub_whychoose_title'];
$freelancershub_whychoose_subheading = $freelancershub_section_meta['freelancershub_whychoose_subtitle'];
$freelancershub_whychoose_content = $freelancershub_section_meta['freelancershub_whychoose_content'];
?>

<section class="choose-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="choose-content-area">
                    <span><?php echo esc_html($freelancershub_whychoose_subheading);?></span>
                    <h3><?php echo esc_html($freelancershub_whychoose_heading);?></h3>
                    <?php echo apply_filters('the_content', $freelancershub_whychoose_content);?>

                    <div class="choose-text">
                        <i class="flaticon-check-mark"></i>
                        <h4>First Working Process</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor abore et dolore magna aliqua.</p>
                    </div>

                    <div class="choose-text">
                        <i class="flaticon-check-mark"></i>
                        <h4>Dedicated Team Member</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor abore et dolore magna aliqua.</p>
                    </div>

                    <div class="choose-text">
                        <i class="flaticon-check-mark"></i>
                        <h4>24/7 Support</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor abore et dolore magna aliqua.</p>
                    </div>

                    <div class="choose-btn">
                        <a href="#" class="default-btn-one">Discover More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="choose-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/choose-image.png" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
