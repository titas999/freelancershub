<?php
global $freelancershub_section_id;
$freelancershub_section_meta = get_post_meta($freelancershub_section_id, 'freelancershub_section_whychoose', true);
$freelancershub_whychoose_heading = $freelancershub_section_meta['freelancershub_whychoose_title'];
$freelancershub_whychoose_subheading = $freelancershub_section_meta['freelancershub_whychoose_subtitle'];
$freelancershub_whychoose_content = $freelancershub_section_meta['freelancershub_whychoose_content'];
?>

<section class="choose-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="choose-content-area">
                    <span><?php echo esc_html($freelancershub_whychoose_subheading); ?></span>
                    <h3><?php echo esc_html($freelancershub_whychoose_heading); ?></h3>
                    <?php echo apply_filters('the_content', $freelancershub_whychoose_content); ?>

                    <?php
                    $freelancershub_whychoose_items = $freelancershub_section_meta['whychoose_group'];
                    if (is_array($freelancershub_whychoose_items)) {
                        foreach ($freelancershub_whychoose_items as $freelancershub_whychoose_item) {
                            ?>
                            <div class="choose-text">
                                <i class="flaticon-check-mark"></i>
                                <h4><?php echo esc_html($freelancershub_whychoose_item['whychoose_item_title']);?></h4>
                                <?php echo apply_filters('the_content', $freelancershub_whychoose_item['whychoose_item_description']);?>
                            </div>
                        <?php }
                    } ?>
                    <?php if ($freelancershub_section_meta['freelancershub_whychoose_btn_text']){ ?>
                    <div class="choose-btn">
                        <a href="<?php echo esc_url($freelancershub_section_meta['freelancershub_whychoose_btn_url']);?>" class="default-btn-one">
                            <?php echo esc_html($freelancershub_section_meta['freelancershub_whychoose_btn_text']);?>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="choose-image">
                    <img src="<?php echo wp_kses_post($freelancershub_section_meta['freelancershub_whychoose_image']);?>" alt="<?php echo esc_html($freelancershub_whychoose_subheading); ?>">
                </div>
            </div>
        </div>
    </div>
</section>
