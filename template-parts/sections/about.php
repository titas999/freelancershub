<?php
global $freelancershub_section_id;
$freelancershub_section_meta = get_post_meta($freelancershub_section_id, 'freelancershub_section_about', true);
$freelancershub_about_heading = $freelancershub_section_meta['freelancershub_about_title'];
$freelancershub_about_subheading = $freelancershub_section_meta['freelancershub_about_subtitle'];
$freelancershub_about_content = $freelancershub_section_meta['freelancershub_about_content'];
$freelancershub_about_image = $freelancershub_section_meta['freelancershub_about_image'];

?>
<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-image">
                    <img src="<?php echo wp_kses_post($freelancershub_about_image); ?>"
                         alt="<?php echo esc_html($freelancershub_about_subheading); ?>">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <?php if ($freelancershub_about_heading) { ?>
                    <div class="about-area-content">
                        <span><?php echo esc_html($freelancershub_about_subheading); ?></span>
                        <h3><?php echo esc_html($freelancershub_about_heading); ?></h3>
                        <?php echo apply_filters('the_content', $freelancershub_about_content); ?>
                    </div>
                <?php } ?>

                <div class="row">
                    <?php
                    $freelancershub_about_counter = $freelancershub_section_meta['about_group'];
                    if (is_array($freelancershub_about_counter)) {
                        foreach ($freelancershub_about_counter as $freelancershub_count_item) {
                            ?>
                            <div class="col-lg-6 col-6 col--6">
                                <div class="single-fun-facts">
                                    <h3><span class="odometer"
                                              data-count="<?php echo esc_html($freelancershub_count_item['counter_number']); ?>">00</span><span
                                                class="sign-icon">+</span></h3>
                                    <p><?php echo esc_html($freelancershub_count_item['counter_name']); ?></p>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>