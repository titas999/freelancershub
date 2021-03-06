<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $freelancershub_metabox = 'freelancershub_section_whychoose';
    $section_id = 0;

    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    if('section'!=get_post_type($section_id)){
        return $freelancershub_metabox;
    }

    $section_meta = get_post_meta($section_id,'freelancershub_section_type',true);
    $section_type = $section_meta['freelancershub_section_names'];
    if('whychoose'!=$section_type){
        return $freelancershub_metabox;
    }

    //
    // Create a metabox
    CSF::createMetabox( $freelancershub_metabox, array(
        'title'     => __('Why Choose Us Section', 'freelancershub'),
        'post_type' => 'section',
        'context'   => 'normal'
    ) );

    //
    // Create a section
    CSF::createSection( $freelancershub_metabox, array(
        'fields' => array(
            // A text field
            array(
                'id'    => 'freelancershub_whychoose_title',
                'type'  => 'text',
                'title' => __('Section Title Text', 'freelancershub'),

            ),
            array(
                'id'    => 'freelancershub_whychoose_subtitle',
                'type'  => 'text',
                'title' => __('Section Subtitle', 'freelancershub'),
            ),
            array(
                'id'    => 'freelancershub_whychoose_content',
                'type'  => 'textarea',
                'title' => __('Section Content', 'freelancershub'),
            ),
            array(
                'id'        => 'whychoose_group',
                'type'      => 'group',
                'title'     => __('Why Choose Items','freelancershub'),
                'fields'    => array(
                    array(
                        'id'    => 'whychoose_item_title',
                        'type'  => 'text',
                        'title' => __('Item Title','freelancershub')
                    ),
                    array(
                        'id'    => 'whychoose_item_description',
                        'type'  => 'textarea',
                        'title' => __('Item Description','freelancershub')
                    ),
                ),
            ),
            array(
                'id'    => 'freelancershub_whychoose_btn_text',
                'type'  => 'text',
                'title' => __('Button Text', 'freelancershub'),

            ),
            array(
                'id'    => 'freelancershub_whychoose_btn_url',
                'type'  => 'text',
                'title' => __('Button URL', 'freelancershub'),
            ),
            array(
                'id'    => 'freelancershub_whychoose_image',
                'type'  => 'upload',
                'title' => __('Image Upload', 'freelancershub'),
            ),

        )
    ) );

}
