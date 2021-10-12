<!DOCTYPE html>
<html lang="en">

<head>
    <title>Healthcare made easy</title>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('custom_css')
</head>

<body>
    @yield('mainContent')
    <!--FOOTER-->
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <img src="img/logo-white.png" width="150" class="img-fluid" alt="" />
                    <ul class="pt-5">
                        <li style="line-height: 30px">
                            1.844.900.AKOS <br />
                            hello@akosmd.com<br />
                            P.O. Box 41638<br />
                            Phoenix, AZ 8508<br />
                        </li>
                    </ul>                    
                </div>
                <div class="col-lg-2 mb-4">
                    <h3><a href="/">HOME</a></h3>
                    <ul>
                        <a href="/employers">EMPLOYERS</a>
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
                    <h3><a href="/onsiteclinics">ONSITE CLINICS</a></h3>
                </div>
                <div class="col-lg-2 mb-4">
                    <h3><a href="/onsiteclinics">URGENT CARE CENTER</a></h3>
                    <ul>
                        <a href="/onsiteclinics">PROVIDERS</a>
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

                <div class="col-lg-2 mb-4">
                    <h3><a href="/remotepatient">REMOTE PATIENT MONITORING</a></h3>
                    <h3><a href="/whowe">WHO WE ARE</a></h3>
                    <h3><a href="/news">NEWS</a></h3>
                </div>

                <div class="col-lg-3 text-left text-lg-right">
                    <div class="social-icons mb-5">
                        <a href="">
                            <img src="img/Icon%20awesome-facebook.svg" class="img-fluid" alt="" />
                        </a>
                        <a href="">
                            <img src="img/Icon%20awesome-twitter.svg" class="img-fluid" alt="" />
                        </a>
                        <a href="">
                            <img src="img/Icon%20awesome-instagram.svg" class="img-fluid" alt="" />
                        </a>
                        <a href="">
                            <img src="img/Icon%20awesome-linkedin.svg" class="img-fluid" alt="" />
                        </a>
                        <a href="">
                            <img src="img/Icon%20awesome-youtube.svg" class="img-fluid" alt="" />
                        </a>
                    </div>
                    <img src="img/hipaa_logo.png" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
        <!--COPYRIGHT-->
        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        Copyrights 2021 Akos. All rights reserved.
                    </div>
                    <div class="col-lg-6 text-left text-lg-right">
                        <a href="">Customer Support</a> <span class="vdivider">|</span>
                        <a href="">Terms of Use </a> <span class="vdivider">|</span>
                        <a href="">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
        <!--COPYRIGHT-->
    </div>
    <!--FOOTER-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(window).scrollTop() > 100) {
                    $(".header").addClass("addbg");
                } else {
                    $(".header").removeClass("addbg");
                }
            });

            AOS.init();


            $("#main-top .header .main-menu a.menudropitem").on('click', function () {
                $(this).toggleClass('open');
                $(this).next("#main-top .header .main-menu li .submenu-cont").toggleClass('open');
            });

            // var video = document.getElementById('bgvideop'); video.addEventListener('click', function () { video.play(); }, false);

            // $('video')[0].play();

            $(".navarrow").click(function () {
                $("html, body").animate(
                    {
                        scrollTop: $("#short-desc").offset().top,
                    },
                    1000
                );
            });

            $(".menu-toggle-btn").click(function () {
                $(this).toggleClass("open-toggle");
                $("#main-top .main-menu").toggleClass("show");
                $(".menu-close-btn").toggleClass("close-toggle");
            });

            $(".menu-close-btn").click(function () {
                $(this).toggleClass("close-toggle");
                $("#main-top .main-menu").toggleClass("show");
                $(".menu-toggle-btn").toggleClass("open-toggle");
            });

            $(".prev-btn-wslider").click(function () {
                wslider.slick("slickPrev");
            });

            $(".next-btn-wslider").click(function () {
                wslider.slick("slickNext");
            });

            var vsslider = $(".vsslider").slick({
                infinite: true,
                speed: 1000,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                pauseOnHover: false,
                dots: true,
                dotsClass: "vertical-dots",
                responsive: [
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                        },
                    },
                ],
            });

            var pmslider = $(".partnersmarque").slick({
                speed: 3000,
                autoplay: true,
                autoplaySpeed: 0,
                centerMode: true,
                cssEase: "linear",
                slidesToShow: 1,
                slidesToScroll: 1,
                variableWidth: true,
                infinite: true,
                initialSlide: 1,
                arrows: false,
                buttons: false,
            });
        });
        if($(window).width() < 760){
            $('#main-top .main-menu').css('overflow', 'scroll');
            $('#main-top .main-menu .menu-item .submenu-cont').css({'max-height':'400px', 'padding-left':'20px'});
        }
        else{
            $('#main-top .main-menu').css('overflow', 'unset');
            $('#main-top .main-menu .menu-item .submenu-cont').css('max-height', '0');
        }
        $(window).on('resize', function(){
            var win = $(this);
            if (win.width() <= 760) {
                $('#main-top .main-menu').css('overflow', 'scroll');
                $('#main-top .main-menu .menu-item .submenu-cont').css({'max-height':'400px', 'padding-left':'20px'});
            }else{
                $('#main-top .main-menu').css('overflow', 'unset');
                $('#main-top .main-menu .menu-item .submenu-cont').css('max-height', '0');
            }
        });
    </script>
    @yield('custom_js')
</body>

</html>