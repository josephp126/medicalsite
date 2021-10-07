@extends('layouts.app')

@section('mainContent')
<div id="main-top" class="main-index">
    <!-- <div id="fullwidth-video">
        <div class="fullwidth-video-bg">
            <video id="bgvideop" poster="img/video-bg.jpg" autobuffer autoplay="autoplay" loop="loop" muted
                defaultMuted playsinline webkit-playsinline oncontextmenu="return false;" preload="auto"
                onplaying="this.controls=false">
                <source src="img/bgvideo.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
            </video>
        </div>
    </div> -->
    <div class="header">
        <div class="container-fluid d-flex justify-content-center">
            <div class="row">
                <div class="col-6 col-lg-2">
                    <a href="index.html">
                        <img src="img/logo.svg" class="img-fluid logo" alt="" />
                    </a>
                </div>
                <div class="col-6 col-lg-10 text-right">
                    <a href="javascript:void(0)" class="menu-toggle-btn pt-2 d-inline-block d-lg-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="47" height="18" viewBox="0 0 47 18">
                            <g id="menu-toggle" transform="translate(-46 -19)">
                                <rect id="Rectangle_2" data-name="Rectangle 2" width="47" height="3"
                                    transform="translate(46 19)" fill="#fff"></rect>
                                <rect id="Rectangle_3" data-name="Rectangle 3" width="32" height="3"
                                    transform="translate(61 34)" fill="#fff"></rect>
                            </g>
                        </svg>
                    </a>
                    <ul class="main-menu text-left text-lg-right">
                        <li class="pb-5 text-right d-block d-lg-none pt-4 pr-4">
                            <a href="javascript:void(0)" class="pt-1 menu-close-btn close-toggle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 46.531 45.619">
                                    <g id="menu-close-btn" transform="translate(-51.469 -2.676)">
                                        <rect id="Rectangle_2" data-name="Rectangle 2" width="60.644" height="3.871"
                                            transform="translate(52.381 45.557) rotate(-45)" fill="#fff"></rect>
                                        <rect id="Rectangle_9" data-name="Rectangle 9" width="60.644" height="3.871"
                                            transform="translate(54.206 2.676) rotate(45)" fill="#fff"></rect>
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li class="menu-item active">
                            <a href="/"> Home </a>
                        </li>
                        <li class="menu-item">
                            <a href="/employers"> Employers </a>
                            <div class="submenu-cont">
                                <ul class="submenu">
                                    <li>
                                        <a href="/vpc">Virtual Primary Care</a>
                                    </li>
                                    <li>
                                        <a href="/workerscompensation">Worker's Compensation</a>
                                    </li>
                                    <li>
                                        <a href="/onsiteclinics">Onsite Clinics</a>
                                    </li>
                                    <li>
                                        <a href="/telemedicine">Telemedicine</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item">
                            <a href="/akosadvisor"> Akos Advisor</a>
                        </li>
                        <li class="menu-item">
                            <a href="/urgentcare"> Urgent Care Centre </a>
                        </li>
                        <li class="menu-item">
                            <a href="/providers"> Providers </a>
                            <div class="submenu-cont">
                                <ul class="submenu">
                                    <li>
                                        <a href="">Primary Providers</a>
                                    </li>
                                    <li>
                                        <a href="">Specialist</a>
                                    </li>
                                    <li>
                                        <a href="">ACO/Value Based entities</a>
                                    </li>
                                    <li>
                                        <a href="/ccm">CCM</a>
                                    </li>
                                    <li>
                                        <a href="">RPM</a>
                                    </li>
                                    <li>
                                        <a href="">Answering servicce/Nurse triage</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item">
                            <a href="/remotepatient"> Remote Patient monitoring </a>
                        </li>
                        <li class="menu-item">
                            <a href="/whowe"> Who we are </a>
                        </li>
                        <li class="menu-item">
                            <a href="/news"> News </a>
                        </li>
                        <!-- <li>
                        <a href="" class="cta-btn-outline"> Member Login </a>
                    </li> -->
                        <li>
                            <a href="" class="cta-btn-1">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 data-aos="fade-right">
                        Healthcare made easy and affordable.
                    </h2>
                    <h6 data-aos="fade-right" data-aos-offset="0" data-aos-delay="300">
                        Akos puts healthcare in the palm of your hands.
                    </h6>
                    <a data-aos="fade-right" data-aos-offset="0" data-aos-delay="500" href="" class="cta-btn">
                        <img src="img/Icon%20feather-play.svg" class="mr-2" alt="" />
                        Watch the film
                    </a>
                </div>
            </div>
        </div>
    </div>

    <a href="javascript:void(0)" class="navarrow">
        <img src="img/down-arrow.svg" alt="" />
    </a>
