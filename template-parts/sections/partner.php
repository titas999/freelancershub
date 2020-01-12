<?php
global $freelancershub_section_id;
$freelancershub_section_meta = get_post_meta($freelancershub_section_id, 'freelancershub_section_partner', true);
?>
<div class="partner-section">
    <div class="container">
        <div class="partner-slider owl-carousel owl-theme">
            <?php
            $freelancershub_partners_logo = $freelancershub_section_meta['partner_group'];
            if (is_array($freelancershub_partners_logo)) {
                foreach ($freelancershub_partners_logo as $freelancershub_partner_logo) {
                    ?>
                    <div class="partner-item">
                        <a href="#">
                            <img src="<?php echo wp_kses_post($freelancershub_partner_logo['partners_logo']);?>"
                                 alt="<?php _e('partner', ' freelancershub'); ?>">
                        </a>
                    </div>
                <?php }
            } ?>
        </div>
    </div>
</div>