   
      <?php
  session_start();

	   include "include/config.php";

	   if(isset($_SESSION['admin']) > 0 ){
	   
	  		$user = $_SESSION['admin']; 
		}
	 
	 ?>

	    <!-- fetch data from admin -->
	<?php
	
	$select ="SELECT * FROM `admin1` WHERE name='$user'";
	$run = mysqli_query($con , $select);
	$fetch = mysqli_fetch_assoc($run);
	?>

<!DOCTYPE HTML>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>لوحة التحكم للمكتبة</title>
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
		<!-- icon title -->
		<link rel="icon" type="image/png" href="layout/images/icon.png">
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
					<div id="gtco-logo"><a href="../index.php">عرض الموقع<em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1 ">
					<ul>
						<!-- شرط وجود سيشن لاضهار المستخدم -->
						<?php
						if($fetch > 0){
						?>
						<li>
							<a href="#"><?php echo $fetch['name'];?></a>
							<a href="#">
								<img style="width: 50px; height: 50px;border-radius: 50%;" src="layout/images/<?php echo $fetch['img'];?>" alt="admin">
							</a>
						</li>
						<li><a href="logout.php">تسجيل الخروج</a></li>
						<?php }else{?>
							<li>
							
							</li>
							<li></li>
						<?php } ?>
						<!-- شرط وجود سيشن لاضهار المستخدم// -->
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" style="background-image: url(layout/images/img_2.jpg);height: 80px;">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row ">