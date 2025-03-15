<!DOCTYPE html>
<html lang="en" class=" js csstransforms csstransforms3d csstransitions js csstransitions ncribzgu idc0_349">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>ICEST 2025</title>
    <!-- ===================== META ===================== -->
    <link rel="icon" href="./images/logos/Conclave_Logo.png" type="image/png">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://localhost:5001/Content/assets/img/favicon.png">
    <!-- ===================== STYLE ===================== -->
    <link rel="stylesheet" href="./assests/files/slick.min.css">
    <link rel="stylesheet" href="./assests/files/bootstrap-grid.css">
    <link rel="stylesheet" href="./assests/files/all.css">
    <link rel="stylesheet" href="./assests/files/jquery.fancybox.min.css">
    <link rel="stylesheet" href="./assests/files/style.css">
    <link rel="stylesheet" href="./style.css">

    <!-- ====================== aos animation ================== -->
    <link href="./assests/aos/aos.css" rel="stylesheet">
    <script src="./assests/aos/aos.js"></script>



    <script src="./assests/files/jquery-2.2.4.min.js"></script>

    <link rel="stylesheet" type="text/css" href="./assests/files/animate.css">
    <link rel="stylesheet" type="text/css" href="./assests/files/animate.css">
    <link rel="stylesheet" type="text/css" href="./assests/files/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="./assests/files/settings.css">
    <link rel="stylesheet" type="text/css" href="./assests/files/style_002.css">
    <link rel="stylesheet" type="text/css" href="./assests/files/responsive.css">

    <!-- ===================== toster ===================== -->
    <link href="./assests/files/toastr.min.css" rel="stylesheet">
    <script src="./assests/files/toastr.min.js"></script>
    <script src="./assests/files/toastr.init.js"></script>
    <script type="module" src="./assests/files/hook.js"></script>



</head>

<body data-new-gr-c-s-check-loaded="8.908.0" data-gr-ext-installed="" cz-shortcut-listen="true">

    <!-- under development comments -->
    <!-- <div style="position: fixed;top: 0;left: 0;z-index: 999999999999999;" class=" .newsContainer">
        <div>
            <marquee class="marquee" onmouseover="this.stop();" onmouseout="this.start();" direction="left" behavior="scroll" scrollamount="7">
                Notice: This site is currently under development and may experience issues while in use. We appreciate your patience and cooperation as we work to finalize and improve the experience. Thank you for your understanding. </marquee>
        </div>
    </div> -->
    <!--===================== HEADER =====================-->
    <?php

    $headPath = "./";
    include("./components/topHeader.php");


    $menuPath = "./";
    include("./components/navmenu.php"); ?>
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

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        .overlay p {
            color: white;
            z-index: 999;

        }

        .overlay h1 {
            font-size: 3rem;
            z-index: 999;
        }

        .overlay:after {
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            background: rgba(35, 34, 33, 0.5);
            content: "";
        }
    </style>

    <section class="banner2" id="home">

        <div class="mainSlider" style="max-height: none; overflow: visible; height: 80vh;">
            <!-- <div class="tp-banner1 revslider-initialised tp-simpleresponsive" id="revslider-784" style="height: 100%; max-height: none; backface-visibility: hidden; transform-style: flat; transform: translate3d(0px, 0px, 0px);">
                <ul style="display: block; overflow: hidden; width: 100%; height: 100%; max-height: none;" class="tp-revslider-mainul">
                    <li data-transition="cube" data-slotamount="7" data-masterspeed="500" class="tp-revslider-slidesli active-revslide current-sr-slide-visible" style="width: 100%; height: 100%; overflow: hidden; z-index: 20; visibility: inherit; opacity: 1;">
                        <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="center center" data-kenburns="undefined" data-easeme="undefined" data-bgfit="cover" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                            <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="./images/pace.jpeg" data-src="./images/PACEaDMIN.png" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url(./images/PACEaDMIN.png); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                <video autoplay loop muted>
                                    <source src="./images/homeVideo.mp4" type="video/mp4">
                                  </video>
                                <img class="homeImg" src="./images/logos/ICEST_Logo.png" alt="">
                                <h2 style="position: absolute;right: 0;left: 0;" class="homeTxt">INTERNATIONAL CONCLAVE ON ENGINEERING SCIENCES AND TECHNOLOGY</h2>
                                <video autoplay loop muted>
                                    <source src="./Images/videos/videoplayback.mp4" type="video/mp4">
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
                    <source src="./images/homeVideo.mp4" type="video/mp4">
                </video>
                <div class="overlay">
                    <img class="homeImg" src="./images/logos/ICEST_Logo.png" alt="">
                    <h2 style="position: absolute;right: 0;left: 0;" class="homeTxt">INTERNATIONAL CONCLAVE ON ENGINEERING SCIENCES AND TECHNOLOGY - ICEST'25</h2>

                    <div class="homeBtns">

                    </div>
                </div>
    </section>
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
                <div class="">
                    <br>
                    <div class="our-history-left">
                        <h4 data-aos="fade-up" data-aos-delay="50" class="title-">Archives</h4>
                        <p>
                            <strong>ICEST'24: </strong>
                            The conference of, which was a week-long gathering of industry experts, researchers, and innovators from around the world, has officially ended after insightful presentations, engaging discussions, and networking opportunities aimed at advancing knowledge and fostering collaboration in various fields.
                        </p>
                        <ul style="list-style-type:square;" class="relevent-link"> <br>
                            <li class="relevent-link"><a class="relevent-link" href="https://icest24.paceconclave.com/">ICEST'24</a></li>
                        </ul>

                    </div>
                </div>
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
                            <p style="text-align: justify !important;">All the accepted papers will be published in conference proceedings with <strong>ISBN</strong>.
                                Those who wish to publish the papers in journals must fulfill the formalities, including publication charges.</p>

                            <p><strong>The papers will be published in:</strong></p>
                            <ol>
                                <li><strong>Special Issue in Web of Science Indexed Journal</strong></li>
                                <li><em>Journal of Polymer & Composites</em> (BIOTRENDCON & ICIBS)</li>
                                <li><em>Journal of Mines, Metals & Fuels</em> (MECH TECH & IC-ICE)</li>
                                <li><em>International Journal of Intelligent Systems and Applications in Engineering</em> (ARTILLIGIANCE, DIGITAREV & SEMI-COMM-TECH-SUMMIT)</li>
                            </ol>

                            <p style="text-align: justify !important;">Selected papers will be published in a <strong>Special Issue in STM Journal (Web of Science Indexed Journal)</strong> with journal publications.</p>

                            <p style="text-align: justify !important;">High-quality papers can be published in reputed journals indexed in <strong>Scopus/Web of Science</strong> (based on norms & journal publishing charges).</p>
