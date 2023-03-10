<!DOCTYPE html>
<html lang="en">
<head>
    <!--====== Required meta tags ======-->
    <!-- <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> -->
    <title>Travel Services</title>
    <?php include 'includes/head.php'; ?>

    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"
/>
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/6.6.6/css/flag-icons.min.css">   -->
</head>
<body>
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="cssload-container">
            <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
    </div>
    <!-- #fdb467 -->
    <!-- #272624 -->
    <!--====== HEADER START ======-->
      <header class="header-absolute header-two sticky-header">
        <div class="container container-custom-one">
            <div class="nav-container d-flex align-items-center justify-content-between">
                <!-- Main Menu -->
                <div class="nav-menu d-lg-flex align-items-center">
                    <div class="navbar-close">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <div class="toggle">
                        <a href="#" id="offCanvasBtn"><i class="fal fa-bars"></i></a>
                    </div>
                    <div class="menu-items">
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                               <!--  <ul class="submenu">
                                    <li><a href="index.html">Abouts US</a></li>
                                    <li><a href="index-2.html">Services</a></li>
                                    <li><a href="index-3.html">Activities</a></li>
                                </ul> -->
                            </li>
                            <li>
                                <a href="#">Abouts Us</a>
                                <!-- <ul class="submenu">
                                    <li><a href="news-details.html">News Details</a></li>
                                </ul> -->
                            </li>
                            <li>
                                <a href="plane-grid.html">Services</a>
                                <ul class="submenu">
                                    <li><a href="plane-grid.html">Travel Services</a></li>
                                    <li><a href="plane-list.html">Conciergerie</a></li>
                                    <li><a href="plane-details.html">Real Esates</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Activities</a></li>
                        </ul>
                    </div>
                    <div class="nav-pushed-item"></div>
                </div>

                <!-- Site Logo -->

                <div class="site-logo">
                    <a href="index-2.html" class="main-logo"><img src="assets/img/logo-white.png" alt="Logo"></a>
                    <a href="index-2.html" class="sticky-logo"><img src="assets/img/logo.png" alt="Logo"></a>
                </div>
                <style>
                    header .nav-container .menu-items ul li .fb{
                        padding: 0px 2px;
                    }
                     .languagemenue li a{
                            line-height: 20px !important;
                        }

                        .languagemenue {
                            min-width: 50px !important;
                            /*right: 30px;*/
                        }
                        .languagemenue  li{
                            display: contents !important; 
                        }
                </style>

               <div class="nav-push-item">
                <div class="header-info d-lg-flex align-items-center">
                    <div class="nav-menu d-lg-flex align-items-center">
                        <div class="menu-items">
                            <ul>
                                <li><span class="fal fa-phone" style="color: #fff"></span><a href="tel:+971582181568">+971582181568</a></li>
                                <li><span class="fal fa-envelope" style="color: #fff"></span> <a href="mailto: contact@saphiraservices.com">contact@saphiraservices.com</a></li>
                                <li><a href="" class="fb"><span class="fab fa-facebook-f"></span></a>
                                </li>
                                <li><a href="" class="fb"><span class="fab fa-instagram"></span></a></li>
                                <li>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" onclick="OpenDropDown(event)"><i class="fi fi-us fis"></i></a>
                                        <ul class="dropdown-menu languagemenue" aria-labelledby="dropdownMenuButton1" style="width: 30px; background: #000;">
                                            <li>
                                                <a class="dropdown-item" href="#"> <i style="transform: rotate(90deg);" class="fi fi-fr fis"></i></a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#"><i class="fi fi-us fis"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="nav-pushed-item"></div>
                    </div>
                </div>
            </div>

                <div class="navbar-toggler">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>
    </header>
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle text-danger" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item active" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>



 <!--    <header class="header-absolute header-two sticky-header">
        <div class="container container-custom-one">
            <div class="nav-container d-flex align-items-center justify-content-between">
                
                <div class="nav-menu d-lg-flex align-items-center">
                    
                    <div class="navbar-close">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <div class="toggle">
                        <a href="#" id="offCanvasBtn"><i class="fal fa-bars"></i></a>
                    </div>
                    <div class="menu-items">
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="#">Abouts Us</a>
                            </li>
                            <li>
                                <a href="plane-grid.html">Services</a>
                                <ul class="submenu">
                                    <li><a href="plane-grid.html">Travel Services</a></li>
                                    <li><a href="plane-list.html">Conciergerie</a></li>
                                    <li><a href="plane-details.html">Real Esates</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Activities</a></li>
                        </ul>
                    </div>
                    <div class="nav-pushed-item"></div>
                </div>
                <div class="site-logo">
                    <a href="index-2.html" class="main-logo"><img src="assets/img/logo-white.png" alt="Logo"></a>
                    <a href="index-2.html" class="sticky-logo"><img src="assets/img/logo.png" alt="Logo"></a>
                </div>
                <div class="nav-push-item">
                    <div class="header-info d-lg-flex align-items-center">
                        <div class="item">
                            <i class="fal fa-phone"></i>
                            <span>Phone Number</span>
                            <a href="tel:+971582181568">
                                <h5 class="title">+971582181568</h5>
                            </a>
                        </div>
                        <div class="item">
                            <i class="fal fa-envelope"></i>
                            <span>Email Address</span>
                            <a href="mailto:info@webmail.com">
                                <h5 class="title">amina@saphiraservices.com</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="navbar-toggler">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>
    </header> -->
    <!--====== HEADER END ======-->
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
                    Travel Services means arranging or booking vacation or travel packages, travel reservations or accommodations, tickets for domestic or foreign travel by air, rail, ship, bus, or other medium of transportation, or hotel or other lodging accommodations. 
                </p>
            </div>
            <!-- Nav Widget -->
            <div class="widget nav-widget">
                <h5 class="widget-title">Our pages</h5>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="restaurant.html">Services</a></li>
                    <!-- <li>
                        <a href="places.html">Places</a>
                        <ul class="submenu">
                            <li><a href="places-details.html">Places Details</a></li>
                        </ul>
                    </li> -->
                    <li><a href="offers.html">Activities</a></li>
                    <!-- <li><a href="gallery.html">Our Gallery</a></li>
                    <li><a href="search-result.html">Search Result</a></li>
                    <li><a href="booking.html">Booking</a></li> -->
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
    <section class="banner-area banner-style-two" id="bannerSlider">
        <div class="single-banner d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="banner-content text-center">
                            <span class="promo-tag" data-animation="fadeInDown" data-delay=".6s">
                            <!-- The saphira luxury experience -->
                        </span>
                            <h1 class="title" data-animation="fadeInLeft" data-delay=".9s">The ultimate <br> luxury experience
                            </h1>
                            <ul>
                                <li data-animation="fadeInUp" data-delay="1.1s">
                                    <a class="main-btn btn-filled" href="#">take a tour</a>
                                </li>
                                <li data-animation="fadeInUp" data-delay="1.3s">
                                    <a class="main-btn btn-border" href="#">Learn More</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-bg" style="background-image: url(assets/img/banner/04.jpg);"></div>
            <div class="banner-overly"></div>
        </div>
     <!--    <div class="single-banner d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="banner-content text-center">
                            <span class="promo-tag" data-animation="fadeInDown" data-delay=".6s">
                                 The ultimate luxury experience
                            </span>
                            <h1 class="title" data-animation="fadeInLeft" data-delay=".9s">The ultimate <br> luxury experience
                            </h1>
                            <ul>
                                <li data-animation="fadeInUp" data-delay="1.1s">
                                    <a class="main-btn btn-filled" href="#">Book Now</a>
                                </li>
                                <li data-animation="fadeInUp" data-delay="1.3s">
                                    <a class="main-btn btn-border" href="#">Learn More</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-bg" style="background-image: url(assets/img/banner/05.jpg);"></div>
            <div class="banner-overly"></div>
        </div> -->
         <div class="single-banner d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="banner-content text-center">
                            <span class="promo-tag" data-animation="fadeInDown" data-delay=".6s">
                                <!-- The ultimate luxury experience -->
                            </span>
                            <h1 class="title" data-animation="fadeInLeft" data-delay=".9s">The ultimate <br> luxury experience
                            </h1>
                            <!-- THE ULTIMATE LUXURY EXPERIENCE -->
                            <ul>
                                <li data-animation="fadeInUp" data-delay="1.1s">
                                    <a class="main-btn btn-filled" href="#">Book Now</a>
                                </li>
                                <li data-animation="fadeInUp" data-delay="1.3s">
                                    <a class="main-btn btn-border" href="#">Learn More</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-bg" style="background-image: url(assets/img/banner/06.jpg);"></div>
            <div class="banner-overly"></div>
        </div>
    </section> 
    <!--====== BANNER PART ENDS ======-->
    <!--====== BOOKING FORM START ======-->
   <!--  <section class="booking-form">
        <div class="container">
            <div class="booking-form-inner">
                <form action="#">
                    <div class="row align-items-end">
                        <div class="col-lg-3 col-md-6">
                            <div class="inputs-filed mt-30">
                                <label for="arrival-date">Arrival Date</label>
                                <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                                <input type="text" placeholder="24th march 2020" name="arrival-date" id="arrival-date">
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
    </section> -->
    <!--====== BOOKING FORM END ======-->
    <!--====== TEXT BLOCK START ======-->
    <section class="text-block pt-115 pb-115">
        <div class="container">
            <div class="row align-items-center justify-content-center wow fadeInLeft" data-wow-delay=".3s">
                <div class="col-lg-7">
                    <div class="text-img text-center text-lg-left mb-small">
                        <img src="assets/img/text-block/02.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-5 col-md-8 col-sm-10 wow fadeInRight" data-wow-delay=".5s">
                    <div class="block-text">
                        <div class="section-title mb-20">
                            <span class="title-tag">Take a tour</span>
                            <h2>SAPHIRA SERVICES</h2>
                        </div>
                        <p>
                            Travel services are services offered by travel agents, including passenger transport services, air travel services, car hire services, road transport services, rail transport services, sea transport services, booking and reservation of travel services, travel ticket reservation services, tourist travel information.
                        </p>
                        <a href="#" class="main-btn btn-filled mt-40">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--====== TEXT BLOCK END ======-->
    <!--====== CORE FEATURES START ======-->
    <!-- <section class="core-feature-section bg-white pt-115 pb-115">
        <div class="container">
            <div class="section-title text-center mb-50">
                <span class="title-tag"> facilities </span>
                <h2>Core Features</h2>
            </div>
            <div class="row features-loop">
                <div class="col-lg-4 col-sm-6 order-1">
                    <div class="feature-box with-hover-img wow fadeInLeft" data-wow-delay=".3s">
                        <div class="icon">
                            <i class="flaticon-tower"></i>
                        </div>
                        <h3><a href="#">Have High Rating</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna..
                        </p>
                        <span class="count">01</span>
                        <div class="hover-img" style="background-image: url(assets/img/feature/01.jpg);"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-2">
                    <div class="feature-box wow fadeInUp" data-wow-delay=".4s">
                        <div class="icon">
                            <i class="flaticon-ticket-machine"></i>
                        </div>
                        <h3><a href="#">Quiet Hours</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna..
                        </p>
                        <span class="count">02</span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-3 order-sm-4 order-lg-3">
                    <div class="feature-box with-hover-img wow fadeInRight" data-wow-delay=".5s">
                        <div class="icon">
                            <i class="flaticon-airplane-stairs"></i>
                        </div>
                        <h3><a href="#">Best Locations</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna..
                        </p>
                        <span class="count">03</span>
                        <div class="hover-img" style="background-image: url(assets/img/feature/02.jpg);"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-4 order-sm-3 order-lg-4">
                    <div class="feature-box wow fadeInLeft" data-wow-delay=".7s">
                        <div class="icon">
                            <i class="flaticon-ticket-machine-1"></i>
                        </div>
                        <h3><a href="#">Free Cancellation</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna..
                        </p>
                        <span class="count">04</span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-5">
                    <div class="feature-box with-hover-img wow fadeInUp" data-wow-delay=".9s">
                        <div class="icon">
                            <i class="flaticon-trolley"></i>
                        </div>
                        <h3><a href="#">Payment Options</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna..
                        </p>
                        <span class="count">05</span>
                        <div class="hover-img" style="background-image: url(assets/img/feature/03.jpg);"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-6">
                    <div class="feature-box wow fadeInDown" data-wow-delay="1.1s">
                        <div class="icon">
                            <i class="flaticon-wine"></i>
                        </div>
                        <h3><a href="#">Special Offers</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna..
                        </p>
                        <span class="count">06</span>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--====== CORE FEATURES END ======-->
    <!--====== FEATURE ROOM START ======-->
  <!--   <section class="feature-plane-section pt-155 pb-115">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8 col-sm-7">
                    <div class="section-title">
                        <span class="title-tag">Room</span>
                        <h2>Featured Room</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-5 d-none d-sm-block">
                    <div class="feature-plane-arrow arrow-style text-right">
                    </div>
                </div>
            </div>
            <div class="row plane-gird-loop mt-80 feature-plane-slider">
                <div class="col-lg-4">
                    <div class="plane-box">
                        <div class="plane-img-wrap">
                            <div class="plane-img" style="background-image: url(assets/img/plane/01.jpg);"></div>
                        </div>
                        <div class="plane-desc">
                            <ul class="icons">
                                <li><i class="flaticon-wine"></i></li>
                                <li><i class="flaticon-helicopter"></i></li>
                                <li><i class="flaticon-cctv"></i></li>
                                <li><i class="flaticon-pilot"></i></li>
                                <li><i class="flaticon-ticket-machine"></i></li>
                                <li><i class="flaticon-inspection"></i></li>
                                <li><i class="flaticon-cake"></i></li>
                            </ul>
                            <h4 class="title"><a href="#">Minimal Duplex Plane</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                            <span class="price">$345/Hour</span>
                            <a href="#" class="book-btn">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="plane-box">
                        <div class="plane-img-wrap">
                            <div class="plane-img" style="background-image: url(assets/img/plane/02.jpg);"></div>
                        </div>
                        <div class="plane-desc">
                          <ul class="icons">
                              <li><i class="flaticon-wine"></i></li>
                              <li><i class="flaticon-helicopter"></i></li>
                              <li><i class="flaticon-cctv"></i></li>
                              <li><i class="flaticon-pilot"></i></li>
                              <li><i class="flaticon-ticket-machine"></i></li>
                              <li><i class="flaticon-inspection"></i></li>
                              <li><i class="flaticon-cake"></i></li>
                          </ul>
                            <h4 class="title"><a href="#">Minimal Duplex Plane</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                            <span class="price">$345/Hour</span>
                            <a href="#" class="book-btn">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="plane-box">
                        <div class="plane-img-wrap">
                            <div class="plane-img" style="background-image: url(assets/img/plane/03.jpg);"></div>
                        </div>
                        <div class="plane-desc">
                          <ul class="icons">
                              <li><i class="flaticon-wine"></i></li>
                              <li><i class="flaticon-helicopter"></i></li>
                              <li><i class="flaticon-cctv"></i></li>
                              <li><i class="flaticon-pilot"></i></li>
                              <li><i class="flaticon-ticket-machine"></i></li>
                              <li><i class="flaticon-inspection"></i></li>
                              <li><i class="flaticon-cake"></i></li>
                          </ul>
                            <h4 class="title"><a href="#">Minimal Duplex Plane</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                            <span class="price">$345/Hour</span>
                            <a href="#" class="book-btn">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="plane-box">
                        <div class="plane-img-wrap">
                            <div class="plane-img" style="background-image: url(assets/img/plane/02.jpg);"></div>
                        </div>
                        <div class="plane-desc">
                          <ul class="icons">
                              <li><i class="flaticon-wine"></i></li>
                              <li><i class="flaticon-helicopter"></i></li>
                              <li><i class="flaticon-cctv"></i></li>
                              <li><i class="flaticon-pilot"></i></li>
                              <li><i class="flaticon-ticket-machine"></i></li>
                              <li><i class="flaticon-inspection"></i></li>
                              <li><i class="flaticon-cake"></i></li>
                          </ul>
                            <h4 class="title"><a href="#">Minimal Duplex Plane</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                            <span class="price">$345/Hour</span>
                            <a href="#" class="book-btn">Booking Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--====== FEATURE ROOM END ======-->
    <!--====== COUNTER UP START ======-->
   <!--  <section class="counter-section bg-black pt-100 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="counter-box">
                        <div class="icon">
                            <img src="assets/img/icon/01.png" alt="Icon">
                        </div>
                        <h4><span class="counter">84</span>k<span class="plus-icon">+</span></h4>
                        <span class="title">Projects are Completed</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="counter-box">
                        <div class="icon">
                            <img src="assets/img/icon/02.png" alt="Icon">
                        </div>
                        <h4><span class="counter">10</span>M<span class="plus-icon">+</span></h4>
                        <span class="title">Active Backers Around World</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="counter-box">
                        <div class="icon">
                            <img src="assets/img/icon/03.png" alt="Icon">
                        </div>
                        <h4><span class="counter">02</span>k<span class="plus-icon">+</span></h4>
                        <span class="title">Categories Served</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="counter-box">
                        <div class="icon">
                            <img src="assets/img/icon/04.png" alt="Icon">
                        </div>
                        <h4><span class="counter">100</span>M<span class="plus-icon">+</span></h4>
                        <span class="title">Ideas Raised Funds</span>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--====== COUNTER UP END ======-->
    <!--====== TESTIMONIAL SLIDER START ======-->
   <!--  <section class="testimonial-section pb-115 pt-115">
        <div class="container">
            <div class="section-title text-center mb-80">
                <span class="title-tag">testimonials</span>
                <h2>Client Feedback</h2>
            </div>
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
                            <img src="assets/img/testimonial/01.png" alt="images">
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
    </section> -->

    <!--====== TESTIMONIAL SLIDER END ======-->
    <!--====== VIDEO WRAP START ======-->
  <!--   <section class="video-wrap full-section" style="background-image: url(assets/img/bg/05.jpg);">
        <a href="https://www.youtube.com/embed/KH1pcNUTa6U" class="popup-video wow fadeInDown" data-wow-delay=".3s">
            <img src="assets/img/icon/07.png" alt="Icon">
        </a>
    </section> -->
    <!--====== VIDEO WRAP END ======-->
    <!--====== LATEST NEWS START ======-->
   <!--  <section class="latest-news pt-115 pb-115">
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
    </section> -->
    <!--====== LATEST NEWS END ======-->
    <!--====== INSTAGRAM FEED PART START ======-->
    <!-- <section class="instagram-feed-section">
        <div class="container-fluid p-0">
            <div class="instagram-slider">
                <div class="image">
                    <a href="assets/img/instagram/01.jpg" class="insta-popup">
                        <img src="assets/img/instagram/01.jpg" alt="instagram-feed">
                    </a>
                </div>
                <div class="image">
                    <a href="assets/img/instagram/02.jpg" class="insta-popup">
                        <img src="assets/img/instagram/02.jpg" alt="instagram-feed">
                    </a>
                </div>
                <div class="image">
                    <a href="assets/img/instagram/03.jpg" class="insta-popup">
                        <img src="assets/img/instagram/03.jpg" alt="instagram-feed">
                    </a>
                </div>
                <div class="image">
                    <a href="assets/img/instagram/04.jpg" class="insta-popup">
                        <img src="assets/img/instagram/04.jpg" alt="instagram-feed">
                    </a>
                </div>
                <div class="image">
                    <a href="assets/img/instagram/05.jpg" class="insta-popup">
                        <img src="assets/img/instagram/05.jpg" alt="instagram-feed">
                    </a>
                </div>
                <div class="image">
                    <a href="assets/img/instagram/06.jpg" class="insta-popup">
                        <img src="assets/img/instagram/06.jpg" alt="instagram-feed">
                    </a>
                </div>
                <div class="image">
                    <a href="assets/img/instagram/01.jpg" class="insta-popup">
                        <img src="assets/img/instagram/01.jpg" alt="instagram-feed">
                    </a>
                </div>
                <div class="image">
                    <a href="assets/img/instagram/02.jpg" class="insta-popup">
                        <img src="assets/img/instagram/02.jpg" alt="instagram-feed">
                    </a>
                </div>
                <div class="image">
                    <a href="assets/img/instagram/03.jpg" class="insta-popup">
                        <img src="assets/img/instagram/03.jpg" alt="instagram-feed">
                    </a>
                </div>
                <div class="image">
                    <a href="assets/img/instagram/04.jpg" class="insta-popup">
                        <img src="assets/img/instagram/04.jpg" alt="instagram-feed">
                    </a>
                </div>
                <div class="image">
                    <a href="assets/img/instagram/05.jpg" class="insta-popup">
                        <img src="assets/img/instagram/05.jpg" alt="instagram-feed">
                    </a>
                </div>
                <div class="image">
                    <a href="assets/img/instagram/06.jpg" class="insta-popup">
                        <img src="assets/img/instagram/06.jpg" alt="instagram-feed">
                    </a>
                </div>
            </div>
        </div>
    </section> -->
    <!--====== INSTAGRAM FEED PART END ======-->
    <!--====== Back to Top ======-->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="fal fa-angle-double-up"></i>
    </a>
    <!--====== FOOTER START ======-->
    <footer class="footer-two">
        <div class="footer-widget-area pt-100 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 order-1">
                        <!-- Site Info Widget -->
                        <div class="widget site-info-widget mb-50">
                            <div class="footer-logo mb-50">
                                <img src="assets/img/footer-logo.png" alt="Logo">
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitat ion ullamco laboris nisi.
                            </p>
                            <div class="social-links mt-40">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-3 order-lg-2">
                        <!-- Nav Widget -->
                        <div class="widget nav-widget mb-50">
                            <div>
                                <h4 class="widget-title">Services.</h4>
                                <ul>
                                    <li><a href="#">Resturent & Bar</a></li>
                                    <li><a href="#">Gaming Zone</a></li>
                                    <li><a href="#">Swimming Pool</a></li>
                                    <li><a href="#">Marrige Party</a></li>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Party Planning</a></li>
                                    <li><a href="#">Conference Room</a></li>
                                    <li><a href="#">Tour Consultancy</a></li>
                                    <li><a href="#">Coctail Party Houses</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 order-2 order-lg-3">
                        <!-- Contact Widget -->
                        <div class="widget contact-widget mb-50">
                            <h4 class="widget-title">Contact Us.</h4>
                            <div class="contact-lists">
                                <div class="contact-box">
                                    <div class="icon">
                                        <i class="flaticon-call"></i>
                                    </div>
                                    <div class="desc">
                                        <h6 class="title">Phone Number</h6>
                                        +987 876 765 76 577
                                    </div>
                                </div>
                                <div class="contact-box">
                                    <div class="icon">
                                        <i class="flaticon-email"></i>
                                    </div>
                                    <div class="desc">
                                        <h6 class="title">Email Address</h6>
                                        <a href="#">info@webmail.com</a>
                                    </div>
                                </div>
                                <div class="contact-box">
                                    <div class="icon">
                                        <i class="flaticon-location"></i>
                                    </div>
                                    <div class="desc">
                                        <h6 class="title">Office Address</h6>
                                        14/A, Miranda City, NYC
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area pt-30 pb-30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-5 order-2 order-md-1">
                        <p class="copyright-text copyright-two">Copyright By@<a href="#">Example</a> - 2020</p>
                    </div>
                    <div class="col-lg-6 col-md-7 order-1 order-md-2">
                        <div class="footer-menu text-center text-md-right">
                            <ul>
                                <li><a href="#">Terms of use</a></li>
                                <li><a href="#">Privacy Environmental Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script>
        function  OpenDropDown(event){
            
        }

    </script>

    <!--====== FOOTER END ======-->

    <!--====== jquery js ======-->
    <!--====== jquery js ======-->

    


    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

     <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- <script src="assets/js/vendor/jquery.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->

    <!--====== Bootstrap js ======-->
    <!-- <script src="assets/js/bootstrap.min.js"></script> -->
    <!-- <script src="assets/js/umd/popper.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script> -->
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

    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->

</body>

</html>
