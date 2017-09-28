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
	<link rel="shortcut icon" href="favicon.ico">

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
	<!-- Booking page stylesheet-->
	<link rel="stylesheet" href="css/bookStyle.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<script>
		// It's create for bookNow page Tab system menu
		function _(x){
			return document.getElementById(x);
		}
		function all(){
			_("in_box2").style.display="block"
			_("in_box3").style.display="none"
			_("in_box4").style.display="none"
			_("in_box5").style.display="none"

			_("click1").style.background="#fff"
			_("click2").style.background="#f7f9fc"
			_("click3").style.background="#f7f9fc"
			_("click4").style.background="#f7f9fc"
		}
		function click1(){
			_("in_box2").style.display="block"
			_("in_box3").style.display="none"
			_("in_box4").style.display="none"
			_("in_box5").style.display="none"

			_("click1").style.background="#fff"
			_("click2").style.background="#f7f9fc"
			_("click3").style.background="#f7f9fc"
			_("click4").style.background="#f7f9fc"
		}

		function click2(){
			_("in_box2").style.display="none"
			_("in_box3").style.display="block"
			_("in_box4").style.display="none"
			_("in_box5").style.display="none"

			_("click1").style.background="#f7f9fc"
			_("click2").style.background="#fff"
			_("click3").style.background="#f7f9fc"
			_("click4").style.background="#f7f9fc"
		}
		function click3(){
			_("in_box2").style.display="none"
			_("in_box3").style.display="none"
			_("in_box4").style.display="block"
			_("in_box5").style.display="none"

			_("click1").style.background="#f7f9fc"
			_("click2").style.background="#f7f9fc"
			_("click3").style.background="#fff"
			_("click4").style.background="#f7f9fc"
		}
		function click4(){
			_("in_box2").style.display="none"
			_("in_box3").style.display="none"
			_("in_box4").style.display="none"
			_("in_box5").style.display="block"

			_("click1").style.background="#f7f9fc"
			_("click2").style.background="#f7f9fc"
			_("click3").style.background="#f7f9fc"
			_("click4").style.background="#fff"
		}
	</script>
	</head>
	<body onload="all()">
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
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="customizeTrip.php">Customize Tour</a></li>
							<li>
								<a href="vacation.php" class="fh5co-sub-ddown">Tour Packages</a>
								<ul class="fh5co-sub-menu">
									<li><a href="domestic.php">Domestic Package</a></li>
									<li><a href="inbound.php">Inbound Package</a></li>
									<li><a href="outbound.php">Outbound Package</a></li>
								</ul>
							</li>
							<li>
								<a href="vacation.php" class="fh5co-sub-ddown">Our Services</a>
								<ul class="fh5co-sub-menu">
									<li><a href="visa.php">Visa Processing</a></li>
									<li><a href="hotel.php">Hotel Booking</a></li>
									<li><a href="flight.php">Flight Booking</a></li>
									<li><a href="car.php">Transfer Services</a></li>
									<li><a href="hotel.php">Sightseeing</a></li>
								</ul>
							</li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="blog.php">Blog</a></li>
							<li><a href=""><i class="icon-facebook2"></i></a></li>
							<li><a href=""><i class="glyphicon glyphicon-phone-alt"></i>  +88 01738 396 290</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
