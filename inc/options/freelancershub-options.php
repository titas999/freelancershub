<?php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $freelancershub_options = 'freelancershub_themes_options';

    //
    // Create options
    CSF::createOptions( $freelancershub_options, array(
        'menu_title' => 'Theme Options',
        'menu_slug'  => 'theme-option',
        'menu_type'   => 'submenu',
        'menu_parent' => 'themes.php',
        'theme'       => 'light'
    ) );

    CSF::createSection( $freelancershub_options, array(
            'title'  => 'Footer Copyright',
            'fields' => array(
                array(
                    'id'    => 'footer_copyright_1',
                    'type'  => 'wp_editor',
                    'title' => __('Copyright Text 1','freelancershub')
                ),
                array(
                    'id'    => 'footer_copyright_2',
                    'type'  => 'wp_editor',
                    'title' => __('Copyright Text 2','freelancershub')
                ),
            ),

        )
    );
    // Create a top-tab
    CSF::createSection( $freelancershub_options, array(
        'id'    => 'footer_primary_tab', // Set a unique slug-like ID
        'title' => 'Footer Options',
    ) );

    //
    // Create a sub-tab
    CSF::createSection( $freelancershub_options, array(
        'parent' => 'footer_primary_tab', // The slug id of the parent section
        'title'  => 'Contact Form',
        'fields' => array(

            // A text field
            array(
                'id'    => 'contact_form_title',
                'type'  => 'text',
                'title' => 'Contact Form Title',
            ),
            array(
                'id'    => 'contact_form_description',
                'type'  => 'textarea',
                'title' => 'Contact Form Description',
            ),
            array(
                'id'    => 'contact_form_shortcode',
                'type'  => 'text',
                'title' => 'Contact Form Shortcode',
            ),

        )
    ) );

    //
    // Create a sub-tab
    CSF::createSection( $freelancershub_options, array(
        'parent' => 'footer_primary_tab',
        'title'  => 'Contact Content Area',
        'fields' => array(
            array(
                'id'    => 'contact_content_title',
                'type'  => 'text',
                'title' => 'Contact Area Title',
            ),
            array(
                'id'    => 'contact_area_description',
                'type'  => 'textarea',
                'title' => 'Contact Area Description',
            ),
            array(
                'id'        => 'contact_content_group',
                'type'      => 'group',
                'title'     => 'Contact Area Content',
                'fields'    => array(
                    array(
                        'id'    => 'content_text',
                        'type'  => 'text',
                        'title' => 'Contact Area Text',
                    ),
                    array(
                        'id'    => 'contact_icon',
                        'type'  => 'icon',
                        'title' => 'Content Icon',
                    ),
                ),
            ),

        )
    ) );

    //
    // Create a sub-tab
    CSF::createSection( $freelancershub_options, array(
        'title'  => 'Brand Section',
        'fields' => array(

            array(
                'id'        => 'contact_content_group',
                'type'      => 'group',
                'title'     => 'Contact Area Content',
                'fields'    => array(
                    array(
                        'id'    => 'brand_image',
                        'type'  => 'upload',
                        'title' => 'Brand Image Upload',
                    ),
                ),
            ),

        )
    ) );

}