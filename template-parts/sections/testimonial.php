<?php
global $freelancershub_section_id;
$freelancershub_section_meta = get_post_meta($freelancershub_section_id,'freelancershub_section_testimonial',true);
$freelancershub_testimonial_heading = $freelancershub_section_meta['freelancershub_testimonial_section_title'];
$freelancershub_testimonial_subheading = $freelancershub_section_meta['freelancershub_testimonial_section_subtitle'];
$freelancershub_testimonial_content = $freelancershub_section_meta['freelancershub_testimonial_section_content'];

?>

<section class="testimonial-section ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <?php if ($freelancershub_testimonial_heading){ ?>
                <div class="testimonial-content-area">
                    <span><?php echo esc_html($freelancershub_testimonial_subheading);?></span>
                    <h3><?php echo esc_html($freelancershub_testimonial_heading);?></h3>
                    <?php echo apply_filters('the_content', $freelancershub_testimonial_content);?>
                </div>
                <?php } ?>
            </div>

            <div class="col-lg-8">
                <div class="testimonial-slides owl-carousel owl-theme">
                    <div class="testimonial-single-item">
                        <div class="testimonial-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/client-image/1.jpg" alt="image">
                        </div>

                        <div class="testimonial-content-text">
                            <h3>R.Mortein</h3>
                            <span>Product Manager</span>
                            <div class="icon">
                                <i class="flaticon-quote"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse  gravida.</p>
                        </div>
                    </div>

                    <div class="testimonial-single-item">
                        <div class="testimonial-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/client-image/2.jpg" alt="image">
                        </div>

                        <div class="testimonial-content-text">
                            <h3>Edward Bold</h3>
                            <span>CEO & Founder</span>
                            <div class="icon">
                                <i class="flaticon-quote"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse  gravida.</p>
                        </div>
                    </div>

                    <div class="testimonial-single-item">
                        <div class="testimonial-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/client-image/3.jpg" alt="image">
                        </div>

                        <div class="testimonial-content-text">
                            <h3>Mahindra jhon</h3>
                            <span>Ceo & Sustainable designer</span>
                            <div class="icon">
                                <i class="flaticon-quote"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse  gravida.</p>
                        </div>
                    </div>

                    <div class="testimonial-single-item">
                        <div class="testimonial-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/client-image/1.jpg" alt="image">
                        </div>

                        <div class="testimonial-content-text">
                            <h3>Lee Munroe</h3>
                            <span>Underwriter</span>
                            <div class="icon">
                                <i class="flaticon-quote"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse  gravida.</p>
                        </div>
                    </div>

                    <div class="testimonial-single-item">
                        <div class="testimonial-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/client-image/4.jpg" alt="image">
                        </div>

                        <div class="testimonial-content-text">
                            <h3>Meg Lanning</h3>
                            <span>Agent Manager</span>
                            <div class="icon">
                                <i class="flaticon-quote"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse  gravida.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>