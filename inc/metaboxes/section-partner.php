<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $freelancershub_metabox = 'freelancershub_section_partner';
    $section_id = 0;

    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    if('section'!=get_post_type($section_id)){
        return $freelancershub_metabox;
    }

    $section_meta = get_post_meta($section_id,'freelancershub_section_type',true);
    $section_type = $section_meta['freelancershub_section_names'];
    if('partner'!=$section_type){
        return $freelancershub_metabox;
    }

    //
    // Create a metabox
    CSF::createMetabox( $freelancershub_metabox, array(
        'title'     => __('Partner Section', 'freelancershub'),
        'post_type' => 'section',
        'context'   => 'normal',
        'theme'     => 'light'
    ) );

    // Create a section
    CSF::createSection( $freelancershub_metabox, array(
        'fields' => array(
            // A text field
            array(
                'id'        => 'partner_group',
                'type'      => 'group',
                'title'     => __('Partners','freelancershub'),
                'fields'    => array(
                    array(
                        'id'    => 'partners_logo',
                        'type'  => 'upload',
                        'title' => __('Partner Logo','freelancershub')
                    ),

                ),
            ),

        )
    ) );


}