</div>
<!--    TOP SECTION-->

<div id="wrapper">
    <!--SHORT DESC-->
    <div id="short-desc">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h3 class="section-title">
                        Modern medicine meets modern convinience
                    </h3>
                    <p class="pt-4">
                        No commutes. No waiting rooms. Akos uses <br class="d-none d-lg-block"> telemedicine so you can
                        consult with a healthcare <br class="d-none d-lg-block"> professional without the hassles of a
                        physical visit
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--SHORT DESC-->

    <!-- BOTTOM 4 -->
    <div id="bottom4" class="bottom4-frow">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="item item-blue">
                        <h3 class="section-title">Complete Virtual Care</h3>
                        <p class="pt-4">
                            Day or night, weekend or holidays, Akos is there to diagnose
                            and treat a wide range of health concerns - from ankle sprains
                            to anxiety. Finally, a medical app that takes care of you so
                            you can take care of everything else.
                        </p>
                        <a href="" class="btn-cta-outline-white mt-4">Know More</a>
                    </div>
                </div>
                <div class="col-lg-6 d-block d-lg-none mt-4">
                    <img src="img/doc-knee.jpg" style="width: 100%" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- BOTTOM 4 -->

    <!-- HEALTHCARE SOLUTIONS -->
    <div id="healthcare-solutions">
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <h3 class="section-title">
                        Comprehensive Healthcare Solutions
                    </h3>
                </div>
            </div>

            <div class="row sols-row pt-5 mt-4">
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="item" style="background-image: url('img/hc-solutions/virtual-hc.jpg');">
                        <h6>Virtual <br>Primary Care</h6>
                        <a href="/vpc"><span>Learn More</span> <img src="img/rt-arrow-white.svg" width="12" class="ml-2"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="item" style="background-image: url('img/hc-solutions/compensation-hc.jpg');">
                        <h6>Worker's <br>Compensation</h6>
                        <a href="/workerscompensation"><span>Learn More</span> <img src="img/rt-arrow-white.svg"
                                width="12" class="ml-2" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="item" style="background-image: url('img/hc-solutions/medclinics-hc.jpg');">
                        <h6>Akos Med <br>Clinics</h6>
                        <a href="/onsiteclinics"><span>Learn More</span> <img src="img/rt-arrow-white.svg" width="12"
                                class="ml-2" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="item" style="background-image: url('img/hc-solutions/360-hc.jpg');">
                        <h6>Akos 360 Connected <br>Care PLatform</h6>
                        <a href=""><span>Learn More</span> <img src="img/rt-arrow-white.svg" width="12" class="ml-2"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="item" style="background-image: url('img/hc-solutions/population-hc.jpg');">
                        <h6>Population Health <br>Management</h6>
                        <a href=""><span>Learn More</span> <img src="img/rt-arrow-white.svg" width="12" class="ml-2"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="item" style="background-image: url('img/hc-solutions/chronic-hc.jpg');">
                        <h6>Chronic Care<br>Management</h6>
                        <a href="/ccm"><span>Learn More</span> <img src="img/rt-arrow-white.svg" width="12" class="ml-2"
                                alt=""></a>
                    </div>
                </div>
            </div>
            <a href="" class="btn-cta-outline-white mt-4">See All Solutions</a>
        </div>
    </div>
    <!-- HEALTHCARE SOLUTIONS -->

    <!-- BOTTOM 4 -->
    <div id="bottom4" class="bottom4-frow bottom4-frow-emp">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="item item-blue">
                        <h3 class="section-title">Improve Corporate Health</h3>
                        <p class="pt-4">
                            Akos provides 24/7/365 access to care, with same day
                            appointment for urgent care. We also offer extended office
                            visits with dedicated primary care provider. The Akos care
                            model reduces the overall pocket spend and offers wellness and
                            reward programs to promote employee health and well being.
                        </p>
                        <a href="for-employers.html" class="btn-cta-outline-white mt-4">Employers</a>
                    </div>
                </div>
                <div class="col-lg-6 d-block d-lg-none mt-4">
                    <img src="img/doc-patient-employer.jpg" style="width: 100%" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- BOTTOM 4 -->

    <!--PARTNERS-->
    <div id="partners">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center section-title pb-5">Partners</h3>
                </div>
            </div>
        </div>
        <div class="prow">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center partners-img">
                        <ul class="partnersmarque">
                            <li>
                                <img src="img/6.png" alt="" />
                            </li>
                            <li>
                                <img src="img/1.png" alt="" />
                            </li>
                            <li>
                                <img src="img/2.png" alt="" />
                            </li>
                            <li>
                                <img src="img/3.png" alt="" />
                            </li>
                            <li>
                                <img src="img/4.png" alt="" />
                            </li>
                            <li>
                                <img src="img/5.png" alt="" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--PARTNERS-->

    <!--BLOG-->
    <div id="blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="section-title text-center pb-5">Latest From Akos</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="item">
                        <div class="top">
                            <img src="img/blog1.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="bottom">
                            <span class="info">
                                March 11, 2021 By <a href="">AkosMD</a>
                            </span>
                            <p>
                                Health Futures Taking Stock in You with Troy Smith. Dr.
                                Maria Shah, and Dr. Swaraj Singh
                            </p>
                            <a href="">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="item">
                        <div class="top">
                            <img src="img/blog2.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="bottom">
                            <span class="info">
                                March 11, 2021 By <a href="">AkosMD</a>
                            </span>
                            <p>
                                Health Futures Taking Stock in You with Troy Smith. Dr.
                                Maria Shah, and Dr. Swaraj Singh
                            </p>
                            <a href="">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="item">
                        <div class="top">
                            <img src="img/blog3.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="bottom">
                            <span class="info">
                                March 11, 2021 By <a href="">AkosMD</a>
                            </span>
                            <p>
                                Health Futures Taking Stock in You with Troy Smith. Dr.
                                Maria Shah, and Dr. Swaraj Singh
                            </p>
                            <a href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-5">
                <div class="col-12 text-center">
                    <a href="" class="tlink"><span>See All</span>
                        <img src="img/rt-arrow-blue.svg" class="ml-2" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <!--BLOG-->

    <!-- STAY CONNECTED FORM -->
    <div id="sc-form">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="fcontainer">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5>
                                    Stay Connected
                                </h5>
                                <p>
                                    Subscribe to get latest news & updates from Akos. You can
                                    unsubscribe anytime and we won't share your information
                                </p>
                            </div>
                            <div class="col-lg-5 offset-lg-1 pt-3">
                                <form action="">
                                    <label>
                                        Email
                                    </label>
                                    <div class="row">
                                        <div class="col-8">
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-4">
                                            <input type="submit" value="Submit" class="cta-btn">
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- STAY CONNECTED FORM -->

    <!--FEATURED-->
    <div id="featured">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="section-title text-center pb-5">Featured on</h3>
                </div>
            </div>
        </div>
        <div class="frow">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-lg-flex text-center justify-content-around align-items-center feat-img">
                        <img src="img/Fox-news-logo.png" class="img-fluid" alt="" />
                        <br class="d-block d-lg-none" />
                        <img src="img/phoenixlogo.png" class="img-fluid" alt="" />
                        <br class="d-block d-lg-none" />
                        <img src="img/azcentral.png" class="img-fluid" alt="" />
                        <br class="d-block d-lg-none" />
                        <img src="img/hbtlogo.png" class="img-fluid" alt="" />
                        <br class="d-block d-lg-none" />
                        <img src="img/medicaleconomics.png" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FEATURED-->
</div>
@endsection

@section('custom_js')

@endsection