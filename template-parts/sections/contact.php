<?php
global $freelancershub_section_id;
$freelancershub_section_meta = get_post_meta($freelancershub_section_id,'freelancershub_section_contact',true);
$freelancershub_contact_section_heading = $freelancershub_section_meta['freelancershub_ct_form_title'];
$freelancershub_contact_section_content = $freelancershub_section_meta['freelancershub_ct_form_description'];

?>
<section class="subscribe-area">
    <div class="container">
        <div class="row align-items-center">
            <?php
            $freelancershub_contact_forms = $freelancershub_section_meta['contact_section_group'];
            if (is_array($freelancershub_contact_forms)){
                foreach ($freelancershub_contact_forms as $freelancershub_contact_form){

            ?>
            <div class="col-lg-4 col-md-12">
                <div class="contact-box">
                    <div class="icon">
                        <i class="<?php echo esc_html($freelancershub_contact_form['address_item_icon'])?>"></i>
                    </div>

                    <div class="content">
                        <h4><?php echo esc_html($freelancershub_contact_form['address_item_title'])?></h4>
                        <?php echo apply_filters('the_content', $freelancershub_contact_form['address_item_content']);?>
                    </div>
                </div>
            </div>
            <?php }} ?>

            <div class="col-lg-6 col-md-6">
                <div class="contact-text">
                    <h3><?php echo esc_html($freelancershub_contact_section_heading);?></h3>
                    <?php echo apply_filters('the_content', $freelancershub_contact_section_content); ?>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <form id="contactForm">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group form-bg-white">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="form-group form-bg-white">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group form-bg-white">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group form-bg-white">
                                <textarea name="message" class="form-control" placeholder="Your Message"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="send-btn">
                                <button type="submit" class="send-btn-one">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>