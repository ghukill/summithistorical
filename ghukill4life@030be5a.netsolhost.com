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
                    <h1>Events</h1>

                     <div class="space-20"></div>

                    <h3>Current Events</h3>

                    <div>
                        <ul>
                            <li>
                                <h4><strong>Women’s History Month Celebration with Sandra Dallas</strong></h4>
                                <p>Join the Society of 2:00 pm on Saturday, March 12, in the Commons of the Dillon Community Church (LaBonte Street, Dillon) for an afternoon of tea, goodies, and conversation with noted author, Sandra Dallas, a New York Times best-selling author.  Ms. Dallas will focus her conversation on three of her books:  The Last Mid-Wife, released September, 2015; Prayers for Sale; and Whiter than Snow, as all three books are set in Summit County.  Ms. Dallas, who lived in Breckenridge for many years, weaves Summit County history, weather, and geography as well as her love of quilts into her historical fiction.  Because quilts are featured prominently in Ms. Dallas’ books, local quilters will present a display of quilts at this event.  Alpine Bank is primary sponsor for the event.  The charge for Society members is $20; non-members $25.  Limited space requires pre-registration.  Register through Eventbrite or call Christy Nelson at the SHS office at <a href="tel:970-468-2207">970-468-2207</a> to reserve your spot.</p>
                            </li>
                        </ul>
                    </div>

                    <div class="space-20"></div>

                    <h3>Summer Events</h3>

                    <div>
                        <ul>
                            <li><p>Beginning July 5 and extending through September 2, the <strong>Dillon Schoolhouse Museum</strong> will open Tuesday through Friday from 10:00 until 3:00.  A donation of $5 is requested of adult visitors.  Learn about school days of the past in the authentically furnished 1883 schoolhouse.  View “Town at the Bottom of the Lake,” which tells about the construction of Dillon Dam.  Tour the Lula Myers 1885 cabin and the “honeymoon” cabin.  Special tours are offered by appointment.  The museum is located at <a target="_blank" href="https://www.google.com/maps/place/Dillon+Schoolhouse+Museum/@39.631276,-106.0456818,17z/data=!3m1!4b1!4m2!3m1!1s0x876a5b9b4e029ebd:0xf80b6dcffbbb5575">403 LaBonte Street in Dillon</a>.</p></li>

                            <li><p><strong>Lake Dillon boat tours</strong> are planned for Tuesdays and Thursdays from 9:00 until 10:30 mid-June until the end of August.  Spend the morning learning about the construction of Dillon dam, the glory hole, and the Roberts Tunnel while sailing slowly around Lake Dillon.  Learn how the old town of Dillon was moved to its new site.  Call the Dillon Marina for reservations (<a href="tel:970-468-5100">970-468-5100</a>).</p></li>
     
                            <li><p>Join Sandie Mather on Thursday mornings at 9:00 for her <strong>Dillon, Denver, and the Dam talk and walk</strong>.  Meet at the Schoolhouse Museum on LaBonte Street in Dillon.  Learn about the building of the dam and moving the town of Dillon.  Walk through town seeing buildings moved from the reservoir site and hear stories of Dillon residents through the decades.  The cost is $10.  The tours start July 14 and run through August 25.</p></li>
     
                            <li><p>The <strong>Donors’ Celebration and Happy Hour</strong> is scheduled for Wednesday, July 6, at 5:30 at the Schoolhouse Museum.  Watch for your special invitation.</p></li>
     
                            <li><p>Enjoy five-cent ice cream and other goodies at the annual <strong>Ice Cream Social</strong> on Saturday, July 16, at the Schoolhouse Museum on LaBonte Street in Dillon.  The festivities begin at noon.  Docents will guide visitors through the schoolroom, the Myers Cabin, and “honeymoon” cabin.  Ring the bell on the 1942 Sterling Howe fire truck and in the schoolhouse.  Other special activities are planned.</p></li>
     
                            <li><p>Bill Fountain will lead a <strong>tour to Swandyke</strong> on Wednesday, July 20, to celebrate the publication of his newest book, Swandyke, Boom to Bust to Dust.  Join the fun and receive a copy of the new book.  Details coming.</p></li>
     
                            <li><p>Rick Hague will lead a <strong>tour of the Mountain Pride mine on Mt. Baldy</strong> on Wednesday, August 17.  Details coming.</p></li>
     
                            <li><p>The popular <strong>Pastry and the Past dessert and lecture series</strong> begins on Monday, July 11, and continues on July 18, 25, and August 2.  Details about speakers and topics coming.  Join us for dessert at 7:30—note the later starting time—in the Commons of Dillon Community Church on LaBonte Street in Dillon.</p></li>
     
                            <li><p>Two special <strong>adventures for bike riders</strong> are planned for July and August—one is especially for families with children.  Watch for details.</p></li>
     
                            <li><p>Bring your appetites to the <strong>Elks breakfast</strong> on Sunday, July 31.  Enjoy their special menu while greeting friends.</p></li>
     
                            <li><p>A special <strong>celebration in honor of our 50th anniversary</strong> will be held on Thursday, August 11, at our annual meeting.  Watch for details.  The new book, Windows to the Past,  honoring our 50 years of service to Summit County and its residents will be unveiled.</p></li>
     
                            <li><p>Don’t forget to stop to say hello at the <strong>Society’s table at the Dillon Farmers’ Market</strong> on Fridays beginning June 24.  Besides our usual supply of books for sale, there will be some new books and a special “surprise” you can buy to carry your new books.  The market opens at 9:00 and runs until 2:00.</p></li>
                        </ul>
                    </div>

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
