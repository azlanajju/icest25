<!DOCTYPE html>
<html lang="en" class=" js csstransforms csstransforms3d csstransitions js csstransitions nxkvq idc0_349">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>PACE CONCLAVE</title>
    <!-- ===================== META ===================== -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://localhost:5001/Content/assets/img/favicon.png">
    <!-- ===================== STYLE ===================== -->
    <link rel="stylesheet" href="../../assests/files/slick.min.css">
    <link rel="stylesheet" href="../../assests/files/bootstrap-grid.css">
    <link rel="stylesheet" href="../../assests/files/all.css">
    <link rel="stylesheet" href="../../assests/files/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../../assests/files/style.css">
    <link rel="stylesheet" href="../../style.css">

    <script src="../../assests/files/jquery-2.2.4.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../../assests/files/animate.css">
    <link rel="stylesheet" type="text/css" href="../../assests/files/animate.css">
    <link rel="stylesheet" type="text/css" href="../../assests/files/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="../../assests/files/settings.css">
    <link rel="stylesheet" type="text/css" href="../../assests/files/style_002.css">
    <link rel="stylesheet" type="text/css" href="../../assests/files/responsive.css">

    <!-- ===================== toster ===================== -->
    <link href="../../assests/files/toastr.min.css" rel="stylesheet">
    <script src="../../assests/files/toastr.min.js"></script>
    <script src="../../assests/files/toastr.init.js"></script>
    <script type="module" src="../../assests/files/hook.js"></script>



</head>

<body data-new-gr-c-s-check-loaded="8.908.0" data-gr-ext-installed="" cz-shortcut-listen="true">
        <!--===================== HEADER =====================-->
        <?php
    $currentPage = 'Contact';

    $headPath = "../../";

    include("../../components/topHeader.php");


    $menuPath = "../../";
    include("../../components/navmenu.php");
    ?>
    <!--===================== HEADER =====================-->



    <div class="page-title" style="background-image: linear-gradient(rgba(255, 0, 0, 0.520),rgba(194, 1, 0, 0.520)), url(/Content/assets/img/bg-page-title.jpg); ">
        <div class="container">
            <h1 class="title-line-left">Contact Us</h1>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="Icest">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <!--================= PAGE-TITLE END =================-->
    <!--================= PAGE-CONTACTS =================-->
    <section class="page-contacts">
        <div class="container">
            <h2 class="title-line-left">Get in Touch</h2>
            <div class="row">
                <div id="hide" class="col-12 col-sm-8">
                    <form method="post" action="../../contactMail.php">
                        <ul class="form-cover">
                            <li class="inp-name"><input id="Name" type="text" name="Name" placeholder="First Name" required="" data-val="true" data-val-required="Please Enter Your EmailID "></li>
                            <li class="inp-name"><input id="LastName" type="text" name="LastName" placeholder="Last Name"></li>
                            <li class="inp-phone"><input id="Phone" type="tel" name="Phone" placeholder="Phone" required="" number="" on="" invalid="this.setCustomValidity('Please enter your phone number)" input="this.setCustomValidity('')" data-val="true" data-val-required="Please Enter Your PhoneNumber "></li>
                            <li class="inp-email"><input id="Email" type="email" name="Email" required="" data-error="Please enter your email" placeholder="E-mail" data-val="true" data-val-required="Please Enter Your EmailID "></li>
                            <li class="inp-text"><textarea id="Message" name="Message" placeholder="Message"></textarea></li>
                        </ul>
                        <div class="btn-form-cover">
                            <button id="snd" type="submit" class="btn">Submit</button>
                        </div>

                        <div id="message"></div>

                        <input name="__RequestVerificationToken" type="hidden" value="CfDJ8OmcBSNmHQ9AqNgbGAyw2Y41jAptP8g3WRH1eXzoj_uTClGygEkvfQzHscV7mBsZh5BHI7dE_d2LRdOXv8BN32-IPzcKO7JgFCtfxoZ_AsvQteceBVryG03Ew083eBetrFLNaJ3n_j1g4ERVA3qGce8">
                    </form>

                </div>
                <div id="message"></div>
                <div class="col-12 col-sm-4 page-cont-info">
                    <div class="cont-info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <h5>Address</h5>
                        <p>PA Collegre Of Engineering<br>Mangalore, INDIA</p>
                    </div>
                    <div class="cont-info-item">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <h5>Phones</h5>
                        <ul class="cont-phone">
                            <li><a href="tel:9986096513">+91 9986096513</a></li>
                            <li><a href="tel: 8197603006">+91 8197603006</a></li>
                        </ul>

                    </div>
                    <div class="cont-info-item">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <h5>Email</h5>
                        <ul class="cont-email">
                            <li><a href="#">icest@pace.edu.in</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================= PAGE-CONTACTS END =================-->
    <!--===================== FOOTER =====================-->
    <?php
    include("../../components/footer.php");
    ?>
    <!--=================== FOOTER END ===================-->
        <!--===================== TO TOP =====================-->
    <a class="to-top" href="#home">
        <i class="fa fa-chevron-up" aria-hidden="true"></i>
    </a>
    <!--=================== TO TOP END ===================-->
    <!--===================== SCRIPT	=====================-->
    <!-- JQUERY JAVASCRIPT -->
    <script src="../../assests/files/masonry.pkgd.min.js"></script>
    <script src="../../assests/files/jquery.fancybox.min.js"></script>
    <script src="../../assests/files/slick.min.js"></script>
    <script src="../../assests/files/rx-lazy.js"></script>
    <script src="../../assests/files/scripts.js"></script>
    <script src="../../assests/files/contact-form-script.js"></script>
    <!-- toastr init -->
    <script src="../../assests/files/jquery.min.js"></script>
    <script src="../../assests/files/jquery-ui.js"></script>


    <script type="text/javascript" src="../../assests/files/jquery.js"></script>
    <script type="text/javascript" src="../../assests/files/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../assests/files/mixer.js"></script>
    <script type="text/javascript" src="../../assests/files/wow.min.js"></script>
    <script type="text/javascript" src="../../assests/files/jquery.appear.js"></script>
    <script type="text/javascript" src="../../assests/files/prettyPhoto.js"></script>
    <script type="text/javascript" src="../../assests/files/jquery.shuffle.min.js"></script>
    <script type="text/javascript" src="../../assests/files/owl.carousel.js"></script>
    <script type="text/javascript" src="../../assests/files/mixer.js"></script>
    <script type="text/javascript" src="../../assests/files/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="../../assests/files/modernizr.custom.js"></script>
    <script type="text/javascript" src="../../assests/files/classie.js"></script>
    <script type="text/javascript" src="../../assests/files/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="../../assests/files/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="../../assests/files/theme.js"></script>





    <div id="sp-installed"></div>
</body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>