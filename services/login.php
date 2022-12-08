<?php
require_once("../controllers/login.php");
session_start();
$loginController = new LoginController();
if ($_POST['act'] == "login") {
    $res = $loginController->checkLogin($_POST['email'], $_POST['password']);
    if (!$res)
        echo "Username or password is incorrect.";
    else
        echo "Log in successfully!";
} else if ($_POST['act'] == "reg") {
    $res = $loginController->checkSignUp($_POST['username'], $_POST['password'], $_POST['nic'], $_POST['email']);
    echo $res;
//    $con = mysqli_connect('localhost', 'root', 'root', 'iCare');
//    $sql = "call register_patient('".$_POST['username']."','".$_POST['password']."','".$_POST['nic']."','".$_POST['email']."');";
//    $con->query($sql);
}
?>