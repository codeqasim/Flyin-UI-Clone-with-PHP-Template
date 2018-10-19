<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>TravelStart</title>
        <link href="<?php echo $base_url; ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $base_url; ?>assets/css/style.css" rel="stylesheet" type="text/css">
        <!--<link href="<?php echo $base_url; ?>assets/css/rtl.css" rel="stylesheet" type="text/css">-->
        <script src="<?php echo $base_url; ?>assets/js/jquery.js"></script>
    </head>
    <body class="body">
        <!--<header dir="rtl" class="hide-nav"> -->
        <header class="hide-nav">
            <div class="headline"></div>
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="overlays"></div>
                    <div class="navbar-header">
                        <a href="#sidebar" class="navbar-toggle" type="button">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </a>
                        <a class="navbar-brand" href="<?php echo $base_url; ?>"> <img class="flyin-logo" src="assets/img/logo.png"> </a>
                    </div>
                    <!--<ul class="nav navbar-nav collapse navbar-collapse" >
                        <li><a href="#" class="active"> Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Flights</a></li>
                        <li><a href="#">Hotels</a></li>
                        <li><a href="#">Packages</a></li>
                        </ul>-->
                    <nav class="nav" id="sidebar" role="sidebarigation">
                        <ul class="nav navbar-nav navbar-right none0">
                            <li class="visible-xs mob-menu-legend">
                                <div class="text-center"><a class="toggle close" href="#"><i class="close icon-angle-left back"></i></a>  MENU </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon_set_1_icon-70"></i> Account <i class="visible-xs angle right icon pull-right"></i></a>
                                <ul class="dropdown-menu wow fadeIn">
                                    <li><a href="#">Login</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="dropdown-header">New Member?</li>
                                    <li><a href="#">Register</a></li>
                                </ul>
                            </li>
                            <li class="visible-xs mob-menu"><i class="icon_set_1_icon-65"></i> SETTINGS</li>
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">USD</a>
                                    <ul class="dropdown-menu wow fadeIn">
                                        <?php require 'languages.php'; ?>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav">

                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="<?php echo $base_url; ?>assets/img/en.png" alt="" /> English</a>
                                    <ul class="dropdown-menu wow fadeIn">
                                        <?php require 'languages.php'; ?>
                                    </ul>
                                </li>
                            </ul>
                            <li class="visible-xs mob-menu"><i class="icon_set_1_icon-87"></i> SERVICES</li>
                            <li class="visible-xs"><a href="#"><i class="icon_set_1_icon-93"></i> About Us  <i class="angle right icon pull-right"></i></a></li>
                            <li class="visible-xs"><a href="#"><i class="icon_set_1_icon-84"></i> Contact Us  <i class="angle right icon pull-right"></i></a></li>
                            <li class="visible-xs"><a href="#"><i class="icon_set_1_icon-92"></i> Terms & Conditions  <i class="angle right icon pull-right"></i></a></li>
                            <li class="visible-xs"><a href="#"><i class="icon_set_1_icon-17"></i> Privacy Policy  <i class="angle right icon pull-right"></i></a></li>
                            <li><a href="#"><i class="icon_set_1_icon-89"></i> +92 3311442244</a></li>
                        </ul>
                    </nav>
                </div>
            </nav>
        </header>
        <div class="slider_main_home hidden-xs">
      <div class="slider_home">
          <div id="Carousel" class="carousel slide carousel-fade">
            <div class="carousel-inner fadeIn">
                <div class="item active hero">
                    <div class="slide">
                    <div class="home-bg-img" style="background-image:url(assets/img/bg10.jpg) "></div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="container hidden-xs hidden-sm home-title">
                        <div class="carousel-caption text-center">
                            <h1 data-wow-duration="1s" data-wow-delay="0.1s" class="fadeInUp wow text-center">Your Journey Begins here</h1>
                            <div class="clearfix"></div>
                            <p data-wow-duration="2s" data-wow-delay="0.1s" class="flash wow text-center">Search over 450 airlines and more than 320,000 hotels around the world.</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="item  hero">
                    <div class="slide">
                       <div class="home-bg-img" style="background-image:url(assets/img/homeBg.jpg) "></div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="container hidden-xs hidden-sm home-title">
                        <div class="carousel-caption text-center">
                            <h1 data-wow-duration="1s" data-wow-delay="0.1s" class="fadeInUp wow text-center">Time for Refreshment</h1>
                            <div class="clearfix"></div>
                            <p data-wow-duration="2s" data-wow-delay="0.1s" class="flash wow text-center">Best Destinations to Explore</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="item  hero">
                    <div class="slide">
                       <div class="home-bg-img" style="background-image:url(assets/img/bg.jpg) "></div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="container hidden-xs hidden-sm home-title">
                        <div class="carousel-caption text-center">
                            <h1 data-wow-duration="1s" data-wow-delay="0.1s" class="fadeInUp wow text-center">Time for Refreshment</h1>
                            <div class="clearfix"></div>
                            <p data-wow-duration="2s" data-wow-delay="0.1s" class="flash wow text-center">Best Destinations to Explore</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="item  hero">
                    <div class="slide">
                       <div class="home-bg-img" style="background-image:url(assets/img/bg2.jpg) "></div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="container hidden-xs hidden-sm home-title">
                        <div class="carousel-caption text-center">
                            <h1 data-wow-duration="1s" data-wow-delay="0.1s" class="fadeInUp wow text-center">Time for Refreshment</h1>
                            <div class="clearfix"></div>
                            <p data-wow-duration="2s" data-wow-delay="0.1s" class="flash wow text-center">Best Destinations to Explore</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="item  hero">
                    <div class="slide">
                       <div class="home-bg-img" style="background-image:url(assets/img/bg3.jpg) "></div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="container hidden-xs hidden-sm home-title">
                        <div class="carousel-caption text-center">
                            <h1 data-wow-duration="1s" data-wow-delay="0.1s" class="fadeInUp wow text-center">Time for Refreshment</h1>
                            <div class="clearfix"></div>
                            <p data-wow-duration="2s" data-wow-delay="0.1s" class="flash wow text-center">Best Destinations to Explore</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control visible-lg visible-md" href="#Carousel" data-slide="prev">
                <span class="glyphicon-chevron-right icon-angle-left"></span>
            </a>
            <a class="right carousel-control visible-lg visible-md" href="#Carousel" data-slide="next">
                <span class="glyphicon-chevron-right icon-angle-right"></span>
            </a>
          </div>
       </div>
       </div>
