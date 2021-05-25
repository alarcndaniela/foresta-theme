<!doctype html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php bloginfo('name'); ?></title>
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script> 

    <?php wp_head(); ?>
</head>

<body>
<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "706523216045638");
  chatbox.setAttribute("attribution", "biz_inbox");
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v10.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
    <script>
        AOS.init();
    </script> 
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
                        <a href="home"><img id="logo" src="<?php echo get_template_directory_uri()."/img/logo-foresta-02.svg" ?> " width="180px";></a>
            
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

                     </nav>
                     <!-- nav -->

                </div>

            </div>
            <div class="row px-5">

             <h1><span class="around-title">Crafts from our hands</span><br><span class="around-title">to yours</span></h1>
            </div>

        </header>
        <!-- header -->