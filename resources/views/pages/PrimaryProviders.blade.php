@extends('layouts.sub_app')

@section('custom_css')
<link rel='dns-prefetch' href='//s.w.org' />
<link rel='stylesheet' id='sage/css-css'  href='https://akosmd.com/app/themes/akostheme/dist/styles/main-ae5c3d99f9.css' type='text/css' media='all' />
<script type='text/javascript' src='https://akosmd.com/wp/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
<script type='text/javascript' src='https://akosmd.com/wp/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<link rel='https://api.w.org/' href='https://akosmd.com/wp-json/' />
<link rel="alternate" type="application/json+oembed" href="https://akosmd.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fakosmd.com%2Fproviders%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://akosmd.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fakosmd.com%2Fproviders%2F&#038;format=xml" />
<script> (function(){ window.ldfdr = window.ldfdr || {}; (function(d, s, ss, fs){ fs = d.getElementsByTagName(s)[0]; function ce(src){ var cs = d.createElement(s); cs.src = src; setTimeout(function(){fs.parentNode.insertBefore(cs,fs)}, 1); } ce(ss); })(document, 'script', 'https://sc.lfeeder.com/lftracker_v1_lAxoEaKyN2b7OYGd.js'); })(); </script><script type="text/javascript" src="https://secure.leadforensics.com/js/143156.js" ></script>
<noscript><img src="https://secure.leadforensics.com/143156.png" style="display:none;" /></noscript><link rel="icon" href="https://akosmd.com/app/uploads/2018/05/favicon.png" sizes="32x32" />
<link rel="icon" href="https://akosmd.com/app/uploads/2018/05/favicon.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://akosmd.com/app/uploads/2018/05/favicon.png" />
<meta name="msapplication-TileImage" content="https://akosmd.com/app/uploads/2018/05/favicon.png" />
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400%7COpen+Sans:300" rel="stylesheet">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLqQBbFAQfh5etT9JhoHO6F_7tGZc_IHQ"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.min.js">
</script>
@endsection

