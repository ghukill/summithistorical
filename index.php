<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <title>Summit Historical Society</title>
        <meta name="description" content="HTML5 & CSS3">
        <meta name="keywords" content="HTML5, CSS3, Theme,bootstrap3,clean design"> 

        <!--bootstrap3 css-->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--ion icon fonts css-->
        <link href="assets/icons/css/ionicons.css" rel="stylesheet">
        <!--custom css-->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <!--google  font family-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400italic' rel='stylesheet' type='text/css'>
        <!--flex slider css-->
        <link href="assets/css/flexslider.css" rel="stylesheet">
        <!--animated  css-->
        <link href="assets/css/animate.css" rel="stylesheet">
        
        <!-- Local CSS Overrides -->
        <link href="assets/css/local.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        <!-- load header -->
        <?php include("assets/templates/header.php");?>

        <!-- ################ PAGE CONTENT ################  -->

        <section id="slider-sec" class="slider-reg">
            <div class="main-flex-slider">
                <ul class="slides">
                    <li>
                        <figure>
                            <img src="assets/img/slider1_cropped.jpg" class="img-responsive" alt="slider-img-1">
                            <figcaption class="slider-overlay ">
                                <div class="slider-text animated fadeInDown">
                                    <h1>Welcome to the Summit Historical Society!</h1>
                                    <p>
                                        Our mission is to discover, preserve, interpret, and disseminate information to the public about the history of Summit County, Colorado.
                                    </p>
                                    <!-- <p class="slide-btn"><a href="#" class="btn btn-white btn-lg">Purchase Now</a></p> -->
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="assets/img/slider2_cropped.jpg" class="img-responsive" alt="slider-img-1">
                            <figcaption class="slider-overlay ">
                                <div class="slider-text animated fadeInDown">
                                    <h1>Welcome to the Summit Historical Society!</h1>
                                    <p>
                                        Our mission is to discover, preserve, interpret, and disseminate information to the public about the history of Summit County, Colorado.
                                    </p>
                                    <!-- <p class="slide-btn"><a href="#" class="btn btn-white btn-lg">Purchase Now</a></p> -->
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="assets/img/slider3alt_cropped.jpg" class="img-responsive" alt="slider-img-1">
                            <figcaption class="slider-overlay ">
                                <div class="slider-text animated fadeInDown">
                                    <h1>Welcome to the Summit Historical Society!</h1>
                                    <p>
                                        Our mission is to discover, preserve, interpret, and disseminate information to the public about the history of Summit County, Colorado.
                                    </p>
                                    <!-- <p class="slide-btn"><a href="#" class="btn btn-white btn-lg">Purchase Now</a></p> -->
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="assets/img/slider4_cropped.jpg" class="img-responsive" alt="slider-img-1">
                            <figcaption class="slider-overlay ">
                                <div class="slider-text animated fadeInDown">
                                    <h1>Welcome to the Summit Historical Society!</h1>
                                    <p>
                                        Our mission is to discover, preserve, interpret, and disseminate information to the public about the history of Summit County, Colorado.
                                    </p>
                                    <!-- <p class="slide-btn"><a href="#" class="btn btn-white btn-lg">Purchase Now</a></p> -->
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="assets/img/slider5_cropped.jpg" class="img-responsive" alt="slider-img-1">
                            <figcaption class="slider-overlay ">
                                <div class="slider-text animated fadeInDown">
                                    <h1>Welcome to the Summit Historical Society!</h1>
                                    <p>
                                        Our mission is to discover, preserve, interpret, and disseminate information to the public about the history of Summit County, Colorado.
                                    </p>
                                    <!-- <p class="slide-btn"><a href="#" class="btn btn-white btn-lg">Purchase Now</a></p> -->
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </div>
        </section><!--main flex slider end-->
        <div class="space-50"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center wow animated fadeInUp">
                    <h4>The Summit Historical Society is dedicated to the discovery, preservation, interpretation, and exhibition of the rich heritage and history of Summit County. We provide tours of historic buildings and mine sites, collections of artifacts, photographs, and documents, and public education programs. Whether your interests lie in our gold rush days, skiing history, or our Native American heritage, come visit us at the Summit. This website also intends to bring together and keep informed all members and friends of the Summit Historical Society. Here you will find here such things as historical sites, Society events, tours, archives and research, Society newsletters, and books for sale. Also information on volunteering with the Society and membership.</h4>
                </div>

                <div class="space-30"></div>

                <div class="col-md-12 text-center wow animated fadeInUp">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="URLCNUDNFAHU8">
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div>

                


            </div><!--row end-->
        </div><!--intro with services end-->
        
        <!-- <div class="space-70"></div><div class="space-30"></div> -->

        
        <div class="space-70"></div>
        <section id="content-region-1" class="padding-40">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 features">
                        <h3>About Us</h3>
                        <p>
                            The Summit Historical Society (SHS) was incorporated on October 25, 1966, as a private, nonprofit, tax-exempt State of Colorado 501(c) (3) corporation. As such, contributions are tax deductible as permitted by section 170 IRS Code.
                        </p>
                        <div class="space-30"></div>
                        <div class="row">
                            <div class="col-md-3 services-icon">
                                <i class="ion-earth"></i>
                            </div>
                            <div class="col-md-9 services-text">
                                <h4 class="heading-mini">sites</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ipsum mauris. Fusce condimentum mollis eros vitae facilisis. 
                                </p>
                            </div>
                        </div><!--services list-->
                        <div class="space-30"></div>
                        <div class="row">
                            <div class="col-md-3 services-icon">
                                <i class="ion-android-contacts"></i>
                            </div>
                            <div class="col-md-9 services-text">
                                <h4 class="heading-mini">Tours</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ipsum mauris. Fusce condimentum mollis eros vitae facilisis. 
                                </p>
                            </div>
                        </div><!--services list-->
                        <div class="space-30"></div>
                        <div class="row">
                            <div class="col-md-3 services-icon">
                                <i class="ion-calendar"></i>
                            </div>
                            <div class="col-md-9 services-text">
                                <h4 class="heading-mini">Events</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ipsum mauris. Fusce condimentum mollis eros vitae facilisis. 
                                </p>
                            </div>
                        </div><!--services list-->
                        <div class="space-30"></div>
                        <div class="row">
                            <div class="col-md-3 services-icon">
                                <i class="ion-filing"></i>
                            </div>
                            <div class="col-md-9 services-text">
                                <h4 class="heading-mini">Archives</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ipsum mauris. Fusce condimentum mollis eros vitae facilisis. 
                                </p>
                            </div>
                        </div><!--services list-->


                    </div>
                    <div class="col-md-5">
                        <img style="float:right;" src="assets/img/vert2_mus.jpg" class="img-responsive" alt="">
                    </div>
                </div>

            </div><!--container-->
        </section><!--features end-->
         
        <section id="content-region-2" class="padding-40 parallax-1">

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="testimonials">
                            <ul class="slides">
                                <li>
                                    <p class="testi-text">"The Summit Historical Society is pretty much the bee's knees."<p>
                                        <span class="testi-person">Graham Hukill</span>
                                </li>
                                <li>
                                    <p class="testi-text">"Summit helped me with research about the region."<p>
                                        <span class="testi-person">Jane Doe - University of Studying</span>
                                </li>
                                <li>
                                    <p class="testi-text">"I was able to find a picture of my great-great-grandather, my whole family loved it."<p>
                                        <span class="testi-person">Victor - Place in Colorado</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section> <!--testimonials section end here-->

        <div class="cta-bg">
            <div class="container text-center">
                <h3>Get Involved!
                    <a href="contact.php" class="btn btn-lg btn-white btn-radius">Contact Us</a>
                </h3>
            </div>
        </div>

        <!-- ################ PAGE CONTENT ################  -->

        <!-- load footer -->
        <?php include("assets/templates/footer.php");?>

        <!--scripts-->
        <script src="assets/js/jquery-1.10.2.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/modernizr.custom.97074.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.sticky.js" type="text/javascript"></script>
        <script src="assets/js/jquery.flexslider-min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.mixitup.min.js" type="text/javascript"></script>
        <script src="assets/js/parallax.min.js" type="text/javascript"></script>
        <script src="assets/js/wow.min.js" type="text/javascript"></script>
        <script src="assets/js/app.js" type="text/javascript"></script>
    </body>
</html>
