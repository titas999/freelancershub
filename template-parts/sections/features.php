<?php
global $freelancershub_section_id;
$freelancershub_section_meta = get_post_meta($freelancershub_section_id, 'freelancershub_section_features', true);
$freelancershub_features_heading = $freelancershub_section_meta['freelancershub_features_title'];
$freelancershub_features_subheading = $freelancershub_section_meta['freelancershub_features_subtitle'];
$freelancershub_features_description = $freelancershub_section_meta['freelancershub_features_description'];

?>

<section class="features-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="features-content-area">
                    <span><?php echo esc_html($freelancershub_features_subheading); ?></span>
                    <h3><?php echo esc_html($freelancershub_features_heading); ?></h3>
                    <?php echo apply_filters('the_content', $freelancershub_features_description); ?>
                    <?php $features_btn_text = $freelancershub_section_meta['freelancershub_features_btn_text'];
                    if ($features_btn_text) {
                        ?>
                        <div class="features-btn">
                            <a href="<?php echo esc_url($freelancershub_section_meta['freelancershub_features_btn_url']); ?>"
                               class="features-btn-one"><?php echo esc_html($features_btn_text); ?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <?php
                    $i = 0;
                    $features_items = $freelancershub_section_meta['features_group'];
                    if (is_array($features_items)) {
                        foreach ($features_items as $features_item) {
                            $i++;
                            if ($i == 1) {
                                $features_color = "bg-f1eff8";
                            }
                            if ($i == 2) {
                                $features_color = "bg-fbe6d4";
                            }
                            if ($i == 3) {
                                $features_color = "bg-f0fffc";
                            }
                            if ($i == 4) {
                                $features_color = "bg-f8e1eb";
                            }
                            ?>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="single-features-item <?php echo $features_color; ?>">
                                    <?php
                                    $icon_class = $features_item['features_icon_class'];
                                    if ($icon_class) {
                                        ?>
                                        <div class="icon">
                                            <i class="<?php echo esc_html($icon_class); ?>"></i>
                                        </div>
                                    <?php } else { ?>
                                        <div class="icon">
                                            <i class="flaticon-seo"></i>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                    <h3><?php echo esc_html($features_item['features_name']); ?></h3>
                                    <?php echo apply_filters('the_content', $features_item['features_description']); ?>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="features-animation">
        <div class="shape-img1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/8.png"
                                     alt="image"></div>
        <div class="shape-img2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/5.png"
                                     alt="image"></div>
    </div>
</section>