@section('mainContent')
<div id="main-top" class="primaryprovider">
    <div id="fullwidth-video">
        <div class="fullwidth-video-bg">
            <video id="bgvideop" poster="" autobuffer autoplay="autoplay" loop="loop" muted
                defaultMuted playsinline webkit-playsinline oncontextmenu="return false;" preload="auto"
                onplaying="this.controls=false">
                <source src="https://player.vimeo.com/external/196455093.sd.mp4?s=186bc7497622f6ae2781be270380a335dc450182&profile_id=165" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
            </video>
        </div>
    </div>
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
                <div class="col-lg-8">
                    <h2 data-aos="fade-right">
                        Extend Your Reach
                    </h2>
                    <h6 data-aos="fade-right" data-aos-offset="0" data-aos-delay="300">
                        Physicians do more with Akos
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
<div id="primary_provider_content">
    <section class="network-top-panels">  <div class="network-top-panel">
        <div class="container-fluid">
        <div class="row">
            
            <div class="col-sm-6 left-image">
                <div class="main-image"><img src="https://akosmd.com/app/uploads/2016/12/Providers1.jpg" alt="" /></div>
            </div>
            <div class="col-sm-4 col-sm-offset-1">

                                        <h3>Set your schedule</h3>
                
                            <p class="subtitle">With flexible 24/7 access</p>
                
                <p class="changecolorblack">Physicians choose Akos because it gives them the freedom to set their own schedule. Plus, all patient calls are triaged by a care coordinator so you can make the most efficient use of your consultation time.</p>
            </div>
            </div>
        </div>
        </div>
        <div class="network-top-panel">
        <div class="container-fluid">
        <div class="row">
                    <div class="col-sm-6 pull-right right-image">
            <div class="main-image"><img src="https://akosmd.com/app/uploads/2016/12/Providers2.jpg" alt="" /></div>
            </div>
            <div class="col-sm-4 col-sm-offset-1">

                                    <h3>Increase your income</h3>
                
                            <p class="subtitle">Further your financial take-home</p>
                
                <p class="changecolorblack">Akos makes generating additional revenue easy for physicians, with no overhead and no billing required. Bi-monthly payments are made directly to your account and malpractice coverage is always provided. </p>
            </div>
            </div>
        </div>
        </div>
        </section>
    <div class="scroller-back hidden-xs">
    <img id="trigger1" src="https://akosmd.com/app/themes/akostheme/dist/images/angled_bg.png" class="angled-bg trigger-count" alt="" />

        <div id="trigger2" class="trigger-count" style="position: absolute;"></div>
        <div id="trigger3" class="trigger-count" style="position: absolute;"></div>
        <div id="trigger4" class="trigger-count" style="position: absolute;"></div>
    
    <div class="circle-nav">
            <div class="circle circle-1"></div>
            <div class="circle circle-2"></div>
            <div class="circle circle-3"></div>
            <div class="circle circle-4"></div>
        </div>

    <div class="slides">
            <div class="slide-1 slide active">
            <div class="image image-1">
                <img src="https://akosmd.com/app/uploads/2016/12/network_providers_slide_1.png" alt="" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="content">
                            <h2>Submit your form</h2>
                            <p class="changecolor">Akos asks all interested providers to submit an initial form on our website.  Click “join” to get started. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                <div class="slide-2 slide ">
            <div class="image image-2">
                <img src="https://akosmd.com/app/uploads/2016/12/network_providers_slide_2.png" alt="" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="content">
                            <h2>Complete our credentialing process</h2>
                            <p class="changecolor">Once your form is received and verified, you will receive an email notification with a link to submit your application and verify your credentials through our physician registration portal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                <div class="slide-3 slide ">
            <div class="image image-3">
                <img src="https://akosmd.com/app/uploads/2016/12/network_providers_slide_3-2.png" alt="" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="content">
                            <h2>Complete Akos online training</h2>
                            <p class="changecolor">Once accepted, you will receive an email notification giving you access to the Akos learning management system.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                <div class="slide-4 slide ">
            <div class="image image-4">
                <img src="https://akosmd.com/app/uploads/2016/12/network_providers_slide_4.png" alt="" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="content">
                            <h2>Start treating patients</h2>
                            <p class="changecolor">Once your training module is complete, you can begin treating patients through Akos on a set schedule of your choosing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            </div>
    </div>

    <div id="scroller-carousel" class="carousel slide carousel-fade hidden-sm hidden-md hidden-lg" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#scroller-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#scroller-carousel" data-slide-to="1"></li>
                    <li data-target="#scroller-carousel" data-slide-to="2"></li>
                    <li data-target="#scroller-carousel" data-slide-to="3"></li>
                </ol>

        <div class="carousel-inner">
                    <div class="slide-1 slide item active">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-10 col-xs-push-1">
                            <div class="content">
                                <h2>Submit your form</h2>
                                <p>Akos asks all interested providers to submit an initial form on our website.  Click “join” to get started. </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 no-pad">
                        <div class="image image-1">
                        <img src="https://akosmd.com/app/uploads/2016/12/network_providers_slide_1.png" alt="" />
                    </div>
                </div>
                    </div>
                </div>
            </div>
                    <div class="slide-2 slide item ">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-10 col-xs-push-1">
                            <div class="content">
                                <h2>Complete our credentialing process</h2>
                                <p>Once your form is received and verified, you will receive an email notification with a link to submit your application and verify your credentials through our physician registration portal.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 no-pad">
                        <div class="image image-2">
                        <img src="https://akosmd.com/app/uploads/2016/12/network_providers_slide_2.png" alt="" />
                    </div>
                </div>
                    </div>
                </div>
            </div>
                    <div class="slide-3 slide item ">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-10 col-xs-push-1">
                            <div class="content">
                                <h2>Complete Akos online training</h2>
                                <p>Once accepted, you will receive an email notification giving you access to the Akos learning management system.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 no-pad">
                        <div class="image image-3">
                        <img src="https://akosmd.com/app/uploads/2016/12/network_providers_slide_3-2.png" alt="" />
                    </div>
                </div>
                    </div>
                </div>
            </div>
                    <div class="slide-4 slide item ">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-10 col-xs-push-1">
                            <div class="content">
                                <h2>Start treating patients</h2>
                                <p>Once your training module is complete, you can begin treating patients through Akos on a set schedule of your choosing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 no-pad">
                        <div class="image image-4">
                        <img src="https://akosmd.com/app/uploads/2016/12/network_providers_slide_4.png" alt="" />
                    </div>
                </div>
                    </div>
                </div>
            </div>
                </div>
    </div>


    <section class="white-banner form-banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mobile-center">
                    <h1>Become an Akos Provider</h1>
                    <p class="subhead">Sign up today to get started</p>
                </div>
            </div>
        </div>
    </section>

    <section class="site-form form-fadeout">
        <div class="container">

            <form id="providers-form" target="_blank" class="infusion-form form-inline" accept-charset="UTF-8" action="https://ki344.infusionsoft.com/app/form/process/627f906d5ba38e0b82210a74e5ac94f3" method="POST">

                <input name="inf_form_xid" type="hidden" value="627f906d5ba38e0b82210a74e5ac94f3" />
                <input name="inf_form_name" type="hidden" value="Provider Signup" />
                <input name="infusionsoft_version" type="hidden" value="1.62.0.37" />

                <div class="row">

                    <div class="col-sm-3">
                        <span class="input input--hoshi">
                        <input class="input__field input__field--hoshi" type="text" id="inf_field_FirstName" name="inf_field_FirstName" required/>
                        <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="inf_field_Company">
                            <span class="input__label-content input__label-content--hoshi">First Name *</span>
                        </label>
                        </span>
                    </div>
                    <div class="col-sm-3">
                        <span class="input input--hoshi">
                        <input class="input__field input__field--hoshi" type="text" iid="inf_field_LastName" name="inf_field_LastName" required/>
                        <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="inf_field_Company">
                            <span class="input__label-content input__label-content--hoshi">Last Name *</span>
                        </label>
                        </span>
                    </div>
                    <div class="col-sm-3">
                        <span class="input input--hoshi">
                        <input class="input__field input__field--hoshi" type="text" id="inf_field_Email" name="inf_field_Email" required/>
                        <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="inf_field_Company">
                            <span class="input__label-content input__label-content--hoshi">Email *</span>
                        </label>
                        </span>
                    </div>
                    <div class="col-sm-3">
                        <span class="input input--hoshi">
                        <input class="input__field input__field--hoshi" type="text" id="inf_field_Phone1" name="inf_field_Phone1" required/>
                        <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="inf_field_Company">
                            <span class="input__label-content input__label-content--hoshi">Phone</span>
                        </label>
                        </span>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-3">
                    <span class="input input--hoshi">
                    <input class="input__field input__field--hoshi" type="text" id="inf_custom_StatesofLicensure" name="inf_custom_StatesofLicensure" />
                    <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="inf_field_Company">
                        <span class="input__label-content input__label-content--hoshi">State(s) of Licensure</span>
                    </label>
                    </span>
                    </div>
                    <div class="col-sm-3">
                        <span class="input input--hoshi">
                        <input class="input__field input__field--hoshi" type="text" id="inf_field_MiddleName" name="inf_field_MiddleName" />
                        <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="inf_field_Company">
                            <span class="input__label-content input__label-content--hoshi">Practice Name</span>
                        </label>
                        </span>
                    </div>
                    <div class="col-sm-3">
                        <span class="input input--hoshi">
                        <input class="input__field input__field--hoshi" type="text" id="inf_field_StreetAddress1" name="inf_field_StreetAddress1" />
                        <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="inf_field_Company">
                            <span class="input__label-content input__label-content--hoshi">Address 1</span>
                        </label>
                        </span>
                    </div>
                    <div class="col-sm-3">
                        <span class="input input--hoshi">
                        <input class="input__field input__field--hoshi" type="text" id="inf_field_StreetAddress2" name="inf_field_StreetAddress2" />
                        <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="inf_field_Company">
                            <span class="input__label-content input__label-content--hoshi">Address 2</span>
                        </label>
                        </span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <span class="input input--hoshi">
                        <input class="input__field input__field--hoshi" type="text" id="inf_field_City" name="inf_field_City" />
                        <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="inf_field_City">
                            <span class="input__label-content input__label-content--hoshi">City</span>
                        </label>
                        </span>
                    </div>

                    <div class="col-sm-3">
                        <div class="select-wrapper">
                            <select class="infusion-select" id="inf_custom_State1" name="inf_custom_State1"><option value="">State</option><option value="Alabama">Alabama</option><option value="Alaska">Alaska</option><option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option><option value="California">California</option><option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option><option value="Florida">Florida</option><option value="Georgia">Georgia</option><option value="Hawaii">Hawaii</option><option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option><option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option><option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option><option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="New York">New York</option><option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option><option value="Ohio">Ohio</option><option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Pennsylvania">Pennsylvania</option><option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option><option value="Tennessee">Tennessee</option><option value="Texas">Texas</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option><option value="Virginia">Virginia</option><option value="Washington">Washington</option><option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option></select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <span class="input input--hoshi">
                        <input class="input__field input__field--hoshi" type="text" id="inf_field_PostalCode" name="inf_field_PostalCode" />
                        <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="inf_field_Company">
                            <span class="input__label-content input__label-content--hoshi">ZIP Code</span>
                        </label>
                        </span>
                    </div>
                    <div class="col-sm-3">
                        <span class="input input--hoshi">
                        <input class="input__field input__field--hoshi" type="text" id="inf_custom_Specialty0" name="inf_custom_Specialty0" />
                        <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="inf_field_Company">
                            <span class="input__label-content input__label-content--hoshi">Specialty</span>
                        </label>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-sm-offset-9">
                        <button type="submit" value="Submit" class="akos-button">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </section>
    <section class="white-banner form-banner form-confirmation">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mobile-center">
                    <h2>Thank you.</h2>
                    <p class="subtitle">We will be in contact soon.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="newsletter-form form-fadeout">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 mobile-center">
                    <h2>Join our newsletter</h2>
                    <p>Stay current with everything Akos</p>
                </div>
                <div class="col-sm-6">
                    <div class="form gray">
                        <form accept-charset="UTF-8" target="_blank" action="https://ki344.infusionsoft.com/app/form/process/244a800f6d493b1da1ef25996f43a583" class="infusion-form" method="POST">
                            <input name="inf_form_xid" type="hidden" value="244a800f6d493b1da1ef25996f43a583" />
                            <input name="inf_form_name" type="hidden" value="Web Form submitted" />
                            <input name="infusionsoft_version" type="hidden" value="1.62.0.37" />

                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="infusion-field">
                                        <span class="input input--hoshi">
                                        <input class="input__field input__field--hoshi" type="text" id="inf_field_Email" name="inf_field_Email" />
                                        <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="inf_field_Email">
                                            <span class="input__label-content input__label-content--hoshi">Email *</span>
                                        </label>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-6 pull-right text-right">
                                    <div class="infusion-submit">
                                        <button type="submit" class="akos-button">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="white-banner form-banner form-confirmation">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mobile-center">
                    <h2>Thank you.</h2>
                    <p class="subtitle">You are now signed up to receive the latest patient news, updates and more.</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('custom_js')
<script type='text/javascript' src='https://akosmd.com/app/themes/akostheme/dist/scripts/main-fb0b5c7b76.js'></script>
<script type='text/javascript' src='https://akosmd.com/wp/wp-includes/js/wp-embed.min.js?ver=5.4.9'></script>
<script type="text/javascript" src="https://ki344.infusionsoft.com/app/webTracking/getTrackingCode"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-88632021-1', 'auto');
    ga('send', 'pageview');
</script>
@endsection