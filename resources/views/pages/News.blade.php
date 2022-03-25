@extends('layouts.sub_app')

@section('custom_css')
<link rel='dns-prefetch' href='//s.w.org' />
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
<link rel="alternate" type="application/json+oembed" href="https://akosmd.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fakosmd.com%2Fnews%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://akosmd.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fakosmd.com%2Fnews%2F&#038;format=xml" />
<script> (function(){ window.ldfdr = window.ldfdr || {}; (function(d, s, ss, fs){ fs = d.getElementsByTagName(s)[0]; function ce(src){ var cs = d.createElement(s); cs.src = src; setTimeout(function(){fs.parentNode.insertBefore(cs,fs)}, 1); } ce(ss); })(document, 'script', 'https://sc.lfeeder.com/lftracker_v1_lAxoEaKyN2b7OYGd.js'); })(); </script><script type="text/javascript" src="https://secure.leadforensics.com/js/143156.js" ></script>
<noscript><img src="https://secure.leadforensics.com/143156.png" style="display:none;" /></noscript><link rel="icon" href="https://akosmd.com/app/uploads/2018/05/favicon.png" sizes="32x32" />
<link rel="icon" href="https://akosmd.com/app/uploads/2018/05/favicon.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://akosmd.com/app/uploads/2018/05/favicon.png" />
<meta name="msapplication-TileImage" content="https://akosmd.com/app/uploads/2018/05/favicon.png" />
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400%7COpen+Sans:300" rel="stylesheet">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLqQBbFAQfh5etT9JhoHO6F_7tGZc_IHQ"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.min.js"></script>
<style>
  .news-post .post-content .post-excerpt{
    color: #888;
    font-weight: 300;
  }
</style>
@endsection

