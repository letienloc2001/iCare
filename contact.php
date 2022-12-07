<!DOCTYPE html>
<html lang="en">

<?php
$PAGE_TITLE = "Contacts";
include "utils/html_head.php"
?>

<body>
<script>
    function showContact(){
        $.ajax({
            url: "services/contact-service.php",
            success: function(data) {
                var contactInfo;
                if (data){
                    contactInfo = JSON.parse(data);
                    var phone = "<h1>Phone:</h1>";
                    var address = "<h1>Address:</h1>";
                    var email = "<h1>Email:</h1>";
                    for (var key in contactInfo) {
                        phone += '<p>' + contactInfo[key].phone + '</p>';
                        address += '<p>' + contactInfo[key].address + '</p>';
                        email += '<p>' + contactInfo[key].email + '</p>';
                    }
                    document.getElementsByClassName("contact-content")[0].innerHTML = phone;
                    document.getElementsByClassName("contact-content")[1].innerHTML = address;
                    document.getElementsByClassName("contact-content")[2].innerHTML = email;
                }
            }
        });
    }
    showContact();
</script>
<!-- #############HEADER######### -->
<?php require_once("./views/header.php") ?>
<!-- #############MAIN######### -->
<div class="main">
    <!--page-title-->
    <div class="page-title" style="background-image: url('./assets/img/home/home-background.jpg'); padding: 30px 0;">
        <div class="grid wide-m">
            <div class="container-fluid">
                <div class="page-title-inner">
                    <h1 class="page-title__name">Contact</h1>
                    <div class="page-title__dir">
                        <ul class="page-title__dir-list">
                            <li class="page-title__dir-item">
                                <a href="./index.php?page=home" class="page-title__dir-link">Home</a>
                            </li>
                            <span> > </span>
                            <li class="page-title__dir-item">
                                <a href="./index.php?page=contact" class="page-title__dir-link">Contacts</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--contact list-->
