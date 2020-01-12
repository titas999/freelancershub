<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $freelancershub_metabox = 'freelancershub_section_features';
    $section_id = 0;

    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    if('section'!=get_post_type($section_id)){
        return $freelancershub_metabox;
    }

    $section_meta = get_post_meta($section_id,'freelancershub_section_type',true);
    $section_type = $section_meta['freelancershub_section_names'];
    if('features'!=$section_type){
        return $freelancershub_metabox;
    }

    //
    // Create a metabox
    CSF::createMetabox( $freelancershub_metabox, array(
        'title'     => __('Features Section', 'freelancershub'),
        'post_type' => 'section',
        'context'   => 'normal',
        'theme'     => 'light'
    ) );

    // Create a section
    CSF::createSection( $freelancershub_metabox, array(
        'title'     => __('Left Section', 'freelancershub'),
        'fields' => array(
            // A text field
            array(
                'id'    => 'video_feat_image',
                'type'  => 'upload',
                'title' => __('Image Upload', 'freelancershub'),

            ),
            array(
                'id'    => 'features_video_link',
                'type'  => 'text',
                'title' => __('Video Link', 'freelancershub'),

            ),


        )
    ) );

    // Create a section
    CSF::createSection( $freelancershub_metabox, array(
        'title'     => __('Right Section', 'freelancershub'),
        'fields' => array(
            // A text field
            array(
                'id'    => 'freelancershub_features_title',
                'type'  => 'text',
                'title' => __('Section Title Text', 'freelancershub'),

            ),
            array(
                'id'    => 'freelancershub_features_description',
                'type'  => 'textarea',
                'title' => __('Section Description', 'freelancershub'),

            ),
            array(
                'id'        => 'features_group',
                'type'      => 'group',
                'title'     => __('Features','freelancershub'),
                'fields'    => array(
                    array(
                        'id'    => 'features_name',
                        'type'  => 'textarea',
                        'title' => __('Features Name','freelancershub')
                    ),

                ),
            ),

        )
    ) );


}
