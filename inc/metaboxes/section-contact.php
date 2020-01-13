<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $freelancershub_metabox = 'freelancershub_section_contact';
    $section_id = 0;

    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    if('section'!=get_post_type($section_id)){
        return $freelancershub_metabox;
    }

    $section_meta = get_post_meta($section_id,'freelancershub_section_type',true);
    $section_type = $section_meta['freelancershub_section_names'];
    if('contact'!=$section_type){
        return $freelancershub_metabox;
    }

    // Create a metabox
    CSF::createMetabox( $freelancershub_metabox, array(
        'title'     => __('Contact Section', 'freelancershub'),
        'post_type' => 'section',
        'context'   => 'normal',
        'theme'     => 'light'
    ) );

    // Create a section
    CSF::createSection( $freelancershub_metabox, array(
        'fields' => array(
            // A text field
            array(
                'id'        => 'contact_section_group',
                'type'      => 'group',
                'title'     => __('Contact Section','freelancershub'),
                'fields'    => array(
                    array(
                        'id'    => 'address_item_title',
                        'type'  => 'text',
                        'title' => __('Title Text','freelancershub')
                    ),
                    array(
                        'id'    => 'address_item_content',
                        'type'  => 'textarea',
                        'title' => __('Description','freelancershub')
                    ),
                    array(
                        'id'    => 'address_item_icon',
                        'type'  => 'icon',
                        'title' => __('Icon','freelancershub')
                    ),

                ),
            ),
            array(
                'id'    => 'freelancershub_ct_form_title',
                'type'  => 'text',
                'title' => __('Contact Form Title', 'freelancershub'),

            ),
            array(
                'id'    => 'freelancershub_ct_form_description',
                'type'  => 'textarea',
                'title' => __('Contact Form Description', 'freelancershub'),

            ),

        )
    ) );


}
