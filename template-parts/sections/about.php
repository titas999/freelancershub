<?php
global $freelancershub_section_id;
$freelancershub_section_meta = get_post_meta($freelancershub_section_id,'freelancershub_section_about',true);
$freelancershub_about_heading = $freelancershub_section_meta['freelancershub_about_title'];
$freelancershub_about_subheading = $freelancershub_section_meta['freelancershub_about_subtitle'];
$freelancershub_about_content_heading = $freelancershub_section_meta['freelancershub_about_content_heading'];
$freelancershub_about_content = $freelancershub_section_meta['freelancershub_about_content'];
$freelancershub_about_btn_text = $freelancershub_section_meta['freelancershub_about_btn_text'];
$freelancershub_about_btn_url = $freelancershub_section_meta['freelancershub_about_btn_url'];
$freelancershub_about_image = $freelancershub_section_meta['freelancershub_about_image'];

?>
<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-image.png" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="about-area-content">
                    <span>About Us</span>
                    <h3>We are Dynamic Team of SEO Agency</h3>
                    <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore  dolore magna aliqua.</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-6 col--6">
                        <div class="single-fun-facts">
                            <h3><span class="odometer" data-count="1165">00</span><span class="sign-icon">+</span></h3>
                            <p>Project Completed</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-6 col-6">
                        <div class="single-fun-facts">
                            <h3><span class="odometer" data-count="2665">00</span><span class="sign-icon">+</span></h3>
                            <p>Satisfied Clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>