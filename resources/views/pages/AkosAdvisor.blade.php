@extends('layouts.app')

@section('mainContent')
<div id="main-top" class="advisor">
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
                    <a href="">
                        <img src="img/logo.svg" class="img-fluid logo" alt="" />
                    </a>
                </div>
                <div class="col-6 col-lg-10 text-right">
                    <a
                            href="javascript:void(0)"
                            class="menu-toggle-btn pt-2 d-inline-block d-lg-none"
                    >
                        <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="47"
                                height="18"
                                viewBox="0 0 47 18"
                        >
                            <g id="menu-toggle" transform="translate(-46 -19)">
                                <rect
                                        id="Rectangle_2"
                                        data-name="Rectangle 2"
                                        width="47"
                                        height="3"
                                        transform="translate(46 19)"
                                        fill="#fff"
                                ></rect>
                                <rect
                                        id="Rectangle_3"
                                        data-name="Rectangle 3"
                                        width="32"
                                        height="3"
                                        transform="translate(61 34)"
                                        fill="#fff"
                                ></rect>
                            </g>
                        </svg>
                    </a>
                    <ul class="main-menu text-left text-lg-right">
                        <li class="pb-5 text-right d-block d-lg-none pt-4 pr-4">
                            <a
                                    href="javascript:void(0)"
                                    class="pt-1 menu-close-btn close-toggle"
                            >
                                <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="30"
                                        viewBox="0 0 46.531 45.619"
                                >
                                    <g
                                            id="menu-close-btn"
                                            transform="translate(-51.469 -2.676)"
                                    >
                                        <rect
                                                id="Rectangle_2"
                                                data-name="Rectangle 2"
                                                width="60.644"
                                                height="3.871"
                                                transform="translate(52.381 45.557) rotate(-45)"
                                                fill="#fff"
                                        ></rect>
                                        <rect
                                                id="Rectangle_9"
                                                data-name="Rectangle 9"
                                                width="60.644"
                                                height="3.871"
                                                transform="translate(54.206 2.676) rotate(45)"
                                                fill="#fff"
                                        ></rect>
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/"> Home </a>
                        </li>
                        <li class="menu-item active">
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
                                    <li>
                                        <a href="/akosadvisor"> Akos Advisor</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- <li class="menu-item">
                            <a href="/akosadvisor"> Akos Advisor</a>
                        </li>                             -->
                        <li class="menu-item">
                            <a href="/urgentcare"> Urgent Care </a>
                        </li>
                        <li class="menu-item">
                            <a href="/providers"> Providers </a>
                            <div class="submenu-cont">
                                <ul class="submenu">
                                    <li>
                                        <a href="/primaryproviders">Primary Providers</a>
                                    </li>
                                    <li>
                                        <a href="">Specialists</a>
                                    </li>
                                    <li>
                                        <a href="aco">ACO/Value Based entities</a>
                                    </li>
                                    <li>
                                        <a href="/ccm">Chronic Case Management</a>
                                    </li>
                                    <li>
                                        <a href="/remotepatient">Remote Patient monitoring</a>
                                    </li>
                                    <li>
                                        <a href="">Answering service/Nurse triage</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- <li class="menu-item">
                            <a href="/remotepatient"> Remote Patient monitoring </a>
                        </li> -->
                        <li class="menu-item">
                            <a href="/whowe"> About Us </a>
                        </li>
                        <li class="menu-item">
                            <a href="/news"> News </a>
                        </li>
                    <!-- <li>
                            <a href="" class="cta-btn-outline"> Member Login </a>
                        </li> -->
                        <li>
                            <a href="https:///Member.AkosMD.com" class="cta-btn-1">
                                Member Login
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
                <div class="col-lg-8">
                    <h2 data-aos="fade-right">
                        The digital health <br>
                        revolution begins here
                    </h2>   
                    <!-- <p data-aos="fade-right">Member Benefits Summary</p>
                    <h6 data-aos="fade-right" data-aos-offset="0" data-aos-delay="300">
                        Your employer has expanded their healthcare <br>
                        benefits package to include Akos as a direct <br>
                        primary care partner. As a member of the <br>
                        Akos health plan, you have unlimited access <br>
                        to many of the services Akos has to offer. <br>
                        The benefits listed are available to you with <br>
                        no copay and $0 deductible.
                    </h6> -->
                    <!-- <a data-aos="fade-right" data-aos-offset="0" data-aos-delay="500" href="" class="cta-btn">
                        Connect with Us
                    </a> -->
                </div>
            </div>
        </div>
    </div>

    <a href="javascript:void(0)" class="navarrow">
        <img src="img/down-arrow.svg" alt="" />
    </a>
</div>
<!--    TOP SECTION-->