<div class="mobfix container">
<div class="search-section">
    <nav class="search-tabs">
        <div class="container">
        <div class="row">
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="active"><a href="#FLIGHTS" aria-controls="flight" role="tab" data-toggle="tab"><i class="ti-Line-Airplane"></i> Flights</a></li>
                <li><a href="#HOTELS" aria-controls="hotels" role="tab" data-toggle="tab"><i class="icon_set_1_icon-23"></i> Hotels</a></li>
                <li><a href="#TOURS" aria-controls="tours" role="tab" data-toggle="tab"><i class="ti-Line-Suitcase-1"></i> Tours</a></li>
                <li><a href="#CARS" aria-controls="car" role="tab" data-toggle="tab"><i class="ti-Line-Car"></i> Cars</a></li>
                <!--<li><a href="#VISA" aria-controls="visa" role="tab" data-toggle="tab"><i class="ti-Line-Passport"></i> Visa</a></li>-->
            </ul>
        </div>
        </div>
    </nav>
    <div class="main-background">
    <div class="tab-content">
        <div class="tab-pane active fadein" id="FLIGHTS">
        <?php include 'includes/search/flights.php'; ?>
        </div>
        <div class="tab-pane fade" id="HOTELS">
         <?php include 'includes/search/hotels.php'; ?>
        </div>
        <div class="tab-pane" id="TOURS">

        </div>
        <div class="tab-pane" id="CARS">

        </div>
         <div class="tab-pane" id="VISA">
         <div class="panel-body">
          <!--
          <?php echo 'includes/ivisa.php'; ?>
          -->
           </div>
           </div>
    </div>
</div>
</div>
</div>