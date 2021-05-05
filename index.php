<?php get_header("image"); ?>

<div class="home-container">
    <div class="container intro">
        <div class="row justify-content-center ">

            <div class="col align-self-center">
                <a href="aboutus"><img class="img intro-img" src="<?php echo get_template_directory_uri()."/img/picture_1.jpg"; ?>" alt="product"></a>
                <!--<div class="col cuadrado align-self-center">About us</div>-->
            </div>

            <div class="col align-self-center">
                <p>
                Tienda Foresta brings together artists from Monteverde and the surrounding area.Women and men who work with their hearts and create unique, handmade products. Maintaining techniques of all times, with different materials and with nature that surrounds us as a source of inspiration. 
                </p>
            </div>
        </div>

        <div class="row justify-content-center mt-5 ">
            <div class="col align-self-center">
                <p>
                Find everything from painting, photography, jewelry, bags made from recycled tires, natural cosmetics, clothing, accessories, batiks, wood crafts, to games for kids and more.
                Each object is made with great dedication and love for the creative work, with the intention that this feeling reaches all people who wear our products.        
            </p>
            </div>
            <div class="col align-self-center">
                <a href="store"><img class="img intro-img" src="<?php echo get_template_directory_uri()."/img/picture_2.jpg"; ?>" alt="product"></a>
            </div>
        </div>
    </div>

    <div class="container products">
        <br>
        <p class="product-title justify-content-center">Products</p>
        <br>

        <div class="row justify-content-center ">
            <div class="col-4 align-self-end">
                <a href="store/accesories"><img class="square-img accesories" src="<?php echo get_template_directory_uri()."/img/accesories_category.jpg"; ?>" alt="product"></a>
            </div>
            <div class="col-4 align-self-end">
                <a href="store/jewelry"><img class="square-img jewelry" src="<?php echo get_template_directory_uri()."/img/jewelry_category.jpg"; ?>" alt="product"></a>
            </div>
        </div>

        <div class="row justify-content-center mt-2">
            <div class="col-4  mb-4 align-self-start">
                <a href="store/decor"><img class="square-img decor" src="<?php echo get_template_directory_uri()."/img/decor_category.jpg"; ?>" alt="product"></a>
            </div>
            <div class="col-4 mb-4 align-self-start">
                <a href="store/clothing"><img class="square-img clothing" src="<?php echo get_template_directory_uri()."/img/clothing_category.jpg"; ?>" alt="product"></a>
            </div>
        </div>
    </div>

<?php get_template_part("carousel") ?>
<?php get_footer(); ?>