<!--    <div class="page-contact pd-150-0" style="background-color: var(--white-color)">-->
<!--        <div class="grid wide-m">-->
<!--            <div class="container-fluid">-->
<!--                <div class="contact-list row">-->
<!--                    <div class="col contact-item">-->
<!--                        <div class="contact-icon-group">-->
<!--                            <svg class="contact-icon-bg" version="1.0" xmlns="http://www.w3.org/2000/svg" width="103.000000pt" height="102.000000pt" viewBox="0 0 103.000000 102.000000" preserveAspectRatio="xMidYMid meet" fill="url(#grad1)">-->
<!--                                <defs>-->
<!--                                    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">-->
<!--                                        <stop offset="0%" style="stop-color: #ff7e00; stop-opacity: 1"></stop>-->
<!--                                        <stop offset="100%" style="stop-color: #ffb63a; stop-opacity: 1"></stop>-->
<!--                                    </linearGradient>-->
<!--                                </defs>-->
<!--                                <g transform="translate(0.000000,102.000000) scale(0.100000,-0.100000)" fill="#grad1" stroke="none">-->
<!--                                    <path d="M413 968 c-35 -40 -135 -108 -174 -118 -21 -6 -39 -15 -39 -19 0 -5-->
<!---->
<!--                  -7 -11 -14 -14 -10 -4 -13 -1 -9 9 9 24 -13 16 -46 -18 -31 -32 -39 -48 -22-->
<!---->
<!--                  -48 6 0 -3 -14 -19 -31 -40 -45 -78 -158 -83 -252 -2 -43 0 -80 5 -83 4 -3 3-->
<!---->
<!--                  -14 -2 -25 -7 -13 -7 -19 0 -19 5 0 10 -8 10 -18 0 -21 93 -152 117 -165 10-->
<!---->
<!--                  -5 36 -27 58 -48 49 -47 123 -74 255 -94 54 -8 101 -15 106 -17 17 -5 129 23-->
<!---->
<!--                  166 43 20 10 43 19 51 19 23 0 117 51 117 64 0 7 9 21 21 32 20 18 41 53 70-->
<!---->
<!--                  114 6 14 19 39 28 55 37 68 10 391 -37 442 -13 14 -21 27 -19 30 3 2 14 -8 26-->
<!---->
<!--                  -23 l21 -27 0 26 c0 34 -10 58 -21 51 -5 -3 -9 -1 -9 4 0 6 -18 17 -40 26 -22-->
<!---->
<!--                  9 -45 24 -52 35 -6 10 -17 17 -24 14 -6 -2 -15 1 -20 8 -5 8 -3 10 7 4 8 -5-->
<!---->
<!--                  11 -5 7 0 -5 5 -22 10 -40 12 -18 2 -52 13 -76 25 -37 17 -66 21 -172 24 -119-->
<!---->
<!--                  2 -130 1 -147 -18z"></path>-->
<!--                                </g>-->
<!--                            </svg>-->
<!--                            <i class="contact-icon fas fa-phone"></i>-->
<!--                        </div>-->
<!--                        <div class="contact-content">-->
<!--                            <h1>Phone:</h1>-->
<!--                            <p>+88 568 426 834</p>-->
<!--                            <p>(00) 569 845 138</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col contact-item">-->
<!--                        <div class="contact-icon-group">-->
<!--                            <svg class="contact-icon-bg" version="1.0" xmlns="http://www.w3.org/2000/svg" width="103.000000pt" height="102.000000pt" viewBox="0 0 103.000000 102.000000" preserveAspectRatio="xMidYMid meet" fill="url(#grad1)">-->
<!--                                <defs>-->
<!--                                    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">-->
<!--                                        <stop offset="0%" style="stop-color: #ff7e00; stop-opacity: 1"></stop>-->
<!--                                        <stop offset="100%" style="stop-color: #ffb63a; stop-opacity: 1"></stop>-->
<!--                                    </linearGradient>-->
<!--                                </defs>-->
<!--                                <g transform="translate(0.000000,102.000000) scale(0.100000,-0.100000)" fill="#grad1" stroke="none">-->
<!--                                    <path d="M413 968 c-35 -40 -135 -108 -174 -118 -21 -6 -39 -15 -39 -19 0 -5-->
<!---->
<!--                  -7 -11 -14 -14 -10 -4 -13 -1 -9 9 9 24 -13 16 -46 -18 -31 -32 -39 -48 -22-->
<!---->
<!--                  -48 6 0 -3 -14 -19 -31 -40 -45 -78 -158 -83 -252 -2 -43 0 -80 5 -83 4 -3 3-->
<!---->
<!--                  -14 -2 -25 -7 -13 -7 -19 0 -19 5 0 10 -8 10 -18 0 -21 93 -152 117 -165 10-->
<!---->
<!--                  -5 36 -27 58 -48 49 -47 123 -74 255 -94 54 -8 101 -15 106 -17 17 -5 129 23-->
<!---->
<!--                  166 43 20 10 43 19 51 19 23 0 117 51 117 64 0 7 9 21 21 32 20 18 41 53 70-->
<!---->
<!--                  114 6 14 19 39 28 55 37 68 10 391 -37 442 -13 14 -21 27 -19 30 3 2 14 -8 26-->
<!---->
<!--                  -23 l21 -27 0 26 c0 34 -10 58 -21 51 -5 -3 -9 -1 -9 4 0 6 -18 17 -40 26 -22-->
<!---->
<!--                  9 -45 24 -52 35 -6 10 -17 17 -24 14 -6 -2 -15 1 -20 8 -5 8 -3 10 7 4 8 -5-->
<!---->
<!--                  11 -5 7 0 -5 5 -22 10 -40 12 -18 2 -52 13 -76 25 -37 17 -66 21 -172 24 -119-->
<!---->
<!--                  2 -130 1 -147 -18z"></path>-->
<!--                                </g>-->
<!--                            </svg>-->
<!--                            <i class="contact-icon fas fa-map-marker-alt"></i>-->
<!--                        </div>-->
<!--                        <div class="contact-content">-->
<!--                            <h1>Address:</h1>-->
<!--                            <p>268 Ly Thuong Kiet, District 10</p>-->
<!--                            <p>Ho Chi Minh City, VN.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col contact-item">-->
<!--                        <div class="contact-icon-group">-->
<!--                            <svg class="contact-icon-bg" version="1.0" xmlns="http://www.w3.org/2000/svg" width="103.000000pt" height="102.000000pt" viewBox="0 0 103.000000 102.000000" preserveAspectRatio="xMidYMid meet" fill="url(#grad1)">-->
<!--                                <defs>-->
<!--                                    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">-->
<!--                                        <stop offset="0%" style="stop-color: #ff7e00; stop-opacity: 1"></stop>-->
<!--                                        <stop offset="100%" style="stop-color: #ffb63a; stop-opacity: 1"></stop>-->
<!--                                    </linearGradient>-->
<!--                                </defs>-->
<!--                                <g transform="translate(0.000000,102.000000) scale(0.100000,-0.100000)" fill="#grad1" stroke="none">-->
<!--                                    <path d="M413 968 c-35 -40 -135 -108 -174 -118 -21 -6 -39 -15 -39 -19 0 -5-->
<!---->
<!--                  -7 -11 -14 -14 -10 -4 -13 -1 -9 9 9 24 -13 16 -46 -18 -31 -32 -39 -48 -22-->
<!---->
<!--                  -48 6 0 -3 -14 -19 -31 -40 -45 -78 -158 -83 -252 -2 -43 0 -80 5 -83 4 -3 3-->
<!---->
<!--                  -14 -2 -25 -7 -13 -7 -19 0 -19 5 0 10 -8 10 -18 0 -21 93 -152 117 -165 10-->
<!---->
<!--                  -5 36 -27 58 -48 49 -47 123 -74 255 -94 54 -8 101 -15 106 -17 17 -5 129 23-->
<!---->
<!--                  166 43 20 10 43 19 51 19 23 0 117 51 117 64 0 7 9 21 21 32 20 18 41 53 70-->
<!---->
<!--                  114 6 14 19 39 28 55 37 68 10 391 -37 442 -13 14 -21 27 -19 30 3 2 14 -8 26-->
<!---->
<!--                  -23 l21 -27 0 26 c0 34 -10 58 -21 51 -5 -3 -9 -1 -9 4 0 6 -18 17 -40 26 -22-->
<!---->
<!--                  9 -45 24 -52 35 -6 10 -17 17 -24 14 -6 -2 -15 1 -20 8 -5 8 -3 10 7 4 8 -5-->
<!---->
<!--                  11 -5 7 0 -5 5 -22 10 -40 12 -18 2 -52 13 -76 25 -37 17 -66 21 -172 24 -119-->
<!---->
<!--                  2 -130 1 -147 -18z"></path>-->
<!--                                </g>-->
<!--                            </svg>-->
<!--                            <i class="contact-icon far fa-envelope"></i>-->
<!--                        </div>-->
<!--                        <div class="contact-content">-->
<!--                            <h1>Email:</h1>-->
<!--                            <p>support@gmail.com</p>-->
<!--                            <p>info247@gmail.com</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!--map-->
    <!--contact list-->
    <div class="page-map pd-150-0" style="background-color: var(--white-color)">
        <div class="grid wide-m">
            <div class="container-fluid">
                <div id="map" class="map"></div>
            </div>
        </div>
    </div>
    <!--end main-->
</div>
<!-- #############FOOTER######### -->
<?php require_once("./views/footer.php") ?>
<?php require_once("./views/scrollbar.php") ?>
<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADcAsikUujuWYa3M18bmoGoDuVnC8yk6I&callback=initMap"></script>
<script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        const HCMUT = {
            lat: 10.773732651131144,
            lng: 106.66055492698473
        };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 10,
            center: HCMUT,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
            position: HCMUT,
            map: map,
        });
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js "></script>
</body>

</html>