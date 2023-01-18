<!DOCTYPE html>
<html lang="en">
<head>
	<title> Mamachino Home Page One </title>
	<?php include 'includes/head.php'; ?>
</head>
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!--====== PRELOader ======-->
	<div class="preloader d-flex align-items-center justify-content-center">
		<div class="cssload-container">
			<div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
		</div>
	</div>
	<!--====== HEADER START ======-->
	<header class="header-absolute sticky-header">
		<div class="container container-custom-one">
			<div class="nav-container d-flex align-items-center justify-content-between">
				<!-- Main Menu -->
				<div class="nav-menu d-lg-flex align-items-center">

					<!-- Navbar Close Icon -->
					<div class="navbar-close">
						<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
					</div>

					<!-- Off canvas Menu  -->
					<div class="toggle">
						<a href="#" id="offCanvasBtn"><i class="fal fa-bars"></i></a>
					</div>
					<!-- Mneu Items -->
					<div class="menu-items">
						<ul>
							<li>
								<a href="index.html">Home</a>
								<ul class="submenu">
									<li><a href="index.html">Home One</a></li>
									<li><a href="index-2.html">Home Two</a></li>
									<li><a href="index-3.html">Home Three</a></li>
								</ul>
							</li>
							<li>
								<a href="plane-grid.html">Planes</a>
								<ul class="submenu">
									<li><a href="plane-grid.html">Plane Grid</a></li>
									<li><a href="plane-list.html">Plane List</a></li>
									<li><a href="plane-details.html">Plane Details</a></li>
								</ul>
							</li>
							<li>
								<a href="news.html">News</a>
								<ul class="submenu">
									<li><a href="news-details.html">News Details</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>

					<!-- from pushed-item -->
					<div class="nav-pushed-item"></div>
				</div>

				<!-- Site Logo -->
				<div class="site-logo">
					<a href="index.html"><img src="assets/img/logo.png" alt="Logo"></a>
				</div>

				<!-- Header Info Pussed To Menu Wrap -->
				<div class="nav-push-item">
					<!-- Header Info -->
					<div class="header-info d-lg-flex align-items-center">
						<div class="item">
							<i class="fal fa-phone"></i>
							<span>Phone Number</span>
							<a href="tel:+90898787709">
								<h5 class="title">+908 987 877 09</h5>
							</a>
						</div>
						<div class="item">
							<i class="fal fa-envelope"></i>
							<span>Email Address</span>
							<a href="mailto:info@webmail.com">
								<h5 class="title">info@webmail.com</h5>
							</a>
						</div>
					</div>
				</div>

				<!-- Navbar Toggler -->
				<div class="navbar-toggler">
					<span></span><span></span><span></span>
				</div>
			</div>
		</div>
	</header>
	<!--====== HEADER PART END ======-->
	<!--====== OFF CANVAS START ======-->
	<div class="offcanvas-wrapper">
		<div class="offcanvas-overly"></div>
		<div class="offcanvas-widget">
			<a href="#" class="offcanvas-close"><i class="fal fa-times"></i></a>
			<!-- Search Widget -->
			<div class="widget search-widget">
				<h5 class="widget-title">Search plane</h5>
				<form action="#">
					<input type="text" placeholder="Search your keyword...">
					<button type="submit"><i class="far fa-search"></i></button>
				</form>
			</div>

			<!-- About Widget -->
			<div class="widget about-widget">
				<h5 class="widget-title">About us</h5>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia reiciendis illo ipsa asperiores,
					perspiciatis corrupti veritatis assumenda architecto commodi provident quas necessitatibus
					consequatur praesentium magnam optio deserunt fugiat repellat culpa.
				</p>
			</div>
			<!-- Nav Widget -->
			<div class="widget nav-widget">
				<h5 class="widget-title">Our pages</h5>
				<ul>
					<li><a href="about.html">About Us</a></li>
					<li><a href="menu.html">Food Menu</a></li>
					<li><a href="restaurant.html">Restaurant</a></li>
					<li>
						<a href="places.html">Places</a>
						<ul class="submenu">
							<li><a href="places-details.html">Places Details</a></li>
						</ul>
					</li>
					<li><a href="offers.html">Offers</a></li>
					<li><a href="gallery.html">Our Gallery</a></li>
                    <li><a href="search-result.html">Search Result</a></li>
                    <li><a href="booking.html">Booking</a></li>
				</ul>
			</div>
			<!-- Social Link -->
			<div class="widget social-link">
				<h5 class="widget-title">Contact with us</h5>
				<ul>
					<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li><a href="#"><i class="fab fa-behance"></i></a></li>
					<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fab fa-google"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<!--====== OFF CANVAS END ======-->
	<!--====== BANNER PART START ======-->
	<section class="banner-area banner-style-one">
		<div class="container container-custom-two">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-6">
					<div class="banner-content">
						<span class="promo-tag wow fadeInDown" data-wow-delay=".3s">The ultimate luxury
							experience</span>
						<h1 class="title wow fadeInLeft" data-wow-delay=".5s"> The Perfect <br> Base For You
						</h1>
						<ul>
							<li>
								<a class="main-btn btn-filled wow fadeInUp" data-wow-delay=".7s" href="#">take a
									tour</a>
							</li>
							<li>
								<a class="main-btn btn-border wow fadeInUp" data-wow-delay=".9s" href="#">Learn
									More</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0.5s">
					<div class="banner-thumb d-none d-md-block">
						<div class="hero-slider-one">
							<div class="single-thumb">
								<img src="assets/img/banner/01.jpg" alt="images">
							</div>
							<div class="single-thumb">
								<img src="assets/img/banner/02.jpg" alt="images">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== BANNER PART ENDS ======-->
	<!--====== BOOKING FORM START ======-->
	<section class="booking-form boxed-layout">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-10 col-11">
					<div class="booking-form-inner">
						<form action="#">
							<div class="row align-items-end">
								<div class="col-lg-3 col-md-6">
									<div class="inputs-filed mt-30">
										<label for="arrival-date">Arrival Date</label>
										<div class="icon"><i class="fal fa-calendar-alt"></i></div>
										<input type="text" placeholder="24th march 2020" name="arrival-date"
											id="arrival-date">
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="inputs-filed mt-30">
										<label for="departure-date">Departure Date</label>
										<div class="icon"><i class="fal fa-calendar-alt"></i></div>
										<input type="text" placeholder="30th march 2020" name="departure-date"
											id="departure-date">
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="inputs-filed mt-30">
										<label for="guests">Guests</label>
										<select name="guests" id="guests">
											<option value="" disabled selected>Select From Here</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="4">4</option>
											<option value="8">8</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="inputs-filed mt-30">
										<button type="submit">check availability</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== BOOKING FORM EN ======-->
	<!--====== ABOUT PART START ======-->
	<section class="about-section pt-115 pb-115">
		<div class="container">
			<div class="down-arrow-wrap text-center">
				<a href="#" class="down-arrow"><i class="fal fa-arrow-down"></i></a>
			</div>
			<div class="section-title about-title text-center mb-20">
				<span class="title-tag">since <span>1994</span></span>
				<h2>Situated In Prime Position At The Foot Of The Slopes Of Courchevel Moriond.</h2>
			</div>
			<ul class="about-features masonry-layout">
				<li class=" wow fadeInUp" data-wow-delay=".3s">
					<a href="#">
						<i class="flaticon-ticket-machine"></i>
						<i class="hover-icon flaticon-ticket-machine"></i>
						<span class="title">breakfast</span>
					</a>
				</li>
				<li class=" wow fadeInUp" data-wow-delay=".5s">
					<a href="#">
						<i class="flaticon-route"></i>
						<i class="hover-icon flaticon-route"></i>
						<span class="title">Airport Pickup</span>
					</a>
				</li>
				<li class=" wow fadeInUp" data-wow-delay=".7s">
					<a href="#">
						<i class="flaticon-runway"></i>
						<i class="hover-icon flaticon-runway"></i>
						<span class="title">city guide</span>
					</a>
				</li>
				<li class=" wow fadeInUp" data-wow-delay=".9s">
					<a href="#">
						<i class="flaticon-helm"></i>
						<i class="hover-icon flaticon-helm"></i>
						<span class="title">bbq party</span>
					</a>
				</li>
				<li class=" wow fadeInUp" data-wow-delay="1.1s">
					<a href="#">
						<i class="flaticon-take-off"></i>
						<i class="hover-icon flaticon-take-off"></i>
						<span class="title">luxury plane</span>
					</a>
				</li>
			</ul>
		</div>
	</section>
	<!--====== ABOUT PART END ======-->
	<!--====== ROOM TYPE START ======-->
	<section class="plane-type-section pt-115 pb-115" style="background-image: url(assets/img/bg/01.jpg);">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="section-title text-lg-left text-center">
						<span class="title-tag">plane type</span>
						<h2>Inspired Loding</h2>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="plane-filter nav nav-pills justify-content-center justify-content-lg-end" id="plane-tab"
						role="tablist">
						<li class="nav-item">
							<a class="nav-link" id="luxury-tab" data-toggle="pill" href="#luxury">
								Luxury
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="family-tab" data-toggle="pill" href="#family">
								Family
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="doublebed-tab" data-toggle="pill" href="#doublebed">
								Double Bed
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" id="relex-tab" data-toggle="pill" href="#relex">
								Relex
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="tab-content mt-65" id="plane-tabContent">
				<div class="tab-pane fade" id="luxury" role="tabpanel">
					<div class="plane-items">
						<div class="row">
							<div class="col-lg-8">
								<div class="row">
									<div class="col-12">
										<div class="plane-box extra-wide">
											<div class="plane-bg"
												style="background-image: url(assets/img/plane-type/04.jpg);"></div>
											<div class="plane-content">
												<span class="plane-count"><i class="fal fa-th"></i>03 Planes</span>
												<h3><a href="#">Luxury Hall Of Fame</a></h3>
											</div>
											<a href="#" class="plane-link"><i class="fal fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="plane-box">
											<div class="plane-bg"
												style="background-image: url(assets/img/plane-type/01.jpg);">
											</div>
											<div class="plane-content">
												<span class="plane-count"><i class="fal fa-th"></i>05 Planes</span>
												<h3><a href="#">Pendora Fame</a></h3>
											</div>
											<a href="#" class="plane-link"><i class="fal fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="plane-box">
											<div class="plane-bg"
												style="background-image: url(assets/img/plane-type/02.jpg);">
											</div>
											<div class="plane-content">
												<span class="plane-count"><i class="fal fa-th"></i>10 Planes</span>
												<h3><a href="#">Pacific Room</a></h3>
											</div>
											<a href="#" class="plane-link"><i class="fal fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="plane-box extra-height">
									<div class="plane-bg" style="background-image: url(assets/img/plane-type/03.jpg);">
									</div>
									<div class="plane-content">
										<span class="plane-count"><i class="fal fa-th"></i>12 Planes</span>
										<h3><a href="#">Junior Suite</a></h3>
									</div>
									<a href="#" class="plane-link"><i class="fal fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="family" role="tabpanel">
					<div class="plane-items">
						<div class="row">
							<div class="col-lg-4">
								<div class="plane-box extra-height">
									<div class="plane-bg" style="background-image: url(assets/img/plane-type/03.jpg);">
									</div>
									<div class="plane-content">
										<span class="plane-count"><i class="fal fa-th"></i>12 Planes</span>
										<h3><a href="#">Junior Suite</a></h3>
									</div>
									<a href="#" class="plane-link"><i class="fal fa-arrow-right"></i></a>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="row">
									<div class="col-lg-6 col-sm-6">
										<div class="plane-box">
											<div class="plane-bg"
												style="background-image: url(assets/img/plane-type/02.jpg);">
											</div>
											<div class="plane-content">
												<span class="plane-count"><i class="fal fa-th"></i>10 Planes</span>
												<h3><a href="#">Pacific Room</a></h3>
											</div>
											<a href="#" class="plane-link"><i class="fal fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="plane-box">
											<div class="plane-bg"
												style="background-image: url(assets/img/plane-type/01.jpg);">
											</div>
											<div class="plane-content">
												<span class="plane-count"><i class="fal fa-th"></i>05 Planes</span>
												<h3><a href="#">Pendora Fame</a></h3>
											</div>
											<a href="#" class="plane-link"><i class="fal fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-12">
										<div class="plane-box extra-wide">
											<div class="plane-bg"
												style="background-image: url(assets/img/plane-type/04.jpg);"></div>
											<div class="plane-content">
												<span class="plane-count"><i class="fal fa-th"></i>03 Planes</span>
												<h3><a href="#">Luxury Hall Of Fame</a></h3>
											</div>
											<a href="#" class="plane-link"><i class="fal fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="doublebed" role="tabpanel">
					<div class="plane-items">
						<div class="row">
							<div class="col-lg-4">
								<div class="plane-box extra-height">
									<div class="plane-bg" style="background-image: url(assets/img/plane-type/03.jpg);">
									</div>
									<div class="plane-content">
										<span class="plane-count"><i class="fal fa-th"></i>12 Planes</span>
										<h3><a href="#">Junior Suite</a></h3>
									</div>
									<a href="#" class="plane-link"><i class="fal fa-arrow-right"></i></a>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="row">
									<div class="col-12">
										<div class="plane-box extra-wide">
											<div class="plane-bg"
												style="background-image: url(assets/img/plane-type/04.jpg);"></div>
											<div class="plane-content">
												<span class="plane-count"><i class="fal fa-th"></i>03 Planes</span>
												<h3><a href="#">Luxury Hall Of Fame</a></h3>
											</div>
											<a href="#" class="plane-link"><i class="fal fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="plane-box">
											<div class="plane-bg"
												style="background-image: url(assets/img/plane-type/01.jpg);">
											</div>
											<div class="plane-content">
												<span class="plane-count"><i class="fal fa-th"></i>05 Planes</span>
												<h3><a href="#">Pendora Fame</a></h3>
											</div>
											<a href="#" class="plane-link"><i class="fal fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="plane-box">
											<div class="plane-bg"
												style="background-image: url(assets/img/plane-type/02.jpg);">
											</div>
											<div class="plane-content">
												<span class="plane-count"><i class="fal fa-th"></i>10 Planes</span>
												<h3><a href="#">Pacific Room</a></h3>
											</div>
											<a href="#" class="plane-link"><i class="fal fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade show active" id="relex" role="tabpanel">
					<div class="plane-items">
						<div class="row">
							<div class="col-lg-8">
								<div class="row">
									<div class="col-lg-6 col-sm-6">
										<div class="plane-box">
											<div class="plane-bg"
												style="background-image: url(assets/img/plane-type/01.jpg);">
											</div>
											<div class="plane-content">
												<span class="plane-count"><i class="fal fa-th"></i>05 Planes</span>
												<h3><a href="#">Pendora Fame</a></h3>
											</div>
											<a href="#" class="plane-link"><i class="fal fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="plane-box">
											<div class="plane-bg"
												style="background-image: url(assets/img/plane-type/02.jpg);">
											</div>
											<div class="plane-content">
												<span class="plane-count"><i class="fal fa-th"></i>10 Planes</span>
												<h3><a href="#">Pacific Room</a></h3>
											</div>
											<a href="#" class="plane-link"><i class="fal fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-12">
										<div class="plane-box extra-wide">
											<div class="plane-bg"
												style="background-image: url(assets/img/plane-type/04.jpg);"></div>
											<div class="plane-content">
												<span class="plane-count"><i class="fal fa-th"></i>03 Planes</span>
												<h3><a href="#">Luxury Hall Of Fame</a></h3>
											</div>
											<a href="#" class="plane-link"><i class="fal fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="plane-box extra-height">
									<div class="plane-bg" style="background-image: url(assets/img/plane-type/03.jpg);">
									</div>
									<div class="plane-content">
										<span class="plane-count"><i class="fal fa-th"></i>12 Planes</span>
										<h3><a href="#">Junior Suite</a></h3>
									</div>
									<a href="#" class="plane-link"><i class="fal fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== ROOM TYPE END ======-->
	<!--====== CALL TO ACTION END ======-->
	<section class="cta-section pt-115 pb-160">
		<div class="container">
			<div class="cta-inner">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-8 col-sm-9 col-10 order-2 order-lg-1">
						<div class="cta-text">
							<div class="section-title mb-20">
								<span class="title-tag">call to action</span>
								<h2>The Thin Escape</h2>
							</div>
							<p>Miranda has everything for your trip
								& every single things.</p>
							<a href="#" class="main-btn btn-filled">take a tour</a>
						</div>
					</div>
					<div class="col-lg-6 col-md-10 col-sm-11 col-10 order-1 order-lg-2">
						<!-- feature loop -->
						<div class="cta-features">
							<!-- feature box -->
							<div class="single-feature wow fadeInUp" data-wow-delay=".3s">
								<div class="icon">
									<i class="flaticon-route"></i>
								</div>
								<div class="cta-desc">
									<h3><a href="#">Easy & Free Transport</a></h3>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
										nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
									</p>
									<span class="count">01</span>
								</div>
							</div>
							<!-- feature box -->
							<div class="single-feature wow fadeInUp" data-wow-delay=".4s">
								<div class="icon">
									<i class="flaticon-pancake"></i>
								</div>
								<div class="cta-desc">
									<h3><a href="#">Clean & Fresh Food</a></h3>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
										nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
									</p>
									<span class="count">02</span>
								</div>
							</div>
							<!-- feature box -->
							<div class="single-feature wow fadeInUp" data-wow-delay=".5s">
								<div class="icon">
									<i class="flaticon-trolley"></i>
								</div>
								<div class="cta-desc">
									<h3><a href="#">Play Ground & Swiming Pool</a></h3>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
										nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
									</p>
									<span class="count">03</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== CALL TO ACTION END ======-->

	<!--====== ROOM SLIDER START ======-->
	<section class="plane-slider">
		<div class="container-fluid p-0">
			<div class="row rooms-slider-one">
				<div class="col">
					<div class="slider-img" style="background-image: url(assets/img/plane-slider/01.jpg);">
					</div>
				</div>
				<div class="col">
					<div class="slider-img" style="background-image: url(assets/img/plane-slider/02.jpg);">
					</div>
				</div>
				<div class="col">
					<div class="slider-img" style="background-image: url(assets/img/plane-slider/03.jpg);">
					</div>
				</div>
				<div class="col">
					<div class="slider-img" style="background-image: url(assets/img/plane-slider/04.jpg);">
					</div>
				</div>
				<div class="col">
					<div class="slider-img" style="background-image: url(assets/img/plane-slider/05.jpg);">
					</div>
				</div>
			</div>
		</div>
		<div class="rooms-content-wrap">
			<div class="container">
				<div class="row justify-content-center justify-content-md-start">
					<div class="col-xl-4 col-lg-5 col-sm-8">
						<div class="plane-content-box">
							<div class="slider-count"></div>
							<div class="slider-count-big"></div>
							<div class="plane-content-slider">
								<div class="single-content">
									<div class="icon">
										<i class="flaticon-take-off"></i>
									</div>
									<h3><a href="#">Luxury Room</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna.</p>
								</div>
								<div class="single-content">
									<div class="icon">
										<i class="flaticon-take-off"></i>
									</div>
									<h3><a href="#">Luxury Room</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna.</p>
								</div>
								<div class="single-content">
									<div class="icon">
										<i class="flaticon-take-off"></i>
									</div>
									<h3><a href="#">Luxury Room</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna.</p>
								</div>
								<div class="single-content">
									<div class="icon">
										<i class="flaticon-take-off"></i>
									</div>
									<h3><a href="#">Luxury Room</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna.</p>
								</div>
								<div class="single-content">
									<div class="icon">
										<i class="flaticon-take-off"></i>
									</div>
									<h3><a href="#">Luxury Room</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== ROOM SLIDER END ======-->

	<!--====== TEXT BLOCK START ======-->
	<section class="text-block with-bg pt-115 pb-115" style="background-image: url(assets/img/bg/02.jpg);">
		<div class="container">
			<div class="row align-items-center justify-content-center justify-content-lg-between">
				<div class="col-lg-5 col-md-8 col-sm-10 wow fadeInLeft" data-wow-delay=".3s">
					<div class="block-text mb-small">
						<div class="section-title mb-20">
							<span class="title-tag">Take a tour</span>
							<h2>Discover Our Underground.</h2>
						</div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
							ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
							laboris nisi ut aliquip ex ea commodo consequat.
						</p>
						<a href="#" class="main-btn btn-filled mt-40">Book now</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-10 wow fadeInRight" data-wow-delay=".5s">
					<div class="video-wrap" style="background-image: url(assets/img/text-block/01.jpg);">
						<a href="https://www.youtube.com/embed/KH1pcNUTa6U" class="popup-video"><i
								class="fas fa-play"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== TEXT BLOCK END ======-->
	<!--====== TESTIMONIAL SLIDER START ======-->
	<section class="testimonial-section pb-115 pt-115">
		<div class="container">
			<div class="section-title text-center mb-80">
				<span class="title-tag">testimonials</span>
				<h2>Client Feedback</h2>
			</div>
			<!-- testimonials loop  -->
			<div class="row testimonial-slider">
				<div class="col-lg-4">
					<div class="testimonial-box">
						<div class="client-img">
							<img src="assets/img/testimonial/01.png" alt="images">
							<span class="check"><i class="fal fa-check"></i></span>
						</div>
						<h3>Rosalina D. William</h3>
						<span class="clinet-post">Founder, qux co.</span>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
							incididunt ut labore et dolore.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="testimonial-box">
						<div class="client-img">
							<img src="assets/img/testimonial/02.png" alt="images">
							<span class="check"><i class="fal fa-check"></i></span>
						</div>
						<h3>Donald H. Hilixer</h3>
						<span class="clinet-post">Founder, hilix</span>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
							incididunt ut labore et dolore.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="testimonial-box">
						<div class="client-img">
							<img src="assets/img/testimonial/03.png" alt="images">
							<span class="check"><i class="fal fa-check"></i></span>
						</div>
						<h3>Browfish Dumble</h3>
						<span class="clinet-post">Founder, Condo</span>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
							incididunt ut labore et dolore.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="testimonial-box">
						<div class="client-img">
							<img src="assets/img/testimonial/02.png" alt="images">
							<span class="check"><i class="fal fa-check"></i></span>
						</div>
						<h3>Donald H. Hilixer</h3>
						<span class="clinet-post">Founder, hilix</span>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
							incididunt ut labore et dolore.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== TESTIMONIAL SLIDER END ======-->
	<!--====== ROOM Gallery CTA START ======-->
	<section class="plane-gallery-cta" style="background-image: url(assets/img/plane-cta-gallery/bg.jpg);">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="cta-text text-center">
						<span>our rooms</span>
						<h2>
							Each of our nine lovely double guest rooms feature a private bath, wi-fi, cable television
							and include full breakfast.
						</h2>
						<ul class="mt-50">
							<li class="wow fadeInUp" data-wow-delay=".3s"><a class="main-btn btn-filled" href="#">take a
									tour</a></li>
							<li class=" wow fadeInUp" data-wow-delay=".5s"><a class="main-btn btn-border" href="#">Learn
									More</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="rotate-images">
			<img src="assets/img/plane-cta-gallery/01.jpg" class="rotate-image-one" alt="Image">
			<img src="assets/img/plane-cta-gallery/02.jpg" class="rotate-image-two" alt="Image">
			<img src="assets/img/plane-cta-gallery/03.jpg" class="rotate-image-three" alt="Image">
		</div>
	</section>
	<!--====== ROOM Gallery CTA END ======-->
	<!--====== LATEST NEWS START ======-->
	<section class="latest-news pt-115 pb-115">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-8 col-sm-7">
					<div class="section-title">
						<span class="title-tag">Blog</span>
						<h2>News Feeds</h2>
					</div>
				</div>
				<div class="col-lg-6 col-md-4 col-sm-5 d-none d-sm-block">
					<div class="latest-post-arrow arrow-style text-right">

					</div>
				</div>
			</div>
			<!-- Latest post loop -->
			<div class="row latest-post-slider mt-80">
				<div class="col-lg-4">
					<div class="latest-post-box">
						<div class="post-img" style="background-image: url(assets/img/latest-post/01.jpg);"></div>
						<div class="post-desc">
							<ul class="post-meta">
								<li>
									<a href="#"><i class="fal fa-calendar-alt"></i>23rd March 2019</a>
								</li>
								<li>
									<a href="#"><i class="fal fa-user"></i>By Admin</a>
								</li>
							</ul>
							<h4><a href="#">Each of our 8 double rooms has its own distinct.</a></h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
								incididunt ut labore et dolore.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="latest-post-box">
						<div class="post-img" style="background-image: url(assets/img/latest-post/02.jpg);"></div>
						<div class="post-desc">
							<ul class="post-meta">
								<li>
									<a href="#"><i class="fal fa-calendar-alt"></i>23rd March 2019</a>
								</li>
								<li>
									<a href="#"><i class="fal fa-user"></i>By Admin</a>
								</li>
							</ul>
							<h4><a href="#">Each of our 8 double rooms has its own distinct.</a></h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
								incididunt ut labore et dolore.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="latest-post-box">
						<div class="post-img" style="background-image: url(assets/img/latest-post/03.jpg);"></div>
						<div class="post-desc">
							<ul class="post-meta">
								<li>
									<a href="#"><i class="fal fa-calendar-alt"></i>23rd March 2019</a>
								</li>
								<li>
									<a href="#"><i class="fal fa-user"></i>By Admin</a>
								</li>
							</ul>
							<h4><a href="#">Each of our 8 double rooms has its own distinct.</a></h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
								incididunt ut labore et dolore.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="latest-post-box">
						<div class="post-img" style="background-image: url(assets/img/latest-post/01.jpg);"></div>
						<div class="post-desc">
							<ul class="post-meta">
								<li>
									<a href="#"><i class="fal fa-calendar-alt"></i>23rd March 2019</a>
								</li>
								<li>
									<a href="#"><i class="fal fa-user"></i>By Admin</a>
								</li>
							</ul>
							<h4><a href="#">Each of our 8 double rooms has its own distinct.</a></h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
								incididunt ut labore et dolore.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="latest-post-box">
						<div class="post-img" style="background-image: url(assets/img/latest-post/02.jpg);"></div>
						<div class="post-desc">
							<ul class="post-meta">
								<li>
									<a href="#"><i class="fal fa-calendar-alt"></i>23rd March 2019</a>
								</li>
								<li>
									<a href="#"><i class="fal fa-user"></i>By Admin</a>
								</li>
							</ul>
							<h4><a href="#">Each of our 8 double rooms has its own distinct.</a></h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
								incididunt ut labore et dolore.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="latest-post-box">
						<div class="post-img" style="background-image: url(assets/img/latest-post/03.jpg);"></div>
						<div class="post-desc">
							<ul class="post-meta">
								<li>
									<a href="#"><i class="fal fa-calendar-alt"></i>23rd March 2019</a>
								</li>
								<li>
									<a href="#"><i class="fal fa-user"></i>By Admin</a>
								</li>
							</ul>
							<h4><a href="#">Each of our 8 double rooms has its own distinct.</a></h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
								incididunt ut labore et dolore.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== LATEST NEWS END ======-->
	<!--====== Back to Top ======-->
	<a href="#" class="back-to-top" id="backToTop">
		<i class="fal fa-angle-double-up"></i>
	</a>
	<!--====== FOOTER PART START ======-->
	<footer>
		<div class="footer-subscibe-area pt-120 pb-120">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="subscribe-text text-center">
							<div class="footer-logo mb-45">
								<img src="assets/img/logo-2.png" alt="images">
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doing
								eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi.
							</p>
							<form action="#" class="subscribe-form mt-50">
								<input type="email" placeholder="Enter your email address">
								<button type="submit">subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright-area pt-20 pb-20">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-5 order-2 order-md-1">
						<p class="copyright-text">copyright by Slidesigmathemes</p>
					</div>
					<div class="col-md-7 order-1 order-md-2">
						<div class="social-links">
							<a href="#"><i class="fab fa-facebook-f"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-behance"></i></a>
							<a href="#"><i class="fab fa-linkedin"></i></a>
							<a href="#"><i class="fab fa-youtube"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--====== FOOTER PART END ======-->
	<!--====== jquery js ======-->
	<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
	<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
	<!--====== Bootstrap js ======-->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<!--====== Slick js ======-->
	<script src="assets/js/slick.min.js"></script>
	<!--====== Isotope js ======-->
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<!--====== Magnific Popup js ======-->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!--====== inview js ======-->
	<script src="assets/js/jquery.inview.min.js"></script>
	<!--====== counterup js ======-->
	<script src="assets/js/jquery.countTo.js"></script>
	<!--====== Nice Select ======-->
	<script src="assets/js/jquery.nice-select.min.js"></script>
	<!--====== Bootstrap datepicker ======-->
	<script src="assets/js/bootstrap-datepicker.js"></script>
	<!--====== Wow JS ======-->
	<script src="assets/js/wow.min.js"></script>
	<!--====== Google Map ======-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
	<script src="assets/js/map.js"></script>
	<!--====== Main js ======-->
	<script src="assets/js/main.js"></script>
</body>

</html>
