@extends('layouts.sub_app')

@section('custom_css')
<link rel='stylesheet' id='elementor-icons-css'  href='https://akosmd.com/app/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-animations-css'  href='https://akosmd.com/app/plugins/elementor/assets/lib/animations/animations.min.css?ver=2.9.13' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css'  href='https://akosmd.com/app/plugins/elementor/assets/css/frontend.min.css?ver=2.9.13' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-pro-css'  href='https://akosmd.com/app/plugins/elementor-pro/assets/css/frontend.min.css?ver=2.10.3' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-global-css'  href='https://akosmd.com/app/uploads/elementor/css/global.css?ver=1594267165' type='text/css' media='all' />
<link rel='stylesheet' id='sage/css-css'  href='https://akosmd.com/app/themes/akostheme/dist/styles/main-ae5c3d99f9.css' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;ver=5.4.7' type='text/css' media='all' />
<script type='text/javascript' src='https://akosmd.com/wp/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
<script type='text/javascript' src='https://akosmd.com/wp/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<link rel='https://api.w.org/' href='https://akosmd.com/wp-json/' />
<link rel="alternate" type="application/json+oembed" href="https://akosmd.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fakosmd.com%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://akosmd.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fakosmd.com%2F&#038;format=xml" />
<script> (function(){ window.ldfdr = window.ldfdr || {}; (function(d, s, ss, fs){ fs = d.getElementsByTagName(s)[0]; function ce(src){ var cs = d.createElement(s); cs.src = src; setTimeout(function(){fs.parentNode.insertBefore(cs,fs)}, 1); } ce(ss); })(document, 'script', 'https://sc.lfeeder.com/lftracker_v1_lAxoEaKyN2b7OYGd.js'); })(); </script><script type="text/javascript" src="https://secure.leadforensics.com/js/143156.js" ></script>
<noscript><img src="https://secure.leadforensics.com/143156.png" style="display:none;" /></noscript><link rel="icon" href="https://akosmd.com/app/uploads/2018/05/favicon.png" sizes="32x32" />
<link rel="icon" href="https://akosmd.com/app/uploads/2018/05/favicon.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://akosmd.com/app/uploads/2018/05/favicon.png" />
<meta name="msapplication-TileImage" content="https://akosmd.com/app/uploads/2018/05/favicon.png" />
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400%7COpen+Sans:300" rel="stylesheet">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLqQBbFAQfh5etT9JhoHO6F_7tGZc_IHQ"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.min.js"></script>
@endsection

@section('mainContent')
<div id="main-top" class="telemedicine">
    <div id="fullwidth-video">
        <div class="fullwidth-video-bg">
            <video id="bgvideop" poster="img/video-bg.jpg" autobuffer autoplay="autoplay" loop="loop" muted
                defaultMuted playsinline webkit-playsinline oncontextmenu="return false;" preload="auto"
                onplaying="this.controls=false">
                <source src="img/prac.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
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
                                        <a href="">Specialists</a>
                                    </li>
                                    <li>
                                        <a href="/aco">ACO/Value Based entities</a>
                                    </li>
                                    <li>
                                        <a href="/ccm">Chronic Case Management</a>
                                    </li>
                                    <!-- <li>
                                        <a href="">RPM</a>
                                    </li> -->
                                    <li>
                                        <a href="">Answering service/Nurse triage</a>
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
                        Telemedicine
                    </h2>
                    <h6 data-aos="fade-right" data-aos-offset="0" data-aos-delay="300">
                        Akos Med Clinic has you covered
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
<div class="container-fluid" style="background-color:#56BAC3;padding: 3rem 2rem;">
  <div class="row">
    <div class="col-12 text-center">
      <a id="provider-button" style="font-size:40px;background:#FFF;border-radius:0px;color:#56BAC3;box-shadow: 0 1px 10px 4px rgba(0,0,0,0.1)" target="_blank" class="btn" href="https://medical.akosmd.com/#!/room/medical/landing">SPEAK TO A PROVIDER NOW</a>
    </div>
  </div>
