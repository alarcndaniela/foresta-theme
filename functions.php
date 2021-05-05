<?php

    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    function load_assets( ){
        
        //load BS
        wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css');
    
        //wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');

        wp_enqueue_style('font_awesome', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css');
        
        //load stlye.css
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        
        //load JS
        wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');

        //load SteinBeck font
        wp_enqueue_style('steinbeck', get_stylesheet_directory_uri() . './fonts/steinbeck/stylesheet.css');

        //load Work Sans font
        wp_enqueue_style('worksans', get_stylesheet_directory_uri() . './fonts/worksans/stylesheet.css');

        
    }
    
    // function wpb_add_google_fonts() {
    //     //load fonts
    //     wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700&display=swap', false );
    // }


    add_action('wp_enqueue_scripts', 'load_assets');
                        
    //register nav menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'THEMENAME' ),
    ) );

    //support featured image
    add_theme_support('post-thumbnails'); 

?>
