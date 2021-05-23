
<?php get_header("imagen"); ?>
<div class="home-container">
<div class="container introduction">
   <div class="row justify-content-center ">

      <div class="col pr-4" style="z-index:0">
         <img class="illustration" src="<?php echo get_template_directory_uri()."/img/illustration_1.png"; ?>" alt="product">

         <div class="content mb-5">
            <a href="acercade">

               <div class="content-overlay"></div>
               <img class="img content-image2"  src="<?php echo get_template_directory_uri()."/img/picture_1.jpg"; ?>" alt="product">
               <div class="content-details fadeIn-bottom">
                  <h3 class="content-title">Acerca de</h3>
                  <p class="content-text">Lee un poco más acerca de la tienda</p>
               </div>
            </a>
         </div>
      </div>
      <div class="col align-self-center">
         <p class="intro-paragraph">
         Tienda Foresta agrupa artistas de la zona de Monteverde y alrededores. Mujeres y hombres que trabajan desde el corazón, creando productos únicos, hechos a mano.  Manteniendo técnicas de todos los tiempos, con materiales diversos y con la naturaleza que nos rodea como fuente de inspiración. 
         </p>
      </div>
   </div>
   <div class="row intro-info justify-content-center mt-5">
      <div class="col align-self-center mb-5">
         <p class="intro-paragraph">
         Aquí se pueden encontrar desde pinturas, fotografía, joyería, bolsos de neumáticos reciclados, cosmética natural, ropa, accesorios, batiks, artesanía en madera, hasta juegos para niños y mÁs. Cada objeto realizado con mucha dedicación y amor por el trabajo creativo, con la intención de que este sentimiento llegue a todas las personas que adquieran nuestros productos. 
    
         </p>
      </div>
      <div class="col mb-5" >
         <div class="content">
            <a href="tienda">
               <div class="content-overlay2"></div>
               <img class="img content-image" src="<?php echo get_template_directory_uri()."/img/picture_2.jpg"; ?>" alt="product">
               <div class="content-details fadeIn-bottom">
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
      <h2 class="product-title justify-content-center mt-4 aos-init aos-animate" data-aos="fade-up">Productos</h2>
      <br>
      <div class="row justify-content-center ">

      
         <div class="col-4 align-self-end">
             <div class="content mb-5">
               <a href="store/accesories">
                  <div class="content-overlayproduct"></div>
                  <img class="img square-image " src="<?php echo get_template_directory_uri()."/img/accesories_category.jpg"; ?>" alt="product">
                  <div class="content-details fadeIn-bottom">
                     <h3 class="content-title">Accesorios</h3>
                     <p class="content-text">Compra accesorios</p>
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
                     <h3 class="content-title">Joyería</h3>
                     <p class="content-text">Compra joyería</p>
                  </div>
               </a>   
            </div>      
         </div>

      <div class="row justify-content-center ">
         <div class="col-4 align-self-start">
             <div class="content mb-5">
               <a href="store/decor">
                  <div class="content-overlayproduct"></div>
                  <img class="img square-image " src="<?php echo get_template_directory_uri()."/img/decor_category.jpg"; ?>" alt="product">
                  <div class="content-details fadeIn-bottom">
                     <h3 class="content-title">Decoración</h3>
                     <p class="content-text">Compra decoración</p>
                  </div>
               </a>   
            </div>      
         </div>

         <div class="col-4 align-self-start pb-5">
             <div class="content mb-5 ">
               <a href="store/clothing">
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