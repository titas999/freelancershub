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
                <?php
                $freelancershub_gallery_items    = $freelancershub_section_meta['freelancershub_tab_group'];
                $freelancershub_item_categories  = [];
                foreach ( $freelancershub_gallery_items as $freelancershub_gallery_item ) {
                    $freelancershub_gallery_item_categories = explode( ",", $freelancershub_gallery_item['tab_item_name'] );
                    foreach ( $freelancershub_gallery_item_categories as $freelancershub_gallery_item_category ) {
                        $freelancershub_gallery_item_category = trim( $freelancershub_gallery_item_category );
                        if ( ! in_array( $freelancershub_gallery_item_category, $freelancershub_item_categories ) ) {
                            array_push( $freelancershub_item_categories, $freelancershub_gallery_item_category );
                        }
                    }
                }
                ?>
                <?php
                foreach ( $freelancershub_item_categories as $freelancershub_item_category ):
                ?>
                    <li><a href="#"><i class="flaticon-seo"></i><span><?php echo esc_html($freelancershub_item_category );?></span></a></li>
                <?php
                endforeach; ?>

            </ul>

            <div class="tab_content">
                <?php
                foreach ($freelancershub_gallery_items as $freelancershub_gallery_item):
                ?>
                <div class="tabs_item">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="tab-image">
                                <img src="<?php echo wp_kses_post($freelancershub_gallery_item['tab_item_content_image'])?>" alt="<?php _e('Tab Image','freelancershub') ?>">
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="content">
                                <?php echo apply_filters('the_content',$freelancershub_gallery_item['tab_item_content']);?>
                            </div>
                        </div>
                    </div>

                    <div class="tab-shape">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tab/shape.png" alt="image">
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>