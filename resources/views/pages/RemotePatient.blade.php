@extends('layouts.app')

@section('mainContent')
<div id="main-top" class="chroniccare">
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
                            <li class="menu-item">
                                <a href="/employers"> Employers </a>
                                <div class="submenu-cont">
                                    <ul class="submenu">
                                        <li>
                                            <a href="">VPC</a>
                                        </li>
                                        <li>
                                            <a href="">Worker's Compensation</a>
                                        </li>
                                        <li>
                                            <a href="">Onsite Clinics</a>
                                        </li>
                                        <li>
                                            <a href="">Telemedicine</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item">
                                <a href="/onsiteclinics"> Onsite Clinics </a>
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
                                            <a href="">ACI/Value Based entities</a>
                                        </li>
                                        <li>
                                            <a href="">CCM</a>
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
                            <li class="menu-item active">
                                <a href="/remotepatient"> Remote Patient monitoring </a>
                            </li>
                            <li class="menu-item">
                                <a href="/whowe"> Who we are </a>
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
                    <div class="col-lg-8">
                        <h2 data-aos="fade-right">
                            Welcome to Chronic <br>
                            Care Management
                        </h2>
                        <h6 data-aos="fade-right" data-aos-offset="0" data-aos-delay="300">
                            A program centered on you
                        </h6>
                        <a data-aos="fade-right" data-aos-offset="0" data-aos-delay="500" href="" class="cta-btn">
                            Connect with Us
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
        <div id="short-desc" class="mb-0 border-bottom-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <h3 class="section-title">
                            Akos Chronic Care Management
                        </h3>

                        <h6>
                            A program centered on you
                        </h6>
                        <p class="pt-3">
                            The Akos Virtual Care Ecosystem is supported by our comprehensive care management program.
                            Akos Chronic Care Management is a clinically validated, provider led care management
                            program aimed at improving health and reducing healthcare costs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--SHORT DESC-->



        <!-- BOTTOM 4 -->
        <div id="bottom4" class="bottom4-frow bottom4-frow-solid-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 d-flex align-items-center">
                        <div class="item item-blue">
                            <h3 class="section-title">
                                Understanding<br class="d-none d-lg-block">
                                Chronic Conditions
                            </h3>
                            <p class="pt-4">
                                Chronic conditions are ongoing, incurable illnesses that
                                affect more than 117 million people in the United States.
                                The good news is, these conditions and diseases are often
                                preventable and can be controlled with early detection,
                                an improvement in diet, increased exercise, and treatment
                                therapy. All of which you will receive help with achieving
                                while in the Akos Care Management program.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-2 mt-4 text-center b-box">


                        <div class="sectl">
                            <div class="row d-flex align-items-center">
                                <div class="col-2">
                                    <img src="img/chroniccare/care-navigator.svg" class="img-fluid" alt="">
                                </div>
                                <div class="col-9">
                                    <h6 class="pt-3">
                                        Provides you with a Care Navigator who <br class="d-none d-lg-block">
                                        helps you manage your health
                                    </h6>
                                </div>
                            </div>
                        </div>


                        <div class="sectl">
                            <div class="row d-flex align-items-center">
                                <div class="col-2 pt-2">
                                    <img src="img/chroniccare/health-data.svg" class="img-fluid" alt="">
                                </div>
                                <div class="col-9">
                                    <h6 class="pt-3">
                                        Consolidates your health data into<br class="d-none d-lg-block">
                                        one record that can be shared
                                    </h6>
                                </div>
                            </div>
                        </div>


                        <div class="sectl">
                            <div class="row d-flex align-items-center">
                                <div class="col-2 pt-2">
                                    <img src="img/chroniccare/costs.svg" class="img-fluid" alt="">
                                </div>
                                <div class="col-9">
                                    <h6 class="pt-3">
                                        Lowers your healthcare costs by <br class="d-none d-lg-block">
