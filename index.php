<?php
session_start();
$page = $_GET['page'] ?? "home";
switch ($page) {
    case "home": {
            include("home.php");
            break;
        }
    case "about": {
            include("about.php");
            break;
        }
    case "doctors": {
            include('doctors.php');
            break;
        }
    case "contact": {
            include('contact.php');
            break;
        }
    case "login": {
            include('login.php');
            break;
        }
    case "logout": {
            include('logout.php');
            break;
        }
    case "register": {
            include('register.php');
            break;
        }
    case "profile": {
            if ($_SESSION["user_type"] == "d") {
                include('./doctor-profile-overview.php');
            } else if ($_SESSION["user_type"] == "p") {
                include('./patient-profile.php');
            } else {
                include('./admin-profile-overview.php');
            }
            break;
        }
}
