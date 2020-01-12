<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $freelancershub_metabox = 'freelancershub_page_sections';

    //
    // Create a metabox
    CSF::createMetabox( $freelancershub_metabox, array(
        'title'     => __('Sections', 'freelancershub'),
        'post_type' => 'page',
        'page_templates'     => 'page-templates/landing.php',
        'context'   => 'normal'
    ) );

    //
    // Create a section
    CSF::createSection( $freelancershub_metabox, array(
        'fields' => array(
            array(
                'id'        => 'sections',
                'type'      => 'group',
                'title'     => __('Select Section','freelancershub'),
                'fields'    => array(
                    array(
                        'id'    => 'section_name',
                        'type'  => 'text',
                        'title' => __('Section Name','freelancershub'),
                    ),
                    array(
                        'id'    => 'section',
                        'title' => __('Select Section','freelancershub'),
                        'type'  => 'select',
                        'options'  => 'post',
                        'query_args'  => array(
                            'post_type' =>'section',
                            'posts_per_page'    =>-1
                        )
                    ),
                   

                ),
            ),

        )
    ) );

}