eliminating redundancy
                                    </h6>
                                </div>
                            </div>
                        </div>


                        <div class="sectl">
                            <div class="row d-flex align-items-center">
                                <div class="col-2 pt-2">
                                    <img src="img/chroniccare/communication.svg" class="img-fluid" alt="">
                                </div>
                                <div class="col-9">
                                    <h6 class="pt-3">
                                        Keeps communication open between <br class="d-none d-lg-block">
you and all your doctors
                                    </h6>
                                </div>
                            </div>
                        </div>


                        <div class="sectl">
                            <div class="row d-flex align-items-center">
                                <div class="col-2 pt-2">
                                    <img src="img/chroniccare/low-cost.svg" class="img-fluid" alt="">
                                </div>
                                <div class="col-9">
                                    <h6 class="pt-3">
                                        Helps you find low-cost medications <br class="d-none d-lg-block">
if options are available
                                    </h6>
                                </div>
                            </div>
                        </div>


                        <div class="sectl mb-5">
                            <div class="row d-flex align-items-center">
                                <div class="col-2 pt-2">
                                    <img src="img/chroniccare/setgoals.svg" class="img-fluid" alt="">
                                </div>
                                <div class="col-9">
                                    <h6 class="pt-3">
                                        Enables you to set health goals and <br class="d-none d-lg-block">
helps you achieve them
                                    </h6>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
        <!-- BOTTOM 4 -->


        <!-- BOTTOM 4 -->
        <div id="bottom4" class="bottom4-srow bottom4-chronic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-block d-lg-none mb-4">
                        <img src="img/for-employers/morewith-seamless-app.jpg" style="width: 100%;" alt="">
                    </div>

                    <div class="col-lg-5 offset-lg-7">
                        <div class="item item-blue">
                            <h3 class="section-title">
                                Common workplace <br class="d-none d-lg-block">
                                injuries treated
                            </h3>

                            <ul class="pt-4 greenul splitul">
                                <li>
                                    Asthma
                                </li>
                                <li>
                                    Arthritis
                                </li>
                                <li>
                                    Allergies
                                </li>
                                <li>
                                    Cancer
                                </li>
                                <li>
                                    COPD
                                </li>
                                <li>
                                    Depression
                                </li>
                                <li>
                                    Diabetes
                                </li>   
                                <li>
                                    Heart Failure
                                </li>
                                <li>
                                    High Blood Pressure
                                </li>
                                <li>
                                    Stroke
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BOTTOM 4 -->


        

        <!-- SIGN UP -->
        <div class="signup-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h6>
                            Sign up today to get started
                        </h6>
                        <h3>
                            It's time to change the way you do healthcare
                        </h3>
                        <a href="" class="cta-btn">
                            Connect with Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- SIGN UP -->

        <!-- HEALTHCARE SOLUTIONS -->
      <div id="healthcare-solutions" class="pt-5 mt-5">
        <div class="container">
          <div class="row">
            <div class="col-12 mb-5">
              <h3 class="section-title text-center">
                Other Solutions
              </h3>
            </div>
          </div>

          <div class="row sols-row">
            <div class="col-md-6 col-lg-4 mb-5">
              <div class="item" style="background-image: url('img/hc-solutions/virtual-hc.jpg');">
                <h6>Virtual <br>Primary Care</h3>
                <a href=""><span>Learn More</span> <img src="img/rt-arrow-white.svg" width="12" class="ml-2" alt=""></a>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
              <div class="item" style="background-image: url('img/hc-solutions/compensation-hc.jpg');">
                <h6>Worker's <br>Compensation</h3>
                <a href=""><span>Learn More</span> <img src="img/rt-arrow-white.svg" width="12" class="ml-2" alt=""></a>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
              <div class="item" style="background-image: url('img/hc-solutions/medclinics-hc.jpg');">
                <h6>Akos Med <br>Clinics</h3>
                <a href=""><span>Learn More</span> <img src="img/rt-arrow-white.svg" width="12" class="ml-2" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- HEALTHCARE SOLUTIONS -->


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

    </div>
@endsection

@section('custom_js')

@endsection