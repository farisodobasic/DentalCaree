<!doctype html>
<html>
    <head>
	        <meta charset="utf-8">
	        <meta http-equiv="x-ua-compatible" content="ie=edge">
	        <title>DentalCare</title>
	        <meta name="description" content="DentalCare">
	        <meta name="viewport" content="width=device-width, initial-scale=1">

	         	  <meta property="og:type" content="website">
				  <meta property="og:title" content="DentalCare" />
				  <meta property="og:description" content="DentalCare" />
				  <!--<meta property="og:image" content="<?=$url_home;?>img/jobfair-og.jpg" />
				  <meta property="og:url" content="<?=$url_home;?>" />-->

	               <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	               <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
	               <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.28//angular-route.min.js"></script>
                   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>

	        <link rel="apple-touch-icon" href="apple-touch-icon.png">
	        <!-- Place favicon.ico in the root directory -->
	        <link rel="stylesheet" href="css/main.css">
            <link rel="stylesheet" href="css/main-landing.css">
	        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
	        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
	        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	        <link rel="shortcut icon" href="favicon.ico?v=2">
            
            <!--Za affix-->
              <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>



         <!-- Add fancyBox -->
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-35242323-2','auto');ga('send','pageview');
        </script>


      <!--  <div id="screen" ng-view>
            <center><img src="https://d13yacurqjgara.cloudfront.net/users/12755/screenshots/1037374/hex-loader2.gif" /></center>
        </div> -->


        <?php include('partials/home.php'); ?>
        


        <script type="text/javascript">
            $(document).ready(function() {
              $(".fancybox").fancybox();
            });
        </script>

        <script src="js/main-landing.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/menu.js"></script>
		<script src="js/main.js"></script>

        <script async defer src="https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initMap"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>

    </body>
</html>
