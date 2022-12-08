<!DOCTYPE html>
<html lang="en">

<?php
$PAGE_TITLE = "About";
include "utils/html_head.php"
?>

<body>
<?php require_once("./views/header.php") ?>
<!--    <div id="App"> </div>-->
<div class="main">
    <!--slogan-->
    <div class="page-title" style="background-image: url('./assets/img/home/home-background.jpg'); padding: 30px 0;">
        <div class="grid wide-m">
            <div class="container-fluid">
                <div class="page-title-inner">
                    <h1 class="page-title__name">About</h1>
                    <div class="page-title__dir">
                        <ul class="page-title__dir-list">
                            <li class="page-title__dir-item">
                                <a href="./index.php?page=home" class="page-title__dir-link">Home</a>
                            </li>
                            <span> > </span>
                            <li class="page-title__dir-item">
                                <a href="./index.php?page=about" class="page-title__dir-link">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--ABOUT-->
    <div id="1" class="container-fluid about pd-150-0" style="background-color: var(--white-color)">
        <div class="grid wide-m row gx-5">
            <div class="col-ssm-12 col-sm-12 col-xl-5 about__img">
                <img src="./assets/img/home/doctor-call-helper.png" alt="" />
            </div>
            <div class="col-ssm-12  col-sm-12 col-xl-7">
                <div class="row">
                    <div class="col about-description">
                        <h4 class="about-description__subheading">
                            Welcome to iCare Company
                        </h4>
                        <h1 class="about-description__heading">
                            iCare provide you with access to the best professionals in your area.
                        </h1>
                        <p class="about-description__paragraph">
                            With just a few clicks, you will be able to secure an appointment with our top medical practitioners.
                        </p>
                    </div>
                </div>
                <div class="about-item">
                    <div class="about-item__icon-wrapper">
                        <div class="overlay">
                            <i class="fab fa-pagelines about-item__icon"></i>
                        </div>
                    </div>
                    <div class="about-item__content">
                        <h1 class="about-item__title">Our Mission</h1>
                        <p class="about-item__paragraph">
                            At iCare, we believe that <span style="color: var(--primary-text-color)"><b>everyone</b></span> should have access to the best medical care. Searching for a doctor or making an appointment should not be a hassle in the 21st century.
                            <br><br>
                            Therefore, we have committed ourselves to provide you with our <span style="color: var(--primary-text-color)"><b>iCare digital platform</b></span> - a portal to your digital helthcare that is easy to use and accessible to everyone.

                        </p>
                    </div>
                </div>
                <div class="about-item">
                    <div class="about-item__icon-wrapper">
                        <div class="overlay">
                            <i class="far fa-lemon about-item__icon"></i>
                        </div>
                    </div>
                    <div class="about-item__content">
                        <h1 class="about-item__title">Our Vision</h1>
                        <p class="about-item__paragraph">
                            We envision a world where healthcare access is democratized. Where everyone has access to the best doctors and medical care. Where everyone can make an appointment with their doctor at their own convenience.
                            <br><br>
                            We will work tirelessly to achieve this vision. We will not stop until everyone has access to the best medical care.
                            We want to make sure that <span style="color: var(--primary-text-color)"><b>you can get the help you need, when you need it</b></span>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- #############FOOTER######### -->
    <?php require_once("./views/footer.php") ?>
    <?php require_once("./views/scrollbar.php") ?>
    <!--            <script src="./assets/js/cart.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js "></script>
    <script>

        $(".carousel ").owlCarousel({
            margin: 20,
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: false
                }
            }
        });

    </script>
</body>
</html>
