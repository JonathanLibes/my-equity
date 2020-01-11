<?php 

function enqueue_styles() {

    wp_enqueue_style( 'myequity-styles', get_stylesheet_directory_uri() . '/css/style.css', array(), 1.1);

    wp_enqueue_style( 'slick-styles', get_stylesheet_directory_uri() . '/css/slick.css', array(), 1.1);
    wp_enqueue_style( 'slick-theme-styles', get_stylesheet_directory_uri() . '/css/slick-theme.css', array(), 1.1);

    wp_enqueue_script( 'jquery' );
    
    wp_enqueue_script( 'jquery-migrate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.1.0/jquery-migrate.min.js', array('jquery'), '', false );
    wp_enqueue_script( 'scroll-magic', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js', array('jquery'), '', false );
    wp_enqueue_script( 'scroll-magic-debug', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js', array('jquery'), '', false );
    wp_enqueue_script( 'green-sock', '//cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/TweenMax.min.js', array('jquery'), '', false );
    
    wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/js/slick.min.js', array('jquery'), '', false );
    
    // TODO Combine all these js files by adding them to the src directory later
    
    wp_enqueue_script( 'myequity-scripts', get_stylesheet_directory_uri() . '/js/theme.js', array(), '', true );
    
    }
    
    add_action( 'wp_enqueue_scripts', 'enqueue_styles' ); // Enque Styles and Scripts


    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page();
    }

    function wpb_custom_new_menu() {
        register_nav_menu('my-custom-menu',__( 'Main Nav' ));
      }
      add_action( 'init', 'wpb_custom_new_menu' );