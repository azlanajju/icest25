

<div class="header-menu header-menu-two">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="nav-menu flexnav">
                    <ul class="nav-list">
                        <li><a class="<?php echo ($currentPage == '' || $currentPage == 'index') ? 'activeNav' : ''; ?>" href="<?php echo $menuPath; ?>">Home</a></li>
                        <li><a class="<?php echo ($currentPage == 'Patrons') ? 'activeNav' : ''; ?>" href="<?php echo $menuPath; ?>Page/Patrons">Patrons</a></li>
                        <li><a class="<?php echo ($currentPage == 'About') ? 'activeNav' : ''; ?>" href="<?php echo $menuPath; ?>Page/About">About Us</a></li>
                        <li><a class="<?php echo ($currentPage == 'Committees') ? 'activeNav' : ''; ?>" href="<?php echo $menuPath; ?>Page/Committees">Committees</a></li>
                        <li class="dropdown">
                            <a class="<?php echo ($currentPage == 'Themes') ? 'activeNav' : ''; ?>" href="<?php echo $menuPath; ?>Page/Themes">Themes<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul>
                                <li><a class="<?php echo ($currentPage == 'Themes') ? 'activeNav' : ''; ?>" href="<?php echo $menuPath; ?>Page/Themes/MechTech">MECH-TECH</a></li>
                                <li><a class="<?php echo ($currentPage == 'Themes') ? 'activeNav' : ''; ?>" href="<?php echo $menuPath; ?>Page/Themes/ICICE">IC ICE</a></li>
                                <li><a class="<?php echo ($currentPage == 'Themes') ? 'activeNav' : ''; ?>" href="<?php echo $menuPath; ?>Page/Themes/Digitarev">DIGITAREV 2025</a></li>
                                <li><a class="<?php echo ($currentPage == 'Themes') ? 'activeNav' : ''; ?>" href="<?php echo $menuPath; ?>Page/Themes/SCTS">SEMI-COMM TECH SUMMIT</a></li>
                                <li><a class="<?php echo ($currentPage == 'Themes') ? 'activeNav' : ''; ?>" href="<?php echo $menuPath; ?>Page/Themes/Biotrendcon">BIOTRENDCON 2025</a></li>
                                <li><a class="<?php echo ($currentPage == 'Themes') ? 'activeNav' : ''; ?>" href="<?php echo $menuPath; ?>Page/Themes/Artelligence">ARTELLIGENCE 2025</a></li>
                                <li><a class="<?php echo ($currentPage == 'Themes') ? 'activeNav' : ''; ?>" href="<?php echo $menuPath; ?>Page/Themes/ICIBS">ICIBS 2025</a></li>

                            </ul>
                        </li>
                        <!-- <li class="dropdown">
                            <a class="<?php echo ($currentPage == 'Committees') ? 'activeNav' : ''; ?>" href="<?php echo $menuPath; ?>Page/Committees">Committees<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul>
                                <li><a class="<?php echo ($currentPage == 'Committees') ? 'activeNav' : ''; ?>" href="<?php echo $menuPath; ?>Page/Committees/">Advisory Committees</a></li>
                            </ul>
                        </li> -->
                        <li><a class="<?php echo ($currentPage == 'Register') ? 'activeNav' : ''; ?>" href="<?php echo $menuPath; ?>Page/Register">Register</a></li>
                        <li><a class="<?php echo ($currentPage == 'Submission') ? 'activeNav' : ''; ?>" href="<?php echo $menuPath; ?>Page/Submission">Submission</a></li>
                        <li><a class="<?php echo ($currentPage == 'Schedule') ? 'activeNav' : ''; ?>" href="<?php echo $menuPath; ?>Page/Schedule/">Schedule</a></li>
                        <li><a class="<?php echo ($currentPage == 'Contact') ? 'activeNav' : ''; ?>" href="<?php echo $menuPath; ?>Page/Contact">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
