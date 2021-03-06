<?php 
if (isset($_POST['login']))
{
	header("location:login/login.php");
}


if (isset($_POST['techReq']))
{
	header("location:join/Technician.php");
}


if (isset($_POST['signup']))
{
	header("location:signup/SignUpClient.php");
}

?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>TechFix</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href='images/hq%20logo2.png'>
    <link rel="icon" href='images/hq%20logo2.png'>

</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.html">
                <img src="images/logo.png" alt="Homepage" style="height: 100px;">
            </a>
        </div> <!-- end header-logo -->

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>TechFix</h3>
                
                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll"  href="#home" title="home">Home</a></li>
                    <li><a class="smoothscroll"  href="#about" title="about">About</a></li>
                    <li><a class="smoothscroll"  href="#services" title="services">Services</a></li>
                    <li><a class="smoothscroll"  href="#contact" title="contact">Contact</a></li>
                </ul>
            </div> <!-- end header-nav__content -->

        </nav> <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/pattern.png" data-natural-width=3000 data-natural-height=2000 data-position-y=top>

        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">
                <h1>
                Best platform to <br>
                search for<br>
                Technicians
                </h1>

                <p>
                TechFix database contains special experienced craftsmen for Plumbing, Carpentry and Electricity
                </p>
    <!-- ================================== Button to go to Technician Sign up Page ============================================= -->
                <div class="col-md-3">
                	<form action="index.php" method="POST">
                    	<button type="submit" class="btn btn btn-success sign" style="margin-top: 150px" name="techReq">Join our Technicians</button>
                    </form>
                </div>
    <!-- ========================================= Button to go to Sign in Page ================================================== -->           
                <div class="col-md-2">
                	<form action="index.php" method="POST" >
                    <button type="submit" class="btn btn btn-success sign"style="margin-top: 40px" name="login">Sign In</button>
                    </form>
                </div>
    <!-- ====================================== Button to go to Client Sign up Page ============================================== -->
                <div class="col-md-1">
                	<form action="index.php" method="POST">
                    <button type="submit" class="btn btn btn-success sign" style="margin-top: 150px" name="signup">Sign Up as a Client</button>
                    </form>
                </div>    
            </div> <!-- end home-content__main -->

        </div> <!-- end home-content -->

        <ul class="home-sidelinks">
            <li><a class="smoothscroll" href="#about">About<span>who we are</span></a></li>
            <li><a class="smoothscroll" href="#services">Services<span>what we do</span></a></li>
            <li><a  class="smoothscroll" href="#contact">Contact<span>get in touch</span></a></li>
        </ul> <!-- end home-sidelinks -->`
        <a href="#about" class="home-scroll smoothscroll">
            <span class="home-scroll__text">Scroll Down</span>
            <span class="home-scroll__icon"></span>
        </a> <!-- end home-scroll -->

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id='about' class="s-about">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Who We Are</h3>
                <h1 class="display-1">We are a group of enthusiastic Computer Engineering Students aiming to make technical services more reachable.</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row" data-aos="fade-up">
            <div class="col-full">
                <p class="lead">
                Our goal is to make the communication between the technicians and their targeted clients much easier. We started the idea of TechFix at Ain Shams University, when we were thinking of innovative ways to solve the problem of miscommunication between technicians in various fields and the clients. TechFix launched on january 2019 with the flexibility of improving according to the our users' feedbacks.
                </p>
            </div>
        </div> <!-- end about-desc -->
    </section> <!-- end s-about -->


    <!-- services
    ================================================== -->
    <section id='services' class="s-services light-gray">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">What We Do</h3>
                <h1 class="display-1">We have a huge amount of technicians in various field to always satisfy your needs.</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row" data-aos="fade-up">
            <div class="col-full">
                <p class="lead">
                    TechFix has an ever growing database of technician that covers most of the required technical services worldwide. Our Technicians are regularly updated, as new technicians join our website and more clients recommend technicians for us.
                    We are always eager to accomplish the satisfaction of TechFix users either they are clients or technicians.
                </p>
            </div>
        </div> <!-- end about-desc -->

        <div class="row services-list block-1-3 block-m-1-2 block-tab-full">

            <div class="col-block service-item " data-aos="fade-up">
                <div class="service-icon service-icon--brand-identity">
                    <img src="images/2549%20%5BConverted%5D-01.png" style="height: 8rem">
                </div>
                <div class="service-text">
                    <h3 class="h4">Carpentry</h3>
                    <p>
                        Have you ever had a broken piece of furniture that you need fixed, or want to build a brand new wooden piece of furniture. TechFix offers you a variety of carpenters with different experiences spread all over the country.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon  service-icon--illustration">
                    <img src="images/LightBulbIcon-01.png" style="height: 8rem">
                </div>
                <div class="service-text">
                    <h3 class="h4">Electricity</h3>
                    <p>
                        Have you ever been in the position, where the lights went off and you don't know the nearest electrician and don't know what to do. TechFix offers you a simple solution, as it offers a huge numbers of electricians from all regions. In order for you to find you electrician as quickly as possible.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon  service-icon--web-design">
                    <img src="images/blumber-01.png" style="height: 8rem">
                </div>  
                <div class="service-text">
                    <h3 class="h4">Plumbing</h3>
                    <p>
                        If you ever had a broken water tap or a clogged pipe and you didn't have the time nor the knowledge to fix. Techfix offers you a great number of plumbers, ready to assist you at any time for any urgent plumbing business. You only need to choose the plumber that best fit your needs from our technician database.
                    </p>
                </div>
            </div>

        </div> <!-- end services-list -->

    </section> <!-- end s-services -->

      <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--light">Contact Us</h3>
                <h1 class="display-1 display-1--light">Get in touch and let's make something changes. Let's improve our services according to your opinions</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row">

            <div class="col-full contact-main" data-aos="fade-up">
                <p>
                <a class="contact-email">Techfixteam@tech.com</a>
                <span class="contact-number">+1061061402</span>
                </p>
            </div> <!-- end contact-main -->

        </div> <!-- end row -->

        <div class="row">

            <div class="col-five tab-full contact-secondary" data-aos="fade-up">
                <h3 class="subhead subhead--light">Where To Find Us</h3>

                <p class="contact-address">
                    Faculty of Engineering
                    <br>
                    Ain Shams University
                    <br>
                    Cairo
                </p>
            </div> <!-- end contact-secondary -->

        </div> <!-- end row -->

        

        <div class="cl-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
        </div>

    </section> <!-- end s-contact -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">            
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>