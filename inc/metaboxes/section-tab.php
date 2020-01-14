<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $freelancershub_metabox = 'freelancershub_section_tab';
    $section_id = 0;

    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    if('section'!=get_post_type($section_id)){
        return $freelancershub_metabox;
    }

    $section_meta = get_post_meta($section_id,'freelancershub_section_type',true);
    $section_type = $section_meta['freelancershub_section_names'];
    if('tab'!=$section_type){
        return $freelancershub_metabox;
    }

    //
    // Create a metabox
    CSF::createMetabox( $freelancershub_metabox, array(
        'title'     => __('Tab Section', 'freelancershub'),
        'post_type' => 'section',
        'context'   => 'normal'
    ) );

    //
    // Create a section
    CSF::createSection( $freelancershub_metabox, array(
        'fields' => array(
            // A text field
            array(
                'id'    => 'freelancershub_tab_section_title',
                'type'  => 'text',
                'title' => __('Section Title Text', 'freelancershub'),

            ),
            array(
                'id'    => 'freelancershub_tab_section_subtitle',
                'type'  => 'text',
                'title' => __('Section Subtitle Text', 'freelancershub'),

            ),
            array(
                'id'        => 'freelancershub_tab_group',
                'type'      => 'group',
                'title'     => __('Items','freelancershub'),
                'fields'    => array(
                    array(
                        'id'    => 'tab_item_name',
                        'type'  => 'text',
                        'title' => __('Tab Item Name','freelancershub')
                    ),
                    array(
                        'id'    => 'tab_item_icon',
                        'type'  => 'icon',
                        'title' => __('Tab Icon','freelancershub')
                    ),
                    array(
                        'id'    => 'tab_item_content',
                        'type'  => 'wp_editor',
                        'title' => __('Tab Content','freelancershub')
                    ),
                    array(
                        'id'    => 'tab_item_content_image',
                        'type'  => 'upload',
                        'title' => __('Content Image','freelancershub')
                    ),

                ),
            ),

        )
    ) );

}
