<?php
function cptui_register_my_cpts() {
    /**
     * Post Type: Sections.
     */
    $labels = array(
        "name" => __( "Sections", "freelancershub" ),
        "singular_name" => __( "Section", "freelancershub" ),
    );
    $args = array(
        "label" => __( "Sections", "freelancershub" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "section", "with_front" => true ),
        "query_var" => true,
        "menu_icon" => "dashicons-menu-alt3",
        "supports" => array( "title", "thumbnail" ),
    );
    register_post_type( "section", $args );
    /**
     * Post Type: Testimonials.
     */
    $labels = array(
        "name" => __( "Testimonials", "freelancershub" ),
        "singular_name" => __( "Testimonial", "freelancershub" ),
    );
    $args = array(
        "label" => __( "Testimonials", "freelancershub" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "testimonial", "with_front" => true ),
        "query_var" => true,
        "menu_icon" => "dashicons-book",
        "supports" => array( "title", "editor" ,"thumbnail" ),
    );
    register_post_type( "testimonial", $args );
    /**
     * Post Type: Portfolios.
     */
    $labels = array(
        "name" => __( "Portfolios", "freelancershub" ),
        "singular_name" => __( "Portfolio", "freelancershub" ),
    );
    $args = array(
        "label" => __( "Portfolios", "freelancershub" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "portfolio", "with_front" => true ),
        "query_var" => true,
        "menu_icon" => "dashicons-images-alt2",
        "supports" => array( "title", "editor", "thumbnail" ),
        "taxonomies" => array( "category" ),
    );
    register_post_type( "portfolio", $args );

    /**
     * Post Type: Services
     */
    $labels = array(
        "name" => __( "Services", "freelancershub" ),
        "singular_name" => __( "Service", "freelancershub" ),
    );
    $args = array(
        "label" => __( "Services", "freelancershub" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "service", "with_front" => true ),
        "query_var" => true,
        "menu_icon" => "dashicons-layout",
        "supports" => array( "title", "editor", "thumbnail" ),
        "taxonomies" => array( "category" ),
    );
    register_post_type( "service", $args );

    /**
     * Post Type: Web Services
     */
    $labels = array(
        "name" => __( "Web Service", "freelancershub" ),
        "singular_name" => __( "Web Service", "freelancershub" ),
    );
    $args = array(
        "label" => __( "Web Service", "freelancershub" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "web-services", "with_front" => true ),
        "query_var" => true,
        "menu_icon" => "dashicons-laptop",
        "supports" => array( "title", "editor", "thumbnail" ),
        "taxonomies" => array( "category" ),
    );
    register_post_type( "webapps", $args );

    /**
     * Post Type: Team Members
     */
    $labels = array(
        "name" => __( "Team Members", "freelancershub" ),
        "singular_name" => __( "Team Member", "freelancershub" ),
    );
    $args = array(
        "label" => __( "Team Member", "freelancershub" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "team-member", "with_front" => true ),
        "query_var" => true,
        "menu_icon" => "dashicons-admin-users",
        "supports" => array( "title", "editor", "thumbnail" ),
    );
    register_post_type( "teammember", $args );

    /**
     * Post Type: Digital Marketing
     */
    $labels = array(
        "name" => __( "Digital Marketing", "freelancershub" ),
        "singular_name" => __( "Digital Marketing", "freelancershub" ),
    );
    $args = array(
        "label" => __( "Digital Marketing", "freelancershub" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "digital-marketing-services", "with_front" => true ),
        "query_var" => true,
        "menu_icon" => "dashicons-chart-area",
        "supports" => array( "title", "editor", "thumbnail" ),
        "taxonomies" => array( "category" ),
    );
    register_post_type( "dmservice", $args );

    /**
     * Post Type: SEO Services
     */
    $labels = array(
        "name" => __( "SEO Services", "freelancershub" ),
        "singular_name" => __( "SEO Services", "freelancershub" ),
    );
    $args = array(
        "label" => __( "SEO Services", "freelancershub" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "seo-services", "with_front" => true ),
        "query_var" => true,
        "menu_icon" => "dashicons-networking",
        "supports" => array( "title", "editor", "thumbnail" ),
        "taxonomies" => array( "category" ),
    );
    register_post_type( "seoservices", $args );

    /**
     * Post Type: PPC Marketing
     */
//    $labels = array(
//        "name" => __( "PPC Services", "freelancershub" ),
//        "singular_name" => __( "PPC Services", "freelancershub" ),
//    );
//    $args = array(
//        "label" => __( "PPC Services", "freelancershub" ),
//        "labels" => $labels,
//        "description" => "",
//        "public" => true,
//        "publicly_queryable" => true,
//        "show_ui" => true,
//        "delete_with_user" => false,
//        "show_in_rest" => true,
//        "rest_base" => "",
//        "rest_controller_class" => "WP_REST_Posts_Controller",
//        "has_archive" => true,
//        "show_in_menu" => true,
//        "show_in_nav_menus" => true,
//        "exclude_from_search" => false,
//        "capability_type" => "post",
//        "map_meta_cap" => true,
//        "hierarchical" => false,
//        "rewrite" => array( "slug" => "ppc-services", "with_front" => true ),
//        "query_var" => true,
//        "menu_icon" => "dashicons-pressthis",
//        "supports" => array( "title", "editor", "thumbnail" ),
//        "taxonomies" => array( "category" ),
//    );
//    register_post_type( "ppcservices", $args );

    /**
     * Post Type: Social Media Marketing
     */
//    $labels = array(
//        "name" => __( "Social Media", "freelancershub" ),
//        "singular_name" => __( "Social Media", "freelancershub" ),
//    );
//    $args = array(
//        "label" => __( "Social Media", "freelancershub" ),
//        "labels" => $labels,
//        "description" => "",
//        "public" => true,
//        "publicly_queryable" => true,
//        "show_ui" => true,
//        "delete_with_user" => false,
//        "show_in_rest" => true,
//        "rest_base" => "",
//        "rest_controller_class" => "WP_REST_Posts_Controller",
//        "has_archive" => true,
//        "show_in_menu" => true,
//        "show_in_nav_menus" => true,
//        "exclude_from_search" => false,
//        "capability_type" => "post",
//        "map_meta_cap" => true,
//        "hierarchical" => false,
//        "rewrite" => array( "slug" => "smm-services", "with_front" => true ),
//        "query_var" => true,
//        "menu_icon" => "dashicons-share",
//        "supports" => array( "title", "editor", "thumbnail" ),
//        "taxonomies" => array( "category" ),
//    );
//    register_post_type( "smmservices", $args );


}
add_action( 'init', 'cptui_register_my_cpts' );