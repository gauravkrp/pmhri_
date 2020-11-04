<?php header("Access-Control-Allow-Origin: *");
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler");
else ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<!-- Meta Tags, Open Graph Tags & Viewport -->
	<title>Patna Medicity Hospital</title>
	<?php
	$pgTitle = "Patna Medicity Hospital";
	$baseURL = "";
	include 'meta.php';
	?>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/ScrollMagic.min.js"></script>
	<script src="js/animation.gsap.min.js"></script>
	<script src="js/jquery.ScrollMagic.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Overpass:400,500,700|Work+Sans:400,600|Barlow:400,500,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" media="screen,projection" />
	<link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection" />
	<link rel="icon" type="image/png" href="assets/favicon.png">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body id="homeBody" class="home pageScroll">
	<div id="pageLoader">
		<ul class="loader">
			<li class="center"></li>
			<li class="item item-1"></li>
			<li class="item item-2"></li>
			<li class="item item-3"></li>
			<li class="item item-4"></li>
			<li class="item item-5"></li>
			<li class="item item-6"></li>
			<li class="item item-7"></li>
			<li class="item item-8"></li>
		</ul>
	</div>
	<div id="main">
		<div id="navContainer">
			<header class="site-header">
				<nav class="main-nav-outer navbar-expand-md">
					<!--main-nav-start slide-->
					<div class="main-nav d-flex">
						<a class="logo" href="" title="">
							<img class="" src="assets/logo.png" alt="">
							<span>Patna Medicity Hospital<br />& Research Institute</span>
						</a>
						<div id="hamburger-menu" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
						<div class="align-items-center d-sm-flex ml-auto collapse navbar-collapse" id="navbarContent">
							<div class="navbar-nav ml-auto">
								<a class="navlink" href="">Family Care</a>
								<a class="navlink" href="">Hospital Care</a>
								<a class="navlink" href="">About Us</a>
								<a class="navlink" href="">Research</a>
								<a class="navlink" href="">Treatment</a>
							</div>
						</div>
					</div>
				</nav>
				<!--main-nav-end-->
			</header>
		</div>
		<div id="mainContainer">
			<div id="mainWrapper">
				<div class="main-left">
					<div class="textSlider">
						<div class="textslide">
							<h1>Get better care for your family</h1>
							<p class="mb-4 mt-4">
								Doing Healthcare differently.<br />
								Proactive monitoring of your health & prevention plans.
							</p>
						</div>
						<div class="textslide">
							<h1>Build a healthy community.</h1>
							<p class="mb-4 mt-4">
								We offer clinical spaces.<br />
								Along with nursing staff and existing footfall of patients.
							</p>
						</div>
						<div class="textslide">
							<h1>One stop solution for all health problems</h1>
							<p class="mb-4 mt-4">
								A diseased patient deserves a good doctor.<br />
								While a good doctor deserves an excellent network.
							</p>
						</div>
					</div>
					<div class="home-cta">
						<a class="ebtn filled mr-4">Get Started<i class="fa fa-long-arrow-right right" aria-hidden="true"></i></a>
						<a class="ebtn outline">Learn More</a>
					</div>
					<div class="mt-5">
						<span class="tc-light">In Emergency, call us</span><br />
						<a class="ebtn elevated mt-half" href="tel:+919876541230"><i class="fa fa-phone left" aria-hidden="true"></i>+91 91637 17273</a>
					</div>
				</div>
				<div class="main-right">
					<div class="circle outer1">
						<div class="circle outer2">
							<div class="circle inner homeSlider">
								<div class="homeslide" style="background: transparent url(assets/1/12.jpg) no-repeat center center;"></div>
								<div class="homeslide" style="background: transparent url(assets/1/11.jpg) no-repeat center center;"></div>
								<div class="homeslide" style="background: transparent url(assets/1/15.jpg) no-repeat center center;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-benefits">
			<div class="row">
				<div class="col-sm-8 offset-sm-2 col-12">
					<div class="row">
						<div class="col-12 col-sm-4">
							<div class="bftWrap">
								<div class="bft-top">
									<div class="bftIcon" id="shield">
										<img src="assets/shield.svg" alt="" />
									</div>
									<h3 class="bft-title">Preventive Care</h3>
								</div>
								<p class="bft-text">
									Early diagnosis helps you stay alert on the symptoms. Prevention is better than cure.
								</p>
								<div class="bft-bot" type="shield">
									<i>+</i><a href="">How it Works</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="bftWrap">
								<div class="bft-top">
									<div class="bftIcon" id="medicine">
										<img src="assets/medicine.svg" alt="" />
									</div>
									<h3 class="bft-title">Drugs &amp; Diagnostics</h3>
								</div>
								<p class="bft-text">
									Early diagnosis helps you stay alert on the symptoms. Prevention is better than cure.
								</p>
								<div class="bft-bot" type="medicine">
									<i>+</i><a href="">Learn More</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="bftWrap">
								<div class="bft-top">
									<div class="bftIcon" id="doctor">
										<img src="assets/doctor.svg" alt="" />
									</div>
									<h3 class="bft-title">Clinical Care</h3>
								</div>
								<p class="bft-text">
									Early diagnosis helps you stay alert on the symptoms. Prevention is better than cure.
								</p>
								<div class="bft-bot" type="doctor">
									<i>+</i><a href="">Appointments</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/charming.min.js"></script>
<script src="js/anime.min.js"></script>
<script src="js/particles.js"></script>
<script src="js/demo5.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vivus@latest/dist/vivus.min.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/script.js"></script>

</html>