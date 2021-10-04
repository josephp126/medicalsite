@extends('layouts.sub_app')

@section('mainContent')
<div id="main-top" class="medclinic">
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
                                        <a href="/vpc">VPC</a>
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
                        <li class="menu-item active">
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
                        Care On Demand And <br>
                        On Location
                    </h2>
                    <h6 data-aos="fade-right" data-aos-offset="0" data-aos-delay="300">
                        Akos Med Clinic has you covered
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
    <!-- BOTTOM 4 -->
    <div id="bottom4" class="bottom4-frow bottom4-frow-newhome">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="item item-blue">
                        <h3 class="section-title">Healthcare has <br class="d-none d-lg-block">
                            a new home
                        </h3>
                        <p class="pt-4">
                            At Akos Med Clinic, we recognize that the satisfaction
                            and care of our patients takes precedence above all else.
                            Our goal is to create an environment and experience that
                            exceeds expectations from the moment you arrive.
                            We treat every patient with speed, compassion and
                            medical expertise because advanced medical care means
                            catering to you.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 d-block d-lg-none mt-4">
                    <img src="img/medclinic/newhome.jpg" style="width: 100%" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- BOTTOM 4 -->

    <!-- FEATBOX -->
    <div id="featbox">
        <div class="container">
            <div class="row featrow">
                <div class="col-lg-4 mb-5 pl-4 pr-4">
                    <div class="item">
                        <img src="img/medclinic/registration.svg" class="img-fluid mb-3" alt="">
                        <h5>

                            Patient Registration
                        </h5>
                        <p>
                            Patient uploads picture of ID,
                            insurance and prescriptions to
                            establish patient profile
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 mb-5 pl-4 pr-4">
                    <div class="item">
                        <img src="img/medclinic/interview.svg" class="img-fluid mb-3" alt="">
                        <h5>
                            Patient Interview
                        </h5>
                        <p>
                            Patient enters chief compliant with
                            AI predictive engine, which then
                            supplies additional questions to
                            collect a clinical differential diagnosis
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 mb-5 pl-4 pr-4">
                    <div class="item">
                        <img src="img/medclinic/measurements.svg" class="img-fluid mb-3" alt="">
                        <h5>
                            Vital & Lab Measurements
                        </h5>
                        <p>
                            Using Artificial Intelligence ( AI ) and
                            Augmented Reality ( AR ), patient is
                            guided to collect medical vitals-temperature,
                            blood pressure, blood oxygen, weight, ear,
                            nose and throat image as well as chest,
                            lung and abdomen sounds.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 mb-5 pl-4 pr-4">
                    <div class="item">
                        <img src="img/medclinic/consultation.svg" class="img-fluid mb-3" alt="">
                        <h5>
                            Provider Consultation
                        </h5>
                        <p>
                            The AI delivers a complete patient work-up
                            to an Akos provider with a breakdown of
                            predicted illnesses and treatment options.
                            The patient virtually connects with and Akos
                            medical provider to review the AI collected
                            information, verify the diagnosis and confirm
                            or modify the treatment plan formulated
                            by the system.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 mb-5 pl-4 pr-4">
                    <div class="item">
                        <img src="img/medclinic/treatmentplan.svg" class="img-fluid mb-3" alt="">
                        <h5>
                            Treatment Plan
                        </h5>
                        <p>
                            The AI electronically sends any necessary
                            prescriptions or procedure orders to
                            the appropriate healthcare partner,
                            and completes the billing process.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 mb-5 pl-4 pr-4">
                    <div class="item">
                        <img src="img/medclinic/followup.svg" class="img-fluid mb-3" alt="">
                        <h5>
                            Follow Up
                        </h5>
                        <p>
                            When appropriate, the AI follows up with the
                            patient via text or email. If the patient indicates
                            no or slow improvement, an appointment is
                            made for a return visit with an Akos provider
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- FEATBOX -->



    <!-- BOTTOM 4 -->
    <div id="bottom4" class="bottom4-frow bottom4-frow-solid-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 d-flex align-items-center">
                    <div class="item item-blue">
                        <h3 class="section-title">
                            Just What The <br class="d-none d-lg-block">
                            Doctor Ordered
                        </h3>
                        <p class="pt-4">
                            We perform a wide range of lab tests and diagnostics
                            onsite so you can get treated as quickly and conveniently
                            as possible. Check the list of some of the most common
                            lab tests and diagnostics performed at Akos Med Clinic.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 mt-4 b-box">
                    <h3 class="section-title">
                        On Site Testing, On Call Providers
                    </h3>

                    <ul class="pt-4 greenul splitul">
                        <li>
                            Blood Test
                        </li>
                        <li>
                            Drug Screen
                        </li>
                        <li>
                            Flu Test
                        </li>
                        <li>
                            STD Test
                        </li>
                        <li>
                            Strep Screen
                        </li>
                        <li>
                            Pregnancy Test
                        </li>
                        <li>
                            Urinalysis
                        </li>
                    </ul>
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
                            What We Treat
                        </h3>

                        <ul class="pt-4 greenul splitul">
                            <li>
                                Allergies / Asthma
                            </li>
                            <li>
                                Illness
                            </li>
                            <li>
                                Aches / Pains
                            </li>
                            <li>
                                Minor Injuries
                            </li>
                            <li>
                                Minor Injuries
                            </li>
                            <li>
                                Behavioral Health
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BOTTOM 4 -->


    <!--SHORT DESC-->
    <div id="short-desc" class="mb-0 border-bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h3 class="section-title">
                        Can Akos prescribe medicine?
                    </h3>

                    <h6>
                        Akos can prescribe when needed
                    </h6>
                    <p class="pt-3">
                        When necessary, Akos providers can prescribe medications to treat your condition. <br
                            class="d-none d-lg-block">
                        We will not prescribe or renew medications in large quantities or controlled <br
                            class="d-none d-lg-block">
                        substances regulated by the DEA.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--SHORT DESC-->




    <!-- MAP SECT -->
    <div id="map-sect">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h3 class="section-title pb-4">
                        Care you can trust, right where you live.
                    </h3>
                    <h6>
                        So whether you walk in or call ahead, we'll be ready to take care of you.
                    </h6>

                    <div class="map-frame">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55565170.29301636!2d-132.08532758867793!3d31.786060306224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1624372261876!5m2!1sen!2sin"
                            style="border:0;height: 400px;width: 100%;" allowfullscreen="" loading="lazy"></iframe>

                        <div class="text-left">
                            <h4 class="pt-4 text-left" style="color: #071F3E;font-size: 23px;">
                                Hours of Operation
                            </h4>

                            <span class="timing pb-2" style="color: #707070;font-size: 15px;line-height: 22px;">
                                Monday - Friday 9am - 9pm <br>
                                Saturday - Sunday 10am - 6pm
                            </span>
                            <br>
                            <a href="mailto:MedClinic@akosmd.com"
                                style="color: #071F3E;font-size: 15px;">MedClinic@akosmd.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MAP SECT -->


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