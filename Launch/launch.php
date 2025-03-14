<!DOCTYPE html>
<html lang="en" class=" js csstransforms csstransforms3d csstransitions js csstransitions ncribzgu idc0_349">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>ICEST 2025</title>
    <!-- ===================== META ===================== -->
    <link rel="icon" href="../images/logos/Conclave_Logo.png" type="image/png">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://localhost:5001/Content/assets/img/favicon.png">
    <!-- ===================== STYLE ===================== -->
    <link rel="stylesheet" href="../assests/files/slick.min.css">
    <link rel="stylesheet" href="../assests/files/bootstrap-grid.css">
    <link rel="stylesheet" href="../assests/files/all.css">
    <link rel="stylesheet" href="../assests/files/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../assests/files/style.css">
    <link rel="stylesheet" href="../style.css">

    <!-- ====================== aos animation ================== -->
    <link href="../assests/aos/aos.css" rel="stylesheet">
    <script src="../assests/aos/aos.js"></script>



    <script src="../assests/files/jquery-2.2.4.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../assests/files/animate.css">
    <link rel="stylesheet" type="text/css" href="../assests/files/animate.css">
    <link rel="stylesheet" type="text/css" href="../assests/files/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="../assests/files/settings.css">
    <link rel="stylesheet" type="text/css" href="../assests/files/style_002.css">
    <link rel="stylesheet" type="text/css" href="../assests/files/responsive.css">

    <!-- ===================== toster ===================== -->
    <link href="../assests/files/toastr.min.css" rel="stylesheet">
    <script src="../assests/files/toastr.min.js"></script>
    <script src="../assests/files/toastr.init.js"></script>
    <script type="module" src="../assests/files/hook.js"></script>



</head>

