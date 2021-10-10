@extends('layouts.app')

@section('mainContent')
<div id="main-top" class="workers-compensation">
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
                                        <a href="remotepatient">RPM</a>
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
                        A healthier way to  <br>
                        do business
                    </h2>
                    <h6 data-aos="fade-right" data-aos-offset="0" data-aos-delay="300">
                        Get the Akos advantage and transform the way your employees get care
                    </h6>
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

<div id="wrapper">
    <!--SHORT DESC-->
    <div id="short-desc" class="mb-0 border-bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h3 class="section-title">
                        Workers compensation that works <br class="d-none d-lg-block">
For you, for them, for everyone
                    </h3>
                    <p class="pt-4">
                        70% of worker's compensation cases can be resolved without a physical visit to the ER or Urgent Care.
Akos Worker's Compensation Program reduces medical costs, avoids unnecessary ER and urgent visits, 
improves employee productivity, and keeps employees on site for diagnosis and treatment. 
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
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="item item-blue">
                        <h3 class="section-title">
                            Immediate care, <br class="d-none d-lg-block">
long term results
                        </h3>
                        <p class="pt-4">
                            Businesses benefit from Akos
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 text-center b-box">
                    
                    <div class="sect">
                        <img src="img/workers-compensation/device.svg" alt="">
                        <h6 class="pt-3">
                            24/7/365 access from a <br class="d-none d-lg-block">
smartphone or tablet
                        </h6>
                    </div>

                    
                    <div class="sect">
                        <img src="img/workers-compensation/virtaully-consult.svg" alt="">
                        <h6 class="pt-3">
                            Virtually consult with board-certified <br class="d-none d-lg-block">
healthcare providers
                        </h6>
                    </div>

                    
                    <div class="sect">
                        <img src="img/workers-compensation/piggie-bank.svg" alt="">
                        <h6 class="pt-3">
                            Reduced workers’ compensation <br class="d-none d-lg-block">
claims and medical costs
                        </h6>
                    </div>

                    
                    <div class="sect">
                        <img src="img/workers-compensation/urgent-care.svg" alt="">
                        <h6 class="pt-3">
                            Avoid unnecessary ER and <br class="d-none d-lg-block">
urgent care visits
                        </h6>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- BOTTOM 4 -->


    <!-- BOTTOM 4 -->
    <div id="bottom4" class="bottom4-srow bottom4-commonworkplace">
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
                        
                        <ul class="pt-4 greenul">
                            <li>
                                Abrasions
                            </li>
                            <li>
                                Back Pain
                            </li>
                            <li>
                                Burns & Rashes
                            </li>
                            <li>
                                Carpal Tunnel
                            </li>
                            <li>
                                Chemical Exposure
                            </li>
                            <li>
                                Contusions
                            </li>
                            <li>
                                Sprains & Strains
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BOTTOM 4 -->


    <!--IPCE-->
    <div id="ipce" class="ipceworkers">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="row">
                        <div class="col-12">
                            <h3 class="section-title text-center">
                                Employee Workflow
                            </h3>
                        </div>
                    </div>

                    <div class="row pt-5 mt-3">

                        <div class="col-lg-4">
                            <div class="item" data-aos="fade-right">
                                <img src="img/workers-compensation/injury-authorization.jpg" class="img-fluid" alt="">
                                <div class="desc">
                                    <h4>
                                        Injury Authorization
                                    </h4>
                                    <p>
                                        The injured employee reports the injury to 
                                        their supervisor, who in turn advises the 
                                        employee to call Akos, their workers’ 
                                        compensation healthcare provider.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="item" data-aos="fade-right" data-aos-delay="300">
                                <img src="img/workers-compensation/account-registration.jpg" class="img-fluid" alt="">
                                <div class="desc">
                                    <h4>
                                        Account Registration
                                    </h4>
                                    <p>
                                        The employee creates an account profile
                                        that is connected to their employer database.
                                        Here they can enter a brief medical history
                                        and pre-existing medical conditions.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="item" data-aos="fade-right">
                                <img src="img/workers-compensation/nurse-triage.jpg" class="img-fluid" alt="">
                                <div class="desc">
                                    <h4>
                                        Nurse Triage
                                    </h4>
                                    <p>
                                        During triage, the employee connects with a 
                                        nurse who is specialized in workers' 
                                        compensation cases and works under the 
                                        supervision of a physician. The nurse then 
                                        triages the employee and determines best care
                                        path.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 offset-lg-2">
                            <div class="item" data-aos="fade-right" data-aos-delay="300">
                                <img src="img/workers-compensation/physician-consult.jpg" class="img-fluid" alt="">
                                <div class="desc">
                                    <h4>
                                        Physician Consult
                                    </h4>
                                    <p>
                                        Should the injury require care beyond first-aid,
                                        the nurse will transfer the call to a board-certified
                                        provider experienced in occupational medicine
                                        who will diagnose the injury and provide a 
                                        treatment plan.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="item" data-aos="fade-right" data-aos-delay="300">
                                <img src="img/workers-compensation/redirection.jpg" class="img-fluid" alt="">
                                <div class="desc">
                                    <h4>
                                        Redirection
                                    </h4>
                                    <p>
                                        If needed, the employee may be referred for
                                        an in-person visit with an Akos Prefrred 
                                        Provider Network physician, a specialist, PT/OT
                                        services or ancillary service provider.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--IPCE-->


    <!-- SIGN UP -->
    <div class="signup-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h6>
                        Sign up today to get started
                    </h6>
                    <h3>
                        Akos takes business further
                    </h3>
                    <a href="" class="cta-btn">
                        Connect with Us
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- SIGN UP -->


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