<div id="wrapper" class="advisor-wrapper">
    <div class="advisor-submit container">
        <div class="row">
            <div class="col-md-6">
                <h2>Get Started with Akos</h2>
                <form action="">
                    <label>YOUR NAME</label>
                    <div class="form-name">
                        <input type="text" name="name" placeholder="Please write your name" class="form-control">
                    </div>
                    <label>EMAIL</label>
                    <div class="form-name">
                        <input type="email" name="email" placeholder="Please write your email" class="form-control">
                    </div><br>
                    <input type="submit" value="Submit" class="cta-btn">
                </form>
            </div>
            <div class="col-md-6 form-person">
                <img src="{{asset('img/advisor/form-person.png')}}" />
            </div>
        </div>
    </div>
    <div class="webinar" align="center">
        <h2>Sign Up For A Webinar</h2>
        <p>
            Learn more about our value-based primary care platform and how Akos is<br>
            changing the healthcare industry
        </p>
        <a class="cta-btn aos-init aos-animate reserve">Reserve Spot</a>
    </div>
    <div id="integrate">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="section-title text-center">
                                Integrated Virtual Care System
                            </h3>
                        </div>
                    </div>
                    <div class="row pt-5 mt-3">

                        <div class="col-lg-4">
                            <div class="item" data-aos="fade-right">
                                <img src="img/advisor/integrate-1.jpg" class="img-fluid" alt="">
                                <div class="desc">
                                    <h4>Injury Authorization</h4>
                                    <h6>24x7 cares</h6>
                                    <p>
                                        Patients consult with a provider whenever,
                                        wherever, within minutes
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="item" data-aos="fade-right" data-aos-delay="300">
                                <img src="img/advisor/integrate-2.png" class="img-fluid" alt="">
                                <div class="desc">
                                    <h4>Medical Kiosk</h4>
                                    <h6>On Site Care</h6>
                                    <p>
                                        Oou optional, low-cost onsite kiosk promptly
                                        connects patients to providers with a small 
                                        yet affordable footprint
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="item" data-aos="fade-right">
                                <img src="img/advisor/advisor-back.png" class="img-fluid" alt="">
                                <div class="desc">
                                    <h4>Connected Care Platform</h4>
                                    <h6>Care Navigation</h6>
                                    <p>
                                        Our comprehensive care management system
                                        oversees the entire patient journey and 
                                        provides real-time data to evaluate the 
                                        risks and needs of a patient population
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="turnkey container">
        <div class="row">
            <div class="col-lg-6">
                <div class="item item-blue">
                    <h3 class="section-title">
                        Turnkey Implementation
                    </h3>
                    <p class="pt-4">
                        <span class="dot">.</span>&nbsp; Online appointment setting and contracting
                    </p>
                    <p class="pt-4">
                        <span class="dot">.</span>&nbsp; Intuitive and streamlined portal for client enrollment
                    </p>
                    <p class="pt-4">
                        <span class="dot">.</span>&nbsp; Integration with benefits administration systems
                    </p>
                    <p class="pt-4">
                        <span class="dot">.</span>&nbsp; Eligible and non-eligible employee participation
                    </p>
                    <p class="pt-4">
                        <span class="dot">.</span>&nbsp; Tiered PEPM pricing model
                    </p>
                </div>
            </div>
            <div class="col-lg-6 d-block mt-4 turnkey-img">
                <img src="{{ asset('img/advisor/turnkey.png') }}" alt="" />
            </div>
        </div>
    </div>
    <div class="howhealth">
        <div class="row">
            <div class="col-sm-6 col-sm-push-6">
                <div class="item item-blue">
                    <h3 class="section-title">
                        It's how healthcare should be
                    </h3>
                    <p class="pt-4">
                        To find out all about how Akos is improving healthcare<br>
                        for employers, patients, providers, and employees, click below<br>
                        to visit our full site
                    </p>
                    <a class="cta-btn aos-init aos-animate visit" href="https://akosmd.com">Visit AkosMD.com</a>
                </div>
            </div>
            <div class="col-sm-6 col-sm-pull-6 d-block mt-4">
                <img src="img/med-clinic-1/exceptional-care.jpg" style="width: 100%" alt="" />
            </div>
        </div>
    </div>
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
    <!-- <div class="download">
        <div class="row">
            <div class="col-sm-6" align="center">
                <img src="{{asset('img/advisor/download-phone.png')}}" />
            </div>
            <div class="col-sm-6 download-akos">
                <div>
                    <h2>Download the Akos app</h2>
                    <h6>Virtual Care in Minutes</h6>
                    <p>Get the link to download the app</p>
                    <div class="phone">
                        <span>+1</span><input type = "tel" placeholder="Enter Phone Number" class="form-control" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" />
                        <input type="submit" class="" value="Send SMS" />
                    </div>
                    <div class="google-link">
                        <a class="app-store"></a>
                        <a class="google-play"></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>
@endsection

@section('custom_js')

@endsection