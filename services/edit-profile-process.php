<?php
include("./connection.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$name = "";
$address_number = "";
$street = "";
$ward = "";
$district = "";
$city = "";

if (isset($_GET['name'])) {
    $name = $_GET['name'];
}
if (isset($_GET['address_number'])) {
    $address_number = $_GET['address_number'];
}
if (isset($_GET['street'])) {
    $street = $_GET['street'];
}
if (isset($_GET['ward'])) {
    $ward = $_GET['ward'];
}
if (isset($_GET['district'])) {
    $district = $_GET['district'];
}
if (isset($_GET['city'])) {
    $city = $_GET['city'];
}

$id = $_SESSION['id'];

if ($_SESSION['user_type'] === 'p') {
    $sql = "UPDATE `patient` SET `patient_name`='$name',`house_number`='$address_number',`street`='$street',`ward`='$ward',`district`='$district',`city`='$city' WHERE patient_id=$id";
    $result = mysqli_query($conn, $sql);
} else if ($_SESSION['user_type'] === 'd') {
    $sql = "UPDATE `doctor` SET `doc_name`='$name',`clinic_number`='$address_number',`street`='$street',`ward`='$ward',`district`='$district',`city`='$city' WHERE doc_id = $id";
    $result = mysqli_query($conn, $sql);
}

header('Location:../index.php?page=profile');
