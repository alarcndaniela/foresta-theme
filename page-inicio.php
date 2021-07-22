<?php get_header("imagen"); ?>
<div class="home-container">
<div class="container introduction"  data-aos="fade-right" data-aos-duration="2000">
   <div class="row justify-content-center ">
      <div class="col">
         <div class="content mb-5">
            <a href="nosotros">
               <div class="content-overlay" ></div>
                  <img class="img content-image"  src="<?php the_field('intro_foto_1');?>" alt="product">
                  <div class="content-details-nosotros fadeIn-bottom">
                     <h3 class="content-title">Nosotros</h3>
                     <p class="content-text">Lee un poco más acerca de la tienda</p>
               </div>
            </a>
         </div>
      </div>
      <div class="col align-self-center">
         <p class="intro-paragraph">
            <?php the_field('intro_texto_1');?>         
         </p>
      </div>
   </div>
   <div class="row intro-info justify-content-center mt-5"  data-aos="fade-up" data-aos-duration="2000">
      <div class="col align-self-center mb-5">
         <p class="intro-paragraph">
            <?php the_field('intro_texto_2');?>      
         </p>
      </div>
      <div class="col mb-5" >
         <div class="content" >
            <a target="_blank" href="https://dev-shopforesta.pantheonsite.io/?currency=CRC">
               <div class="content-overlay2" ></div>
               <img class="img content-image" data-aos="fade-up" data-aos-duration="2000" src="<?php the_field('intro_foto_2');?>" alt="product">
               <div class="content-details-tienda fadeIn-bottom">
                  <h3 class="content-title">Tienda</h3>
                  <p class="content-text">Ver nuestros productos locales</p>
               </div>
            </a>
         </div>
      </div>
   </div>

</div>
   <div class="products" >
      <br>
      <h2 class="product-title justify-content-center mt-4 aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">Productos</h2>
      <br>
      <div class="row d-flex justify-content-center mt-5" data-aos="fade-up" data-aos-duration="2000">

         <div class="categories__col col-md-3 col-sm-12 align-self-end">
             <div class="content mb-5">
               <a target="_blank" href="https://dev-shopforesta.pantheonsite.io/accesorios/">
                  <div class="content-overlayproduct"></div>
                  <img class="img square-image " src="<?php echo get_template_directory_uri()."/img/accesories_category.jpg"; ?>" alt="product">
                  <div class="content-details fadeIn-bottom">
                     <h3 class="content-title">Accesorios</h3>
                     <p class="content-text">Compra accesorios</p>
                  </div>
               </a>   
            </div>      
         </div>

         <div class="categories__col col-md-3 col-sm-12 align-self-end">
             <div class="content mb-5">
               <a target="_blank" href="https://dev-shopforesta.pantheonsite.io/joyeria/">
                  <div class="content-overlayproduct"></div>
                  <img class="img square-image" src="<?php echo get_template_directory_uri()."/img/jewelry_category.jpg"; ?>" alt="product">
                  <div class="content-details fadeIn-bottom">
                     <h3 class="content-title">Joyería</h3>
                     <p class="content-text">Compra joyería</p>
                  </div>
               </a>   
            </div>      
         </div>

         <div class="row d-flex justify-content-center">
         <div class="categories__col col-md-3 col-sm-12 align-self-end">
             <div class="content mb-5">
               <a target="_blank" href="https://dev-shopforesta.pantheonsite.io/decoracion-y-utilitarios/">
                  <div class="content-overlayproduct"></div>
                  <img class="img square-image " src="<?php echo get_template_directory_uri()."/img/decor_category.jpg"; ?>" alt="product">
                  <div class="content-details fadeIn-bottom">
                     <h3 class="content-title">Decoración</h3>
                     <p class="content-text">Compra decoración</p>
                  </div>
               </a>   
            </div>      
         </div>

         <div class="categories__col col-md-3 col-sm-12 align-self-end">
             <div class="content mb-5 ">
               <a target="_blank" href="https://dev-shopforesta.pantheonsite.io/ropa/">
                  <div class="content-overlayproduct"></div>
                  <img class="img square-image" src="<?php echo get_template_directory_uri()."/img/clothing_category.jpg"; ?>" alt="product">
                  <div class="content-details fadeIn-bottom">
                     <h3 class="content-title">Ropa</h3>
                     <p class="content-text">Compra ropa</p>
                  </div>
               </a>   
            </div>      
         </div>
   </div>
</div>
 
</div>

<?php get_template_part("carrusel") ?>
<?php get_footer("es"); ?>
<?php get_template_part("social-es") ?>
