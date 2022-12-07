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
    <div id="0" class="page-slogan">
        <div class="grid wide-m">
            <div class="container-fluid row gx-5">
                <div class="col-ssm-12 col-sm-10 col-md-10 col-lg-10 col-xl-6 page-slogan__content">
                    <h1 class="page-slogan__heading">About page</h1>
                    <h1 class="page-slogan__heading">
                        update content
                        <span style="color: var(--primary-text-color)">later</span>
                    </h1>
                    <br>
                    <p class="page-slogan__paragraph">
                        We’re always available for our Patients with emergent problems.
                        You can easily reach us 24/7. We focused on the highest quality.
                    </p>
                    <br>
                    <div class="page-slogan__btn">
                        <a class="page-slogan__btn-link" href="./contact.php">Make appointment
                            <i class="fas fa-angle-double-right page-slogan__btn-link-icon"></i></a>
                    </div>
                </div>
                <div class="col-ssm-6 col-sm-6 col-md-8 col-lg-8 col-xl-6 page-slogan__img">
                    <img src="./assets/img/home/doctor-call-helper.png" alt="doctor banner image" class="fruit-image__img" />
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
                            iCare give premium quality healthcare services
                        </h1>
                        <p class="about-description__paragraph">
                            some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text
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
                            some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text
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
                            some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text
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
