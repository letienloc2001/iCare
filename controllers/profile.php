<?php

class ProfileController {
    public function InitProfileController(){
        require_once('models/profile.php');
//        require_once('views/user-view.php');
    }

//    public function getOneUser($username){
//        $this->InitProfileController();
//
//        $userModel = new UserModel();
//        $user = $userModel->getOneUser($username);
//
//        $userView = new UserView();
//        $userView->showOneUser_userpage($user);
//    }

//    public function changeOneUser($username, $email, $pass, $phone, $avatar){
//        require_once('../models/profile.php');
//        $userModel = new UserModel();
//
//        if ($userModel->changeUserData($username, $pass, $email, $phone, $avatar)){
//            return true;
//        }
//        else return false;
//    }

    public function getPictureOneUser($username){
        $this->InitProfileController();
        $userModel = new UserModel();
        $pic = $userModel->getPictureOneUser($username);
        if ($pic == "")
            return "assets/img/vegetables.png";
        return $pic;
    }

//    public function showOrderHistory($username){
//        require_once('../models/user-model.php');
//        require_once('../models/historyTransaction-model.php');
//        $userModel = new UserModel();
//        $historyModel = new HistoryTransactionModel();
//        $user = $userModel->getOneUser($username);
//        $historys = $historyModel->getAllHistoryOneUser($username);
//        $user['history'] = array();
//        $cnt = 0;
//        foreach ($historys as $history):
//            $user['history'][$cnt] = array("ID_product" => $history['ID_product'], "Image" => $history['Image'], "Name_product" => $history['Name_product'], "Price" => $history['Price'],
//                "Quantity" => $history['Quantity'], "Day" => $history['Day'], "Total" => $history['Total']);
//            $cnt++;
//        endforeach;
//        return $user;
//    }
}

?>