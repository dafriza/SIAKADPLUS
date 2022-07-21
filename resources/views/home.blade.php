<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="crypto, mining, animation, example, examples">
    <meta name="author" content="Creativegigs">
    <meta name="description"
        content="SIAKAD+ is a beautiful website template designed for bitcoin crypto currency mining and exchange websites.">
    <meta name='og:image' content='images/home/ogg.png'>
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIAKAD+</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('assets/images/favicon.png') }}">
    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_lp/css/style.css') }}">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_lp/css/responsive.css') }}">
    <!-- Color Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_lp/css/color-three.css') }}">


    <!-- Fix Internet Explorer ______________________________________-->

    <!--[if lt IE 9]>
   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
   <script src="vendor/html5shiv.js"></script>
   <script src="vendor/respond.js"></script>
  <![endif]-->

</head>

<body>
    <div class="main-page-wrapper">

        <!-- ********************** Loading Transition ************************ -->
        <div id="loader-wrapper">
            <div id="loader"></div>
        </div>

        <div class="html-top-content">
            <!-- ********************** Theme Top Banne & Header ************************ -->
            <div class="theme-top-section">
                <!-- ^^^^^^^^^^^^^^^^^ Theme Menu ^^^^^^^^^^^^^^^ -->
                <header class="theme-main-menu full-width color-white">
                    <div class="clearfix">
                        <div class="menu-wrapper clearfix">
                            <div class="logo"><a href="/">
                                <img src="{{ asset('assets_lp/images/logo/siakadpluswhite.png') }}" alt="Logo"></a></div>
                            <ul class="right-widget celarfix">
                                {{-- <li>
                                    <div id="polyglotLanguageSwitcher">
                                        <form action="#">
                                            <select id="polyglot-language-options">
                                                <option id="en" value="en" selected>En</option>
                                                <option id="fr" value="fr">Fr</option>
                                                <option id="de" value="de">Ger</option>
                                                <option id="it" value="it">It</option>
                                                <option id="es" value="es">Sp</option>
                                            </select>
                                        </form>
                                    </div> <!-- End #polyglotLanguageSwitcher -->
                                </li> --}}
                                <li class="login-button"><a href="/mahasiswa">Login <i class="flaticon-right-thin"></i></a>
                                </li>
                            </ul> <!-- /.right-widget -->

                            <!-- Navigation -->
                            <nav class="navbar navbar-expand-lg dark-bg" id="mega-menu-holder">
                                <div class="clearfix">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarResponsive" aria-controls="navbarResponsive"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <i class="fa fa-bars" aria-hidden="true"></i>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarResponsive">
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <a class="nav-link js-scroll-trigger" href="#about">About</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link js-scroll-trigger" href="#features">Features</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link js-scroll-trigger" href="#apps-review">Apps
                                                    Review</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>


                        </div> <!-- /.menu-wrapper -->
                    </div> <!-- /.container -->
                </header> <!-- /.theme-main-menu -->



                <!-- ^^^^^^^^^^^^^^^^^ Theme Banner ^^^^^^^^^^^^^^^ -->
                <div id="theme-banner" class="theme-banner-three">
                    <img src="{{ asset('assets_lp/images/shape/16.png') }}" alt="" class="shape-one">
                    <img src="{{ asset('assets_lp/images/576x586.png') }}" alt="" class="shape-two">
                    <img src="{{ asset('assets_lp/images/shape/19.png') }}" alt="" class="shape-four">
                    <div class="container">
                        <div class="main-text-wrapper">
                            <h1>Online education <br>Being easy with <br>Our platform.</h1>
                            <p>Revolutionary digital education system. Fast & most populer <br>currency for your future
                                online activity.</p>
                            <ul class="button-group clearfix">
                                <li><a href="/mahasiswa">Try Now</a></li>
                                <li>
                                    <div class="btn-group">
                                        <a href="/mahasiswa" class="download-button">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLearn more</a>
                                    </div>
                                </li>
                            </ul>
                            <img src="{{ asset('assets_lp/images/shape/18.png') }}" alt=""
                                class="shape-three">
                            <img src="{{ asset('assets_lp/images/icon/3.png') }}" alt=""
                                class="shape-five">
                        </div>
                    </div>
                </div> <!-- /.theme-banner-three -->
            </div> <!-- /.theme-top-section -->




            <!--
    =====================================================
     Our Feature Four
    =====================================================
    -->
            <div class="our-features-four" id="features">
                <img src="{{ asset('assets_lp/images/shape/27.png') }}" alt="" class="shape">
                <div class="container">
                    <div class="theme-title text-center">
                        <h2>It’s really easy to learn <br>with SIAKAD+.</h2>
                    </div>


                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="900">
                            <div class="single-feature">
                                <div class="icon-box">
                                    <img src="{{ asset('assets_lp/images/logo/book-logo.png') }}" alt=""
                                        class="primary-icon">
                                </div>
                                <h3>Fast Learn</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ab possimus adipisci ipsum provident </p>
                                <a href="#"><i class="flaticon-right-thin"></i></a>
                            </div> <!-- /.single-feature -->
                        </div> <!-- /.col- -->
                        <div class="col-md-4 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1200">
                            <div class="single-feature">
                                <div class="icon-box">
                                    <img src="{{ asset('assets_lp/images/logo/computer-logo.png') }}" alt=""
                                        class="primary-icon">
                                </div>
                                <h3>UI Friendly</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda velit autem sapiente vel</p>
                                <a href="#"><i class="flaticon-right-thin"></i></a>
                            </div> <!-- /.single-feature -->
                        </div> <!-- /.col- -->
                        <div class="col-md-4 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1500">
                            <div class="single-feature">
                                <div class="icon-box">
                                    <img src="{{ asset('assets_lp/images/logo/teacher-logo.png') }}" alt=""
                                        class="primary-icon">
                                </div>
                                <h3>Great Course</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, quo sequi. Excepturi illum iusto quae</p>
                                <a href="#"><i class="flaticon-right-thin"></i></a>
                            </div> <!-- /.single-feature -->
                        </div> <!-- /.col- -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.our-features-four -->




            <!--
    =====================================================
     About Us
    =====================================================
    -->
            <div class="about-cryto style-two" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 order-lg-last">
                            <div class="theme-title">
                                <div class="upper-heading">What is SIAKAD+?</div>
                                <h2>Let us introduce about Science.</h2>
                            </div> <!-- /.theme-title -->
                            <p class="sub-text">SIAKAD+ came into being clear vision to become a global leader</p>
                            <p class="text">Lorem ipsum dolor sit amet, has at lorem utin mucius, elitro dicam sit
                                malorum. Fugit convenire adhuc putant eam. scripta iudicabit, dicit le persius ponderum
                                id nec.</p>
                            <a href="#" class="learn-more">Learn More</a>
                            <p class="know-more">Want to learn more about us? <a href="#">Click here</a></p>
                        </div>
                        <div class="col-lg-6 order-lg-first">
                            <div class="icon-data">
                                <div class="single-box" data-aos="fade-right" data-aos-duration="1100">
                                    <img src="{{ asset('assets_lp/images/icon/14.png') }}" alt="">
                                    <h3>Privacy Security</h3>
                                    <p>Lorem ipsum dolor sit amet, has at lorem sit.</p>
                                </div> <!-- /.single-box -->
                                <div class="single-box" data-aos="fade-down" data-aos-duration="1100">
                                    <img src="{{ asset('assets_lp/images/icon/15.png') }}" alt="">
                                    <h3>Student prive</h3>
                                    <p>Lorem ipsum dolor sit amet, has at lorem sit.</p>
                                </div> <!-- /.single-box -->
                                <div class="single-box" data-aos="fade-up" data-aos-duration="1100">
                                    <img src="{{ asset('assets_lp/images/icon/16.png') }}" alt="">
                                    <h3>Most Populer</h3>
                                    <p>Lorem ipsum dolor sit amet, has at lorem sit.</p>
                                </div> <!-- /.single-box -->
                            </div> <!-- /.icon-data -->
                        </div>
                    </div>
                </div> <!-- /.container -->
            </div>





            <!--
    =====================================================
     Our Feature Five
    =====================================================
    -->
            <div class="our-feature-five" id="services">
                <img src="{{ asset('assets_lp/images/shape/28.png') }}" alt="" class="shape">
                <div class="container">
                    <div class="row single-block">
                        <div class="col-lg-6">
                            <div class="text">
                                <div class="icon-box"><img src="{{ asset('assets_lp/images/icon/17.png') }}"
                                        alt=""></div>
                                <h2 class="title">Untraceable transfer & Fast processing .</h2>
                                <p>Mining should be fair & easy! We do not allow ASICs on our network. The development
                                    team is wholy commited to with keeping it that way.</p>
                                <a href="#" class="learn-more">Learn More <i
                                        class="flaticon-right-thin"></i></a>
                            </div> <!-- /.text -->
                        </div> <!-- /.col- -->
                        <div class="col-lg-6 img-box">
                            <div><img src="{{ asset('assets_lp/images/shape/23.png') }}" alt=""></div>
                        </div>
                    </div> <!-- /.row -->

                    <div class="row single-block">
                        <div class="col-lg-6 order-lg-last">
                            <div class="text">
                                <div class="icon-box"><img src="{{ asset('assets_lp/images/icon/18.png') }}"
                                        alt=""></div>
                                <h2 class="title">Populer Education Platform and Great Course.</h2>
                                <p>Mining should be fair & easy! We do not allow ASICs on our network. The development
                                    team is wholy commited to with keeping it that way.</p>
                                <a href="#" class="learn-more">Learn More <i
                                        class="flaticon-right-thin"></i></a>
                            </div> <!-- /.text -->
                        </div> <!-- /.col- -->
                        <div class="col-lg-6 order-lg-first img-box">
                            <div><img src="{{ asset('assets_lp/images/shape/24.png') }}" alt=""></div>
                        </div>
                    </div> <!-- /.row -->

                    <div class="row single-block">
                        <div class="col-lg-6">
                            <div class="text">
                                <div class="icon-box"><img src="{{ asset('assets_lp/images/icon/19.png') }}"
                                        alt=""></div>
                                <h2 class="title">Upholding Confidentialit & Strong Security.</h2>
                                <p>Mining should be fair & easy! We do not allow ASICs on our network. The development
                                    team is wholy commited to with keeping it that way.</p>
                                <a href="#" class="learn-more">Learn More <i
                                        class="flaticon-right-thin"></i></a>
                            </div> <!-- /.text -->
                        </div> <!-- /.col- -->
                        <div class="col-lg-6 img-box">
                            <div><img src="{{ asset('assets_lp/images/shape/25.png') }}" alt=""></div>
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.our-feature-five -->





            <!--
    =====================================================
     Apps Overview
    =====================================================
    -->
            {{-- <div class="apps-overview color-three" id="apps-review">
                <img src="{{ asset('assets_lp/images/shape/29.png') }}" alt="" class="shape">
                <div class="overlay-bg">
                    <div class="container">
                        <div class="inner-wrapper">
                            <img src="{{ asset('assets_lp/images/home/s8.png') }}" alt=""
                                class="s8-mockup" data-aos="fade-down" data-aos-duration="2500">
                            <img src="{{ asset('assets_lp/images/home/x.png') }}" alt="" class="x-mockup"
                                data-aos="fade-up" data-aos-duration="2500">
                            <div class="row">
                                <div class="col-lg-5 offset-lg-7">
                                    <div class="text">
                                        <h3>don’t miss our apps</h3>
                                        <h2>Mobile Application for Faster Access.</h2>
                                        <h6>Now you can control dashboard from the mobile!</h6>
                                        <p>Mining should be fair & easy! We dose not allow ASIC on our network. The
                                            development team is who commited to with keeping it that way.</p>
                                        <ul class="button-group">
                                            <li><a href="#"><i class="flaticon-apple"></i> Apple Store</a></li>
                                            <li><a href="#"><img
                                                        src="{{ asset('assets_lp/images/icon/playstore.png') }}"
                                                        alt=""> Google Play</a></li>
                                        </ul>
                                    </div> <!-- /.text -->
                                </div>
                            </div>
                        </div> <!-- /.inner-wrapper -->
                    </div>
                </div> <!-- /.overlay-bg -->
            </div> <!-- /.apps-overview --> --}}



            <!--
    =====================================================
     Testimonial Section
    =====================================================
    -->
            <div class="testimonial-section">
                <div class="full-width">
                    <div class="theme-title text-center">
                        <div class="upper-heading">Testimonials</div>
                        <h2>Our Client <span>Testimonials</span></h2>
                    </div>

                    <div class="testimonial-slider-two">
                        <div class="item">
                            <div class="single-block clearfix">
                                <div class="img-block"><img src="{{ asset('assets_lp/images/logo/human-logo.png') }}"
                                        alt=""></div>
                                <div class="text">
                                    <h3 class="name">Rashed Kabir</h3>
                                    <span>CEO, Creativegigs</span>
                                    <p>“Success is making our clients succeed. Nothing else matters how we work.”</p>
                                    {{-- <img src="{{ asset('assets_lp/images/home/sign.png') }}" alt=""
                                        class="sign"> --}}
                                </div> <!-- /.text -->
                            </div> <!-- /.single-block -->
                        </div>
                        <div class="item">
                            <div class="single-block clearfix">
                                <div class="img-block"><img src="{{ asset('assets_lp/images/logo/human-logo.png') }}"
                                        alt=""></div>
                                <div class="text">
                                    <h3 class="name">Jannatul Fa.</h3>
                                    <span>MD. Tourisom Group</span>
                                    <p>“Success is making our clients succeed. Nothing else matters how we work.”</p>
                                    {{-- <img src="{{ asset('assets_lp/images/home/sign.png') }}" alt=""
                                        class="sign"> --}}
                                </div> <!-- /.text -->
                            </div> <!-- /.single-block -->
                        </div>
                        <div class="item">
                            <div class="single-block clearfix">
                                <div class="img-block"><img src="{{ asset('assets_lp/images/logo/human-logo.png') }}"
                                        alt=""></div>
                                <div class="text">
                                    <h3 class="name">Rashed Kabir</h3>
                                    <span>CEO, Creativegigs</span>
                                    <p>“Success is making our clients succeed. Nothing else matters how we work.”</p>
                                    {{-- <img src="{{ asset('assets_lp/images/home/sign.png') }}" alt=""
                                        class="sign"> --}}
                                </div> <!-- /.text -->
                            </div> <!-- /.single-block -->
                        </div>
                        <div class="item">
                            <div class="single-block clearfix">
                                <div class="img-block"><img src="{{ asset('assets_lp/images/logo/human-logo.png') }}"
                                        alt=""></div>
                                <div class="text">
                                    <h3 class="name">Jannatul Fa.</h3>
                                    <span>MD. Tourisom Group</span>
                                    <p>“Success is making our clients succeed. Nothing else matters how we work.”</p>
                                    {{-- <img src="{{ asset('assets_lp/images/home/sign.png') }}" alt=""
                                        class="sign"> --}}
                                </div> <!-- /.text -->
                            </div> <!-- /.single-block -->
                        </div>
                        <div class="item">
                            <div class="single-block clearfix">
                                <div class="img-block"><img src="{{ asset('assets_lp/images/logo/human-logo.png') }}"
                                        alt=""></div>
                                <div class="text">
                                    <h3 class="name">Rashed Kabir</h3>
                                    <span>CEO, Creativegigs</span>
                                    <p>“Success is making our clients succeed. Nothing else matters how we work.”</p>
                                    {{-- <img src="{{ asset('assets_lp/images/home/sign.png') }}" alt=""
                                        class="sign"> --}}
                                </div> <!-- /.text -->
                            </div> <!-- /.single-block -->
                        </div>
                        <div class="item">
                            <div class="single-block clearfix">
                                <div class="img-block"><img src="{{ asset('assets_lp/images/logo/human-logo.png') }}"
                                        alt=""></div>
                                <div class="text">
                                    <h3 class="name">Jannatul Fa.</h3>
                                    <span>MD. Tourisom Group</span>
                                    <p>“Success is making our clients succeed. Nothing else matters how we work.”</p>
                                    {{-- <img src="{{ asset('assets_lp/images/home/sign.png') }}" alt=""
                                        class="sign"> --}}
                                </div> <!-- /.text -->
                            </div> <!-- /.single-block -->
                        </div>
                        <div class="item">
                            <div class="single-block clearfix">
                                <div class="img-block"><img src="{{ asset('assets_lp/images/logo/human-logo.png') }}"
                                        alt=""></div>
                                <div class="text">
                                    <h3 class="name">Rashed Kabir</h3>
                                    <span>CEO, Creativegigs</span>
                                    <p>“Success is making our clients succeed. Nothing else matters how we work.”</p>
                                    {{-- <img src="{{ asset('assets_lp/images/home/sign.png') }}" alt=""
                                        class="sign"> --}}
                                </div> <!-- /.text -->
                            </div> <!-- /.single-block -->
                        </div>
                    </div> <!-- /.testimonial-slider -->
                </div> <!-- /.full-width -->
            </div> <!-- /.testimonial-section -->


            <!--
    =============================================
     FaQ Section
    ==============================================
    -->
            <div class="faq-section">
                <div class="container">
                    <div class="theme-title text-center">
                        <h2>SIAKAD+ FAQ’s</h2>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="accordion-one">
                                <div class="panel-group theme-accordion" id="accordion">
                                    <div class="panel">
                                        <div class="panel-heading active-panel">
                                            <h6 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                                    How can i get help by bitro wallet?</a>
                                            </h6>
                                        </div>
                                        <div id="collapse1" class="panel-collapse collapse show">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, vix an natum labitur eleifd, mel am
                                                    laoreet menandri. Ei justo complectitur duo. Ei mundi solet utos
                                                    soletu possit quo. Sea cu justo laudem.</p>
                                            </div>
                                        </div>
                                    </div> <!-- /panel 1 -->
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h6 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                                    I have questions about the updated Terms of Service and Privacy
                                                    Policy</a>
                                            </h6>
                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, vix an natum labitur eleifd, mel am
                                                    laoreet menandri. Ei justo complectitur duo. Ei mundi solet utos
                                                    soletu possit quo. Sea cu justo laudem.</p>
                                            </div>
                                        </div>
                                    </div> <!-- /panel 2 -->
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h6 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                                    User Guide: Getting Started</a>
                                            </h6>
                                        </div>
                                        <div id="collapse3" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, vix an natum labitur eleifd, mel am
                                                    laoreet menandri. Ei justo complectitur duo. Ei mundi solet utos
                                                    soletu possit quo. Sea cu justo laudem.</p>
                                            </div>
                                        </div>
                                    </div> <!-- /panel 3 -->
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h6 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                                    Are you plan to open a brance on Dhaka?</a>
                                            </h6>
                                        </div>
                                        <div id="collapse4" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, vix an natum labitur eleifd, mel am
                                                    laoreet menandri. Ei justo complectitur duo. Ei mundi solet utos
                                                    soletu possit quo. Sea cu justo laudem.</p>
                                            </div>
                                        </div>
                                    </div> <!-- /panel 4 -->
                                </div> <!-- end #accordion -->
                            </div> <!-- End of .accordion-one -->
                        </div>

                        <div class="col-lg-6">
                            <div class="accordion-one">
                                <div class="panel-group theme-accordion" id="accordion-two">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h6 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion-two"
                                                    href="#collapse11">
                                                    How can i get help by x company?</a>
                                            </h6>
                                        </div>
                                        <div id="collapse11" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, vix an natum labitur eleifd, mel am
                                                    laoreet menandri. Ei justo complectitur duo. Ei mundi solet utos
                                                    soletu possit quo. Sea cu justo laudem.</p>
                                            </div>
                                        </div>
                                    </div> <!-- /panel 1 -->
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h6 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion-two"
                                                    href="#collapse22">
                                                    What about loan programs & after bank loan advantage?</a>
                                            </h6>
                                        </div>
                                        <div id="collapse22" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, vix an natum labitur eleifd, mel am
                                                    laoreet menandri. Ei justo complectitur duo. Ei mundi solet utos
                                                    soletu possit quo. Sea cu justo laudem.</p>
                                            </div>
                                        </div>
                                    </div> <!-- /panel 2 -->
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h6 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion-two"
                                                    href="#collapse33">
                                                    How long your contract terms?</a>
                                            </h6>
                                        </div>
                                        <div id="collapse33" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, vix an natum labitur eleifd, mel am
                                                    laoreet menandri. Ei justo complectitur duo. Ei mundi solet utos
                                                    soletu possit quo. Sea cu justo laudem.</p>
                                            </div>
                                        </div>
                                    </div> <!-- /panel 3 -->
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h6 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion-two"
                                                    href="#collapse44">
                                                    How can i become a contributer with compress as partner?</a>
                                            </h6>
                                        </div>
                                        <div id="collapse44" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, vix an natum labitur eleifd, mel am
                                                    laoreet menandri. Ei justo complectitur duo. Ei mundi solet utos
                                                    soletu possit quo. Sea cu justo laudem.</p>
                                            </div>
                                        </div>
                                    </div> <!-- /panel 4 -->
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h6 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion-two"
                                                    href="#collapse45">
                                                    Are you plan to open a brance on Dhaka?</a>
                                            </h6>
                                        </div>
                                        <div id="collapse45" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, vix an natum labitur eleifd, mel am
                                                    laoreet menandri. Ei justo complectitur duo. Ei mundi solet utos
                                                    soletu possit quo. Sea cu justo laudem.</p>
                                            </div>
                                        </div>
                                    </div> <!-- /panel 5 -->
                                </div> <!-- end #accordion-two -->
                            </div> <!-- End of .accordion-one -->
                        </div>
                    </div>
                </div>
            </div> <!-- /.faq-section -->




            <!--
    =============================================
     Contact Us One
    ==============================================
    -->
            <div class="contact-us-one bg-color m0" id="contact">
                <img src="{{ asset('assets_lp/images/shape/26.png') }}" alt="" class="shape">
                <img src="{{ asset('assets_lp/images/shape/30.png') }}" alt="" class="shape-two">
                <div class="container">
                    <div class="theme-title text-center">
                        <h2>Get In Touch</h2>
                        <p>vel modus honestatis ad, vim an vidit aliquam instructior. Alii efficiendi <br> intellegebat
                            nec ea, mea elitr interesset ea</p>
                    </div>
                    <form action="#" class="form-validation" autocomplete="off">
                        <div class="row">
                            <div class="col-md-6">
                                <label>First Name*</label>
                                <input type="text" placeholder="First Name" name="firstName">
                            </div>
                            <div class="col-md-6">
                                <label>Last Name*</label>
                                <input type="text" placeholder="Last Name" name="lastName">
                            </div>
                            <div class="col-md-6">
                                <label>Email*</label>
                                <input type="email" placeholder="Email Address" name="email">
                            </div>
                            <div class="col-md-6">
                                <label>Phone</label>
                                <input type="text" placeholder="Phone Number" name="phone">
                            </div>
                            <div class="col-12">
                                <label>I would like to discuss*</label>
                                <input type="text" name="message">
                            </div>
                        </div>
                        <button>Send Message</button>
                    </form>
                    <!--Contact Form Validation Markup -->
                    <!-- Contact alert -->
                    <div class="alert-wrapper" id="alert-success">
                        <div id="success">
                            <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
                            <div class="wrapper">
                                <p>Your message was sent successfully.</p>
                            </div>
                        </div>
                    </div> <!-- End of .alert_wrapper -->
                    <div class="alert-wrapper" id="alert-error">
                        <div id="error">
                            <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
                            <div class="wrapper">
                                <p>Sorry!Something Went Wrong.</p>
                            </div>
                        </div>
                    </div> <!-- End of .alert_wrapper -->
                </div>
            </div> <!-- /.contact-us-one -->


            <!--
    =====================================================
     Partner Slider
    =====================================================
    -->
            <div class="partner-section">
                <div class="container">
                    <div class="partner-slider">
                        <div class="item"><a href="#"><img
                                    src="{{ asset('assets_lp/images/logo/p-1.png') }}" alt=""></a></div>
                        <div class="item"><a href="#"><img
                                    src="{{ asset('assets_lp/images/logo/p-2.png') }}" alt=""></a></div>
                        <div class="item"><a href="#"><img
                                    src="{{ asset('assets_lp/images/logo/p-3.png') }}" alt=""></a></div>
                        <div class="item"><a href="#"><img
                                    src="{{ asset('assets_lp/images/logo/p-4.png') }}" alt=""></a></div>
                        <div class="item"><a href="#"><img
                                    src="{{ asset('assets_lp/images/logo/p-5.png') }}" alt=""></a></div>
                    </div>
                </div>
            </div>





            <!--
    =====================================================
     Footer
    =====================================================
    -->
            <footer class="theme-footer">
                <img src="{{ asset('assets_lp/images/logo/siakadpluswhite.png') }}" alt="" class="shape">
                <div class="container">
                    <div class="inner-wrapper">
                        <div class="top-footer-data-wrapper">
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 footer-logo">
                                    <div class="logo"><a href="index.html"><img
                                                src="{{ asset('assets_lp/images/logo/siakadplusbalck.png') }}"
                                                alt="Logo"></a></div>
                                    <a href="#" class="email">SIAKAD+co@company.com</a>
                                    <a href="#" class="mobile">648-xxx-xxxx</a>
                                </div> <!-- /.footer-logo -->
                                <div class="col-lg-2 col-sm-6 footer-list">
                                    <h4 class="title">Quick Links</h4>
                                    <ul>
                                        <li><a href="#">How it Works</a></li>
                                        <li><a href="#">Guarantee</a></li>
                                        <li><a href="#">Security</a></li>
                                        <li><a href="#">Report Bug</a></li>
                                        <li><a href="#">Pricing</a></li>
                                    </ul>
                                </div> <!-- /.footer-list -->
                                <div class="col-lg-3 col-sm-6 footer-list">
                                    <h4 class="title">About Us</h4>
                                    <ul>
                                        <li><a href="#">About Singleton</a></li>
                                        <li><a href="#">Jobs</a></li>
                                        <li><a href="#">Team</a></li>
                                        <li><a href="#">Testimonials</a></li>
                                        <li><a href="#">Blog</a></li>
                                    </ul>
                                </div> <!-- /.footer-list -->
                                <div class="col-lg-3 col-sm-6 footer-list">
                                    <h4 class="title">Become A Member</h4>
                                    <ul>
                                        <li><a href="#">Contributor</a></li>
                                        <li><a href="#">Union Member</a></li>
                                        <li><a href="#">Processing</a></li>
                                        <li><a href="#">Legal Action</a></li>
                                    </ul>
                                </div> <!-- /.footer-list -->
                            </div> <!-- /.row -->
                        </div> <!-- /.top-footer-data-wrapper -->

                        <div class="bottom-footer clearfix">
                            <p class="copyright">&copy; 2018 <a href="#">SIAKAD+</a> All Right Reserved</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div> <!-- /.bottom-footer -->
                    </div>
                </div> <!-- /.container -->
            </footer>

        </div> <!-- /.html-top-content -->



        <!-- Scroll Top Button -->
        <button class="scroll-top tran3s color-one-bg">
            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
        </button>




        <!-- Js File_________________________________ -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!-- jQuery -->
        <script src="{{ asset('assets_lp/vendor/jquery.2.2.3.min.js') }}"></script>
        <!-- Popper js -->
        <script src="{{ asset('assets_lp/vendor/popper.js/popper.min.js') }}"></script>
        <!-- Bootstrap JS -->
        <script src="{{ asset('assets_lp/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

        <!-- Vendor js _________ -->
        <!-- Plugin JavaScript -->
        <script src="{{ asset('assets_lp/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <!-- Language Stitcher -->
        <script src="{{ asset('assets_lp/vendor/language-switcher/jquery.polyglot.language.switcher.js') }}"></script>
        <!-- js count to -->
        <script src="{{ asset('assets_lp/vendor/jquery.appear.js') }}"></script>
        <script src="{{ asset('assets_lp/vendor/jquery.countTo.js') }}"></script>
        <!-- Fancybox -->
        <script src="{{ asset('assets_lp/vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>
        <!-- owl Carousel -->
        <script src="{{ asset('assets_lp/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
        <!-- AOS js -->
        <script src="{{ asset('assets_lp/vendor/aos-next/dist/aos.js') }}"></script>
        <!-- Road Map js -->
        <script src="{{ asset('assets_lp/vendor/roadmap/jquery.roadmap.js') }}"></script>



        <!-- Theme js -->
        <script src="{{ asset('assets_lp/js/theme.js') }}"></script>

    </div> <!-- /.main-page-wrapper -->
</body>

</html>
