
<?php include('config.php');?>

<!DOCTYPE HTML>
<!--
	Traveler by freehtml5.co
	Twitter: http://twitter.com/fh5co
	URL: http://freehtml5.co
-->
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>الرف الالكتروني </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
		<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
		<meta name="author" content="FreeHTML5.co" />

		<!-- Facebook and Twitter integration -->
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />

		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

        <link rel="icon" type="image/png" href="control_banel/layout/images/icon.png">
		
		<!-- Animate.css -->
		<link rel="stylesheet" href="layout/css/animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="layout/css/icomoon.css">
		<!-- Themify Icons-->
		<link rel="stylesheet" href="layout/css/themify-icons.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="layout/css/bootstrap.css">

		<!-- Magnific Popup -->
		<link rel="stylesheet" href="layout/css/magnific-popup.css">

		<!-- Magnific Popup -->
		<link rel="stylesheet" href="layout/css/bootstrap-datepicker.min.css">

		<!-- Owl Carousel  -->
		<link rel="stylesheet" href="layout/css/owl.carousel.min.css">
		<link rel="stylesheet" href="layout/css/owl.theme.default.min.css">

		<!-- Theme style  -->
		<link rel="stylesheet" href="layout/css/style.css">
        <style>
            .dashboared{
              
                }
        </style>

		<!-- Modernizr JS -->
		<script src="layout/js/modernizr-2.6.2.min.js"></script>
		<!-- FOR IE9 below -->
		<!--[if lt IE 9]>
		<script src="js/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.php">الرف الالكتروني للكتب <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="index.html">الرئيسية</a></li>
						<li class="has-dropdown">
							<a href="#">التصنيفات</a>
							<ul class="dropdown">
								<li><a href="#">ادب</a></li>
								<li><a href="#">تاريخ</a></li>
								<li><a href="#">طب</a></li>
								<li><a href="#">برمجة</a></li>
							</ul>
						</li>
						<li><a href="index.html">نبذة عن الموقع</a></li>
						<li><a href="contact.html">اتصل بنا</a></li>
                        <?php
                        session_start();
                        if(isset($_SESSION['admin'])){ ?>

                        <li><a href="control_banel/dashboared.php" target="_blank">Dashboared</a></li>

                        <?php } ?>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(layout/images/book.png);height: 650px;">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>حمل مئات الكتب مجانا</h1>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div class="gtco-section">
		<div class="gtco-container">