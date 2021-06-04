<?php get_header() ?>

   <div class="container vision-mission">
      <?php
            //get aboutUs
            $args = array(
               'post_type' => 'page',
               'posts_per_page' => -1,
               'post_parent' => $post->ID,
               'order' => 'ASC',
               'orderby' => 'menu_order'
            );

            $the_query = new WP_Query($args);

            if( $the_query->have_posts() ) : 
                  
            while( $the_query-> have_posts() ) : $the_query->the_post();
      ?>
      <div class="row justify-content-center" data-aos="fade-right" data-aos-duration="2000"  style="padding-top:15vh"> 
         <div class="col">
            <div class="content mb-5">
               <img class="img content-image " 
               src="<?php the_field('about_us_intro_image'); ?>" alt="product">
            </div>
         </div>
         <div class="col align-self-center">
            <h3 class="vision-paragraph"><?php the_title(); ?></h3>
            <p class="intro-paragraph">
               <?php the_content();?>            
            </p>
         </div>

      </div>            
      <?php endwhile;
         else : 
            echo "<p>There'is no content for the moment</p>";
         endif; ?>
   </div>
      <!-- <div class="row intro-info justify-content-center mt-5" data-aos="fade-up" data-aos-duration="2000">
         <div class="col align-self-center mb-5">
            <h3 class="vision-paragraph">Mission</h3>
            <p class="intro-paragraph">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu luctus mi. Duis porttitor fringilla nisi quis faucibus. Pellentesque sit amet augue sed mi euismod tincidunt non non massa.       
            </p>
         </div>
         <div class="col mb-5" >
            <div class="content">
                  <img class="img content-image" src="<?php echo get_template_directory_uri()."/img/mission.jpg"; ?>" alt="product">
            </div>
         </div>-->
   <!-- aboutUs -->

   <section class="pt-5">
      <div class="contain our-store" data-aos="fade-up" data-aos-duration="2000" style="display:flex; justify-content:center; align-content:center">
         <div class="row align-items-center justify-content-center align-self-center">

            <div class="col-4">
               <div class="content ">
                  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner mb-5 mt-5" >
                        <div class="carousel-item active">
                           <img class="d-block w-100" src="<?php echo get_template_directory_uri()."/img/ourstore1.jpg"; ?>" alt="First slide">
                        </div>
                        <div class="carousel-item">
                           <img class="d-block w-100" src="<?php echo get_template_directory_uri()."/img/ourstore2.jpg"; ?>" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                           <img class="d-block w-100" src="<?php echo get_template_directory_uri()."/img/ourstore3.jpg"; ?>" alt="Third slide">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
            <div class="col-4  ">
               <div class="content">
                  <div class="ourstore-paragraph">
                     <h3 class="ourstore-title">Our store</h3>
                     <p class="intro-paragraph">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu luctus mi. Duis porttitor fringilla nisi quis faucibus. Pellentesque sit amet augue sed mi euismod tincidunt non non massa.
                     </p>
                  </div>
               </div>
            </div>

         </div>     
      </div>
   </section>

   <?php get_template_part("social-footer") ?>