<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <title>Summit Historical Society - Sites</title>
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

        <div class="space-70"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Summit County Historical sites</h2>
                </div>
            </div>

            <div class="space-30"></div>

            <div class="row">
                <div class="col-md-12">
                    <ul class="portfolio-filters">
                        <li class="filter active" data-filter="all">All</li>
                        <li class="filter" data-filter="dillon">Dillon Area</li>
                        <li class="filter" data-filter="montezuma">Montezuma Area</li>
                        <li class="filter" data-filter="breckenridge">Breckenridge Area</li>
                        <li class="filter" data-filter="frisco">Frisco Area</li>
                        <!-- <li class="filter" data-filter="copper_mountain">Copper Mountain Area</li>
                        <li class="filter" data-filter="silverthorne">Silverthorne Area</li> -->
                    </ul>

                    <div id="grid">

                        <!-- breckenridge -->
                        <div class=" mix breckenridge col-md-4 col-sm-6 margin-btm-40 no-padding">
                            <div class="portfolio-sec">
                                <div class="portfolio-thumnail">
                                    <a href="site_details.php?site=breckenridge_area">
                                        <img src="assets/img/sites/historic_district.jpg" class="img-responsive" alt="">
                                    </a>
                                </div>
                                <div class="portfolio-desc text-center">
                                    <h4 class="portfolio-post-title">Breckenridge Area</h4>
                                    <span class="portfolio-post-cat">Breckenridge Area</span>
                                    <h4><a href="site_details.php?site=breckenridge_area" class="btn theme-btn-default btn-lg">More detail</a></h4>
                                </div>
                            </div>
                        </div>                        

                        <!-- dillon -->
                        <div class=" mix dillon col-md-4 col-sm-6 margin-btm-40 no-padding">
                            <div class="portfolio-sec">
                                <div class="portfolio-thumnail">
                                    <a href="site_details.php?site=dillon_schoolhouse">
                                        <img src="assets/img/sites/dillonschoolhouse2.jpg" class="img-responsive" alt="">
                                    </a>
                                </div>
                                <div class="portfolio-desc text-center">
                                    <h4 class="portfolio-post-title">Dillon Schoolhouse</h4>
                                    <span class="portfolio-post-cat">Dillon Area</span>
                                    <h4><a href="site_details.php?site=dillon_schoolhouse" class="btn theme-btn-default btn-lg">More detail</a></h4>
                                </div>
                            </div>
                        </div>

                        <div class=" mix dillon col-md-4 col-sm-6 margin-btm-40 no-padding">
                            <div class="portfolio-sec">
                                <div class="portfolio-thumnail">
                                    <a href="site_details.php?site=dillon_lula">
                                        <img src="assets/img/sites/lula.jpg" class="img-responsive" alt="">
                                    </a>
                                </div>
                                <div class="portfolio-desc text-center">
                                    <h4 class="portfolio-post-title">Lula Myers Ranch House</h4>
                                    <span class="portfolio-post-cat">Dillon Area</span>
                                    <h4><a href="site_details.php?site=dillon_lula" class="btn theme-btn-default btn-lg">More detail</a></h4>
                                </div>
                            </div>
                        </div>

                        <div class=" mix dillon col-md-4 col-sm-6 margin-btm-40 no-padding">
                            <div class="portfolio-sec">
                                <div class="portfolio-thumnail">
                                    <a href="site_details.php?site=dillon_honeymoon">
                                        <img src="assets/img/sites/honeymoon.jpg" class="img-responsive" alt="">
                                    </a>
                                </div>
                                <div class="portfolio-desc text-center">
                                    <h4 class="portfolio-post-title">Honeymoon Cabin</h4>
                                    <span class="portfolio-post-cat">Dillon Area</span>
                                    <h4><a href="site_details.php?site=dillon_honeymoon" class="btn theme-btn-default btn-lg">More detail</a></h4>
                                </div>
                            </div>
                        </div>

                        <div class=" mix dillon col-md-4 col-sm-6 margin-btm-40 no-padding">
                            <div class="portfolio-sec">
                                <div class="portfolio-thumnail">
                                    <a href="site_details.php?site=dillon_ricebarn">
                                        <img src="assets/img/sites/ricebarn.jpg" class="img-responsive" alt="">
                                    </a>
                                </div>
                                <div class="portfolio-desc text-center">
                                    <h4 class="portfolio-post-title">Rice Barn</h4>
                                    <span class="portfolio-post-cat">Dillon Area</span>
                                    <h4><a href="site_details.php?site=dillon_ricebarn" class="btn theme-btn-default btn-lg">More detail</a></h4>
                                </div>
                            </div>
                        </div>

                        <div class=" mix dillon col-md-4 col-sm-6 margin-btm-40 no-padding">
                            <div class="portfolio-sec">
                                <div class="portfolio-thumnail">
                                    <a href="site_details.php?site=dillon_firetruck">
                                        <img src="assets/img/sites/antiquefiretruck.jpg" class="img-responsive" alt="">
                                    </a>
                                </div>
                                <div class="portfolio-desc text-center">
                                    <h4 class="portfolio-post-title">Antique Fire Truck</h4>
                                    <span class="portfolio-post-cat">Dillon Area</span>
                                    <h4><a href="site_details.php?site=dillon_firetruck" class="btn theme-btn-default btn-lg">More detail</a></h4>
                                </div>
                            </div>
                        </div>

                        <!-- frisco -->
                        <div class=" mix frisco col-md-4 col-sm-6 margin-btm-40 no-padding">
                            <div class="portfolio-sec">
                                <div class="portfolio-thumnail">
                                    <a href="site_details.php?site=frisco_area">
                                        <img src="assets/img/sites/charcoalkilns.jpg" class="img-responsive" alt="">
                                    </a>
                                </div>
                                <div class="portfolio-desc text-center">
                                    <h4 class="portfolio-post-title">Frisco Area</h4>
                                    <span class="portfolio-post-cat">Frisco Area</span>
                                    <h4><a href="site_details.php?site=frisco_area" class="btn theme-btn-default btn-lg">More detail</a></h4>
                                </div>
                            </div>
                        </div>

                        <!-- montezuma -->
                        <div class=" mix montezuma col-md-4 col-sm-6 margin-btm-40 no-padding">
                            <div class="portfolio-sec">
                                <div class="portfolio-thumnail">
                                    <a href="site_details.php?site=montezuma_schoolhouse">
                                        <img src="assets/img/sites/montezumaschoolhouse.jpg" class="img-responsive" alt="">
                                    </a>
                                </div>
                                <div class="portfolio-desc text-center">
                                    <h4 class="portfolio-post-title">Montezuma Schoolhouse</h4>
                                    <span class="portfolio-post-cat">Montezuma Area</span>
                                    <h4><a href="site_details.php?site=montezuma_schoolhouse" class="btn theme-btn-default btn-lg">More detail</a></h4>
                                </div>
                            </div>
                        </div>                   

                    </div><!--grid-->
                </div>
            </div><!--row-->
        </div><!--portfolio container end-->

        <div class="space-70"></div>

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
