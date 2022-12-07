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
                                    <?php
                                            if (!isset($_SESSION['email'])) {
                                                echo '<li class="nav-item col-4" style="margin:0.5rem;">
                                                          <a href="./index.php?page=login" class="nav-link" style="display:inline;"> Login </a>
                                                          <span style="font-size: 1.7rem"> / </span>
                                                          <a href="./index.php?page=register" class="nav-link" style="display:inline;"> Register </a>
                                                      </li>';
                                            } else {
                                                require_once("./controllers/profile.php");
                                                $profileController = new ProfileController();
                                                $name = $profileController->getOneUserName($_SESSION['id']);
                                                echo '<li class="nav-item col-1"></li>
                                                     <li class="nav-item col-3">
                                                        <a class="nav-link" href="./index.php?page=profile">'. $name .'</a>
                                                     </li>';
                                            }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="rightnav">
                        <?php
                        require_once("./controllers/profile.php");
                        $profileController = new ProfileController();
                        if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
                            $pic = $profileController->getPictureOneUser($_SESSION['id']);

                            echo '<div id="rightnav__user" class="rightnav__user">
                                            <img class="rightnav__user-ava" src="./assets/img/user/'. $pic .'" alt="">
                                            <ul id="rightnav__user-menu" class="rightnav__user-menu">
                                                <li class="rightnav__user-item"><a href="./index.php?page=profile">See your profile</a></li>
                                                <li class="rightnav__user-item rightnav__user-item--separate"><a href="./index.php?page=logout">Log out</a></li>
                                            </ul>
                                        </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<?php
//if (!isset($_SESSION['email'])) {
//    echo '<li class="nav-item col-4" style="margin:0.5rem;">
//                                                      <a href="./index.php?page=login" class="nav-link" style="display:inline;"> Login </a>
//                                                      <span style="font-size: 1.7rem"> / </span>
//                                                      <a href="./index.php?page=register" class="nav-link" style="display:inline;"> Register </a>
//                                                  </li>';
//} else {
//    require_once("./controllers/profile.php");
//    $profileController = new ProfileController();
//    if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
//        $pic = $profileController->getPictureOneUser($_SESSION['id']);
//        $name = $profileController->getOneUserName($_SESSION['id']);
////
//
//        echo '<div class="nav-item col-1" id="rightnav__user" class="rightnav__user">
//                                                            <img class="rightnav__user-ava" src="' . $pic . '" alt="user image">
//                                                            <ul id="rightnav__user-menu" class="rightnav__user-menu">
//                                                                <li class="rightnav__user-item"><a href="./index.php?page=profile">Profile</a></li>
//                                                                <li class="rightnav__user-item rightnav__user-item--separate"><a href="./index.php?page=logout">Logout</a></li>
//                                                            </ul>
//                                                        <a class="nav-link" href="./index.php?page=profile" style="display: inline;padding:0; margin:10px;">' . $name . '</a>
//                                                     </div>
//                                                     <li class="nav-item col-3" id="rightnav__user" class="rightnav__user">
//
//                                                       </li>';
//    }
//}
//?>