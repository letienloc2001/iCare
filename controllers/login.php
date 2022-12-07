<?php
class LoginController{
    public function checkLogin($email, $password){
        require_once('../models/user.php');

        $userModel = new UserModel();
        $res = $userModel->checkLogin($email, $password);
        if ($res == 1) {
            $user = $userModel->getOneUser($email);
            $_SESSION['email'] = $email;
            $_SESSION['user_type'] = $user['user_type'];
            if ($user['user_type'] == 'a') {
                $_SESSION['id'] = $user['admin_id'];
            } else if ($user['user_type'] == 'p') {
                $_SESSION['id'] = $user['patient_id'];
            } else {
                $_SESSION['id'] =$user['doc_id'];
            }
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
}
?>