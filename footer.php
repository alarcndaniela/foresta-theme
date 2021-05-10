 <!-- footer -->
 <footer class="row justify-content-center">
    <div class="container">
        <div class="row">
        <div class="col"  style="position:absolute; margin-top:8%; z-index: 2;">
            <div class="row justify-content-center align-self-center" >
                <h3 class="footer-title m-3 align-content-center">Visit us in Monteverde</h3>
                <p class="footer-text m-3 align-content-center"><span class="around-title">Thank you for supporting art</span><br><span class="around-title">and buying local</span></p>
                <button onclick="window.location.href='contact'" class="btn footer-btn rounded-0 m-3 align-content-center">Contact</button>
            </div>
        </div>
        
        <div class="col align-content-center"  style="background-color:#D44000; opacity: 0.5; width:100%; height:60vh; position:absolute; z-index: 1">
      
        </div>
            <div class="col"  style="
                background:url(<?php echo get_template_directory_uri()."/img/foresta_store.jpg" ?>); 	
                height: 60vh; 
                background-size:cover; 
                object-position:center;
                object-fit:contain">
            </div>
            <div class="col" style="
                background:url(<?php echo get_template_directory_uri()."/img/foresta_store2.jpg" ?>); 	
                height: 60vh; 
                background-size:cover;
                object-position:center; 
                object-fit:contain">
            </div>
        </div>
    </div> <!-- container -->

    <div>
    <div class="row">
        <div class="col-sm-6 justify-content-center">
        </br><a href="#"><img id="logo" src="<?php echo get_template_directory_uri()."/img/logo-foresta-02.svg" ?> " width="180px";></a>
        </div>
        <div class="col-sm-6 justify-content-center" style="text-align:left;">
            </br>
            <a href="#" class="btn-footer">About us</a></br>
            <a href="#" class="btn-footer">Q&A</a></br>
            <a href="#" class="btn-footer">Store and Schedule</a>   
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            </br><p class="btn-footer" style="margin-left:2em;"><span>Follow us</span></p>
        </div>
        <div class="col-sm-6 justify-content-center">
            </br><p><span class="btn-footer">All rights reserved.</span><br><span class="btn-footer">Foresta Monteverde &copy 2021.</span></p>
        </div>
    </div>
    </div>

</footer>
</body>
</html>