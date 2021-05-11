<?php get_header("image"); ?>
<div class="home-container" >
<div class="container introduction">
   <div class="row justify-content-center ">
      <div class="col">
         <div class="content mb-5">
            <a href="about-us">
               <div class="content-overlay"></div>
               <img class="img content-image " src="<?php echo get_template_directory_uri()."/img/picture_1.jpg"; ?>" alt="product">
               <div class="content-details fadeIn-bottom">
                  <h3 class="content-title">About us</h3>
                  <p class="content-text">View a little bit more about us</p>
               </div>
            </a>
         </div>
      </div>
      <div class="col align-self-center">
         <p class="intro-paragraph">
            Tienda Foresta brings together artists from Monteverde and the surrounding area.Women and men who work with their hearts and create unique, handmade products. Maintaining techniques of all times, with different materials and with nature that surrounds us as a source of inspiration. 
         </p>
      </div>
   </div>
   <div class="row intro-info justify-content-center mt-5">
      <div class="col align-self-center mb-5">
         <p class="intro-paragraph">
            Find everything from painting, photography, jewelry, bags made from recycled tires, natural cosmetics, clothing, accessories, batiks, wood crafts, to games for kids and more.
            Each object is made with great dedication and love for the creative work, with the intention that this feeling reaches all people who wear our products.        
         </p>
      </div>
      <div class="col mb-5" >
         <div class="content">
            <a href="contact">
               <div class="content-overlay2"></div>
               <img class="img content-image" src="<?php echo get_template_directory_uri()."/img/picture_2.jpg"; ?>" alt="product">
               <div class="content-details fadeIn-bottom">
                  <h3 class="content-title">Store</h3>
                  <p class="content-text">View our local products</p>
               </div>
            </a>
         </div>
      </div>
   </div>
   <div class="container products" >
      <br>
      <h2 class="product-title justify-content-center mt-4 " data-aos="fade-up">Products</h2>
      <br>
      <div class="row justify-content-center ">

      
         <div class="col-4 align-self-end">
             <div class="content mb-5">
               <a href="store/accesories">
                  <div class="content-overlayproduct"></div>
                  <img class="img square-image " src="<?php echo get_template_directory_uri()."/img/accesories_category.jpg"; ?>" alt="product">
                  <div class="content-details fadeIn-bottom">
                     <h3 class="content-title">Accesories</h3>
                     <p class="content-text">Shop accesories</p>
                  </div>
               </a>   
            </div>      
         </div>

         <div class="col-4 align-self-end">
             <div class="content mb-5">
               <a href="store/jewelry">
                  <div class="content-overlayproduct"></div>
                  <img class="img square-image" src="<?php echo get_template_directory_uri()."/img/jewelry_category.jpg"; ?>" alt="product">
                  <div class="content-details fadeIn-bottom">
                     <h3 class="content-title">Jewelry</h3>
                     <p class="content-text">Shop jewelry</p>
                  </div>
               </a>   
            </div>      
         </div>

      <div class="row justify-content-center ">
         <div class="col-4 align-self-start">
             <div class="content mb-5">
               <a href="store/decor">
                  <div class="content-overlayproduct"></div>
                  <img class="img square-image " src="<?php echo get_template_directory_uri()."/img/decor_category.jpg"; ?>" alt="product" alt="product">
                  <div class="content-details fadeIn-bottom">
                     <h3 class="content-title">Decor</h3>
                     <p class="content-text">Shop decor</p>
                  </div>
               </a>   
            </div>      
         </div>

         <div class="col-4 align-self-start">
             <div class="content mb-5">
               <a href="store/clothing">
                  <div class="content-overlayproduct"></div>
                  <img class="img square-image" src="<?php echo get_template_directory_uri()."/img/clothing_category.jpg"; ?>" alt="product">
                  <div class="content-details fadeIn-bottom">
                     <h3 class="content-title">Clothing</h3>
                     <p class="content-text">Shop clothing</p>
                  </div>
               </a>   
            </div>      
         </div>
</div>
</div>
   </div>
</div>
<?php get_template_part("carousel") ?>
<?php get_footer(); ?>