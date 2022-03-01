@extends('layouts.app')

@section('mainContent')
<div id="main-top" class="remotepatient">
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
                                    <li>
                                        <a href="/akosadvisor"> Akos Advisor</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- <li class="menu-item">
                            <a href="/akosadvisor"> Akos Advisor</a>
                        </li> -->
                        <li class="menu-item">
                            <a href="/urgentcare"> Urgent Care </a>
                        </li>
                        <li class="menu-item active">
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
                                        <a href="/aco">ACO/Value Based entities</a>
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
                <div class="col-lg-6">
                    <!-- <h2 data-aos="fade-right">
                        Remote Patient Monitoring.
                    </h2> -->
                    <!-- <h6 data-aos="fade-right" data-aos-offset="0" data-aos-delay="300">
                        Akos puts healthcare in the palm of your hands.
                    </h6> -->
                    <!-- <a data-aos="fade-right" data-aos-offset="0" data-aos-delay="500" href="" class="cta-btn">
                        <img src="img/Icon%20feather-play.svg" class="mr-2" alt="" />
                        Watch the film
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

<div id="wrapper" class="remote-wrapper">
    <div class="top-text">
        <p>
            Telehealth System of Chronic Disease <br>
            Management + Remote Patient Monitoring
        </p>
    </div>
    <div class="benefits">
        <h2>
            Benefits of using the<br>
            24/7 Telehealth System
        </h2>
        <div class="row container">
            <div class="col-md-6">
                <div style="display:flex">
                    <span class="plus-symbol">+</span>&nbsp;
                    <p>
                        Patient measures using Bluetooth</br>
                        Cellular data transmission device, </br>
                        readings are immediately organized</br> 
                        in the patient's account.
                    </p>
                </div>
                <div style="display:flex">
                    <span class="plus-symbol">+</span>&nbsp;
                    <p>
                        Reduce health care costs by identifying<br>
                        key problems early and avoid costly<br>
                        ER visits, hospital stays and long-term<br>
                        complications.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div style="display:flex">
                    <span class="plus-symbol">+</span>&nbsp;
                    <p>
                        Print out reports, view pie and trend<br>
                        graphs for compliance, add data and<br>
                        monitor multiple parameters such as<br>
                        blood glucose, β-ketone, pressure,<br>
                        oxygen, weight.
                    </p>
                </div>
                <div style="display:flex">
                    <span class="plus-symbol">+</span>&nbsp;
                    <p>
                        Improve your patient's outcomes by<br>
                        daily, weekly and monthly monitoring.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="cloud">
        <p>
            Our Cloud provides tools that empower<br>
            healthcare professionals and caregivers to<br>
            remotely monitor patients at home.
        </p>
    </div>
    <div class="row woman-doctor">
        <div class="col-sm-6">
            <img src="{{asset('img/rpm/woman-doctor.png')}}" style="width: 100%" />
        </div>
        <div class="col-sm-6">
            <h2>Core features include</h2>
            <div>
                <h3>User Interface Functionality</h3>
                <p>
                    Intuitive, easy to navigate and customize<br>
                    dashboard for caregivers and patients
                </p>
            </div>
            <div>
                <h3>Accessible</h3>
                <p>
                    Real-time data is easily accessed from any web-<br>
                    browser including moblie devices.
                </p>
            </div>
            <div>
                <h3>Various Measurements</h3>
                <p>
                    Blood glucose, β-ketone, blood pressure &<br>
                    pulse, weight, SpO2 and temperature.
                </p>
            </div>
            <div>
                <h3>Flexible Reporting</h3>
                <p>
                    Pie charts, trend graphs, and scatter plots.<br>
                </p>
            </div>
            <div>
                <h3>Key Alerts</h3>
                <p>
                    Alerts are auto-generated when your patient's<br>
                    reading goes out of range.
                </p>
            </div>
            <div>
                <h3>Multi-Level Access</h3>
                <p>
                    Group manager, caregiver, and end-user
                </p>
            </div>
        </div>
    </div>
    <div class="container easy-monitor">
        <div class="row">
            <div class="col-sm-6">
                <h2>
                    Easy-to-use 24/7 access<br>
                    to patient's data via HIPAA<br>
                    compliant web-based software
                </h2>
            </div>
            <div class="col-sm-6"></div>
        </div>
        <div>
            <img src="{{asset('img/rpm/easy.png')}}" style="width: 100%" />
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h2>
                    Monitor your high risk<br>
                    patients in real time.
                </h2>
            </div>
            <div class="col-sm-6"></div>
        </div>
        <div>
            <img src="{{asset('img/rpm/monitor.png')}}" style="width: 100%" />
        </div>
    </div>
    <div class="simple-akos">
        <p>
            Monitoring and managing your patient's<br>
            chronic disease is simple with Akos
        </p>
        <img src="{{asset('img/rpm/simple-akos.png')}}" style="width: 100%" />
    </div>
    <!-- <div class="about-akos">
        <div class="row">
            <div class="col-sm-7 about">
                <div>
                    <h2>About Akos</h2>
                    <p>
                        Akos. is a fully-integrated healthcare technology<br>
                        company, edicated to imporving patient care for<br>
                        chronic conditions including diabetes mellitus, <br>
                        hypertension, CHF and COPD. With offices and <br>
                        customers around the world, Akos researches,<br>
                        designs and manufactures Akos branded<br>
                        innovative, easy-to-use, highly accurate devices,<br>
                        mobile applications and software serving both<br>
                        patients and healthcare professionals.
                    </p>
                    <p>
                        Akos seeks to embody the spirit of progress in its<br>
                        efforts at developing and improving medical device<br>
                        technology, data-based management software and<br>
                        high quality products with the aim of reducing costs
                    </p>
                </div>
            </div>
            <div class="col-sm-5 request">
                <div class="">
                    <h3>
                        Request a <br>
                        Demonstration<br>
                        Today.
                    </h3>
                    <p>1.844.900.AKOS</p>
                </div>
            </div>
        </div>
    </div> -->
</div>


@endsection

@section('custom_js')

@endsection