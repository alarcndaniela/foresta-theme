<?php get_header() ?>
   
   <div class="row contact justify-content-start" 
   style="background:url(<?php echo get_template_directory_uri()."/img/contact-header.png" ?>);
   height: 60vh; 
   margin-top:80px;
   background-size:cover; 
   background-position:right" >
      <div class="row justify-content-center align-content-center align-self-center">
         <h1 class="p-2"><span class="around-title">Let's start a conversation</span></h1>
      </div>    
   </div>

   <div>
      <div class="row contact-info justify-content-center " data-aos="fade-right" data-aos-duration="2000">
         <div class="col-12 p-5 contact-info-1">
            <div class="info p-5">
            <h1 class="contact-title"><span>For us it will be a pleasure to help you, tell us how we can do it</span></h1>
            <br>
            <div class="col my-4">    
               <img class="m-1" id="phone" src="<?php echo get_template_directory_uri()."/img/phone.svg" ?> " width="20px";>
               <p class="contact-text"><span>2660-3678 / 8735-9023</span></p>
            </div>
  
            <div class="col my-4">
               <img class="m-1" id="location" src="<?php echo get_template_directory_uri()."/img/location.svg" ?> " width="20px";>
               <p class="contact-text"><span>100 meters east of the sports plaza of Monteverde, Puntarenas.</span></p>
            </div>
      
            <div class="col my-4">
               <img class="m-1" id="clock" src="<?php echo get_template_directory_uri()."/img/clock.svg" ?> " width="20px";>
               <p class="contact-text"><span>Monday - Friday<br>10:00 a.m. - 5:00 p.m.</span></p>
            </div>
            
            
            <div class="col my-4">
               <p class="contact-text"><span>Follow us</span></p>
               <img class="m-1" id="facebook2" src="<?php echo get_template_directory_uri()."/img/facebook.svg" ?> " width="20px";>
               <img class="m-1" id="instagram2" src="<?php echo get_template_directory_uri()."/img/instagram.svg" ?> " width="20px";>
            </div>
            </div>
            
         </div>

         <div class="col-12 contact-info-2 justify-content-center align-self-center">
            <iframe id="waze" src="https://embed.waze.com/iframe?zoom=14&lat=10.313399&lon=-84.816460&ct=livemap&pin=1" allowfullscreen></iframe>
         </div>
         
      </div>
   </div>
   <!-- Messenger plugin de chat Code -->
   <div id="fb-root"></div>

<!-- Your plugin de chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<!-- Messenger plugin de chat Code -->
<div id="fb-root"></div>

<!-- Your plugin de chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

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