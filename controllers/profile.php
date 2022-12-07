<?php

class ProfileController {
    public function InitProfileController(){
        require_once('models/user.php');
//        require_once('views/user-view.php');
    }

    public function getOneUserName($id){
        $this->InitProfileController();

        $userModel = new UserModel();
        return $userModel->getOneUserName($id);

//        $userView = new UserView();
//        $userView->showOneUser_userpage($user);
    }

//    public function changeOneUser($username, $email, $pass, $phone, $avatar){
//        require_once('../models/profile.php');
//        $userModel = new UserModel();
//
//        if ($userModel->changeUserData($username, $pass, $email, $phone, $avatar)){
//            return true;
//        }
//        else return false;
//    }

    public function getPictureOneUser($id){
        $this->InitProfileController();
        $userModel = new UserModel();
        $pic = $userModel->getPictureOneUser($id);
        if ($pic == "")
            return "assets/img/avt.png";
        return $pic;
    }

}

?>