</div>    
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
              <img src="https://akosmd.com/app/uploads/2016/12/slide_1_img.png" alt="" />
          </div>
          <div class="container">
              <div class="row">
                  <div class="col-sm-6">
                      <div class="content">
                          <h2>Modern medicine meets modern convenience</h2>
                          <p>No commutes. No waiting rooms. Akos uses telemedicine so you can consult with a healthcare professional without the hassles of a physical visit.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>

            <div class="slide-2 slide ">
          <div class="image image-2">
              <img src="https://akosmd.com/app/uploads/2016/12/slide_2_img.png" alt="" />
          </div>
          <div class="container">
              <div class="row">
                  <div class="col-sm-6">
                      <div class="content">
                          <h2>Answers you need when you need them</h2>
                          <p>Your schedule isn’t 9 to 5. It’s 24/7.  That’s why Akos provides around-the-clock access, so you can speak with a provider any day, any time.  </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>

            <div class="slide-3 slide ">
          <div class="image image-3">
              <img src="https://akosmd.com/app/uploads/2016/12/slide_3_img.png" alt="" />
          </div>
          <div class="container">
              <div class="row">
                  <div class="col-sm-6">
                      <div class="content">
                          <h2>Personalized care puts you at ease</h2>
                          <p>Care coordinators assess your symptoms to pair you with the right provider.  Get peace of mind by speaking face to face with the provider that best meets your needs.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>

            <div class="slide-4 slide ">
          <div class="image image-4">
              <img src="https://akosmd.com/app/uploads/2016/12/slide_4_img.png" alt="" />
          </div>
          <div class="container">
              <div class="row">
                  <div class="col-sm-6">
                      <div class="content">
                          <h2>One less thing to worry about</h2>
                          <p>Akos saves you more than time, we save you money.  With no hidden costs, no surprise fees, and our low rates, we make healthcare affordable. </p>
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
                            <h2>Modern medicine meets modern convenience</h2>
                            <p>No commutes. No waiting rooms. Akos uses telemedicine so you can consult with a healthcare professional without the hassles of a physical visit.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 no-pad">
                      <div class="image image-1">
                      <img src="https://akosmd.com/app/uploads/2016/12/slide_1_img.png" alt="" />
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
                            <h2>Answers you need when you need them</h2>
                            <p>Your schedule isn’t 9 to 5. It’s 24/7.  That’s why Akos provides around-the-clock access, so you can speak with a provider any day, any time.  </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 no-pad">
                      <div class="image image-2">
                      <img src="https://akosmd.com/app/uploads/2016/12/slide_2_img.png" alt="" />
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
                            <h2>Personalized care puts you at ease</h2>
                            <p>Care coordinators assess your symptoms to pair you with the right provider.  Get peace of mind by speaking face to face with the provider that best meets your needs.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 no-pad">
                      <div class="image image-3">
                      <img src="https://akosmd.com/app/uploads/2016/12/slide_3_img.png" alt="" />
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
                            <h2>One less thing to worry about</h2>
                            <p>Akos saves you more than time, we save you money.  With no hidden costs, no surprise fees, and our low rates, we make healthcare affordable. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 no-pad">
                      <div class="image image-4">
                      <img src="https://akosmd.com/app/uploads/2016/12/slide_4_img.png" alt="" />
                  </div>
              </div>
                </div>
            </div>
        </div>
            </div>
</div>

<section class="remedies">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Akos | Remedies in real time</h1>
                <p>It's how healthcare should be</p>
            </div>
        </div>
    </div>
</section>

<section class="always-on-call">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-6">
                <h4>Always on call</h4>
                <p class="subtitle">So you never fall behind</p>

                <p>Our virtual consults help employees return to work faster and at less cost. Find out how Akos can improve the health of your employees.</p>
                <a class="learn-more" href="/employers">learn more</a>
            </div>
        </div>
    </div>
</section>

<section class="couch dark-mask">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-6">
                <h4>Less waiting</h4>
                <p>Whether it’s a late night cough keeping you awake or a sprained wrist keeping you away from your desk, Akos lets you consult with a board-certified provider virtually from the convenience of your smartphone or tablet.</p>
                <a class="learn-more" href="/using-akos">learn more</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h4>Less worrying</h4>
                <p>Day or night, weekend or holidays, Akos is there to diagnose and treat a wide range of health concerns -  from ankle sprains to anxiety. Finally, a medical app that takes care of you so you can take care of everything else.</p>
                <a class="learn-more" href="/what-we-treat">learn more</a>
            </div>
        </div>
    </div>
</section>

