<?php

$site_array = array(

"historic_district" => "<h1><font face='Arial, Helvetica, sans-serif'>The Breckenridge Historic District</font></h1>
<p><font face='Arial, Helvetica, sans-serif'><img src='images/3housesbreck.jpg' alt='Breckenridge Historic District home' width='350' height='191' hspace='5' align='right'>A movement for designation of a Breckenridge Historic District began in the late 1970s to coincide and complement Breckenridge's Centennial of incorporation in1880. </font></p>
<p><font face='Arial, Helvetica, sans-serif'>Working with the Colorado Historical Society, the designation was granted as the Breckenridge Historic District in 1980 for the purpose of historical preservation. </font></p>
<p><font face='Arial, Helvetica, sans-serif'><img src='images/stjohnchurchbreck.jpg' alt='Breckenridge Historic District church' width='350' height='268' hspace='5' align='left'>The Breckenridge Historic District is an excellent representation of commercial (Main , Ridge &amp; Lincoln) residential (Ridge, French, Harris &amp; High) and religious (three nineteenth century churches) structures of the gold fever era. The facades include architectural examples of the Victorian age in the mining town revived as a resort/ski town. All buildings within the &quot;old town&quot; east of the Blue River from the first settlement in 1859 to the 1942 end of gold dredge period were surveyed, mapped and given designations as to primary historical significance or contributing to the character of the district. Containing 249 structures, these buildings' preservation are insured through strict development and design standards. <img src='images/breckmainst01.jpg' alt='Breckenridge Historic Districe Main Street' width='350' height='263' hspace='5' align='right'>New construction within the District also reflects the historic character of Breckenridge. </font></p>
<p><font face='Arial, Helvetica, sans-serif'>The geographical setting within the Ten Mile Range of the Colorado Rocky Mountains provides a visually pleasant background for the historical district as the public comes in direct touch with the historic character of Breckenridge. <img src='images/yellowhousebreck.jpg' alt='Breckenridge Historic District home' width='350' height='235' hspace='5' align='left'></font></p>"

);


?>

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

         <div class="space-70"></div>

        <!-- ################ PAGE CONTENT ################  -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php

                        echo $site_array[$_REQUEST['site']];

                    ?>
                </div>
            </div>
        </div>

        <!-- ################ PAGE CONTENT ################  -->

         <div class="space-70"></div>

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
