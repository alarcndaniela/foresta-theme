<?php get_header() ?>
   
   <div class="row contact justify-content-start mt-5"
   style="background:url(<?php echo get_template_directory_uri()."/img/contact-header.png" ?>);
   height: 60vh; 
   background-size:cover; 
   background-position:right">
      <div class="row justify-content-center align-content-center align-self-center">
         <h1 class="p-2"><span class="around-title">Empecemos una conversación!</span></h1>
      </div>    
   </div>

   <div>
      <div class="row contact-info justify-content-center ">
         <div class="col-12 p-5 contact-info-1">
            <div class="info p-5">
            <h1 class="contact-title"><span>Para nosotros será un placer ayudarte, cuéntanos como podemos hacerlo</span></h1>
            <br>
            <div class="col my-4">    
               <img class="m-1" id="phone" src="<?php echo get_template_directory_uri()."/img/phone.svg" ?> " width="20px";>
               <p class="contact-text"><span>2660-3678 / 8735-9023</span></p>
            </div>
  
            <div class="col my-4">
               <img class="m-1" id="location" src="<?php echo get_template_directory_uri()."/img/location.svg" ?> " width="20px";>
               <p class="contact-text"><span>100 mts este de la plaza de deportes de Monteverde, Puntarenas.</span></p>
            </div>
      
            <div class="col my-4">
               <img class="m-1" id="clock" src="<?php echo get_template_directory_uri()."/img/clock.svg" ?> " width="20px";>
               <p class="contact-text"><span>Lunes - Viernes<br>10:00 a.m. - 5:00 p.m.</span></p>
            </div>
            
            
            <div class="col my-4">
               <p class="contact-text"><span>Síguenos</span></p>
               <img class="m-1" id="facebook2" src="<?php echo get_template_directory_uri()."/img/facebook.svg" ?> " width="20px";>
               <img class="m-1" id="instagram2" src="<?php echo get_template_directory_uri()."/img/instagram.svg" ?> " width="20px";>
            </div>
            </div>
            
         </div>

         <div class="col-12 p-5 contact-info-2 justify-content-center align-self-center">

            <form class="align-self-center">
               <div class="form-group m-4">
                  <label for="exampleInputEmail1">Nombre completo</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <small id="emailHelp" class="form-text text-muted">No compartiremos tu email con nadie más.</small>
               </div>
               <div class="form-group m-4">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" class="form-control" id="exampleInputPassword1">
               </div>
               <div class="form-group m-4">
                  <label for="exampleInputPassword1">Mensaje</label>
                  <input type="text" class="form-control" id="exampleInputPassword1">
               </div>
               <button type="submit" class="btn rounded-0 m-4 contact-btn">Enviar</button>
            </form>
            
         </div>
      </div>
   </div>