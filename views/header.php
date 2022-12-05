<header class="sticky-top">
    <div id="site-header-wrapper">
        <div class="grid wide-m">
            <div class="header container-fluid">
                <div class="site-branch">
                    <a href="./">
                        <img src="../assets/img/logo/iCare-logo-navbar.png" alt="iCare logo image" />
                    </a>
                </div>
                <div class="site-nav">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
                                <span class="navbar-toggler-icon">
                                    <i class="fas fa-bars"></i>
                                </span>
                            </button>
                            <div class="collapse navbar-collapse row gx-5" id="navbarResponsive">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item col-3">
                                        <a class="nav-link" href="./">Home</a>
                                    </li>
                                    <li class="nav-item col-3">
                                        <a class="nav-link" href="./about.php">About</a>
                                    </li>
                                    <li class="nav-item col-3">
                                        <a class="nav-link" href="./doctors.php">Doctors</a>
                                    </li>
                                    <li class="nav-item col-3">
                                        <a class="nav-link" href="./contact.php">Contacts</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="rightnav">
                        <!--                        todo: right nav bar connected to db customer profile-->
                        <!--                        --><?php
                                                        //                        require_once("./controllers/profile-controller.php");
                                                        //                        $profileController = new ProfileController();
                                                        //                        if (isset($_SESSION['username']) && !empty($_SESSION['username'])){
                                                        //                            $pic = $profileController->getPictureOneUser($_SESSION['username']);
                                                        //                            echo '<div id="rightnav__user" class="rightnav__user">
                                                        //                                            <img class="rightnav__user-ava" src="'. $pic .'" alt="">
                                                        //                                            <ul id="rightnav__user-menu" class="rightnav__user-menu">
                                                        //                                                <li class="rightnav__user-item"><a href="profile.php">See your profile</a></li>
                                                        //                                                <li class="rightnav__user-item"><a href="order.php">Purchase order</a></li>
                                                        //                                                <li class="rightnav__user-item rightnav__user-item--separate"><a href="logout.php">Logout</a></li>
                                                        //                                            </ul>
                                                        //                                        </div>';
                                                        //                        }
                                                        //                        else {
                                                        //                            echo '<div class="rightnav__item-login-logout">
                                                        //                                            <a href="login.php" class="rightnav-list__link">Login</a>
                                                        //                                        </div> ';
                                                        //                        }
                                                        //                        
                                                        ?>
                        <div class="rightnav-cart">
                            <i class="fas fa-user rightnav-cart__icon">
                                <!--                                data-bs-toggle="offcanvas"-->
                                <!--                                data-bs-target="#offcanvas">-->
                            </i>
                            <!--                            <span class="rightnav-cart__counter">0</span>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>