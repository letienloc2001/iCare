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
            include('userProfile.php');
            break;
        }
}