<section class="dark-mask psychiatric">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-6">
                <h4>Treat the symptoms you can't see</h4>
                <p class="subtitle">Akos brings behavioral healthcare to you</p>

                <p>Comprehensive care means treating all your symptoms from the inside out. That's why Akos offers telepsychiatry for behavioral health conditions such as anxiety and depression.</p>
                <a class="learn-more" href="/what-we-treat?slide=5">learn more</a>
            </div>
        </div>
    </div>
</section>

<section class="dark-mask schools">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-6">
                <h4>Healthcare that caters to the classroom</h4>
                <p class="subtitle">Akos takes care of students and teachers</p>
                <p>Akos makes it easier for schools to manage students' medical care. Learn how our telemedicine services can take the health and success of your school further.</p>
                <a class="learn-more" href="/schools">learn more</a>
            </div>
        </div>
    </div>
</section>

<section class="white-banner">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>Akos is changing the healthcare industry</h3>
                <p>And not just for patients</p>
            </div>
        </div>
    </div>
</section>

<section class="home-physicians">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 extend-your-reach mobile-panel">
                <div class="row">
                    <div class="col-sm-10">
                        <div class="inside">
                            <h4>Extend your reach</h4>
                            <p class="subtitle">Do more with Akos</p>
                            <p>Our board-certified medical professionals can diagnose and treat a wide range of non-emergency conditions. Join the growing network of doctors and nurses who treat patients on their schedule.</p>
                            <a class="learn-more" href="/providers">learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 better-together mobile-panel">
                <div class="row">
                    <div class="col-sm-10">
                        <div class="inside">
                            <h4>Better together</h4>
                            <p class="subtitle">Our patients are your patients</p>
                            <p>Certain patients require care beyond the scope of a virtual consult. Increase your patient volume, revenue and overall awareness by joining our preferred network of healthcare centers.</p>
                            <a class="learn-more" href="/network-healthcare-centers">learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="app-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-2 col-md-8 col-md-offset-2">
                <div class="row">
                    <div class="col-xs-3 col-sm-2">
                        <div class="icon">
                            <img src="https://akosmd.com/app/themes/akostheme/dist/images/app_icon.png" alt="AKOS" />
                        </div>
                    </div>
                    <div class="col-xs-9 col-sm-10">
                        <h2>Download Akos Today</h2>
                        <p>Medical care in minutes</p>
                        <div class="apps">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="google">
                                        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.akosmd.patientapp"><img class="google" src="https://akosmd.com/app/themes/akostheme/dist/images/google_header.png" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="apple">
                                        <a target="_blank" href="https://itunes.apple.com/us/app/akos/id1187895369?ls=1&mt=8"><img class="apple" src="https://akosmd.com/app/themes/akostheme/dist/images/apple_header.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="blog-module">
        <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center blog-headline">
                <h2>Telemedicine today</h2>
                <p>Follow the latest news from Akos</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 blog-module-posts">
                                <div class="row">
                    <div class="col-sm-2">
                        <span class="date">Jun 03, 2021</span>
                    </div>
                    <div class="col-sm-8 m-bottom">
                        <h3>Akos Medical Campus Opens in Avondale, Arizona</h3>
                    </div>
                    <div class="col-sm-2">
                        <a class="read-more" href="https://akosmd.com/akos-medical-campus-opens-avondale-arizona/">read more</a>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-sm-2">
                        <span class="date">May 04, 2021</span>
                    </div>
                    <div class="col-sm-8 m-bottom">
                        <h3>4 strategies for healthcare providers to make virtual care practical for seniors</h3>
                    </div>
                    <div class="col-sm-2">
                        <a class="read-more" href="https://akosmd.com/4-strategies-healthcare-providers-make-virtual-care-practical-seniors/">read more</a>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-sm-2">
                        <span class="date">May 04, 2021</span>
                    </div>
                    <div class="col-sm-8 m-bottom">
                        <h3>Akos and Apricus Health co-founder earns Gold Stevie Award</h3>
                    </div>
                    <div class="col-sm-2">
                        <a class="read-more" href="https://akosmd.com/akos-apricus-health-co-founder-earns-gold-stevie-award/">read more</a>
                    </div>
                </div>
                            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <a href="/news" class="akos-button">View the Archive</a>
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
<script type='text/javascript' src='https://akosmd.com/wp/wp-includes/js/wp-embed.min.js?ver=5.4.7'></script>
<a href="javascript:void(0);" id="back-top"><i class="fa fa-chevron-up" aria-hidden="true"></i> Back to top</a>
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