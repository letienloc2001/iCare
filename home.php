<!DOCTYPE html>
<html lang="en">

<?php
$PAGE_TITLE = "Home";
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
                    <h1 class="page-slogan__heading">A health care solution for
                        <span style="color: var(--primary-text-color)">Everyone</span>
                    </h1>
                    <br><br><br>
                    <p class="page-slogan__paragraph">
                        Don't know where to go for your medical emergency? We got you covered. With our
                        <span style="color: var(--primary-text-color)"> <b>extensive networks of professionals</b></span>,
                        searching for help has never been easier.

                    </p>
                    <br><br><br>
                    <div class="page-slogan__btn">
                        <!--                                todo: if already sign in then redirect doctor.php else redirect login.php -->
                        <a class="page-slogan__btn-link" href="./login.php">Make appointment
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
    <div id="1" class="container-fluid about" style="background-color: var(--background-color); padding: 10rem 0">
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

    <div id="4" class="page-break" style="background-image: url(./assets/img/bgr-client-h1.jpg);">
        <div class=" page-break-list row">
            <div class=" col-ssm-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-3 page-break-item-1 ">
                <div class="page-break-item-1__icon ">
                    <div class="page-break-item-1__icon-group ">
                        <img src="./assets/img/img-fc-car1.png " alt=" " class="page-break-item-1__icon-img1 " />
                        <img src="./assets/img/img-fc-gr-car1.png " alt=" " class="page-break-item-1__icon-img2 " />
                    </div>
                </div>
                <div class="page-break-item-1__content ">
                    <h1 class="page-break-item-1__content-heading ">
                        Feature 1
                    </h1>
                    <p class="page-break-item-1__content-paragraph ">
                        some text, some text, some text, some text, some text, some text, some text, some text,
                    </p>
                </div>
            </div>
            <div class="col-ssm-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-3 page-break-item-1 ">
                <div class="page-break-item-1__icon ">
                    <div class="page-break-item-1__icon-group ">
                        <img src="./assets/img/img-fc-car2.png " alt=" " class="page-break-item-1__icon-img1 " />
                        <img src="./assets/img/img-fc-gr-car2.png " alt=" " class="page-break-item-1__icon-img2 " />
                    </div>
                </div>
                <div class="page-break-item-1__content ">
                    <h1 class="page-break-item-1__content-heading ">
                        Feature 2
                    </h1>
                    <p class="page-break-item-1__content-paragraph ">
                        some text, some text, some text, some text, some text, some text, some text, some text,
                    </p>
                </div>
            </div>
            <div class="col-ssm-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-3 page-break-item-1 ">
                <div class="page-break-item-1__icon ">
                    <div class="page-break-item-1__icon-group ">
                        <img src="./assets/img/img-fc-car3.png " alt=" " class="page-break-item-1__icon-img1 " />
                        <img src="./assets/img/img-fc-gr-car3.png " alt=" " class="page-break-item-1__icon-img2 " />
                    </div>
                </div>
                <div class="page-break-item-1__content ">
                    <h1 class="page-break-item-1__content-heading ">
                        Feature 3
                    </h1>
                    <p class="page-break-item-1__content-paragraph ">
                        some text, some text, some text, some text, some text, some text, some text, some text,
                    </p>
                </div>
            </div>
            <div class="col-ssm-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-3  page-break-item-1 ">
                <div class="page-break-item-1__icon ">
                    <div class="page-break-item-1__icon-group ">
                        <img src="./assets/img/img-fc-car4.png " alt=" " class="page-break-item-1__icon-img1 " />
                        <img src="./assets/img/img-fc-gr-car4.png " alt=" " class="page-break-item-1__icon-img2 " />
                    </div>
                </div>
                <div class="page-break-item-1__content ">
                    <h1 class="page-break-item-1__content-heading ">
                        Feature 4
                    </h1>
                    <p class="page-break-item-1__content-paragraph ">
                        some text, some text, some text, some text, some text, some text, some text, some text,
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="5" class="container-fluid p-cpn" style="background-color: var(--background-color); padding: 10rem 0;">
        <div class="grid wide-m row gx-5 ">
            <div class="col ">
                <div class="p-cpn-subheading ">
                    <div class="p-cpn-heading">
                        <h1 style="text-align: center; margin: 1rem 3rem">
                            Top Doctors
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid row gx-5 " style="padding: 0; margin: 0;">
            <div class="col">
                <div class="p-cpn-image ">
                    <img src="./assets/img/img-ud-hd.png" alt=" ">
                </div>
            </div>
        </div>
        <!--Carousel ITEM-->
        <div id="carousel-p-cpn-3rd ">
            <div class="grid wide-m row carousel owl-carousel ">
                <?php
                require_once('./controllers/doctors.php');
                $DoctorController = new DoctorController();
                $DoctorController->getTop3Doctors();
                ?>
            </div>
        </div>
    </div>
    <div id="2" class="container-fluid p-cpn" style="padding-bottom: 5rem">
        <div class="grid wide-m row gx-5">
            <div class="col">
                <div class="p-cpn-subheading">
                    <div class="p-cpn-heading">
                        <h1 style="text-align: center; margin: 1rem 3rem">
                            Reviews
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid wide-m row carousel owl-carousel">
            <div class="col">
                <div class="p-cpn-item-1st">
                    <img class="review_img" src="./assets/img/review2.png" alt=""/>
                </div>
            </div>

            <div class="col">
                <div class="p-cpn-item-1st">
                    <img class="review_img" src="./assets/img/review2.png" alt=""/>
                </div>
            </div>
            <div class="col">
                <div class="p-cpn-item-1st">
                    <img class="review_img" src="./assets/img/review2.png" alt=""/>
                </div>
            </div>
            <div class="col">
                <div class="p-cpn-item-1st">
                    <img class="review_img" src="./assets/img/review2.png" alt=""/>
                </div>
            </div>
            <div class="col">
                <div class="p-cpn-item-1st">
                    <img class="review_img" src="./assets/img/review2.png" alt=""/>
                </div>
            </div>
            <div class="col">
                <div class="p-cpn-item-1st">
                    <img class="review_img" src="./assets/img/review2.png" alt=""/>
                </div>
            </div>
            <div class="col">
                <div class="p-cpn-item-1st">
                    <img class="review_img" src="./assets/img/review2.png" alt=""/>
                </div>
            </div>
            <div class="col">
                <div class="p-cpn-item-1st">
                    <img class="review_img" src="./assets/img/review2.png" alt=""/>
                </div>
            </div>
            <div class="col">
                <div class="p-cpn-item-1st">
                    <img class="review_img" src="./assets/img/review2.png" alt=""/>
                </div>
            </div>
            <div class="col">
                <div class="p-cpn-item-1st">
                    <img class="review_img" src="./assets/img/review2.png" alt=""/>
                </div>
            </div>
        </div>
    </div>
    <!-- #############FOOTER######### -->
    <?php require_once("./views/footer.php") ?>
    <?php require_once("./views/scrollbar.php") ?>

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
