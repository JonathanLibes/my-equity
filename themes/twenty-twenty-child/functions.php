<?php

function enqueue_styles()
{

    wp_enqueue_style('myequity-styles', get_stylesheet_directory_uri() . '/css/style.css', array(), 1.1);

    wp_enqueue_style('slick-styles', get_stylesheet_directory_uri() . '/css/slick.css', array(), 1.1);
    wp_enqueue_style('font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), 1.1);
    wp_enqueue_style('slick-theme-styles', get_stylesheet_directory_uri() . '/css/slick-theme.css', array(), 1.1);
    wp_enqueue_style('jqv-map-styles', get_stylesheet_directory_uri() . '/css/jqvmap.min.css', array(), 1.1);

    wp_enqueue_script('jquery');

    wp_enqueue_script('jquery-migrate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.1.0/jquery-migrate.min.js', array('jquery'), '', false);
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', array('jquery'), '', false);
    wp_enqueue_script('bootstrap-scripts', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(), '', true);

    wp_enqueue_script('jqv-map', get_stylesheet_directory_uri() . '/js/jquery.vmap.min.js', array(), '', true);
    wp_enqueue_script('jqv-map-usa', get_stylesheet_directory_uri() . '/js/jquery.vmap.usa.js', array(), '', true);
    wp_enqueue_script('map-config', get_stylesheet_directory_uri() . '/js/map.js', array(), '', true);
    // wp_enqueue_style('calendar-styles', get_stylesheet_directory_uri() . '/css/evo-calendar.css', array(), 1.1);
    // wp_enqueue_script('calendar-scripts', get_stylesheet_directory_uri() . '/js/evo-calendar.js', array(), '', true);

    wp_enqueue_style('font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), 1.1);


    if (is_front_page()) {
        // Scroll magic
        wp_enqueue_script('scroll-magic', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js', array('jquery'), '', false);
        wp_enqueue_script('scroll-magic-debug', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js', array('jquery'), '', false);
        wp_enqueue_script('green-sock', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js', array('jquery'), '', false);
        wp_enqueue_script('gsap-tweenmax', '//cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/TweenMax.min.js', array('jquery'), '', false);
        wp_enqueue_script('gsap-tweenlite', '//cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/TweenLite.min.js', array('jquery'), '', false);
        wp_enqueue_script('gsap-timelinelite', '//cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/TimelineLite.min.js', array('jquery'), '', false);
        wp_enqueue_script('gsap-cssplugin', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.0.5/CSSRulePlugin.min.js', array('jquery'), '', false);
        wp_enqueue_script('gsap-motionpath', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.0.5/MotionPathPlugin.min.js', array('jquery'), '', false);
        wp_enqueue_script('myequity-scroll-animation', get_stylesheet_directory_uri() . '/js/scroll-animation.js', array(), '', true);

        wp_enqueue_script('calendar-ui', get_stylesheet_directory_uri() . '/calendar/calendar.js', array(), '', true);
        wp_enqueue_style('calendar-ui', get_stylesheet_directory_uri() . '/calendar/calendar.css', array(), 1.1);
    }

    wp_enqueue_script('slick-js', get_stylesheet_directory_uri() . '/js/slick.min.js', array('jquery'), '', false);

    // TODO Combine all these js files by adding them to the src directory later

    wp_enqueue_script('myequity-scripts', get_stylesheet_directory_uri() . '/js/theme.js', array(), '', true);
}

add_action('wp_enqueue_scripts', 'enqueue_styles'); // Enque Styles and Scripts


if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

function wpb_custom_new_menu()
{
    register_nav_menu('my-custom-menu', __('Main Nav'));
    register_nav_menu('my-footer-menu', __('Footer Nav'));
}
add_action('init', 'wpb_custom_new_menu');


/** Widgets */

function wpb_widgets_init()
{

    /** Blog Sidebar */

    register_sidebar(array(
        'name'          => 'Blog Sidebar',
        'id'            => 'blog-side-bar',
        'before_widget' => '<div class="blog-sidebar-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="blog-sidebar-widget-title">',
        'after_title'   => '</h2>',
    ));

    /** Related POsts */

    register_sidebar(array(
        'name'          => 'Blog Post Related Post',
        'id'            => 'blog-post-related-post',
        'before_widget' => '<div class="blog-post-related">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="blog-post-related-title">',
        'after_title'   => '</h5>',
    ));
}
add_action('widgets_init', 'wpb_widgets_init');
