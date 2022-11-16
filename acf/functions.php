<?php

if(!isset($content_width))
    $content_width = 800;

if(!function_exists('custom_theme_setup')):
    function custom_theme_setup(){
        // custom theme script
        function add_theme_scripts(){
            wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, 'all');
            wp_enqueue_style('main_css', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0', 'all');
            wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), false, true);
            wp_enqueue_script('custom_js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), false, true);
            // function for comments to work properly
            if(is_singular() && comments_open() && get_option('thread_comments')){
                wp_enqueue_script('comment-reply');
            }
        }
        add_action('wp_enqueue_scripts','add_theme_scripts');

        // add theme support -> menu
        add_theme_support('menus');
        // register menus
        function register_custom_menus(){
            register_nav_menus(
                array(
                    'primary' => __('Primary'),
                    'footer' => __('Footer'),
                    'mobile' => __('Mobile')
                )
            );
        }
        add_action('init','register_custom_menus');

        // add theme support -> custom logo
        // custom logo
        $logo_defaults = array(
            'height' => 30,
            'width' => 100,
            'flex-height' => true,
            'flex-width' => true,
            'header-text' => array('site-title', 'site-description'),
            'unlink-homepage-logo' => false
        );
        add_theme_support('custom-logo', $logo_defaults);

        // add theme support -> post thumbnails
        add_theme_support('post-thumbnails');
        // add theme support -> widgets
        add_theme_support('widgets');

        // register custom sidebar
        function my_custom_sidebar(){
            register_sidebar(
                array(
                    'id' => 'primary',
                    'name' => __('Primary Sidebar', 'Custom Theme'),
                    'description' => __('This is short description for sidebar'),
                    'before_widget' => '<aside id="%1$s" class="%2$s" >',
                    'after_widget' => '</aside>',
                    'before_title' => '<h3 class="widget-title">',
                    'after_title' => '</h3>'
                )
            );
        }
        add_action('widgets_init', 'my_custom_sidebar');
        //admin bar
        // show_admin_bar(false);


        // custom post types
        function custom_post_type(){
            $args = array(
                'labels' => array(
                    'name' => __('Monuments','textdomain'),
                    'singular_name' => __('Monument','textdomain')
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-admin-multisite',
                'supports' => array('title', 'editor', 'thumbnail', 'comments')
            );
            register_post_type('monuments', $args);

            $args = array(
                'labels' => array(
                    'name' => __('Locations','textdomain'),
                    'singular_name' => __('Location','textdomain')
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-location',
                'supports' => array('title', 'editor', 'thumbnail', 'comments')
            );
            register_post_type('locations', $args);

            $args = array(
                'labels' => array(
                    'name' => __('Persons','textdomain'),
                    'singular_name' => __('Person','textdomain')
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-admin-users',
                'supports' => array('title', 'editor', 'thumbnail')
            );
            register_post_type('persons', $args);
        }
        add_action('init','custom_post_type');

        // register taxonomy
        function custom_taxonomy(){
            $args = array(
                'labels' => array(
                    'name' => __('Types','textdomain'),
                    'singular_name' => __('Type','textdomain')
                ),
                'public' => true,
                'has_archive' => true
            );
            register_taxonomy('types', array('monuments'), $args);
        }
        add_action('init','custom_taxonomy');


        // google map api key
        // function my_acf_google_map_api( $api ){
        //     $api['key'] = 'AIzaSyChOgs2LfNRVqaD48jyh3cPOWropk6oV38';
        //     return $api;
        // }
        // add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
}
endif;
add_action('after_setup_theme','custom_theme_setup');