<body data-new-gr-c-s-check-loaded="8.908.0" data-gr-ext-installed="" cz-shortcut-listen="true">
    <!-- Curtain Elements -->
    <div class="curtain-container">
        <div class="curtain curtain-left">
            <div class="curtain-content">
            </div>
        </div>
        <div class="curtain curtain-right">
            <div class="curtain-content">
            </div>
        </div>
    </div>


    <!--===================== HEADER =====================-->
    <?php

    $headPath = "../";
    include("../components/topHeader.php");


    $menuPath = "../";
    include("../components/navmenu.php"); ?>
    <!--=================== HEADER END ===================-->

    <style>
        .hero {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            background: black;
        }

        .hero video {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: blur(5px);
        }

        /* Curtain Animation Styles */
        .curtain-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            z-index: 999999999999999;
            pointer-events: none;
        }

        .curtain {
            position: absolute;
            top: 0;
            width: 50%;
            height: 100vh;
            /* Solid red gradient background */
            background: linear-gradient(180deg, #990000 0%, #800000 50%, #660000 100%);
            transition: transform 3.5s cubic-bezier(0.4, 0, 0.2, 1);
            background-image:
                repeating-linear-gradient(0deg,
                    rgba(255, 255, 255, 0.05) 0px,
                    rgba(255, 255, 255, 0.05) 1px,
                    transparent 1px,
                    transparent 15px),
                repeating-linear-gradient(90deg,
                    rgba(255, 255, 255, 0.03) 0px,
                    rgba(255, 255, 255, 0.03) 1px,
                    transparent 1px,
                    transparent 45px);
            /* Deeper shadow for more depth */
            box-shadow: inset 0 0 70px rgba(0, 0, 0, 0.8);
        }

        .curtain::after {
            content: '';
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            /* Darker gradient overlay for depth */
            background: linear-gradient(90deg,
                    rgba(0, 0, 0, 0.9) 0%,
                    rgba(0, 0, 0, 0.4) 20%,
                    rgba(0, 0, 0, 0.4) 80%,
                    rgba(0, 0, 0, 0.9) 100%);
        }

        .curtain-left {
            left: 0;
            transform-origin: left;
            border-right: 4px solid rgba(255, 200, 200, 0.4);
            background: rgba(0, 0, 0, 0.8);
        }

        .curtain-right {
            right: 0;
            transform-origin: right;
            border-left: 4px solid rgba(255, 200, 200, 0.4);
            background: rgba(0, 0, 0, 0.8);

        }

        .curtain.open {
            transform: scaleX(0);
        }

        /* Enhanced wave effect at the bottom */
        .curtain::before {
            content: '';
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100px;
            background: linear-gradient(180deg,
                    transparent 0%,
                    rgba(80, 0, 0, 0.6) 100%);
            animation: waveEffect 3s infinite alternate ease-in-out;
        }

        @keyframes waveEffect {
            from {
                transform: skewY(-1.5deg);
            }

            to {
                transform: skewY(1.5deg);
            }
        }

        /* Brighter content for better visibility */
        .curtain-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
            opacity: 1;
            transition: opacity 1s;
            width: 100%;
            z-index: 2;
        }

        .curtain-content img {
            max-width: 150px;
            margin-bottom: 20px;
            filter: drop-shadow(0 0 20px rgba(255, 255, 255, 0.5));
        }

        .curtain-content p {
            font-size: 1.5em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            font-family: 'Arial', sans-serif;
            margin: 0;
        }

        .curtain.open .curtain-content {
            opacity: 0;
        }

        /* Fix the launchtext z-index issue */
        .lauchtext {
            z-index: 999;
            color: white;
            position: absolute;
            top: 40%;
            text-align: center;
            -webkit-text-stroke: 0.5px black;
        }
    </style>
    <script>
        setTimeout(() => {
            window.location.href = '../';
        }, 6000);
    </script>
    <section class="banner2" id="home">

        <div class="mainSlider" style="max-height: none; overflow: visible; height: 80vh;">
            <!-- <div class="tp-banner1 revslider-initialised tp-simpleresponsive" id="revslider-784" style="height: 100%; max-height: none; backface-visibility: hidden; transform-style: flat; transform: translate3d(0px, 0px, 0px);">
                <ul style="display: block; overflow: hidden; width: 100%; height: 100%; max-height: none;" class="tp-revslider-mainul">
                    <li data-transition="cube" data-slotamount="7" data-masterspeed="500" class="tp-revslider-slidesli active-revslide current-sr-slide-visible" style="width: 100%; height: 100%; overflow: hidden; z-index: 20; visibility: inherit; opacity: 1;">
                        <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="center center" data-kenburns="undefined" data-easeme="undefined" data-bgfit="cover" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                            <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="../images/pace.jpeg" data-src="../images/PACEaDMIN.png" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url(../images/PACEaDMIN.png); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                <video autoplay loop muted>
                                    <source src="../images/homeVideo.mp4" type="video/mp4">
                                  </video>
                                <img class="homeImg" src="../images/logos/ICEST_Logo.png" alt="">
                                <h2 style="position: absolute;right: 0;left: 0;" class="homeTxt">INTERNATIONAL CONCLAVE ON ENGINEERING SCIENCES AND TECHNOLOGY</h2>
                                <video autoplay loop muted>
                                    <source src="../Images/videos/videoplayback.mp4" type="video/mp4">
                            </div>
                        </div>

                    </li>


                </ul>
                <div class="tp-loader spinner0" style="display: none;">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
                <div class="tp-bannertimer" style="visibility: visible; width: 94.15%; transform: translate3d(0px, 0px, 0px);"></div>
            </div> -->
            <div class="hero">
                <video autoplay loop muted>
                    <source src="../images/homeVideo.mp4" type="video/mp4">
                </video>
                <div class="overlay">
                    <img class="homeImg" src="../images/logos/ICEST_Logo.png" alt="">
                    <h2 style="position: absolute;right: 0;left: 0;" class="lauchtext">INTERNATIONAL CONCLAVE ON ENGINEERING SCIENCES AND TECHNOLOGY - ICEST'25</h2>

                    <div class="homeBtns">

                    </div>
                </div>
    </section>
    <style>
        .lauchtext {
            z-index: 0;
            color: white;
            position: absolute;
            top: 40%;
            text-align: center;
            -webkit-text-stroke: 0.5px black;


        }
    </style>
    <!--=================================== home pge end ======================= -->

    <!-- ======================================= news start ================================ -->
    <!-- <div class=" .newsContainer">
        <div>
            <marquee class="marquee" onmouseover="this.stop();" onmouseout="this.start();" direction="left" behavior="scroll" scrollamount="7">
                The conference, which was a week-long gathering of industry experts, researchers, and innovators from around the world, has officially ended after insightful presentations, engaging discussions, and networking opportunities aimed at advancing knowledge and fostering collaboration in various fields.            </marquee>
        </div>
    </div> -->


    <!-- ======================================= news end ================================ -->

    <!--  ==================== about start ========================= -->
    <section style="background: transparent;" class="our-speakers speakers-home-two" id="Speakers">
        <div class="bg-img" style="background-image: url(/Content/assets/img/bg-team-home-2.svg);"></div>
        <span class="title-position title-position-left">about us </span>
        <span class="title-position title-position-right">about us</span>
        <div class="container">
            <h2 data-aos="fade-up" data-aos-delay="50" style="margin-top: -90px;" class="title-line">About PACE CONCLAVE</h2><br>
            <p style="text-align: justify;margin:10px 0 10px 0" data-aos="fade-up" data-aos-delay="50">
                PACE Conclave is an initiative by P.A College of Engineering, aiming to bring together academia, industry, and research per-sonnel through a series of events. The International Conclave on Engineering Science & Technology (ICEST 25) is the inaugural event in this endeavor. Various conferences will be conducted under the umbrella of ICEST 25.
            </p>
            <br><br>




            <div style="margin-top:20px" class="our-speakers-cover">
                <h3 data-aos="fade-up" data-aos-delay="50" class="text-center title-line-left">ABOUT ICEST</h3>
                <p style="text-align: justify;">ICEST (International conclave on Engineering Sciences and Technology)is an international peer reviewed event to bring together academia, engineers, students, and researchers in the field of Engineering, Science and Technology, making it an ideal platform for sharing knowledge, fostering industry-academic collaborations, and evaluating emerging technologies from around the world. Participants will be able to exchange ideas in order to profit from each other's contributions, as well as learn about current research being conducted throughout the world. The conference's main purpose is to support research and development activities that will be needed in the future, with an emphasis on all potential and recent fields of Engineering. Several well-known professionals in the fields of Engineering will share their knowledge and experience with the attendees. This conference will serve as a global platform for the presentation of novel research findings, as well as the exchange and dissemination of creative and unique research experiences. The conference aims to enhance the state-of-the-art in all fields of Engineering by encouraging novel, high-quality research discoveries and innovative solutions to upcoming and challenging engineering problems.</p>

            </div>


        </div>
    </section>


    <!--================= S-SCHEDULE-Program =================-->
    <div class="container">
        <h2 data-aos="fade-up" data-aos-delay="50" class="title-line">Schedule of Event</h2>
        <!-- <div class=" .newsContainer">
            <div>
                <marquee class="marquee" onmouseover="this.stop();" onmouseout="this.start();" direction="left" behavior="scroll" scrollamount="7">
                    The deadline for paper submission has been extended to March 31st, and the registration deadline has been extended to April 5th.
                </marquee>
            </div>
        </div> -->
        <!--================= OUR-HISTORY END =================-->
        <section class="our-history s-title-bg">
            <span class="title-bg">Our Publications</span>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="our-history-left">
                            <h2 data-aos="fade-up" data-aos-delay="50" class="title-line-left">Publication</h2>
                            <p>
                                All the accepted papers will be published in conference proceedings with ISBN
                                Selected papers will be published in reputed journals (based on norms).
                            </p>
                            <h3 class="title-relevant-link">Relevant Links</h3>
                            <ul style="list-style-type:square;" class="relevent-link">
                                <li class="relevent-link"><a class="relevent-link" href="../Page/Register">Register for ICEST25</a></li>
                                <li><a class="relevant-link" href="../Page/Submission">Paper Submission</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="history-info-cover">
                            <div class="history-info">
                                <h4 data-aos="fade-up" data-aos-delay="50" class="title"><span>23rd January 2025 <br>
                                    </span> Release of Brochure & Call for papers</h4>
                            </div>
                            <div class="history-info">
                                <h4 data-aos="fade-up" data-aos-delay="50" class="title"><span>30th March 2025 <br>
                                    </span>Paper Submission Closes</h4>
                            </div>
                            <div class="history-info">
                                <h4 data-aos="fade-up" data-aos-delay="50" class="title"><span>5th April 2025<br>
                                    </span>Notification of Acceptance</h4>
                            </div>
                            <div class="history-info">
                                <h4 data-aos="fade-up" data-aos-delay="50" class="title"><span>10th April 2025 <br>
                                    </span> Last Date of Registration</h4>
                            </div>
                            <div class="history-info">
                                <h4 data-aos="fade-up" data-aos-delay="50" class="title"><span>15th April 2025 <br>
                                    </span> Final Camera Ready paper</h4>
                            </div>
                            <div class="history-info">
                                <h4 data-aos="fade-up" data-aos-delay="50" class="title"><span>07th May 2025 <br>
                                    </span> ICEST 25 - Inaugration</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================= OUR-HISTORY END =================-->
        <!--================== OVERVIEW END ==================-->
    </div>

    <!--================= S-SCHEDULE-Program End =================-->


    <!--================= S-themes =================-->
    <section class="s-schedule-event schedule-event-home-two" id="Events">
        <span class="title-position title-position-left">Program</span>
        <div class="container">
            <h2 data-aos="fade-up" data-aos-delay="50" class="title-line">Themes</h2>
            <ul class="schedule-cover">
                <li>
                    <div data-aos="fade-up" data-aos-delay="50" class="schedule-header">
                        <div class="schedule-time">Theme 1</div>
                        <div class="schedule-title">MECH-TECH: INTERNATIONAL CONFERENCE ON EMERGING TRENDS IN MECHANICAL ENGINEERING</div>
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </div>
                    <div class="schedule-content">
                        <ul>
                            <li> ↪ Design and production</li>
                            <li> ↪ Thermal sciences</li>
                            <li> ↪ Manufacturing and machining</li>
                            <li> ↪ Energy and environment</li>
                            <li> ↪ Robotics and automation</li>
                            <li> ↪ Materials and modeling</li>
                            <li></li> <br>
                            <li><a class="btn" href="../Page/Themes/MechTech/">Know more</a> <a style="background:  rgb(224, 3, 3);color: white;" class="btn" href="../Page/Themes/MechTech/Submit">Submit Now</a></li>
                        </ul>

                    </div>
                </li>
                <li>

                    <div data-aos="fade-up" data-aos-delay="50" class="schedule-header">
                        <div class="schedule-time">Theme 2</div>
                        <div class="schedule-title">IC ICE: INTERNATIONAL CONCLAVE - IN CIVIL ENGINEERING</div>
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </div>
                    <div class="schedule-content">
                        <ul>
                            <li> ↪ Transportation and Geotechnical Engineering</li>
                            <li> ↪ Building Materials and Construction Technology</li>
                            <li> ↪ Architecture and Planning</li>
                            <li> ↪ Structural Engineering</li>
                            <li> ↪ Sustainability and Environmental Engineering</li>
                            <li> ↪ Water Resources and Irrigation Engineering</li>
                            <li></li><br>
                            <li><a class="btn" href="../Page/Themes/ICICE/">Know more</a> <a style="background:  rgb(224, 3, 3);color: white;" class="btn" href="../Page/Themes/ICICE/Submit/">Submit Now</a></li>
                        </ul>

                    </div>
                </li>
                <li>
                    <div data-aos="fade-up" data-aos-delay="50" class="schedule-header">
                        <div class="schedule-time">Theme 3</div>
                        <div class="schedule-title">DIGITAREV 2025: UNVEILING THE NEXT WAVE – INTERNATIONAL CONFERENCE ON <br>DIGITAL RENAISSANCE</div>
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </div>
                    <div class="schedule-content">
                        <ul>

                            <li> ↪ Data Science and Machine learning</li>
                            <li> ↪ Cloud and Grid computing</li>
                            <li> ↪ Blockchain technologies</li>
                            <li> ↪ Network security & Cryptography</li>
                            <li> ↪ Computational sciences</li>
                            <li> ↪ Cyber physical systems</li>

                            <li></li><br>
                            <li><a class="btn" href="../Page/Themes/Digitarev/">Know more</a> <a style="background:  rgb(224, 3, 3);color: white;" class="btn" href="../Page/Themes/Digitarev/Submit/">Submit Now</a></li>
                        </ul>

                    </div>
                </li>
                <li>
                    <div data-aos="fade-up" data-aos-delay="50" class="schedule-header">
                        <div class="schedule-time">Theme 4</div>
                        <div class="schedule-title">SEMI-COMM TECH SUMMIT: INTERNATIONAL CONFERENCE ON EMERGING TRENDS IN ELECTRONICS AND COMMUNICATION</div>
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </div>
                    <div class="schedule-content">
                        <ul>
                            <li> ↪ Wireless Communication</li>
                            <li> ↪ Embedded System</li>
                            <li> ↪ Signal and Image Processing</li>
                            <li> ↪ Electromagnetics and Antenna Design</li>
                            <li> ↪ VLSI and MEMS</li>
                            <li> ↪ Communication networks and Security</li>
                            <li></li><br>
                            <li><a class="btn" href="../Page/Themes/SCTS/">Know more</a> <a style="background:  rgb(224, 3, 3);color: white;" class="btn" href="../Page/Themes/SCTS/Submit/">Submit Now</a></li>
                        </ul>

                    </div>
                </li>
                <li>
                    <div data-aos="fade-up" data-aos-delay="50" class="schedule-header">
                        <div class="schedule-time">Theme 5</div>
                        <div class="schedule-title">BIOTRENDCON 2025: INTERNATIONAL CONFERENCE ON EMERGING TRENDS IN BIOTECHNOLOGY</div>
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </div>
                    <div class="schedule-content">
                        <ul>
                            <li> ↪ Food technology</li>
                            <li> ↪ Drug design & Nanobiotechnology</li>
                            <li> ↪ Agricultural biotechnology</li>
                            <li> ↪ Clinical research</li>
                            <li> ↪ Environmental engineering</li>
                            <li> ↪ Bioprocessing</li>
                            <li></li><br>
                            <li><a class="btn" href="../Page/Themes/Biotrendcon/">Know more</a> <a style="background:  rgb(224, 3, 3);color: white;" class="btn" href="../Page/Themes/Biotrendcon/Submit/">Submit Now</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="schedule-header">
                        <div class="schedule-time">Theme 6</div>
                        <div class="schedule-title">ARTELLIGENCE 2025: INTERNATIONAL CONFERENCE CONFERENCE ON ARTIFICIAL INTELLIGENCE</div>
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </div>
                    <div class="schedule-content">
                        <ul>
                            <li> ↪ Innovation in AI, Machine learning, and Data science</li>
                            <li> ↪ Intelligent video analytics, Computer vision and Signal processing</li>
                            <li> ↪ AI and IoT integration in Smart Systems</li>
                            <li> ↪ AI in Robotics, Autonomous Systems, and Healthcare</li>
                            <li> ↪ AI for Sustainable technologies and Responsible ML</li>
                            <li> ↪ Natural Language Processing, Ai Communication, and Ethics</li>
                            <li></li><br>
                            <li><a class="btn" href="../Page/Themes/Artelligence/">Know more</a> <a style="background: rgb(170, 0, 0);color: white;" class="btn" href="../Page/Themes/Artelligence/Submit/">Submit Now</a></li>
                        </ul>

                    </div>
                </li>
                <li>
                    <div class="schedule-header">
                        <div class="schedule-time">Theme 7</div>
                        <div class="schedule-title">ICIBS 2025: INTERNATIONAL CONFERENCE IN BASIC & APPLIED SCIENCES</div>
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </div>
                    <div class="schedule-content">
                        <ul>
                            <li> ↪ Chemical sciences</li>
                            <li> ↪ Materials chemistry and polymers</li>
                            <li> ↪ Discrete Mathematics</li>
                            <li> ↪ Applied Science Mathematics</li>
                            <li> ↪ Nanotechnology</li>
                            <li> ↪ Applied Physics</li>
                            <li></li><br>
                            <li><a class="btn" href="../Page/Themes/ICIBS/">Know more</a> <a style="background: rgb(170, 0, 0);color: white;" class="btn" href="../Page/Themes/ICIBS/Submit/">Submit Now</a></li>
                        </ul>

                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--=============== S-themes END ===============-->


    <!--===================== S-association =====================-->
    <div class="container">
        <section class=" s-title-bg">
            <span class="title-bg">Partners</span>
            <div class="container">
                <h2 data-aos="fade-up" data-aos-delay="50" class="title-line">Our Partner</h2>
                <div class="">
                    <div class="partImages" style="display:flex;justify-content:center">
                        <img data-aos="fade-right" data-aos-delay="50" height="100" src="../images/logos/presidecy-university.png" alt="">
                        <!--  <img data-aos="fade-right" data-aos-delay="100" height="100" src="../images/logos/westlondon.png" alt="">-->

                    </div>
                </div>

            </div>
        </section>

    </div>


    <!--================== S-association END ==================-->



    <!--===================== FOOTER =====================-->
    <footer>
        <div class="container">
            <div class="row">
                <div data-aos="fade-up" data-aos-delay="50" class="col-12 col-md-4">
                    <a href="https://localhost:5001/ICEST/index.html" class="logo-footer">
                        <div class="logo-text"><span>PACE</span>CONCLAVE</div>
                    </a>
                    <div style="text-align: justify;" class="footer-text">
                        PACE Conclave, initiated by P.A College of Engineering, unites academia, industry, and research through events. The inaugural event, International Conclave on Engineering Science & Technology (ICEST 25).
                    </div>
                    <ul class="soc-link">
                        <li><a target="_blank" href="https://www.facebook.com/pacemglr/"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/pacemangalore"><i class="fab fa-twitter"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/pacemangalore_official/"><i class="fab fa-instagram"></i></a></li>
                        <li><a target="_blank" href="https://youtu.be/nXT8whgZhfI?si=4EcAVW16Hj-2Y_w1"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div data-aos="fade-up" data-aos-delay="50" class="col-12 col-sm-6 col-md-4">
                    <h6>Contacts</h6>
                    <ul class="footer-contacts">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <a href="https://g.page/PACEMangalore?share">PA College Of Engineering <br>Mangalore,
                                INDIA</a>
                        </li>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <a href="tel:9986096513">+91 9986096513</a>
                            <a href="tel: 8884975771">+91 8884975771</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <a href="mailto:info@paceconlave.com ">ICEST25@pace.edu.in</a>
                        </li>
                    </ul>
                </div>
                <div data-aos="fade-up" data-aos-delay="50" class="col-12 col-sm-6 col-md-4 insta-list-cover">
                    <h6>PACE GROUPS</h6>
                    <ul class="insta-list">
                        <li><a target="_blank" href="https://www.pace.edu.in/"><img class="rx-lazy rx-lazy_item" src="../../assests/files/PACE%20Group.png" alt="social"></a></li>
                        <li><a target="_blank" href="https://www.pace.edu.in/"><img class="rx-lazy rx-lazy_item" src="../../assests/files/P.A.%20Educational%20Trust.png" alt="social"></a></li>
                        <li><a target="_blank" href="https://cbsabudhabi.com/"><img class="rx-lazy rx-lazy_item" src="../../assests/files/CBS.png" alt="social"></a></li>
                        <li><a target="_blank" href="https://gulfasianenglishschool.com/"><img class="rx-lazy rx-lazy_item" src="../../assests/files/GAES.png" alt="social"></a></li>
                        <li><a target="_blank" href="https://iiss.ae/"><img class="rx-lazy rx-lazy_item" src="../../assests/files/IIS.png" alt="social"></a></li>
                        <li><a target="_blank" href="https://pacesharjah.com/"><img class="rx-lazy rx-lazy_item" src="../../assests/files/PACEs.png" alt="social"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row footerCredContent">
                    <div class="col-12 col-md-4">
                        <div class="copyright">© 2025. <a target="_blank" href="#">PACE CONCLAVE</a>. All Rights Reserved.</div>
                    </div>
                    <div class="footerCredits"><a href="https://codewizy.in"><img src="../images/logos/codewizycredits.png" alt="developed by CodeWizy"></a></div>
                </div>
            </div>
        </div>
    </footer>
    <!--=================== FOOTER END ===================-->
    <!--===================== TO TOP =====================-->
    <a class="to-top active" href="#home">
        <i class="fa fa-chevron-up" aria-hidden="true"></i>
    </a>
    <!--=================== TO TOP END ===================-->
    <!--===================== SCRIPT	=====================-->
    <!-- JQUERY JAVASCRIPT -->
    <script src="../assests/files/masonry.pkgd.min.js"></script>
    <script src="../assests/files/jquery.fancybox.min.js"></script>
    <script src="../assests/files/slick.min.js"></script>
    <script src="../assests/files/rx-lazy.js"></script>
    <script src="../assests/files/scripts.js"></script>
    <script src="../assests/files/contact-form-script.js"></script>
    <!-- toastr init -->
    <script src="../assests/files/jquery.min.js"></script>
    <script src="../assests/files/jquery-ui.js"></script>



    <script type="text/javascript" src="../assests/files/jquery.js"></script>
    <script type="text/javascript" src="../assests/files/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assests/files/mixer.js"></script>
    <script type="text/javascript" src="../assests/files/wow.min.js"></script>
    <script type="text/javascript" src="../assests/files/jquery.appear.js"></script>
    <script type="text/javascript" src="../assests/files/prettyPhoto.js"></script>
    <script type="text/javascript" src="../assests/files/jquery.shuffle.min.js"></script>
    <script type="text/javascript" src="../assests/files/owl.carousel.js"></script>
    <script type="text/javascript" src="../assests/files/mixer.js"></script>
    <script type="text/javascript" src="../assests/files/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="../assests/files/modernizr.custom.js"></script>
    <script type="text/javascript" src="../assests/files/classie.js"></script>
    <script type="text/javascript" src="../assests/files/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="../assests/files/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="../assests/files/theme.js"></script>
    <script src="../assests/aos/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!--
<script> alert("The conference, which was a week-long gathering of industry experts, researchers, and innovators from around the world, has officially ended after insightful presentations, engaging discussions, and networking opportunities aimed at advancing knowledge and fostering collaboration in various fields.");</script>

<script> alert("The conference, which was a week-long gathering of industry experts, researchers, and innovators from around the world, has officially ended after insightful presentations, engaging discussions, and networking opportunities aimed at advancing knowledge and fostering collaboration in various fields.");</script> -->
    <div id="sp-installed"></div>

    <script>
        // Add curtain animation
        document.addEventListener('DOMContentLoaded', function() {
            // Add a longer delay before opening the curtains
            setTimeout(function() {
                const curtains = document.querySelectorAll('.curtain');
                curtains.forEach(function(curtain) {
                    curtain.classList.add('open');
                });

                // Remove the curtain container after animation
                setTimeout(function() {
                    const container = document.querySelector('.curtain-container');
                    if (container) {
                        container.style.display = 'none';
                    }
                }, 3500); // Match this with the CSS transition duration
            }, 1500);
        });
    </script>
</body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>