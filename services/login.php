<?php
require_once("./controllers/login.php");
session_start();
$loginController = new LoginController();
if ($_POST['act'] == "login"){
    $res = $loginController->checkLogin($_POST['email'], $_POST['password']);
    if (!$res)
        echo "Username or password is incorrect.";
} else if ($_POST['act'] == "reg") {
    $res = $loginController->checkSignUp($_POST['email'], $_POST['password'], $_POST['phone']);
    echo $res;
} else if ($_POST['act'] == "forget") {
    echo $loginController->checkForget($_POST['username']);
}
?>