<!doctype html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
   <!-- container -->
    <div class="container-fluid">

        <!-- header -->
        <header 
        class="hero row justify-content-start" 
        style="
        background:url(<?php echo get_template_directory_uri()."/img/header_img.jpg" ?>); 	
        height: 80vh; 
        background-size:cover; 
        object-fit:contain" >

            <div class="col-10">
                <div class="row">
                     <!-- nav -->
                     <nav class="fixed-top nav-top navbar navbar-expand-md navbar-light" role="navigation">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		                    <span class="navbar-toggler-icon"></span>
	                    </button>
                        <a href="#"><img id="logo" src="<?php echo get_template_directory_uri()."/img/logo-foresta-02.svg" ?> " width="180px";></a>

                        <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'primary',
                                'depth'             => 1,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'navbar-nav mr-auto',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker()
                            ) );
                        ?>
                        <!-- <a href="shop"><img id="shop-bag" src="<?php echo get_template_directory_uri()."/img/shop.svg" ?> " width="20px";></a> -->

                        <a href="#" class="btn-language english">EN</a>
                        <a href="#" class="btn-language spanish">ES</a>

                     </nav>
                     <!-- nav -->

                </div>

            </div>
            <div class="row">
                    <h1><span class="around-title">Crafts from our hands</span><br><span class="around-title">to yours</span></h1>
            </div>

        </header>
        <!-- header -->