<br>
                            <p><strong>For ICIBS & BIOTRENDCON:</strong><br>
                                <em>Journal of Polymer & Composites</em>
                            </p> <br>

                            <p><strong>For MECH TECH & IC-ICE:</strong><br>
                                <em>Journal of Mines, Metals & Fuels</em>
                            </p>
<br>
                            <p><strong>For SEMI-COMM-TECH-SUMMIT, DIGITAREV & ARTILLIGANCE:</strong><br>
                                <em>International Journal of Intelligent Systems and Applications in Engineering</em>
                            </p>

                            </p>
                            <h3 class="title-relevant-link">Relevant Links</h3>
                            <ul style="list-style-type:square;" class="relevent-link">
                                <li class="relevent-link"><a class="relevent-link" href="./Page/Register">Register for ICEST25</a></li>
                                <li><a class="relevant-link" href="./Page/Submission">Paper Submission</a></li>
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
    <?php
    include("./components/Themes.php");
    ?> <!--=============== S-themes END ===============-->


    <!--===================== S-association =====================-->
    <?php
    include("./components/partners.php");
    ?>


    <!--================== S-association END ==================-->



    <!--===================== FOOTER =====================-->
    <?php
    include("./components/footer.php");
    ?>
    <!--=================== FOOTER END ===================-->
    <!--===================== TO TOP =====================-->
    <a class="to-top active" href="#home">
        <i class="fa fa-chevron-up" aria-hidden="true"></i>
    </a>
    <!--=================== TO TOP END ===================-->
    <!--===================== SCRIPT	=====================-->
    <!-- JQUERY JAVASCRIPT -->
    <script src="./assests/files/masonry.pkgd.min.js"></script>
    <script src="./assests/files/jquery.fancybox.min.js"></script>
    <script src="./assests/files/slick.min.js"></script>
    <script src="./assests/files/rx-lazy.js"></script>
    <script src="./assests/files/scripts.js"></script>
    <script src="./assests/files/contact-form-script.js"></script>
    <!-- toastr init -->
    <script src="./assests/files/jquery.min.js"></script>
    <script src="./assests/files/jquery-ui.js"></script>



    <script type="text/javascript" src="./assests/files/jquery.js"></script>
    <script type="text/javascript" src="./assests/files/bootstrap.min.js"></script>
    <script type="text/javascript" src="./assests/files/mixer.js"></script>
    <script type="text/javascript" src="./assests/files/wow.min.js"></script>
    <script type="text/javascript" src="./assests/files/jquery.appear.js"></script>
    <script type="text/javascript" src="./assests/files/prettyPhoto.js"></script>
    <script type="text/javascript" src="./assests/files/jquery.shuffle.min.js"></script>
    <script type="text/javascript" src="./assests/files/owl.carousel.js"></script>
    <script type="text/javascript" src="./assests/files/mixer.js"></script>
    <script type="text/javascript" src="./assests/files/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="./assests/files/modernizr.custom.js"></script>
    <script type="text/javascript" src="./assests/files/classie.js"></script>
    <script type="text/javascript" src="./assests/files/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="./assests/files/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="./assests/files/theme.js"></script>
    <script src="./assests/aos/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!--
<script> alert("The conference, which was a week-long gathering of industry experts, researchers, and innovators from around the world, has officially ended after insightful presentations, engaging discussions, and networking opportunities aimed at advancing knowledge and fostering collaboration in various fields.");</script>

<script> alert("The conference, which was a week-long gathering of industry experts, researchers, and innovators from around the world, has officially ended after insightful presentations, engaging discussions, and networking opportunities aimed at advancing knowledge and fostering collaboration in various fields.");</script> -->
    <div id="sp-installed"></div>

</body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>