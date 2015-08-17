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


        <div class="row">
            <div class="col-md-12">
                <!--google map-->
                <div id="map-canvas"></div>
                <!--google map end-->
            </div>
        </div>

        <div class="space-70"></div>

        <div class="container">
            <div class="col-md-5">
                
                <h3 class="gp-blue">Mailing Address</h3>
                <p>PO Box 143</p>
                <p>Dillon, CO 80435</p>

                <div class="space-70"></div>

                <h3 class="gp-blue">Office Address</h3>
                <p>403 La Bonte Street</p>
                <p>Dillon, CO 80435</p>
                <p><i class="ion-iphone"></i> Phone: (970) 468-2207</p>
                <p><i class="ion-email"></i> General Information and Membership:<br>
                    <a href="mailto:mail@summithistorical.org">mail@summithistorical.org</a></p>
                <p><i class="ion-email"></i> Archivists:<br>
                    <a href="mailto:archives@summithistorical.org">archives@summithistorical.org</a></p>


            </div>
        </div>

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
         <script src="assets/js/jqBootstrapValidation.js" type="text/javascript"></script>
        <script src="assets/js/contact_me.js" type="text/javascript"></script>
        <script src="assets/js/app.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript">
            var myLatlng;
            var map;
            var marker;

            function initialize() {
                myLatlng = new google.maps.LatLng(39.6311448,-106.0430546);

                var mapOptions = {
                    zoom: 13,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: true,
                    draggable: true
                };
                map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                var contentString = '<p style="line-height: 20px;"><strong>Banzhow Template</strong></p><p>403 La Bonte Street<br>Dillon, CO 80435</p>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: 'Marker'
                });

                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map, marker);
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </body>
</html>
