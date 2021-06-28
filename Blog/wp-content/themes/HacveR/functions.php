<?php
// Utilities
/* ***************************************************************************************************************** */



function hacver_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme','hacver_theme_support');


function hacver_theme_menu(){
    $locations = array(
    'primary' => "Main menu",
    'secondary' => "Secondary  menu Items"
    );
    register_nav_menus($locations);
}

add_action('init','hacver_theme_menu');
// CSS and JS 
/* ***************************************************************************************************************** */

function hacver_register_style(){
    $version = wp_get_theme()->get('Version');
    
    wp_enqueue_style('HacveR-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css', array(), '5.0.1', 'all');
    wp_enqueue_style('HacveR-style-title', get_template_directory_uri().'/assets/styles/hacver_style_title.css', array(), $version, 'all');
      
}

add_action('wp_enqueue_scripts','hacver_register_style');



function hacver_register_script(){
    
    wp_enqueue_script('HacveR-bootstrap-popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', array(), '2.9.2', true);
    wp_enqueue_script('HacveR-bootstrap-501','https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js', array(), '5.0.1', true);
    wp_enqueue_script('HacveR-fontawesome', 'https://use.fontawesome.com/ab92d64b78.js', array(), '4.7.0', true);
    wp_enqueue_script('HacveR-scripts-title', get_template_directory_uri().'/assets/scripts/hacver_script_title.js', array(), '1.0', true);
      
}

add_action('wp_enqueue_scripts','hacver_register_script');


/** 
  ============================================================================== 
  = Incluyde Walker File                                                       =
  ============================================================================== 
*/
require_once('inc/walker.php');

/**
 ==============================================================================
 = Register Custom Post Type                                                  =
 ==============================================================================
 */


/** Custom Post Type project  **/
/*
function hacver_custom_projects() {
    $args = [
        'label'  => esc_html__( 'Projects', 'text-domain' ),
        'labels' => [
            'menu_name'          => esc_html__( 'Projects', 'your-textdomain' ),
            'name_admin_bar'     => esc_html__( 'Project', 'your-textdomain' ),
            'add_new'            => esc_html__( 'Add Project', 'your-textdomain' ),
            'add_new_item'       => esc_html__( 'Add new Project', 'your-textdomain' ),
            'new_item'           => esc_html__( 'New Project', 'your-textdomain' ),
            'edit_item'          => esc_html__( 'Edit Project', 'your-textdomain' ),
            'view_item'          => esc_html__( 'View Project', 'your-textdomain' ),
            'update_item'        => esc_html__( 'View Project', 'your-textdomain' ),
            'all_items'          => esc_html__( 'All Projects', 'your-textdomain' ),
            'search_items'       => esc_html__( 'Search Projects', 'your-textdomain' ),
            'parent_item_colon'  => esc_html__( 'Parent Project', 'your-textdomain' ),
            'not_found'          => esc_html__( 'No Projects found', 'your-textdomain' ),
            'not_found_in_trash' => esc_html__( 'No Projects found in Trash', 'your-textdomain' ),
            'name'               => esc_html__( 'Projects', 'your-textdomain' ),
            'singular_name'      => esc_html__( 'Project', 'your-textdomain' ),
        ],
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'show_in_rest'        => true,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'has_archive'         => true,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite_no_front'    => false,
        'show_in_menu'        => false,
        'supports' => [
            'title',
            'editor',
            'thumbnail',
        ],
        
        'rewrite' => true
    ];
    
    register_post_type( 'project', $args );
}


add_action( 'init', 'hacver_custom_projects' );

*/
function custom_project_post_type() {
    
    $labels = array(
        'name'                  => _x( 'Project', 'Project Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Project', 'Project Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Project', 'text_domain' ),
        'name_admin_bar'        => __( 'Project', 'text_domain' ),
        'archives'              => __( 'Project Archives', 'text_domain' ),
        'attributes'            => __( 'Project Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Projects', 'text_domain' ),
        'add_new_item'          => __( 'Add New Project', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Project', 'text_domain' ),
        'edit_item'             => __( 'Edit Project', 'text_domain' ),
        'update_item'           => __( 'Update Project', 'text_domain' ),
        'view_item'             => __( 'View Project', 'text_domain' ),
        'view_items'            => __( 'View Project', 'text_domain' ),
        'search_items'          => __( 'Search Project', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Projects list', 'text_domain' ),
        'items_list_navigation' => __( 'Projects list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter Project list', 'text_domain' ),
    );
    
    // Set other options for Custom Post Type
    
    $args = array(
        'label'               => __( 'Projects', 'text_domain' ),
        'description'         => __( 'Project news and reviews', 'text_domain' ),
        'labels'              => $labels,
        'supports'            => array( 
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'comments',
            'revisions',
            'custom-fields', ),
        'taxonomies' => array('post_tag','category'),
        'rewrite'            => array( 'slug' => 'projects' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 6,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    );
    register_post_type( 'project', $args );
}
add_action( 'init', 'custom_project_post_type' );

