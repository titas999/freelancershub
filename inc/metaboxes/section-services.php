<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $freelancershub_metabox = 'freelancershub_section_services';
    $section_id = 0;

    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    if('section'!=get_post_type($section_id)){
        return $freelancershub_metabox;
    }

    $section_meta = get_post_meta($section_id,'freelancershub_section_type',true);
    $section_type = $section_meta['freelancershub_section_names'];
    if('services'!=$section_type){
        return $freelancershub_metabox;
    }

    //
    // Create a metabox
    CSF::createMetabox( $freelancershub_metabox, array(
        'title'     => __('Services Section', 'freelancershub'),
        'post_type' => 'section',
        'context'   => 'normal'
    ) );

    //
    // Create a section
    CSF::createSection( $freelancershub_metabox, array(
        'fields' => array(
            // A text field
            array(
                'id'    => 'freelancershub_services_title',
                'type'  => 'text',
                'title' => __('Section Title Text', 'freelancershub'),

            ),
            array(
                'id'    => 'freelancershub_services_subtitle',
                'type'  => 'text',
                'title' => __('Section Subtitle Text', 'freelancershub'),

            ),

        )
    ) );

}
