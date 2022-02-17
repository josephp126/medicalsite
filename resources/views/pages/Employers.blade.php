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
                <div class="col-lg-6">
                    <h2 data-aos="fade-right">
                        Always on call, <br>
                        so you never fall behind
                    </h2>
                    <h6 data-aos="fade-right" data-aos-offset="0" data-aos-delay="300">
                        Improve the health of your employees with Akos
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
    <div id="bottom4" class="bottom4-frow bottom4-frow-emp">
        <div class="container">
            <div class="row">
            <div class="col-lg-5">
                <div class="item item-blue">
                <h3 class="section-title">Improve Corporate Health</h3>
                <p class="pt-4">
                    Akos provides 24/7/365 access to care, with same day
                    appointment for urgent care. We also offer extended office
                    visits with dedicated primary care provider. The Akos care
                    model reduces the overall pocket spend and offers wellness and
                    reward programs to promote employee health and well being.
                </p>
                <a href="for-employers.html" class="btn-cta-outline-white mt-4">Employers</a>
                </div>
            </div>
            <div class="col-lg-6 d-block d-lg-none mt-4">
                <img
                src="img/doc-patient-employer.jpg"
                style="width: 100%"
                alt=""
                />
            </div>
            </div>
        </div>
    </div>

    <div id="healthcare-solutions">
        <div class="container text-center">
            <div class="row">
            <div class="col-12">
                <h3 class="section-title">
                    Comprehensive Healthcare Solutions
                </h3>
            </div>
            </div>

            <div class="row sols-row pt-5 mt-4">
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="item" style="background-image: url('img/hc-solutions/virtual-hc.jpg');">
                <h6>Virtual <br>Primary Care</h6>
                <a href="/vpc"><span>Learn More</span> <img src="img/rt-arrow-white.svg" width="12" class="ml-2" alt=""></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="item" style="background-image: url('img/hc-solutions/compensation-hc.jpg');">
                <h6>Worker's <br>Compensation</h6>
                <a href="/workerscompensation"><span>Learn More</span> <img src="img/rt-arrow-white.svg" width="12" class="ml-2" alt=""></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="item" style="background-image: url('img/hc-solutions/medclinics-hc.jpg');">
                <h6>Akos Med <br>Clinics</h6>
                <a href="/onsiteclinics"><span>Learn More</span> <img src="img/rt-arrow-white.svg" width="12" class="ml-2" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <div id = "employers_akos_table">
        <div class="row">
            <div class="col-md-4 description">
                <p class="title">
                    Akos vs. Competition
                </p>
                <hr></hr>
                <p class="content">
                    Akos delivers an industry-leading VPC<br>
                    solution which goes well beyond<br>
                    traditional telemedicine.<br><br>
                    From a healthcare chatbot to a<br>
                    comprehensive connected care<br>
                    platform, Akos offers multiple<br>
                    integration features to accommodate<br>
                    the healthcare needs of any patient<br>
                    or employer.<br><br>
                    Moreover, Akos is disrupting the<br>
                    digital health revolution with AI-<br>
                    powered virtual med clinics. These<br>
                    centers expand access to high-quality<br>
                    healthcare by providing convenient<br>
                    access points for patients.<br><br>
                    No other virtual health provider was<br>
                    delivering a closed loop continuum of<br>
                    care under one platform... until now.
                </p>
            </div>
            <div class="col-md-8">
                <table>
                    <thead align="center">
                        <tr>
                            <th style="width: 9%"></th>
                            <th style="width: 10%; background-color:#73bfca"><img src="{{asset('img/for-employers/logo-table.png')}}" /></th>
                            <th style="width: 10%; background-color:#4ea1b8">Telehealth</th>
                            <th style="width: 10%; background-color:#327499">Dpc Brick &<br>Mortar</th>
                            <th style="width: 10%; background-color:#2b5681">Onsite</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="body-title">24/7 Access</td>
                            <td class="akos"><img src="img/for-employers/akos-icon.svg" class="table-akos" alt="" /></td>
                            <td class="telehealth"><img src="img/for-employers/telehealth-icon.svg" class="table-telehealth" alt="" /></td>
                            <td class="dpc"></td>
                            <td class="onsite"></td>
                        </tr>
                        <tr>
                            <td class="body-title">1:1 PCP Relationship</td>
                            <td class="akos"><img src="img/for-employers/akos-icon.svg" class="table-akos" alt="" /></td>
                            <td class="telehealth"></td>
                            <td class="dpc"><img src="img/for-employers/dpc-icon.svg" class="table-dpc" alt="" /></td>
                            <td class="onsite"><img src="img/for-employers/onsite-icon.svg" class="table-onsite" alt="" /></td>
                        </tr>
                        <tr>
                            <td class="body-title">Chronic Disease<br>Management</td>
                            <td class="akos"><img src="img/for-employers/akos-icon.svg" class="table-akos" alt="" /></td>
                            <td class="telehealth"></td>
                            <td class="dpc"><img src="img/for-employers/dpc-icon.svg" class="table-dpc" alt="" /></td>
                            <td class="onsite"><img src="img/for-employers/onsite-icon.svg" class="table-onsite" alt="" /></td>
                        </tr>
                        <tr>
                            <td class="body-title">Care Navigation</td>
                            <td class="akos"><img src="img/for-employers/akos-icon.svg" class="table-akos" alt="" /></td>
                            <td class="telehealth"></td>
                            <td class="dpc"></td>
                            <td class="onsite"></td>
                        </tr>
                        <tr>
                            <td class="body-title">$0 Copay PCP</td>
                            <td class="akos"><img src="img/for-employers/akos-icon.svg" class="table-akos" alt="" /></td>
                            <td class="telehealth"></td>
                            <td class="dpc"><img src="img/for-employers/dpc-icon.svg" class="table-dpc" alt="" /></td>
                            <td class="onsite"><img src="img/for-employers/onsite-icon.svg" class="table-onsite" alt="" /></td>
                        </tr>
                        <tr>
                            <td class="body-title">Onsite / Near-site</td>
                            <td class="akos"><img src="img/for-employers/akos-icon.svg" class="table-akos" alt="" /></td>
                            <td class="telehealth"></td>
                            <td class="dpc"></td>
                            <td class="onsite"><img src="img/for-employers/onsite-icon.svg" class="table-onsite" alt="" /></td>
                        </tr>
                        <tr>
                            <td class="body-title">Employer Dashboard</td>
                            <td class="akos"><img src="img/for-employers/akos-icon.svg" class="table-akos" alt="" /></td>
                            <td class="telehealth"></td>
                            <td class="dpc"></td>
                            <td class="onsite"></td>
                        </tr>
                        <tr>
                            <td class="body-title">Worker's Compensation</td>
                            <td class="akos"><img src="img/for-employers/akos-icon.svg" class="table-akos" alt="" /></td>
                            <td class="telehealth"></td>
                            <td class="dpc"></td>
                            <td class="onsite"></td>
                        </tr>
                        <tr>
                            <td class="body-title">Employer Reporting</td>
                            <td class="akos"><img src="img/for-employers/akos-icon.svg" class="table-akos" alt="" /></td>
                            <td class="telehealth"></td>
                            <td class="dpc"></td>
                            <td class="onsite"></td>
                        </tr>
                        <tr>
                            <td class="body-title">Connected Care Platform</td>
                            <td class="akos"><img src="img/for-employers/akos-icon.svg" class="table-akos" alt="" /></td>
                            <td class="telehealth"></td>
                            <td class="dpc"></td>
                            <td class="onsite"></td>
                        </tr>
                    </tbody>
                </table>
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