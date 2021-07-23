<?php get_header("image"); ?>
<div class="home-container">
<div class="container introduction">
   <div class="row justify-content-center"  data-aos="fade-right" data-aos-duration="2000">
      <div class="col">
         <div class="content mb-5">
            <a href="aboutus">
               <div class="content-overlay"></div>
               <img class="img content-image" src="<?php the_field('intro_foto_1');?>" alt="product">
               <div class="content-details-nosotros fadeIn-bottom">
                  <h3 class="content-title">About us</h3>
                  <p class="content-text">Check a little bit more about us</p>
               </div>
            </a>
         </div>
      </div>
      <div class="col align-self-center">
         <p class="intro-paragraph" >
            <?php the_field('intro_texto_1');?>         
         </p>
      </div>
   </div>
   <div class="row intro-info justify-content-center mt-5" data-aos="fade-up" data-aos-duration="2000">
      <div class="col align-self-center mb-5">
         <p class="intro-paragraph" >
            <?php the_field('intro_texto_2');?> 
         </p>
      </div>
      <div class="col mb-5" >
         <div class="content">
            <a target="_blank" href="https://dev-shopforesta.pantheonsite.io/en_us/?currency=USD">
               <div class="content-overlay2"></div>
               <img class="img content-image" data-aos="fade-up" data-aos-duration="2000" src="<?php the_field('intro_foto_2');?>" alt="product">
               <div class="content-details-tienda fadeIn-bottom">
                  <h3 class="content-title">Store</h3>
                  <p class="content-text">Check our local products</p>
               </div>
            </a>
         </div>
      </div>
   </div>

</div>
   <div class="products" >
      <br>
      <h2 class="product-title justify-content-center mt-4 aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">Products</h2>
      <br>
      <div class="row d-flex justify-content-center mt-5" data-aos="fade-up" data-aos-duration="2000">
      
         <div class="categories__col col-md-10 col-sm-12 align-self-end">
             <div class="content mb-5">
               <a target="_blank" href="https://dev-shopforesta.pantheonsite.io/en_us/accesorios/">
                  <div class="content-overlayproduct"></div>
                  <img class="img square-image"  src="<?php echo get_template_directory_uri()."/img/accesories_category.jpg"; ?>" alt="product">
                  <div class="content-details fadeIn-bottom">
                     <h3 class="content-title">Accesories</h3>
                     <p class="content-text">Shop accesories</p>
                  </div>
               </a>
               <a target="_blank" href="https://dev-shopforesta.pantheonsite.io/en_us/joyeria/">
                  <div class="content-overlayproduct"></div>
                  <img class="img square-image" src="<?php echo get_template_directory_uri()."/img/jewelry_category.jpg"; ?>" alt="product">
                  <div class="content-details fadeIn-bottom">
                     <h3 class="content-title">Jewelry</h3>
                     <p class="content-text">Shop jewelry</p>
                  </div>
               </a>      
            </div>      
         </div>

         <div class="categories__col col-md-10 col-sm-12 align-self-end">
             <div class="content mb-5">
               <a target="_blank" href="https://dev-shopforesta.pantheonsite.io/en_us/decoracion-y-utilitarios/">
                  <div class="content-overlayproduct"></div>
                  <img class="img square-image" src="<?php echo get_template_directory_uri()."/img/decor_category.jpg"; ?>" alt="product">
                  <div class="content-details fadeIn-bottom">
                     <h3 class="content-title">Jewelry</h3>
                     <p class="content-text">Shop jewelry</p>
                  </div>
               </a>   
               <a target="_blank" href="https://dev-shopforesta.pantheonsite.io/en_us/ropa/">
                  <div class="content-overlayproduct"></div>
                  <img class="img square-image" src="<?php echo get_template_directory_uri()."/img/clothing_category.jpg"; ?>" alt="product">
                  <div class="content-details fadeIn-bottom">
                     <h3 class="content-title">Clothing</h3>
                     <p class="content-text">Shop clothing</p>
                  </div>
               </a>   
            </div>      
         </div>

         <!-- <div class="row d-flex justify-content-center">
         <div class="categories__col col-md-3 col-sm-12 align-self-end">
             <div class="content mb-5">
               <a target="_blank" href="https://dev-shopforesta.pantheonsite.io/en_us/decoracion-y-utilitarios/">
                  <div class="content-overlayproduct"></div>
                  <img class="img square-image " src="<?php echo get_template_directory_uri()."/img/decor_category.jpg"; ?>" alt="product">
                  <div class="content-details fadeIn-bottom">
                     <h3 class="content-title">Decor</h3>
                     <p class="content-text">Shop decor</p>
                  </div>
               </a>   
            </div>      
         </div>

         <div class="categories__col col-md-3 col-sm-12 align-self-end">
             <div class="content mb-5 ">
               <a target="_blank" href="https://dev-shopforesta.pantheonsite.io/en_us/ropa/">
                  <div class="content-overlayproduct"></div>
                  <img class="img square-image" src="<?php echo get_template_directory_uri()."/img/clothing_category.jpg"; ?>" alt="product">
                  <div class="content-details fadeIn-bottom">
                     <h3 class="content-title">Clothing</h3>
                     <p class="content-text">Shop clothing</p>
                  </div>
               </a>   
            </div>      
         </div> -->
</div>
</div>
 
</div>
<?php get_template_part("carousel") ?>
<?php get_footer(); ?>
<?php get_template_part("social-footer") ?>