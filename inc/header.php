<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TripBuzz</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

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

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="images/icon9.png">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">
	
	<link rel="stylesheet" href="css/style.css">
	<!--Customize css create for some custome design on the page-->
	<link rel="styelsheet" href="css/customize.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.php"><i class="icon-airplane"></i>tripbuzz</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active" id="slide_section"><a href="index.php">Home</a></li>
							<li class="slide_section"><a href="customizeTrip.php">Customize Tour</a></li>
							<li class="slide_section">
								<a href="vacation.php" class="fh5co-sub-ddown">Tour Packages</a>
								<ul class="fh5co-sub-menu">
									<li><a href="domestic.php">Domestic Package</a></li>
									<li><a href="inbound.php">Inbound Package</a></li>
									<li><a href="outbound.php">Outbound Package</a></li>
								</ul>
							</li>
							<li id="slide_section">
								<a href="vacation.php" class="fh5co-sub-ddown">Our Services</a>
								<ul class="fh5co-sub-menu">
									<li><a href="visa.php">Visa Processing</a></li>
									<li><a href="hotel.php">Hotel Booking</a></li>
									<li><a href="flight.php">Flight Booking</a></li>
									<li><a href="car.php">Transfer Services</a></li>
									<li><a href="hotel.php">Sightseeing</a></li>
								</ul>
							</li>
							<li id="slide_section"><a href="contact.php">Contact</a></li>
							<li id="slide_section"><a href="blog.php">Blog</a></li>
							<li><a href=""><i class="icon-facebook2"></i></a></li>
							<li><a href=""><i class="glyphicon glyphicon-phone-alt"></i>  +88 01738 396 290</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
<!-- end:header-top -->
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(bg_img/one.jpg);">
				<div class="desc">
					<div class="container">
						<div class="row">
							<div class="col-sm-5 col-md-5">
								<div class="tabulation animate-box">

								  <!-- Nav tabs -->
								   <ul class="nav nav-tabs" role="tablist">
								      <li role="presentation" class="active">
								      	<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Flights</a>
								      </li>
								      <li role="presentation">
								    	   <a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">Hotels</a>
								      </li>
								   </ul>

								   <!-- Tab panes -->
									<div class="tab-content">
									 <div role="tabpanel" class="tab-pane active" id="flights">
										<div class="row">
										<form action="" method="">
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">From :</label>
													<input type="text" name="tname" class="form-control" id="to-place" placeholder="Dhaka, Bangladesh" autofocus/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">To :</label>
													<input type="text" name="tname" class="form-control" id="to-place" placeholder="Los Angeles, USA"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">Check In:</label>
													<input type="text" name="checkIn" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-end">Check Out:</label>
													<input type="text" name="checkOut" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-sm-12 mt">
												<section>
													<label for="class">Class:</label>
													<select class="cs-select cs-skin-border" name="flightClass">
														<option value="" disabled selected>Economy</option>
														<option value="economy">Economy</option>
														<option value="business">Business</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Adult:</label>
													<select class="cs-select cs-skin-border" name="adult">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Children:</label>
													<select class="cs-select cs-skin-border" name="children">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Email :</label>
													<input type="text" name="email" class="form-control" id="to-place" placeholder="Email Address" autofocus/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Phone :</label>
													<input type="text" name="phone" class="form-control" id="to-place" placeholder="Phone number"/>
												</div>
											</div>
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Send Query">
											</div>
											</form>
										</div>
									 </div>
									 <!-- End Flights-->

									 <div role="tabpanel" class="tab-pane" id="hotels">
									 	<div class="row">
									 	<form action="" method="">
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="from">City:</label>
													<input type="text" name="hcity" class="form-control" id="from-place" placeholder="Bangkok, Thailand"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">Check In:</label>
													<input type="text" name="hcheckIn" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-end">Check Out:</label>
													<input type="text" name="hcheckOut" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-sm-12 mt">
												<section>
													<label for="class">Rooms:</label>
													<select class="cs-select cs-skin-border" name="hroom">
														<option value="" disabled selected>1</option>
														<option value="economy">1</option>
														<option value="business">3</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Adult:</label>
													<select class="cs-select cs-skin-border" name="hadult">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Children:</label>
													<select class="cs-select cs-skin-border" name="hchildren">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Email :</label>
													<input type="text" name="hemail" class="form-control" id="to-place" placeholder="Email Address" autofocus/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Phone :</label>
													<input type="text" name="hphone" class="form-control" id="to-place" placeholder="Phone number" autofocus/>
												</div>
											</div>
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Send Query">
											</div>
											</form>
										</div>
									 </div>
									<!-- End Hotel-->
									</div>

								</div>
							</div>
							<div class="desc2 animate-box offer_1" id="offer_slider">
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
									<h2>Exclusive Limited Time Offer.</h2>
									<h3>3 Days - 2 nights bangkok package.</h3>
									<span class="price">BDT 4,900/=</span>
									<p><a class="btn btn-primary btn-lg" href="bookNow.php">Book Now</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>