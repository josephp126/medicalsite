@extends('layouts.app')

@section('mainContent')
<div id="main-top" class="for-employers">
    <div id="fullwidth-video">
        <div class="fullwidth-video-bg">
            <video id="bgvideop" poster="img/video-bg.jpg" autobuffer autoplay="autoplay" loop="loop" muted
                defaultMuted playsinline webkit-playsinline oncontextmenu="return false;" preload="auto"
                onplaying="this.controls=false">
                <source src="{{asset('img/prac.mp4')}}" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
            </video>
        </div>
    </div>
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
                        <li class="menu-item active">
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
                        <li class="menu-item">
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
                <div class="col-lg-6">
                    <h2 data-aos="fade-right">
                        Always on call, <br>
                        so you never fall behind
                    </h2>
                    <h6 data-aos="fade-right" data-aos-offset="0" data-aos-delay="300">
                        Improve the health of your employees with Akos
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
                        Akos offers medical care for <br class="d-none d-lg-block">
                        modern professionals
                    </h3>
                    <p class="pt-4">
                        With Akos, you can provide your employees with 24/7 access to medical care for both
                        workplace injury and personal medical needs in one seamless telemedicine app.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--SHORT DESC-->

    <!-- FEATBOX -->
    <div id="featbox" class="pt-0">
        <div class="container">
            <div class="row featrow">
                <div class="col-lg-4 mb-5 pl-4 pr-4">
                    <div class="item">
                        <img src="img/for-employers/more-convenience.svg" class="img-fluid mb-3" alt="">
                        <h5>
                            More Convenience
                        </h5>
                        <p>
                            Akos offers customized implementation
                            so you can streamline the way your business
                            handles work-related injuries and illness.
                            We can even go live in as little as 30 days to
                            make your transition easier.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 mb-5 pl-4 pr-4">
                    <div class="item">
                        <img src="img/for-employers/less-cost.html.svg" class="img-fluid mb-3" alt="">
                        <h5>
                            Less Cost
                        </h5>
                        <p>
                            With Akos, you can minimize the cost of ER
                            and urgent care visits. And thanks to our 
                            proactive approach to healthcare, 
                            we can also reduce claims and risks for 
                            workplace injury, which in turn helps you lower 
                            your E-MOD ratings and insurance costs
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 mb-5 pl-4 pr-4">
                    <div class="item">
                        <img src="img/for-employers/better-care.html.svg" class="img-fluid mb-3" alt="">
                        <h5>
                            Better care
                        </h5>
                        <p>
                            Akos improves more than employee productivity,
                            it helps boost morale. By giving your staff 
                            the opportunity to diagnose and treat interfering 
                            medical conditions through our telemedicine 
                            app, you can put the well-being of your 
                            employees first without compromising
                            the health of your business.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- FEATBOX -->

    <!-- BOTTOM 4 -->
    <div id="bottom4" class="bottom4-frow bottom4-frow-big">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="item item-blue">
                        <h3 class="section-title">
                            See big picture improvements
                        </h3>
                        <p class="pt-4">
                            Akos provides 24/7/365 access to care, with same day appointment
                            for urgent care. We also offer extended office visits with dedicated
                            primary care provider. The Akos care model reduces the overall pocket
                            spend and offers wellness and reward programs to promote employee
                            health and well being.
                        </p>
                        <a href="" class="btn-cta-outline-white mt-5">Connect with Us</a>
                    </div>
                </div>
                <div class="col-lg-6 d-block d-lg-none mt-4">
                    <img src="img/for-employers/bigpicture-improvements.jpg" style="width: 100%;" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- BOTTOM 4 -->


    <!-- BOTTOM 4 -->
    <div id="bottom4" class="bottom4-srow bottom4-srowseamless">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-block d-lg-none mb-4">
                    <img src="img/for-employers/morewith-seamless-app.jpg" style="width: 100%;" alt="">
                </div>

                <div class="col-lg-5 offset-lg-7">
                    <div class="item item-blue">
                        <h3 class="section-title">
                            Get more with one seamless app
                        </h3>
                        <p class="pt-4">
                            Day or night, weekend or holidays, Akos is there to diagnose
                            and treat a wide range of health concerns - from ankle
                            sprains to anxiety. Finally, a medical app that takes care of
                            you so you can take care of everything else.
                        </p>
                        <a href="" class="cta-btn mt-5">Connect with Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BOTTOM 4 -->


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