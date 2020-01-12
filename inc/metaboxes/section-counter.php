<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $freelancershub_metabox = 'freelancershub_section_counter';
    $section_id = 0;

    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    if('section'!=get_post_type($section_id)){
        return $freelancershub_metabox;
    }

    $section_meta = get_post_meta($section_id,'freelancershub_section_type',true);
    $section_type = $section_meta['freelancershub_section_names'];
    if('counter'!=$section_type){
        return $freelancershub_metabox;
    }

    //
    // Create a metabox
    CSF::createMetabox( $freelancershub_metabox, array(
        'title'     => __('Counter Section', 'freelancershub'),
        'post_type' => 'section',
        'context'   => 'normal'
    ) );

    //
    // Create a section
    CSF::createSection( $freelancershub_metabox, array(
        'fields' => array(
            // A text field
            array(
                'id'    => 'freelancershub_counter_title',
                'type'  => 'text',
                'title' => __('Section Title Text', 'freelancershub'),

            ),
            array(
                'id'    => 'freelancershub_counter_subtitle',
                'type'  => 'text',
                'title' => __('Section Subtitle Text', 'freelancershub'),

            ),
            array(
                'id'        => 'counter_group',
                'type'      => 'group',
                'title'     => __('Items','freelancershub'),
                'fields'    => array(
                    array(
                    'id'    => 'item_name',
                    'type'  => 'text',
                    'title' => __('Item Name','freelancershub')
                    ),
                    array(
                    'id'    => 'counter_number',
                    'type'  => 'text',
                    'title' => __('Total Number','freelancershub')
                    ),
            
                ),
              ),

        )
    ) );

}
