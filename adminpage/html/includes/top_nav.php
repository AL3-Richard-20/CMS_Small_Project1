<?php

    if(!isset($_SESSION['uid'])){

        echo '<script>location.href="authentication-login1.php";</script>';
    }

?>
        <header class="topbar">

            <nav class="navbar top-navbar navbar-expand-md">

                <div class="navbar-header">



                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>



                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand text-center" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon text-center">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../../homepage/<?php echo getSettingsVal('Company_Logo') ?>" width="100" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../../homepage/<?php echo getSettingsVal('Company_Logo') ?>" width="100" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->

                        <!-- Logo text -->
                       <!--  <span class="logo-text">
                            <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />

                            <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                        </span> -->
                        <!-- <span class="logo-text">
                        <h3 style="color: white; margin-top: 10px; text-transform: uppercase; font-weight: bold; text-shadow: 2px 2px 4px black;" id="brand">Brand</h3>
                        </span> -->


                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->



                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>



                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->



                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                                <i class="sl-icon-menu font-20"></i>
                            </a>
                        </li>
                    </ul>



                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">


                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                <i class="ti-search font-16"></i>
                            </a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter">
                                <a class="srh-btn">
                                    <i class="ti-close"></i>
                                </a>
                            </form>
                        </li>


                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <img src="../assets/images/user_1177568.png" alt="user" class="rounded-circle" width="31">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">

                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>

                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">

                                    <div class="">
                                        <img src="../assets/images/user_1177568.png" alt="user" class="img-circle" width="60">
                                    </div>

                                    <div class="m-l-10">
                                        <h4 class="m-b-0"><?= $_SESSION['Fullname'] ?></h4>
                                    </div>

                                </div>

                                <a class="dropdown-item" href="logout.php">
                                    <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout
                                </a>

                            </div>

                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>

                </div>

            </nav>

        </header>