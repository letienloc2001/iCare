<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
    <link rel="stylesheet" href="./assets/css/base.css" />
    <link rel="stylesheet" href="./assets/css/main.css" />

    <link rel="stylesheet" href="./assets/css/scrollbar.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="./assets/img/logo/iCare-logo-website.png" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>iCare - About</title>
</head>

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

    <!--
WHAT WE DO
-->
    <div id="2" class="container-fluid p-cpn" style="background-image: url('./assets/img/home/p-cpn-1.png'); padding: 0;">
        <div class="grid wide-m row gx-5">
            <div class="col">
                <div class="p-cpn-subheading">
                    <div class="p-cpn-subheading__icon">
                        <img src="./assets/img/wheat.png" alt="">
                    </div>
                    <div class="p-cpn-subheading__text">
                        <h4>
                            Our Services</h>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid row gx-5">
            <div class="col">
                <div class="p-cpn-heading">
                    <h1>
                        Ours Services
                    </h1>
                </div>
            </div>
        </div>
        <div class="container-fluid row gx-5">
            <div class="col">
                <div class="p-cpn-image">
                    <img src="./assets/img/img-ud-hd.png" alt="">
                </div>
            </div>
        </div>
        <div class="grid wide-m row carousel owl-carousel">
            <div class="col">
                <div class="p-cpn-item-1st">
                    <div class="p-cpn-item-1st__icon">
                        <img src="./assets/img/wwd-1.png" alt="" />
                    </div>
                    <div class="p-cpn-item-1st__content">
                        <h5 class="p-cpn-item-1st__title">
                            <a href="#"> Service 1</a>
                        </h5>
                        <span class="p-cpn-item__break">
                                <span></span>
                            </span>
                        <p class="p-cpn-item-1st__paragraph">
                            some text some text some text some text some text some text
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="p-cpn-item-1st">
                    <div class="p-cpn-item-1st__icon">
                        <img src="./assets/img/wwd-2.png" alt="" />
                    </div>
                    <div class="p-cpn-item-1st__content">
                        <h5 class="p-cpn-item-1st__title">
                            <a href="#"> Service 2</a>
                        </h5>
                        <span class="p-cpn-item__break">
                                <span></span>
                            </span>
                        <p class="p-cpn-item-1st__paragraph">
                            some text some text some text some text some text some text
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="p-cpn-item-1st">
                    <div class="p-cpn-item-1st__icon">
                        <img src="./assets/img/wwd-3.png" alt="" />
                    </div>
                    <div class="p-cpn-item-1st__content">
                        <h5 class="p-cpn-item-1st__title">
                            <a href="#">Service 3</a>
                        </h5>
                        <span class="p-cpn-item__break">
                                <span></span>
                            </span>
                        <p class="p-cpn-item-1st__paragraph">
                            some text some text some text some text some text some text
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="p-cpn-item-1st">
                    <div class="p-cpn-item-1st__icon">
                        <img src="./assets/img/wwd-4.png" alt="" />
                    </div>
                    <div class="p-cpn-item-1st__content">
                        <h5 class="p-cpn-item-1st__title">
                            <a href="#">Service 4</a>
                        </h5>
                        <span class="p-cpn-item__break">
                                <span></span>
                            </span>
                        <p class="p-cpn-item-1st__paragraph">
                            some text some text some text some text some text some text
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--BREAK-->
    <div id="4" class="page-break pd-150-0 " style="background-image: url('./assets/img/bgr-client-h1.jpg')">
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
    <!-- Expert Doctors-->
    <div id="5" class="container-fluid p-cpn pd-150-0 " style="background-color: var(--background-color); ">
        <div class="grid wide-m row gx-5 ">
            <div class="col ">
                <div class="p-cpn-subheading ">
                    <div class="p-cpn-subheading__icon ">
                        <img src="./assets/img/wheat.png " alt=" ">
                    </div>
                    <div class="p-cpn-subheading__text ">
                        <h4>
                            Expert Doctors</h>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid row gx-5 ">
            <div class="col ">
                <div class="p-cpn-heading ">
                    <h1>
                        Expert Doctors
                    </h1>
                </div>
            </div>
        </div>
        <div class="container-fluid row gx-5 ">
            <div class="col ">
                <div class="p-cpn-image ">
                    <img src="./assets/img/img-ud-hd.png" alt=" ">
                </div>
            </div>
        </div>
        <!--Carousel ITEM-->
        <div id="carousel-p-cpn-3rd ">
            <div class="grid wide-m row carousel owl-carousel ">
                <h1> doctor card, connect to DB in order to display 5-star rated doctors</h1>
                <!--                        --><?php
                //                        require_once('controllers/product-controller.php');
                //                        $productController = new ProductController();
                //                        $productController->getAllProduct_homepage();
                //                        ?>
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
