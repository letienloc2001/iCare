<?php
class LoginController{
    public function checkLogin($username, $password){
        require_once('../models/user.php');

        $userModel = new UserModel();
        $res = $userModel->checkLogin($username, $password);
        if ($res == 1) {
            $_SESSION['username'] = $username;
            return true;
        }
        else {
            return false;
        }
    }

    public function checkSignUp($email, $password, $phone){
        require_once('../models/user.php');

        $userModel = new UserModel();

        $res = $userModel->checkSignUp($email, $password, $phone);
        if ($res == 1) {
            return 1;
        }
        else return $res;
    }

    public function checkForget($username){
        require_once('../models/user.php');

        $userModel = new UserModel();
        return $userModel->checkForget($username);
    }
}
?>