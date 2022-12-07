
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$profilePage = $_GET['profilePage'] ?? "overview";
if ($_SESSION["user_type"] == "d") {
    switch ($profilePage) {
        case "overview":
            include('./doctor-profile-overview.php');
            break;
        case "appointment":
            include('./doctor-profile-appointment.php');
            break;
    }
} else if ($_SESSION["user_type"] == "p") {
    include('./patient-profile.php');
} else if ($_SESSION["user_type"] == "a") {
    switch ($profilePage) {
        case "overview":
            include('./admin-profile-overview.php');
            break;
        case "doctors":
            include('./admin-profile-doctors.php');
            break;
        case "register":
            include('./admin-profile-register.php');
            break;
    }
}
