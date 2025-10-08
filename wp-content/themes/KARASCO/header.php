<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welcome...</title>
    <meta name="author" content="Karasco InternationalShipping Co. L.L.C">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&amp;family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">
    
     <?php wp_head();?>
</head>

<body>
    <div class="preloader">

        <div class="preloader-inner">
            <div class="loader"><span></span> <span></span> <span></span> <span></span> <span></span> <span></span></div>
        </div>
    </div>

    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                 <a href="<?php echo home_url();?>"><img src="<?php bloginfo ('template_directory');?>/img/logo.webp" alt=""></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                   <li><a href="<?php echo home_url();?>">Home</a></li>
                    <li class="menu-item-has-children"><a href="#">About Us</a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo site_url('/about-us');?>">Company Profile</a></li>
                            <li><a href="<?php echo site_url('/team');?>">Our Team</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Services</a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo site_url('/ocean-freight');?>">Ocean Freight</a></li>
                            <li><a href="<?php echo site_url('/lcl-service');?>">LCL Service</a></li>
                            <li><a href="<?php echo site_url('/fcl-service');?>">FCL Service</a></li>
                            <li><a href="<?php echo site_url('/air-freight');?>"> Air Freight</a></li>
                            <li><a href="<?php echo site_url('/over-land-transportation');?>"> Over Land Transportation</a></li>
                            <li><a href="<?php echo site_url('/custom-clearance-services');?>"> Custom Clearance Services</a></li>
                            <li><a href="<?php echo site_url('/warehousing');?>"> Warehousing</a></li>
                            <li><a href="<?php echo site_url('/equipment');?>"> Equipment </a></li>
                            <li><a href="<?php echo site_url('/insurance');?>"> Insurance</a></li>
                        </ul>
                    </li>
                    <!--<li><a href="clients.html">Clients</a></li>-->
                    <li><a href="<?php echo site_url('/careers');?>">Careers</a></li>
                    <li><a href="<?php echo site_url('/contact-us');?>">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <header class="th-header header-layout3">
        <div class="header-top">
            <div class="container">
                <div class="topbar-wrapper">
                    <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-links">
                                <ul>
                                    <li class="kuwait_topadd"><i class="fas fa-location-dot text-white"></i> KUWAIT: liberation tower Al Mansour Building </li>
                                    <li><i class="fas fa-location-dot text-white"></i> UAE: Dubai Al Qusais 2, Damascus Street.</li>                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="header-links">
                                <ul>
                                     <li><i class="fas fa-phone-volume"></i>  <a href="tel:<?php echo get_field('kuwait_phonenumber_one',$page_id = 177);?>"><?php echo get_field('kuwait_phonenumber_one',$page_id = 177);?></a>/<a href="tel:+965224900<?php echo get_field('kuwait_phonenumber_two',$page_id = 177);?>"><?php echo get_field('kuwait_phonenumber_two',$page_id = 177);?></a>/<a href="tel:+965224900<?php echo get_field('kuwait_phonenumber_three',$page_id = 177);?>"><?php echo get_field('kuwait_phonenumber_three',$page_id = 177);?></a>/ <a href="tel:+965224900<?php echo get_field('kuwait_phonenumber_four',$page_id = 177);?>"><?php echo get_field('kuwait_phonenumber_four',$page_id = 177);?></a></li>
                                    <li><i class="fas fa-phone-volume"></i> <a href="tel:<?php echo get_field('dubai_phonenumber_one',$page_id = 177);?>"><?php echo get_field('dubai_phonenumber_one',$page_id = 177);?> </a></li>                                   
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="container">
                <div class="menu-area">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                 <a href="<?php echo home_url();?>"><img src="<?php bloginfo ('template_directory');?>/img/logo.webp" alt=""></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                    <li><a href="<?php echo home_url();?>">Home</a></li>
                    <li class="menu-item-has-children"><a href="#">About Us</a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo site_url('/about-us');?>">Company Profile</a></li>
                            <li><a href="<?php echo site_url('/team');?>">Our Team</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Services</a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo site_url('/ocean-freight');?>">Ocean Freight</a></li>
                            <li><a href="<?php echo site_url('/lcl-service');?>">LCL Service</a></li>
                            <li><a href="<?php echo site_url('/fcl-service');?>">FCL Service</a></li>
                            <li><a href="<?php echo site_url('/air-freight');?>"> Air Freight</a></li>
                            <li><a href="<?php echo site_url('/over-land-transportation');?>"> Over Land Transportation</a></li>
                            <li><a href="<?php echo site_url('/custom-clearance-services');?>"> Custom Clearance Services</a></li>
                            <li><a href="<?php echo site_url('/warehousing');?>"> Warehousing</a></li>
                            <li><a href="<?php echo site_url('/equipment');?>"> Equipment </a></li>
                            <li><a href="<?php echo site_url('/insurance');?>"> Insurance</a></li>
                        </ul>
                    </li>
                    <!--<li><a href="clients.html">Clients</a></li>-->
                    <li><a href="<?php echo site_url('/careers');?>">Careers</a></li>
                    <li><a href="<?php echo site_url('/contact-us');?>">Contact Us</a></li>
                </ul>
                            </nav>
                            <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="fa-solid fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button"><a href="#" class="th-btn style3" data-bs-toggle="modal" data-bs-target="#exampleModal">Get A Quote<i class="fas fa-arrow-right ms-2"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>