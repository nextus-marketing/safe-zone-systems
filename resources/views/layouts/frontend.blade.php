<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Upgrade your safety with Safe Zone Systems. Our professional CCTV installation, advanced surveillance technology, and round-the-clock monitoring deliver complete protection for homes and businesses." />
    <title>@yield('title')</title>
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="shortcut icon" href="/frontend/my-img/favicon.png" />
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet"/>
    <!-- css assets -->
    <link href="/frontend/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/frontend/assets/css/icofont.min.css" rel="stylesheet" />
    <link href="/frontend/assets/css/animate.css" rel="stylesheet" />
    <link href="/frontend/assets/css/mainmenu.css" rel="stylesheet" />
    <link href="/frontend/assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="/frontend/assets/css/slick.min.css" rel="stylesheet" />
    <link href="/frontend/assets/css/style.css" rel="stylesheet" />
    <link href="/frontend/assets/css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="/frontend/assets/css/my.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

    <body>
        <!-- ================== -->
        <!-- page-wrapper start -->
        <div class="page-wrapper">
           <!-- Preloader -->
            <!-- <div class="preloader"></div> -->
            
            <!-- ============ -->
            <!-- header start -->
    <style>
        /* Prevent logo text from breaking into 2 lines */
        .logo-outer .logo a {
            white-space: nowrap;
        }

        /* Mobile fixes */
        @media (max-width: 767px) {
            .logo-outer .logo a {
                font-size: 22px !important; /* Slightly smaller so it fits */
            }

            .header-inner {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
        }
    </style>

<header class="main-header">
    <div class="header-upper">
        <div class="container clearfix">

            <div class="header-inner">

                <!-- Logo -->
                <div class="logo-outer">
                                <div class="logo">
                                    <a href="/">
                                        <img src="/frontend/my-img/logo.png" 
                                            alt="logo" 
                                            style="height:40px; width:250px;">
                                    </a>
                                </div>
                            </div>


                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-lg ml-lg-auto mr-xl-auto">
                    <div class="navbar-header clearfix">
                                    <a href="/">
                                        <img src="/frontend/my-img/logo.png" 
                                            alt="logo" 
                                            style="height:55px; width:250px;">
                                    </a>
                        <!-- Toggle Button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-one">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse navbar-collapse-one collapse clearfix">
                        <ul class="navigation clearfix">
                            <li><a href="/">Home</a></li>
                            <li><a href="/#about">About Us</a></li>
                            <li><a href="/#contact">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>

                <!-- Call Button -->
                <div class="menu-button ml-55 d-none d-lg-block">
                    <a href="tel:+18476795062" class="theme-btn">
                        <i class="icofont-ui-call"></i>
                        <span>+1 (847) 673-5062</span>
                    </a>
                </div>

            </div>

        </div>
    </div>
</header>

            <!-- header end -->
            <!-- ========== -->

            <!-- ================== -->
            <!-- site-content start -->
            @yield('content')
            <!-- site-content end -->
            <!-- ================ -->

            <!-- ============ -->
            <!-- footer start -->
            <footer>
                
                <!-- /.footer-top -->
                <div class="footer-middle">
                <div class="container">
                    <div class="row justify-content-between">

                        <!-- ABOUT + LOGO SECTION (Replaces 1st Contact Us) -->
                        <div class="col-xl-5 col-lg-3 col-md-6 pr-xl-0">
                            <div class="footer-col">
                                <div class="logo">
                                    <a href="/">
                                        <img src="/frontend/my-img/logo.png" 
                                            alt="logo" 
                                            style="height:40px; width:250px;">
                                    </a>
                                </div>
                                </br>
                                <p>
                               <b> Safe Zone Systems</b> is committed to delivering peace of mind through advanced, tailored security solutions for homes and businesses. Combining cutting-edge technology with expert installation and support, we aim to create safe, secure environments where you and your loved ones or colleagues can feel protected always.
                                </p>
                            </div>
                        </div>

                        <!-- QUICK LINKS -->
                        <div class="col-xl-3 col-lg-3 col-md-6 pr-xl-0">
                            <div class="footer-col">
                                <h2>Quick Link</h2>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/#about">About</a></li>
                                    <li><a href="/#contact">Contact</a></li>
                                    <!-- <li><a href="/privacy-policy">Privacy Policy</a></li>
                                    <li><a href="/terms-and-conditon">Terms & Condition</a></li> -->
                                </ul>
                            </div>
                        </div>

                        <!-- CONTACT US (Only one retained) -->
                        <div class="col-xl-3 col-lg-3 col-md-6 pr-xl-0">
                            <div class="footer-col">
                                <h2>Contact Us</h2>
                                <div class="footer-contact">
                                    <p>
                                        <i class="icofont-location-pin"></i>
                                        <span>
                                            <a href="https://maps.app.goo.gl/DKxTciRdbLkWVw93A" target="_blank">
                                               9015 N Lowell Ave, Skokie, IL 60076
                                            </a>
                                        </span>
                                    </p>
                                    <p>
                                        <i class="icofont-ui-call"></i>
                                        <span>
                                            <a href="tel:+18476795062">+1 (847) 673-5062</a>
                                        </span>
                                    </p>
                                    <p>
                                        <i class="icofont-email"></i>
                                        <span>
                                            <a href="mailto:install@safezonesystems.site">install@safezonesystems.site</a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

                <!-- /.footer-middle -->
                <div class="footer-bottom" style="padding:15px 0;">
                    <div class="container d-flex justify-content-between align-items-center flex-wrap">

                        <!-- Left Side -->
                        <p class="mb-0" style="color:#fff;">
                            Copyright © <span>2025 Safe Zone Systems</span> | All Rights Reserved.
                        </p>

                        <!-- Right Side -->
                        <ul class="mb-0 d-flex" style="list-style:none; gap:20px; padding:0; margin:0;">
                            <li><a href="/privacy-policy" style="color:#fff; text-decoration:none;">Privacy Policy</a></li> ||
                            <li><a href="/terms-and-conditon" style="color:#fff; text-decoration:none;">Terms & Condition</a></li>
                        </ul>

                    </div>
                </div>

                <!-- /.footer-bottom -->
            </footer>
            <!-- footer end -->
            <!-- ========== -->
        </div>
        <!-- page-wrapper end -->
        <!-- ================ -->
        

        <div class="scroll-to-top" data-target="html">
            <i class="icofont-arrow-up"></i>
        </div>
        <!-- /.back2Top button -->

        <style>
/* Floating Button */
.call-now-btn {
    position: fixed;
    left: 20px;
    bottom: 20px;
    background: #21b4a6;
    color: #fff;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    animation: pulseBg 2s infinite ease-in-out;
    z-index: 999;
}

/* Background animation */
@keyframes pulseBg {
    0% { background-color: #21b4a6; }
    50% { background-color: #21b4a6; }
    100% { background-color: #21b4a6; }
}

/* SVG size */
.call-now-btn svg {
    width: 28px;
    height: 28px;
    fill: #fff;
}
</style>

<!-- Button -->
<a href="tel:+18476795062" class="call-now-btn">
    <!-- Phone SVG -->
    <svg viewBox="0 0 24 24">
        <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24 
                 11.36 11.36 0 003.56.57 1 1 0 011 1V20a1 1 0 01-1 
                 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 
                 1 11.36 11.36 0 00.57 3.56 1 1 0 01-.24 1.01z"/>
    </svg>
</a>
{{-- Popup --}}

<div id="promoPopup" class="promo-popup-overlay">
    <div class="promo-popup">
        <!-- Logo Centered -->
        <div class="popup-logo">
            <a href="#0">
                <img src="/frontend/my-img/logo.png" 
                    alt="logo" 
                    style="height:40px; width:250px;">
            </a>
        </div>
        <span class="close-popup">&times;</span>
        <h2>Get <span style="color:#21b4a6;">3 Months FREE</span> Monitoring!</h2>
        <p>Call now and secure your home with our exclusive limited-time offer.</p>
        <div class="text-center">
            <a href="tel:+18476795062" class="theme-btn">Call Now <i class="icofont-double-right"></i></a>
        </div>
    </div>
</div>

<script>
    // Show popup after 2 seconds
    setTimeout(function() {
        document.getElementById("promoPopup").style.display = "flex";
    }, 2000);

    // Close Popup
    document.querySelector(".close-popup").onclick = function () {
        document.getElementById("promoPopup").style.display = "none";
    };

    // Close when clicking outside the popup
    window.onclick = function (e) {
        if (e.target == document.getElementById("promoPopup")) {
            document.getElementById("promoPopup").style.display = "none";
        }
    };
</script>

<style>
    /* Popup Overlay */
/* Overlay */
.promo-popup-overlay {
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.55);
    display: none;
    justify-content: center;
    align-items: center;
    backdrop-filter: blur(4px);
    z-index: 99999;
    animation: fadeIn 0.4s ease-out;
}

/* Popup Box */
.promo-popup {
    background: rgba(255, 255, 255, 0.97);
    width: 90%;
    max-width: 520px;
    padding: 40px 35px;
    border-radius: 28px;
    text-align: center;
    position: relative;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
    animation: popupZoom 0.45s ease-in-out;
}

/* Logo */
.popup-logo {
    display: flex;
    justify-content: center;
    margin-bottom: 18px;
}

.popup-logo img {
    width: 300px;
    height: auto;
    object-fit: contain;
}

/* Title */
.promo-popup h2 {
    font-size: 30px;
    font-weight: 800;
    color: #111;
    margin-bottom: 12px;
    letter-spacing: -0.5px;
}

/* Content text */
.promo-popup p {
    font-size: 17px;
    color: #444;
    margin-bottom: 28px;
    line-height: 1.6em;
}

/* Close button */
.close-popup {
    position: absolute;
    top: 15px;
    right: 18px;
    font-size: 30px;
    font-weight: 600;
    cursor: pointer;
    color: #666;
    transition: 0.25s ease;
}

.close-popup:hover {
    color: #21b4a6;
    transform: rotate(90deg);
}

</style>


        <!-- js assets -->
        <script src="/frontend/assets/js/jquery-3.5.1.min.js"></script>
        <script src="/frontend/assets/js/bootstrap.bundle.min.js"></script>
        <script src="/frontend/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="/frontend/assets/js/jquery.parallax-scroll.js"></script>
        <script src="/frontend/assets/js/slick.min.js"></script>
        <script src="/frontend/assets/js/wow.min.js"></script>
        <script src="/frontend/assets/js/main.js"></script>
    </body>
</html>
