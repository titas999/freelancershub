<?php
/**
 * Template Name: Landing Page
 */
get_header();

$freelancershub_current_page_id = get_the_ID();
$freelancershub_page_meta = get_post_meta($freelancershub_current_page_id,'freelancershub_page_sections',true);
if (isset($freelancershub_page_meta['sections'])) {
foreach ($freelancershub_page_meta['sections'] as $freelancershub_page_section) {
    $freelancershub_section_id = $freelancershub_page_section['section'];
    $freelancershub_section_meta = get_post_meta($freelancershub_section_id, 'freelancershub_section_type', true);
    $freelancershub_section_type = $freelancershub_section_meta['freelancershub_section_names'];
    get_template_part( "template-parts/sections/{$freelancershub_section_type}");
}
}

?>

<?php get_footer(); ?>
