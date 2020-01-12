<?php
global $freelancershub_section_id;
$freelancershub_section_meta = get_post_meta($freelancershub_section_id,'freelancershub_section_tab',true);
$freelancershub_counter_heading = $freelancershub_section_meta['freelancershub_tab_section_title'];
$freelancershub_counter_subheading = $freelancershub_section_meta['freelancershub_tab_section_subtitle'];
?>

<section class="tab-section">
    <div class="container">
        <?php if (isset($freelancershub_counter_heading)){ ?>
        <div class="section-title">
            <span><?php echo esc_html($freelancershub_counter_subheading);?></span>
            <h3><?php echo esc_html($freelancershub_counter_heading);?></h3>
        </div>
        <?php } ?>

        <div class="tab boosting-list-tab">
            <ul class="tabs">
                <li><a href="#">
                        <i class="flaticon-analysis-2"></i>
                        <span>Real-Time-Analytics</span>
                    </a></li>

                <li class="bg-eff7e9"><a href="#">
                        <i class="flaticon-hand"></i>
                        <span>Pay-Per-Click</span>
                    </a></li>

                <li class="bg-fff8f0"><a href="#">
                        <i class="flaticon-digital-marketing"></i>
                        <span>Online Marketing</span>
                    </a></li>

                <li class="bg-ecfaf7"><a href="#">
                        <i class="flaticon-email"></i>
                        <span>Email Marketing</span>
                    </a></li>

                <li class="bg-f2f0fb"><a href="#">
                        <i class="flaticon-network"></i>
                        <span>Social Marketing</span>
                    </a></li>

                <li class="bg-c5ebf9"><a href="#">
                        <i class="flaticon-analysis-1"></i>
                        <span>Digital Marketing</span>
                    </a></li>
            </ul>

            <div class="tab_content">
                <div class="tabs_item">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="tab-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tab/1.jpg" alt="image">
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="content">
                                <h2>Real-Time Analytics</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="tab-text-content">
                                        <i class="flaticon-analysis-2"></i>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="tab-text-content">
                                        <i class="flaticon-analysis-2"></i>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-btn">
                                <a href="#" class="default-btn-one">Discover More</a>
                            </div>
                        </div>
                    </div>

                    <div class="tab-shape">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tab/shape.png" alt="image">
                    </div>
                </div>

                <div class="tabs_item">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="tab-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tab/2.jpg" alt="image">
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="content">
                                <h2>Pay-Per Click</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="tab-text-content">
                                        <i class="flaticon-analysis-2"></i>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="tab-text-content">
                                        <i class="flaticon-analysis-2"></i>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-btn">
                                <a href="#" class="default-btn-one">Discover More</a>
                            </div>
                        </div>
                    </div>

                    <div class="tab-shape">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tab/shape.png" alt="image">
                    </div>
                </div>

                <div class="tabs_item">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="tab-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tab/3.jpg" alt="image">
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="content">
                                <h2>Online Marketting</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="tab-text-content">
                                        <i class="flaticon-analysis-2"></i>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="tab-text-content">
                                        <i class="flaticon-analysis-2"></i>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-btn">
                                <a href="#" class="default-btn-one">Discover More</a>
                            </div>
                        </div>
                    </div>

                    <div class="tab-shape">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tab/shape.png" alt="image">
                    </div>
                </div>

                <div class="tabs_item">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="tab-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tab/4.jpg" alt="image">
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="content">
                                <h2>Email Marketting</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="tab-text-content">
                                        <i class="flaticon-analysis-2"></i>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="tab-text-content">
                                        <i class="flaticon-analysis-2"></i>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-btn">
                                <a href="#" class="default-btn-one">Discover More</a>
                            </div>
                        </div>
                    </div>

                    <div class="tab-shape">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tab/shape.png" alt="image">
                    </div>
                </div>

                <div class="tabs_item">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="tab-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tab/5.jpg" alt="image">
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="content">
                                <h2>Social Marketting</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="tab-text-content">
                                        <i class="flaticon-analysis-2"></i>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="tab-text-content">
                                        <i class="flaticon-analysis-2"></i>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-btn">
                                <a href="#" class="default-btn-one">Discover More</a>
                            </div>
                        </div>
                    </div>

                    <div class="tab-shape">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tab/shape.png" alt="image">
                    </div>
                </div>

                <div class="tabs_item">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="tab-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tab/6.jpg" alt="image">
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="content">
                                <h2>Digital Marketting</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="tab-text-content">
                                        <i class="flaticon-analysis-2"></i>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="tab-text-content">
                                        <i class="flaticon-analysis-2"></i>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-btn">
                                <a href="#" class="default-btn-one">Discover More</a>
                            </div>
                        </div>
                    </div>

                    <div class="tab-shape">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tab/shape.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>