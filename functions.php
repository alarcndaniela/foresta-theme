<?php

    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    function load_assets(){
        
        //load BS
        wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css'); 
        
        wp_enqueue_style('font_awesome', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css');
        

        // Enqueue AOS styles
        wp_enqueue_style(' AOS_animate', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css', false, null);

        // //load SteinBeck font
        wp_enqueue_style('steinbeck', get_stylesheet_directory_uri() . '/fonts/steinbeck/stylesheet.css');

        // //load Work Sans font
        wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700&display=swap', false );

        //load stlye.css
        wp_enqueue_style( 'style', get_stylesheet_uri() );

        //load JS
        wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');

        //load BS
        wp_enqueue_script ( 'jquery-bs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js');

        // Enqueue AOS script library in footer
        wp_enqueue_script('AOS', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js', false, null, true);

        // For the JavaScript that initializes AOS, it's best if you manage that in a separate
        // JS file and enqueue it as a dependency of AOS script library. That way, it ensures the
        // order of your scripts.
        // wp_enqueue_script('theme-js', get_template_directory_uri() . '/theme.js', array( 'AOS' ), null, true);    
      
       
      
        //wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');

    }   

    add_action('wp_enqueue_scripts', 'load_assets');
         

    //register nav menu
    register_nav_menus( array(
        'primary-menu' => __( 'Primary Menu', 'Menu 1'),
    ) );

    //support featured image
    add_theme_support('post-thumbnails'); 

?>
