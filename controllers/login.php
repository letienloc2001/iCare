<?php
class LoginController{
    public function checkLogin($email, $password){
        require_once('../models/user.php');

        $userModel = new UserModel();
        $res = $userModel->checkLogin($email, $password);
        if ($res == 1) {
            $_SESSION['email'] = $email;
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

//    public function checkForget($email){
//        require_once('../models/user.php');
//
//        $userModel = new UserModel();
//        return $userModel->checkForget($email);
//    }
}
?>