<?php
global $freelancershub_section_id;
$freelancershub_section_meta = get_post_meta($freelancershub_section_id,'freelancershub_section_banner',true);
$freelancershub_banner_heading = $freelancershub_section_meta['freelancershub_banner_title'];
$freelancershub_banner_description = $freelancershub_section_meta['freelancershub_banner_description'];
$freelancershub_banner_button_text = $freelancershub_section_meta['freelancershub_banner_btn_text'];
$freelancershub_banner_button_url = $freelancershub_section_meta['freelancershub_banner_btn_url'];

?>

<div class="main-banner">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="main-banner-content">
                            <h1>Digital Agency with Excellence Service</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,  eiusmod tempor incididunt ut labore.</p>

                            <div class="banner-btn">
                                <a href="#" class="default-btn-one">More About Us</a>
                                <a href="https://www.youtube.com/watch?v=_ysd-zHamjk" class="video-btn popup-youtube">Watch Video <i class="flaticon-play-button"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="banner-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/saas-image/arrow.png" class="wow fadeInLeft" data-wow-delay="0.6s" alt="arrow">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/saas-image/box1.png" class="wow fadeInUp" data-wow-delay="0.6s" alt="box1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/saas-image/boy1.png" class="wow fadeInLeft" data-wow-delay="0.6s" alt="boy1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/saas-image/boy2.png" class="wow zoomIn" data-wow-delay="0.6s" alt="boy2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/saas-image/boy3.png" class="wow bounceIn" data-wow-delay="0.6s" alt="boy3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/saas-image/digital-screen.png" class="wow fadeInDown" data-wow-delay="0.6s" alt="digital-screen">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/saas-image/filter1.png" class="wow zoomIn" data-wow-delay="0.6s" alt="filter1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/saas-image/filter2.png" class="wow fadeInUp" data-wow-delay="0.6s" alt="filter2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/saas-image/filter3.png" class="wow rotateIn" data-wow-delay="0.6s" alt="filter3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/saas-image/girl1.png" class="wow fadeInUp" data-wow-delay="0.6s" alt="girl1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/saas-image/girl2.png" class="wow zoomIn" data-wow-delay="0.6s" alt="girl2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/saas-image/monitor.png" class="wow fadeInRight" data-wow-delay="0.6s" alt="monitor">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/saas-image/4.png" class="wow zoomIn" data-wow-delay="0.6s" alt="4">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/saas-image/7.png" class="wow zoomIn" data-wow-delay="0.6s" alt="7">

                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/saas-image/main-image.png" class="wow zoomIn" data-wow-delay="0.6s" alt="main-image.png">
                        </div>
                    </div>
                </div>

                <div class="banner-bg-text">Freelancers Hub</div>
            </div>
        </div>
    </div>

    <div class="shape-img1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/1.png" alt="image"></div>
    <div class="shape-img2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/2.png" alt="image"></div>
    <div class="shape-img3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/3.png" alt="image"></div>
    <div class="shape-img4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/4.png" alt="image"></div>
    <div class="shape-img5"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/5.png" alt="image"></div>
    <div class="shape-img6"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/6.png" alt="image"></div>
    <div class="shape-img7"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/2.png" alt="image"></div>
    <div class="shape-img8"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/10.png" alt="image"></div>
    <div class="shape-img9"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/7.png" alt="image"></div>
    <div class="shape-img10"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/5.png" alt="image"></div>
    <div class="shape-img11"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/11.png" alt="image"></div>
</div>