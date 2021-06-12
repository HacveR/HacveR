<?php
function hacver_theme_support(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme','hacver_theme_support');
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