@section('mainContent')
<div id="main-top" class="telemedicine">
    <div id="fullwidth-video">
        <div class="fullwidth-video-bg">
            <video id="bgvideop" poster="img/video-bg.jpg" autobuffer autoplay="autoplay" loop="loop" muted
                defaultMuted playsinline webkit-playsinline oncontextmenu="return false;" preload="auto"
                onplaying="this.controls=false">
                <source src="https://player.vimeo.com/external/196455093.sd.mp4?s=186bc7497622f6ae2781be270380a335dc450182&profile_id=165" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
            </video>
            <!-- <iframe id="video" src="https://player.vimeo.com/video/196455768?api=1" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
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
                    <a  href="javascript:void(0)" class="menu-toggle-btn pt-2 d-inline-block d-lg-none">
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
                        </li>                            -->
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
                        <li class="menu-item active">
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
                      Telemedicine Today
                    </h2>
                    <h6 data-aos="fade-right" data-aos-offset="0" data-aos-delay="300">
                      Follow the latest news with Akos
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
<div class="page-template page-template-news page-template-news-php page page-id-73 news sidebar-primary elementor-default elementor-kit-962 elementor-page elementor-page-73">
  <section class="news-posts">
    <div class="container">
      <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
            <img src="https://akosmd.com/app/uploads/2021/06/AKOS-Ribbon-Cutting.png" alt="" />
          </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Akos Medical Campus Opens in Avondale, Arizona</h3>
            <p class="post-date">Jun 03, 2021</p>
            <p class="post-excerpt">Newly Constructed State-of-the-Art Medical Office Building Provides 24x7 Ambulatory Care, Making Healthcare More Accessible and Affordable to West Valley Citizens &nbsp; Providing improved access to healthcare services for the growing...</p>
            <p><a href="https://akosmd.com/akos-medical-campus-opens-avondale-arizona/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
      <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
              <img src="https://akosmd.com/app/uploads/2021/05/akos.png" alt="" />
          </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>4 strategies for healthcare providers to make virtual care practical for seniors</h3>
            <p class="post-date">May 04, 2021</p>
            <p class="post-excerpt">4 strategies for healthcare providers to make virtual care practical for seniors - MedCity News</p>
            <p><a href="https://akosmd.com/4-strategies-healthcare-providers-make-virtual-care-practical-seniors/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
      <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
            <img src="https://akosmd.com/app/uploads/2021/05/Gold-award.png" alt="" />
          </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Akos and Apricus Health co-founder earns Gold Stevie Award</h3>
            <p class="post-date">May 04, 2021</p>
            <p class="post-excerpt">Akos and Apricus Health co-founder earns Gold Stevie Award | AZ Big Media</p>
            <p><a href="https://akosmd.com/akos-apricus-health-co-founder-earns-gold-stevie-award/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
      <div class="row news-post">
          <div class="col-sm-4">
              <div class="post-image">
                  <img src="https://akosmd.com/app/uploads/2021/05/unnamed-apricus-health-copy.jpg" alt="" />
              </div>
          </div>
          <div class="col-sm-8">
              <div class="post-content">
              <h3>Entrepreneur: Scottsdale health tech company garners federal Medicare contract</h3>
              <p class="post-date">May 04, 2021</p>
              <p class="post-excerpt">CMS selects Apricus Health as DCE - Phoenix Business Journal (bizjournals.com)</p>
              <p><a href="https://akosmd.com/entrepreneur-scottsdale-health-tech-company-garners-federal-medicare-contract/" class="read-more">read more</a></p>
              </div>
          </div>
      </div>
      <div class="row news-post">
          <div class="col-sm-4">
              <div class="post-image">
                          <img src="https://akosmd.com/app/uploads/2021/04/02Telehealth2.jpg" alt="" />
                      </div>
          </div>
          <div class="col-sm-8">
              <div class="post-content">
              <h3>3 ways telemedicine can ensure a healthy and safe workforce</h3>
              <p class="post-date">Apr 26, 2021</p>
              <p class="post-excerpt">3 ways telemedicine can ensure a healthy and safe workforce | BenefitsPRO</p>
              <p><a href="https://akosmd.com/3-ways-telemedicine-can-ensure-healthy-safe-workforce/" class="read-more">read more</a></p>
              </div>
          </div>
      </div>
      <div class="row news-post">
          <div class="col-sm-4">
              <div class="post-image">
                          <img src="https://akosmd.com/app/uploads/2021/04/telehealth.jpg" alt="" />
                      </div>
          </div>
          <div class="col-sm-8">
              <div class="post-content">
              <h3>Future of telehealth is brighter than ever in the wake of Covid-19</h3>
              <p class="post-date">Apr 20, 2021</p>
              <p class="post-excerpt">Future of telehealth is brighter than ever in the  wake of COVID-19 | AZ Big Media</p>
              <p><a href="https://akosmd.com/future-telehealth-brighter-ever-wake-covid-19/" class="read-more">read more</a></p>
              </div>
          </div>
      </div>
      <div class="row news-post">
          <div class="col-sm-4">
              <div class="post-image">
                  <img src="https://akosmd.com/app/uploads/2021/04/shutterstock_796346002-1024x597-1.jpg" alt="" />
              </div>
          </div>
          <div class="col-sm-8">
              <div class="post-content">
                  <h3>Health & Your People: Has the pandemic changed workplace health and wellness forever?</h3>
                  <p class="post-date">Apr 13, 2021</p>
                  <p class="post-excerpt">Health &amp; Your People - Greater Phoenix In Business Magazine (inbusinessphx.com)</p>
                  <p><a href="https://akosmd.com/health-people-pandemic-changed-workplace-health-wellness-forever/" class="read-more">read more</a></p>
              </div>
          </div>
      </div>
      <div class="row news-post">
          <div class="col-sm-4">
              <div class="post-image">
                  <img src="https://akosmd.com/app/uploads/2021/03/unnamed-apricus-health.jpg" alt="" />
              </div>
          </div>
          <div class="col-sm-8">
              <div class="post-content">
                  <h3>What to Expect from Medicare and Medicare Advantage in 2021</h3>
                  <p class="post-date">Mar 11, 2021</p>
                  <p class="post-excerpt">https://www.healthcarebusinesstoday.com/what-to-expect-from-medicare-and-medicare-advantage-in-2021/</p>
                  <p><a href="https://akosmd.com/expect-medicare-medicare-advantage-2021/" class="read-more">read more</a></p>
              </div>
          </div>
      </div>
      <div class="row news-post">
          <div class="col-sm-4">
              <div class="post-image">
                  <img src="https://akosmd.com/app/uploads/2021/03/radio-show-scaled.jpg" alt="" />
              </div>
          </div>
          <div class="col-sm-8">
              <div class="post-content">
              <h3>Health Futures Taking Stock in You with Troy Smith. Dr. Maria Shah, and Dr. Swaraj Singh</h3>
              <p class="post-date">Mar 11, 2021</p>
              <p class="post-excerpt">https://cypresshomecare.com/2021/03/03/2-26-21-health-futures-taking-stock-in-you-with-troy-smith-dr-maria-shah-and-dr-swaraj-singh/</p>
              <p><a href="https://akosmd.com/health-futures-taking-stock-troy-smith-dr-maria-shah-dr-swaraj-singh/" class="read-more">read more</a></p>
              </div>
          </div>
      </div>
      <div class="row news-post">
          <div class="col-sm-4">
              <div class="post-image">
                  <img src="https://akosmd.com/app/uploads/2021/01/national-cancer-institute-L8tWZT4CcVQ-unsplash-2-scaled.jpg" alt="" />
              </div>
          </div>
          <div class="col-sm-8">
              <div class="post-content">
              <h3>Digital doctors: What role will telehealth play after COVID-19?</h3>
              <p class="post-date">Nov 12, 2020</p>
              <p class="post-excerpt">The future of telehealth post-COVID (medicaleconomics.com)</p>
              <p><a href="https://akosmd.com/digital-doctors-role-will-telehealth-play-covid-19/" class="read-more">read more</a></p>
              </div>
          </div>
      </div>
      <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
              <img src="https://akosmd.com/app/uploads/2021/01/shutterstock_1355302625-1024x597-1.jpg" alt="" />
          </div>
          </div>
          <div class="col-sm-8">
              <div class="post-content">
              <h3>As Business Changes, So Will Our Healthcare</h3>
              <p class="post-date">Nov 01, 2020</p>
              <p class="post-excerpt">As Business Changes, So Will Our Healthcare - Greater Phoenix In Business Magazine (inbusinessphx.com)</p>
              <p><a href="https://akosmd.com/business-changes-will-healthcare/" class="read-more">read more</a></p>
              </div>
          </div>
      </div>
      <div class="row news-post">
          <div class="col-sm-4">
              <div class="post-image">
                  <img src="https://akosmd.com/app/uploads/2021/01/d8b2fbf262f6cc2a8335568afdbc841284b39ca8-1000x600-1.png" alt="" />
              </div>
          </div>
          <div class="col-sm-8">
              <div class="post-content">
              <h3>Three key considerations for patient-focused telehealth</h3>
              <p class="post-date">Sep 21, 2020</p>
              <p class="post-excerpt">Three key considerations for patient-focused telehealth | Physician's Practice</p>
              <p><a href="https://akosmd.com/three-key-considerations-patient-focused-telehealth/" class="read-more">read more</a></p>
              </div>
          </div>
      </div>
      <div class="row news-post">
          <div class="col-sm-4">
              <div class="post-image">
                  <img src="https://akosmd.com/app/uploads/2021/01/mika-baumeister-uz_T7h8ds04-unsplash-scaled.jpg" alt="" />
              </div>
          </div>
          <div class="col-sm-8">
              <div class="post-content">
              <h3>The Essential Guide to Low-Cost COVID-19 Care</h3>
              <p class="post-date">Sep 14, 2020</p>
              <p class="post-excerpt">The Essential Guide to Low-Cost COVID-19 Care - Greater Phoenix In Business Magazine (inbusinessphx.com)</p>
              <p><a href="https://akosmd.com/essential-guide-low-cost-covid-19-care/" class="read-more">read more</a></p>
              </div>
          </div>
      </div>
      <div class="row news-post">
          <div class="col-sm-4">
              <div class="post-image">
                  <img src="https://akosmd.com/app/uploads/2021/01/work-covid-19.jpg" alt="" />
              </div>
          </div>
          <div class="col-sm-8">
              <div class="post-content">
              <h3>Doctor offers 3-step guide to a safe workplace reopening</h3>
              <p class="post-date">Sep 04, 2020</p>
              <p class="post-excerpt">Doctor offers 3-step guide to a safe workplace reopening | AZ Big Media</p>
              <p><a href="https://akosmd.com/doctor-offers-3-step-guide-safe-workplace-reopening/" class="read-more">read more</a></p>
              </div>
          </div>
      </div>
      <div class="row news-post">
          <div class="col-sm-4">
              <div class="post-image">
                  <img src="https://akosmd.com/app/uploads/2021/01/87b0147d-116d-4848-8053-67c179700e0e-GlendaleApril2_6.jpg" alt="" />
              </div>
          </div>
          <div class="col-sm-8">
              <div class="post-content">
              <h3>With virtual and clinic presence, Phoenix telehealth company Akos MD surges, plays key role amid COVID-19</h3>
              <p class="post-date">Apr 12, 2020</p>
              <p class="post-excerpt">With virtual and clinic presence, Phoenix telehealth company Akos MD surges (azcentral.com)</p>
              <p><a href="https://akosmd.com/virtual-clinic-presence-phoenix-telehealth-company-akos-md-surges-plays-key-role-amid-covid-19/" class="read-more">read more</a></p>
              </div>
          </div>
      </div>
      <div class="row news-post">
          <div class="col-sm-4">
          <div class="post-image">
              <img src="https://akosmd.com/app/uploads/2019/04/ai-doc3-edit-620x370.jpg" alt="" />
          </div>
          </div>
          <div class="col-sm-8">
              <div class="post-content">
                  <h3>Artificial intelligence-powered clinics providing medical care</h3>
                  <p class="post-date">Apr 30, 2019</p>
                  <p class="post-excerpt">KTAR News speaks with Akos Director of Operations Sean Walker about the new Akos Med Clinics opening inside Safeway across the valley. Hear how the future-forward AI-powered medical clinics are...</p>
                  <p><a href="https://akosmd.com/artificial-intelligence-powered-clinics-providing-medical-care/" class="read-more">read more</a></p>
              </div>
          </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2019/02/Safeway-Expands-Number-of-AI-Equipped-Health-Clinics-WSJ.jpg" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Safeway Expands Number of AI-Equipped Health Clinics</h3>
            <p class="post-date">Feb 27, 2019</p>
            <p class="post-excerpt">https://www.wsj.com/articles/safeway-expands-number-of-ai-equipped-health-clinics-11551261601</p>
            <p><a href="https://akosmd.com/safeway-expands-number-ai-equipped-health-clinics/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
              <img src="https://akosmd.com/app/uploads/2019/02/Akos-Exterior-Cropped.jpg" alt="" />
          </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Five More AI-Powered Medical Clinics Now Open in Phoenix</h3>
            <p class="post-date">Feb 21, 2019</p>
            <p class="post-excerpt">https://www.businesswire.com/news/home/20190221005162/en/AI-Powered-Medical-Clinics-Open-Phoenix</p>
            <p><a href="https://akosmd.com/five-ai-powered-medical-clinics-now-open-phoenix/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2018/11/safeway-1.jpg" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Access to Fast, Future-Forward Healthcare Services Now Next to the Eggs and Bacon</h3>
            <p class="post-date">Nov 13, 2018</p>
            <p class="post-excerpt">     &nbsp; FOR IMMEDIATE RELEASE &nbsp; Access to Fast, Future-Forward Healthcare Services Now Next to the Eggs and Bacon New First-of-Its-Kind Med Clinics—using Artificial Intelligence—Open in Phoenix Area &nbsp;...</p>
            <p><a href="https://akosmd.com/access-fast-future-forward-healthcare-services-now-next-eggs-bacon/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
              <img src="https://akosmd.com/app/uploads/2018/10/advinow-medical-3.jpg" alt="" />
          </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>AI-Driven Medical Station Taking Virtual Healthcare Visit to a New Level</h3>
            <p class="post-date">Oct 29, 2018</p>
            <p class="post-excerpt">&nbsp; &nbsp; &nbsp; FOR IMMEDIATE RELEASE Tempe, Arizona &nbsp; AI-Driven Medical Station Taking Virtual Healthcare Visit to a New Level &nbsp; PHOENIX, Ariz., October 19, 2018 - (BUSINESS WIRE) –...</p>
            <p><a href="https://akosmd.com/ai-driven-medical-station-taking-virtual-healthcare-visit-new-level/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2018/04/20040816-300x168.jpeg" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>IEEE Awards Akos “Startup Company of the Year” for 2017</h3>
            <p class="post-date">Apr 18, 2018</p>
            <p class="post-excerpt">Akos took home another prestigious award, this time by the IEEE for its pioneering achievements in telemedicine.</p>
            <p><a href="https://akosmd.com/ieee-awards-akos-startup-company-year-2017/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2018/03/s5_logo.jpg" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Akos + Xybion</h3>
            <p class="post-date">Mar 21, 2018</p>
            <p class="post-excerpt">&nbsp; Akos is pleased to announce our partnership with Xybion Corporation to enhance the efficiency of our workers' compensation telemedicine solution. The integration of Xybion's Workers’ Comp Cloud™ for Revenue &amp;...</p>
            <p><a href="https://akosmd.com/akos-xybion/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2018/01/azfoothills-e1512589098965.jpg" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>AZ Foothills Names Akos One of the Best Apps of 2017</h3>
            <p class="post-date">Jan 11, 2018</p>
            <p class="post-excerpt">The magazine recaps the best and brightest from last year. https://www.arizonafoothillsmagazine.com/features/tech/9458-best-apps-of-2017.html?start=1</p>
            <p><a href="https://akosmd.com/az-foothills-names-akos-one-best-apps-2017/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2017/12/I1ZHkR5S.jpg" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Dr. Robb Leigh reviews tips for staying healthy this holiday season</h3>
            <p class="post-date">Dec 19, 2017</p>
            <p class="post-excerpt">Stay healthy this holiday season with some tips from Akos's Dr. Robb Leigh, featured on Arizona Daily Mix, AZ TV. https://youtu.be/Qwb9oqNK6WU</p>
            <p><a href="https://akosmd.com/dr-robb-leigh-reviews-tips-stay-healthy/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2017/12/356860LOGO.jpg" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Dr. Robb Leigh shares some tips with Benefits Pro</h3>
            <p class="post-date">Dec 14, 2017</p>
            <p class="post-excerpt">Communication is key to educating employees about their benefits. Read more here: Getting the most out of a telehealth program.  &nbsp;</p>
            <p><a href="https://akosmd.com/dr-robb-leigh-shares-tips-benefits-pro/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2017/11/1080x1080-instagram-_-facebook.jpg" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Akos is now offering behavioral telehealth services</h3>
            <p class="post-date">Nov 28, 2017</p>
            <p class="post-excerpt">Comprehensive care means treating all your symptoms from the inside out. That's why Akos offers telepsychiatry for behavioral health conditions such as Anger Management, Anxiety, Attention Deficit, Bipolar, Depression, Grief...</p>
            <p><a href="https://akosmd.com/akos-now-offering-behavioral-telehealth-services/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2017/09/Money-Radio-1510.png" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Co-Founder Kishlay Anand MD Talks Telehealth With Money Radio</h3>
            <p class="post-date">Nov 14, 2017</p>
            <p class="post-excerpt">Hear how the healthcare industry is changing. [audio mp3="https://akosmd.com/app/uploads/2017/11/Kishlay-Money-Radio-11.13.mp3"][/audio]</p>
            <p><a href="https://akosmd.com/co-founder-kishlay-anand-md-talks-telehealth-money-radio/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2017/11/kjzzLogo4fb.png" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Akos' Dr. Robb Leigh Discusses the Telepsychology Benefits with KJZZ</h3>
            <p class="post-date">Nov 07, 2017</p>
            <p class="post-excerpt">Akos Chief Medical Officer Dr. Robb Leigh speaks with NPR affiliate KJZZ about how telepsychology can help patients in remote areas and cities alike.  Listen here:  http://kjzz.org/content/562416/telepsychology-helps-reduce-stigma-seeking-behavioral-counseling</p>
            <p><a href="https://akosmd.com/akos-dr-robb-leigh-discusses-telepsychology-benefits-kjzz/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2017/11/20171102_204754.jpg" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Akos receives award for 'Innovator of the Year- Startup Company'</h3>
            <p class="post-date">Nov 03, 2017</p>
            <p class="post-excerpt">AZ Technology Council and the Arizona Commerce Authority's 2017 Governor's Celebration of Innovation awards Akos with the 'Innovator of the Year- Startup Company'.  Read more: https://www.bizjournals.com/phoenix/news/2017/11/02/see-who-won-this-years-governors-celebration-of.amp.html</p>
            <p><a href="https://akosmd.com/akos-receives-award-innovator-year-startup-company/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2017/10/Akos-InBusinessPhx-October-2017.jpg" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>What is healthcare doing to make us healthier? We explain in the October issue of In Business Magazine, Phoenix</h3>
            <p class="post-date">Oct 11, 2017</p>
            <p class="post-excerpt">With Open Enrollment around the corner, more employers are considering alternative healthcare offerings to meet employee demand and cut down on costs. Employers, are you aware of how your  current...</p>
            <p><a href="https://akosmd.com/healthcare-make-us-healthier-explain-october-issue-business-magazine-phoenix/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2017/09/hr.com-logo.png" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Akos is featured in HR.com's cover story</h3>
            <p class="post-date">Sep 19, 2017</p>
            <p class="post-excerpt">HR.com recently featured Mellinda Lanier's article on "Healthcare Benefits in the Digital Age: Why Telemedicine is the New HR Trend." Visit: http://bit.ly/2f00tAK or download the article here: Healthcare Benefits in the...</p>
            <p><a href="https://akosmd.com/akos-featured-hr-coms-cover-story/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2017/09/NBAZ-Logo.png" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>NB|AZ helps Akos help our patients</h3>
            <p class="post-date">Sep 14, 2017</p>
            <p class="post-excerpt">National Bank of Arizona's financial assistance and their commitment to helping new businesses has allowed Akos' revolutionary telemedicine service to change the way you do healthcare. Learn more: http://arizonabusinesstoday.com/real-time-remedies/ Watch...</p>
            <p><a href="https://akosmd.com/nbaz-helps-akos-help-patients/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2017/09/Money-Radio-1510.png" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Akos' Dr. Leigh sits down with Money Radio to discuss Smart Savings Strategies on their program, "Business for Breakfast"</h3>
            <p class="post-date">Sep 06, 2017</p>
            <p class="post-excerpt">Listen here: [audio mp3="https://akosmd.com/app/uploads/2017/09/Dr.-Leigh-Money-Radio-Business-for-Breakfast-3.31.mp3"][/audio]</p>
            <p><a href="https://akosmd.com/akos-dr-leigh-sits-money-radio-discuss-smart-savings-strategies-program-business-breakfast/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2017/09/1080x1080-Instagram.jpg" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Akos offers free non-emergent medical care for residents of evacuation zones in Texas</h3>
            <p class="post-date">Sep 02, 2017</p>
            <p class="post-excerpt">In an effort to help those affected by Hurricane Harvey, Akos is offering free non-emergent medical care for residents of evacuation zones in Texas. Throughout September, patients in these areas...</p>
            <p><a href="https://akosmd.com/akos-offers-free-non-emergent-medical-care-residents-evacuation-zones-texas/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2017/08/download.png" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>How to Become the CEO of your Own Health</h3>
            <p class="post-date">Aug 25, 2017</p>
            <p class="post-excerpt">Ms. Career Girl features Akos in thier "CEO of Your Own Health" blog post. Read more here: http://www.mscareergirl.com/2017/08/25/how-to-become-the-ceo-of-your-own-health/</p>
            <p><a href="https://akosmd.com/become-ceo-health/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2017/08/HR-Daily-Advisor-2016-logo-no-tag-NEW.png" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Akos' Dr. Leigh Discusses Telehealth Benefits with HR Daily Advisor</h3>
            <p class="post-date">Aug 21, 2017</p>
            <p class="post-excerpt">Important details that employers should not overlook when integrating a telehealth program such as Akos into their business.  Read more here: http://hrdailyadvisor.blr.com/2017/08/21/telehealth-innovative-health-care-strategy-hr-employers/</p>
            <p><a href="https://akosmd.com/akos-dr-leigh-discusses-benefits-telehealth-hr-daily-advisor/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2017/08/CONNECT-WHITE-BACKGROUND-TM-copy.png" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Akos and Castle International Announce Strategic Partnership to Deliver Seamless Telehealth Solutions</h3>
            <p class="post-date">Aug 15, 2017</p>
            <p class="post-excerpt">                                                           ...</p>
            <p><a href="https://akosmd.com/akos-castle-international-announce-strategic-partnership-deliver-seamless-telehealth-solutions/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2017/08/yourlifearizona_orig.jpg" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Local Arizona Family share the benefits of using Akos</h3>
            <p class="post-date">Aug 11, 2017</p>
            <p class="post-excerpt">Our own Dr. Robb Leigh sits down with an Arizona mom on Your Life Arizona to share the benefits of choosing Akos, like getting immediate medical treatment from the comfort...</p>
            <p><a href="https://akosmd.com/dr-robb-leigh-sits-arizona-mom-erin-gunderson-tag-erin-life-z-share-benefits-choosing-akos-like-getting-immediate-medical-treatment-comfort/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2016/12/test_physician_square.jpg" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Akos Seeks Board-Certified Physicians in all 50 States to Help Expand Access to Virtual Healthcare Services</h3>
            <p class="post-date">Aug 05, 2017</p>
            <p class="post-excerpt">Telemedicine provider Akos announced  that it is hiring board-certified physicians, following it's state and nationwide launches in March, 2017.  According to founders Dr. Kishlay Anand and Dr. Swaraj Singh, the new...</p>
            <p><a href="https://akosmd.com/akos-seeks-board-certified-physicians-50-states-help-expand-access-virtual-healthcare-services/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2016/12/slide_1_img.png" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Akos named Arizona's healthcare game changer</h3>
            <p class="post-date">Aug 05, 2017</p>
            <p class="post-excerpt">Leading startup business site myventurepad.com highlights Akos as "Arizona's healthcare game changer."  Read the story here: http://myventurepad.com/startups-take-risk-telemedicine/</p>
            <p><a href="https://akosmd.com/akos-named-arizonas-healthcare-game-changer/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2017/08/Akos_UrgentCare_1200x628_heat_2-300x157.jpg" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Summer Health Hazards: Heat-related Illnesses and Prevention</h3>
            <p class="post-date">Aug 05, 2017</p>
            <p class="post-excerpt">Every year in the United States, an average of 658 deaths occur as a result of extreme heat with children, the elderly, outside laborers and chronic illness sufferers being the...</p>
            <p><a href="https://akosmd.com/summer-health-hazards-heat-related-illnesses-prevention/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2017/08/DSC_3960-300x214.jpg" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Akos Receives Top Honors at Annual Healthcare Leadership Awards</h3>
            <p class="post-date">Aug 05, 2017</p>
            <p class="post-excerpt">Healthcare Leaders PHOENIX – May 4, 2017 – Leading telemedicine provider Akos has been recognized as "Outstanding Medical Startup of the Year" in the 10th Annual Healthcare Leadership Awards presented by AZ...</p>
            <p><a href="https://akosmd.com/akos-receives-top-honors-annual-healthcare-leadership-awards/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2017/08/5-24-2017_AdobeStock_74179531-300x200.jpeg" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Sleep Your Way to Better Health</h3>
            <p class="post-date">Aug 05, 2017</p>
            <p class="post-excerpt">Wellness, Health and Healthy Sleep Habits There’s no better time to reflect on our sleeping habits and patterns than National Sleep Awareness Week.  While a good night’s sleep will help...</p>
            <p><a href="https://akosmd.com/sleep-way-better-health/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2017/08/ktar-logo.png" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>KTAR.com Spotlights How Telemedicine is Changing Healthcare</h3>
            <p class="post-date">Aug 05, 2017</p>
            <p class="post-excerpt">Telemedicine is Changing Healthcare Dr. Kishlay Anand sits down with KTAR to discuss the role that productivity, convenience, affordability and control are playing in helping telemedicine change the healthcare landscape....</p>
            <p><a href="https://akosmd.com/ktar-com-spotlights-telemedicine-changing-healthcare/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2016/12/network_employers_top_1-e1483733699304.jpg" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Picking the Right Telehealth Service for your Employees</h3>
            <p class="post-date">Aug 05, 2017</p>
            <p class="post-excerpt">It’s no secret that compensation and benefits packages are two major components job seekers take into consideration when making decisions about their careers. In today’s world, providing your workforce with...</p>
            <p><a href="https://akosmd.com/picking-right-telehealth-service-employees/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2017/08/Akos_UrgentCare_1200x628_sleep-300x157.jpg" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Allergies or Something Else?</h3>
            <p class="post-date">Aug 05, 2017</p>
            <p class="post-excerpt">Allergy season is in high swing. But while a runny nose, persistent cough, and skin irritation can often be chopped up to pesky allergies, they can also be symptoms of...</p>
            <p><a href="https://akosmd.com/allergies-something-else/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2016/12/providers_slide_3.png" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>When to Choose Telemedicine Over Traditional Medicine</h3>
            <p class="post-date">Aug 05, 2017</p>
            <p class="post-excerpt">When to schedule an online doctor visit? Telemedicine is growing at an astounding rate to meet the demands of modern healthcare. Yet even now, many patients have trouble deciding when...</p>
            <p><a href="https://akosmd.com/choose-telemedicine-traditional-medicine/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2017/08/5-23-2017_AdobeStock_60409548-300x215.jpeg" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>3 Reasons to Choose Akos for Your Next Doctor Visit</h3>
            <p class="post-date">Aug 05, 2017</p>
            <p class="post-excerpt">We’ve all been there: sore throat, stuffy nose and a pounding headache that makes you question getting out of bed. It’s either go into the office feeling miserable, or worse,...</p>
            <p><a href="https://akosmd.com/3-reasons-to-choose-akos-for-your-next-urgent-care-doctor-visit/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2016/12/test_square.jpg" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Local Physicians Launch Telemedicine Startup Akos</h3>
            <p class="post-date">Aug 05, 2017</p>
            <p class="post-excerpt">Leading business news source AZ Big Media highlights our recent statewide launch of Akos on their homepage. Here is a small excerpt: &nbsp; “For more than a year, we’ve envisioned...</p>
            <p><a href="https://akosmd.com/local-physicians-launch-telemedicine-startup-akos/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2017/01/our_team_top_panel2.jpg" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Akos Raises $1 Million for Local Take on App-based Telemedicine</h3>
            <p class="post-date">Aug 05, 2017</p>
            <p class="post-excerpt">Akos Telemedicine Launch MobiHealthNews sits down with founder, Kishlay Anand M.D. to discuss Akos' recent telemedicine launch. Read the article at MobiHealthNews. An excerpt: “In the current model for telehealth what...</p>
            <p><a href="https://akosmd.com/akos-raises-1-million-local-take-app-based-telemedicine/" class="read-more">read more</a></p>
          </div>
        </div>
      </div>
          <div class="row news-post">
        <div class="col-sm-4">
          <div class="post-image">
                        <img src="https://akosmd.com/app/uploads/2016/12/slide_1_img.png" alt="" />
                    </div>
        </div>
        <div class="col-sm-8">
          <div class="post-content">
            <h3>Virtual Healthcare Comes to Arizona</h3>
            <p class="post-date">Aug 05, 2017</p>
            <p class="post-excerpt">This week, Akos, the newest virtual healthcare provider, launched its telehealth platform offering a 360-degree solution for patients in Arizona, with plans to expand nationwide in the coming months. Developed...</p>
            <p><a href="https://akosmd.com/virtual-healthcare-comes-arizona/" class="read-more">read more</a></p>
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