<!-- end:header-top -->
		<div class="row">
			<div class="col-sm-12" id="img_form">
				<div class="col-sm-6 bimage">
					<div class="thumbnail">
      					<a href="/google.com">
        					<img src="images/town.jpg" class="img-responsive" alt="city image">
        					<div class="caption">
          						<p class="text-center">Singapore City Singapore</p>
        					</div>
      					</a>
    				</div>
				</div>
				<div class="col-sm-6 bform">
					<form action="" method="">
						<p class="text-center">Booking From</p>
						<hr>
						<div class="col-sm-6">
							<div class="form-group">
								<input type="text" name="uname" placeholder="Your name" class="form-control" autofocus>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input type="text" name="tdate" placeholder="Phone" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input type="text" name="tdate" placeholder="Email Address" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
							<input type="date" name="tdate" id="date-end" class="form-control" placeholder="Travel date">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input type="text" name="tdate" placeholder="Number of adult" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input type="text" name="tdate" placeholder="Adult total price" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input type="text" name="tdate" placeholder="Number of child" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input type="text" name="tdate" placeholder="Child total price" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input type="text" name="tdate" placeholder="Number of rooms" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input type="text" name="totalPrice" placeholder="Totat Price" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input type="submit" value="Submit" class="btn btn-primary btn-default btn-sm">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /picture and form-->
		<div class="row">
			<div class="col-sm-12" id="box">
				<div id="in_box1">
					<ul>
						<li id="click1" onclick="click1()">Click One</li>
						<li id="click2" onclick="click2()">Click Two</li>
						<li id="click3" onclick="click3()">Click Three</li>
						<li id="click4" onclick="click4()">Click Four</li>
					</ul>
				</div>
				<div id="in_box2">ওয়েব ডিজাইন কি

ওয়েব ডিজাইন হচ্ছে একটা ওয়েবসাইটের জন্য বাহ্যিক অবয়ব তৈরী করা। ওয়েব ডিজাইনারের মুল কাজ একটা সাইটের জন্য টেমপ্লেট বানানো, এখানে কোন এপ্লিকেশন থাকবেনা।যেমন লগিন সিস্টেম, নিউজলেটার সাইনআপ, পেজিনেশন, ফাইল আপলোড করে ডেটাবেসে সেভ করা, ইমেজ ম্যানিপুলেশন, যদি সাইটে বিজ্ঞাপন থাকে তাহলে প্রতিবার পেজ লোড হওয়ার সময় বিজ্ঞাপনের পরিবর্তন এগুলি এপ্লিকেশন, ওয়েব এপ্লিকেশন।এসব তৈরী করতে হয় প্রোগ্রামিং ল্যাংগুয়েজ দিয়ে। কোন প্রকার এপ্লিকেশন ছাড়া একটা সাইট তৈরী করা এটাই ওয়েব ডিজাইন, এধরনের ডিজাইনকে বলতে পারেন স্টাটিক ডিজাইন।ওয়েব ডিজাইনের জন্য এই ধারনাটি সাধারনত ব্যবহৃত হচ্ছে।</div>
				<div id="in_box3">ওয়েব ডিজাইন এবং ডেভেলপমেন্ট এর মাধ্যমে কিভাবে আউটসোর্সিং করে ইন্টারনেটে অর্থ আয় করা যায় এ বিষয়ে আলোচনা করেছেন অভিজ্ঞ একজন ফ্রিল্যান্সার যিনি প্রায় ৬/৭ বছর ধরে সফটওয়্যার ইন্ডাস্ট্রিতে সিনিয়র সফটওয়্যার ইন্জিনিয়ার হিসেবে কাজ করেছেন এবং কয়েক বছর থেকে ফ্রিল্যান্সিং করছেন</div>
				<div id="in_box4"> Starting with PHP 5, the object model was rewritten to allow for better performance and more features. This was a major change from PHP 4. PHP 5 has a full object model.

Among the features in PHP 5 are the inclusions of visibility, abstract and final classes and methods, additional magic methods, interfaces, cloning and typehinting.

PHP treats objects in the same way as references or handles, meaning that each variable contains an object reference rather than a copy of the entire object. See Objects and References </div>
				<div id="in_box5"> Starting with PHP 5, the object model was rewritten to allow for better performance and more features. This was a major change from PHP 4. PHP 5 has a full object model.

Among the features in PHP 5 are the inclusions of visibility, abstract and final classes and methods, additional magic methods, interfaces, cloning and typehinting.

PHP treats objects in the same way as references or handles, meaning that each variable contains an object reference rather than a copy of the entire object. See Objects and References </div>
			</div>
		</div>
<?php include('inc/footer.php');?>