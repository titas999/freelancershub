<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $freelancershub_metabox = 'freelancershub_section_type';

    //
    // Create a metabox
    CSF::createMetabox( $freelancershub_metabox, array(
        'title'     => __('Section Type', 'freelancershub'),
        'post_type' => 'section',
        'context'   => 'normal'
    ) );

    //
    // Create a section
    CSF::createSection( $freelancershub_metabox, array(
        'fields' => array(
            // A text field
            array(
                'id'    => 'freelancershub_section_names',
                'type'  => 'select',
                'title' => __('Select Section Type', 'freelancershub'),
                'options'   =>array(
                    'banner'    =>__('Banner Section', 'freelancershub'),
                    'features'    =>__('Features Section', 'freelancershub'),
                    'about'    =>__('About Section', 'freelancershub'),
                    'services'    =>__('Services Section', 'freelancershub'),
                    'whychoose'    =>__('Why Choose Section', 'freelancershub'),
                    'tab'    =>__('Tab Section', 'freelancershub'),
                    'projects'    =>__('Portfolio Section', 'freelancershub'),
                    'team'    =>__('Team Section', 'freelancershub'),
                    'testimonial'    =>__('Testimonial Section', 'freelancershub'),
                    'contact'    =>__('Contact Section', 'freelancershub'),
                    'blog'    =>__('Latest Blog Section', 'freelancershub'),
                    'partner'    =>__('Partner Section', 'freelancershub'),
                    'analysis'    =>__('SEO Analysis Section', 'freelancershub'),
                )
            ),

        )
    ) );

}
