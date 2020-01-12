<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $freelancershub_metabox = 'freelancershub_section_about';
    $section_id = 0;

    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    if('section'!=get_post_type($section_id)){
        return $freelancershub_metabox;
    }

    $section_meta = get_post_meta($section_id,'freelancershub_section_type',true);
    $section_type = $section_meta['freelancershub_section_names'];
    if('about'!=$section_type){
        return $freelancershub_metabox;
    }

    //
    // Create a metabox
    CSF::createMetabox( $freelancershub_metabox, array(
        'title'     => __('About Section', 'freelancershub'),
        'post_type' => 'section',
        'context'   => 'normal'
    ) );

    //
    // Create a section
    CSF::createSection( $freelancershub_metabox, array(
        'fields' => array(
            // A text field
            array(
                'id'    => 'freelancershub_about_title',
                'type'  => 'text',
                'title' => __('About Title Text', 'freelancershub'),

            ),
            array(
                'id'    => 'freelancershub_about_subtitle',
                'type'  => 'text',
                'title' => __('About Subtitle Text', 'freelancershub'),

            ),
            array(
                'id'    => 'freelancershub_about_content_heading',
                'type'  => 'text',
                'title' => __('Content Title', 'freelancershub'),

            ),
            array(
                'id'    => 'freelancershub_about_content',
                'type'  => 'textarea',
                'title' => __('About Main Content', 'freelancershub'),

            ),
            array(
                'id'    => 'freelancershub_about_btn_text',
                'type'  => 'text',
                'title' => __('Button text', 'freelancershub'),

            ),
            array(
                'id'    => 'freelancershub_about_btn_url',
                'type'  => 'text',
                'title' => __('Button URL', 'freelancershub'),

            ),
            array(
                'id'    => 'freelancershub_about_image',
                'type'  => 'upload',
                'title' => __('Upload Image','freelancershub')
              ),

        )
    ) );

}
