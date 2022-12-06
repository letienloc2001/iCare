<header class="sticky-top">
    <div id="site-header-wrapper">
        <div class="grid wide-m">
            <div class="header container-fluid">
                <div class="site-branch">
                    <a href="./">
                        <img src="./assets/img/logo/iCare-logo-navbar.png" alt="iCare logo image" />
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
                                    <li class="nav-item col-2">
                                        <a class="nav-link" href="./index.php?page=home">Home</a>
                                    </li>
                                    <li class="nav-item col-2">
                                        <a class="nav-link" href="./index.php?page=about">About</a>
                                    </li>
                                    <li class="nav-item col-2">
                                        <a class="nav-link" href="./index.php?page=doctors">Doctors</a>
                                    </li>
                                    <li class="nav-item col-2">
                                        <a class="nav-link" href="./index.php?page=contact">Contacts</a>
                                    </li>
                                    <li class="nav-item col-4" style="margin:0.5rem;">
                                        <a href="./index.php?page=login" class="nav-link" style="display:inline;"> Login </a>
                                        <span style="font-size: 1.7rem"> / </span>
                                        <a href="./index.php?page=register" class="nav-link" style="display:inline;"> Register </a>
                                    </li>
<!--                                    <li class="rightnav nav-item col-1">-->
<!--                                        -->
<!--                                    </li>-->
                                    <?php
                                    require_once("./controllers/profile.php");
                                    $profileController = new ProfileController();
                                    if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
                                        $pic = $profileController->getPictureOneUser($_SESSION['email']);
                                        if ($pic == "") {
                                            echo '<div class="rightnav-cart">
                                            <i class="fas fa-user rightnav-cart__icon"></i>
                                          </div>';
                                        } else {
                                            echo '<div id="rightnav__user" class="rightnav__user">
                                                <img class="rightnav__user-ava" src="' . $pic . '" alt="">
                                                <ul id="rightnav__user-menu" class="rightnav__user-menu">
                                                    <li class="rightnav__user-item"><a href="../index.php?page=profile">Profile</a></li>
                                                    <li class="rightnav__user-item rightnav__user-item--separate"><a href="logout.php">Logout</a></li>
                                                </ul>
                                            </div>';
                                        };
                                    }
                                    ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>