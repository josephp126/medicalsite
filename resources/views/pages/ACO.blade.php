@extends('layouts.app')

@section('mainContent')
<div id="main-top" class="aco">
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
                        <li class="menu-item active">
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
                                        <a href="/aco">ACO/Value Based entities</a>
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
                <div class="col-lg-8">
                    <h2 data-aos="fade-right">
                        Value based entities <br>
                    </h2>   
                    <!-- <p data-aos="fade-right">Member Benefits Summary</p> -->
                    <!-- <h6 data-aos="fade-right" data-aos-offset="0" data-aos-delay="300">
                        Your employer has expanded their healthcare <br>
                        benefits package to include Akos as a direct <br>
                        primary care partner. As a member of the <br>
                        Akos health plan, you have unlimited access <br>
                        to many of the services Akos has to offer. <br>
                        The benefits listed are available to you with <br>
                        no copay and $0 deductible.
                    </h6> -->
                </div>
            </div>
        </div>
    </div>

    <a href="javascript:void(0)" class="navarrow">
        <img src="img/down-arrow.svg" alt="" />
    </a>
</div>
<!--    TOP SECTION-->

<div id="wrapper" class="aco-wrapper">
    <!-- BOTTOM 4 -->
    <div id="aco_explanation" class="bottom4-frow bottom4-frow-newhome">
        <div class="all-inclusive">
            <div class="row section-content">
                <div class="col-sm-6">
                    <p class="sub-title">
                        Integrated Connected Care Platform
                    </p>
                </div>
                <div class="col-sm-6">
                    <img src="{{asset('img/aco/care-platform.png')}}" />
                </div>
            </div>
            <div class="row section-content" style="margin-top: 20px">
                <div class="col-sm-6 col-sm-push-6">
                    <div class="item item-blue">
                        <h3 class="section-title">
                            Comprehensive Connected <br class="d-none d-lg-block">
                            Care Portal
                        </h3>
                        
                        <ul class="pt-4 greenul">
                            <li>
                                Multi team comunications
                            </li>
                            <li>
                                HRA based risk score
                            </li>
                            <li>
                                Individualized care plans
                            </li>
                            <li>
                                Bidirectional EMR connections
                            </li>
                            <li>
                                Inbuilt HIPPA secure chat and messaging
                            </li>
                            <li>
                                Inbuilt Telmed
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-sm-pull-6">
                    <img src="{{asset('img/aco/comprehensive.png')}}" style="width: 100%" />
                </div>
            </div>
            <div class="row section-content">
                <div class="col-sm-6">
                    <div class="item item-blue">
                        <h3 class="section-title">
                            Extensive Reporting <br class="d-none d-lg-block">
                            Suite
                        </h3>
                        
                        <ul class="pt-4 greenul">
                            <li>
                                Health Care Cost
                            </li>
                            <li>
                                Raf Scoring
                            </li>
                            <li>
                                Provider Quality and HEDIS
                            </li>
                            <li>
                                Utilization Reports
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="{{asset('img/aco/graph.png')}}" style="width:100%" />
                </div>
            </div>
        </div>
    </div>

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