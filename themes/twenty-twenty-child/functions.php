<?php 

function enqueue_styles() {

    wp_enqueue_style( 'myequity-styles', get_stylesheet_directory_uri() . '/css/style.css', array(), '');
    
    wp_enqueue_script( 'jquery' );
    
    wp_enqueue_script( 'jquery-migrate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.1.0/jquery-migrate.min.js', array('jquery'), '', false );
    
    // TODO Combine all these js files by adding them to the src directory later
    
    wp_enqueue_script( 'myequity-scripts', get_stylesheet_directory_uri() . '/js/theme.js', array(), '', true );
    
    }
    
    add_action( 'wp_enqueue_scripts', 'enqueue_styles' ); // Enque Styles and Scripts
