<?php

class DoctorController {
    public function InitDoctorController(){
        require_once('models/doctors.php');
        require_once('views/doctors.php');
    }

//    public function getAllDoctor(){
//        $this->InitDoctorController();
//
//        $DoctorModel = new DoctorModel();
//        $Doctors = $DoctorModel->getAllDoctor();
//
//        $DoctorView = new DoctorView();
//        $DoctorView->showAllDoctor($Doctors);
//    }

    public function getOneDoctor($id){
        $this->InitDoctorController();

        $DoctorModel = new DoctorModel();
        $Doctor = $DoctorModel->getOneDoctor($id);

        $DoctorView = new DoctorView();
        $DoctorView->showOneDoctor($Doctor);
    }

    public function countDoctorNumber() {
        $this->InitDoctorController();

        $DoctorModel = new DoctorModel();
        return $DoctorModel->countDoctorNumber();
    }

    public function getAllDoctor_pagination($numPage, $show){
        $this->InitDoctorController();
        $DoctorModel = new DoctorModel();
        if (isset($_GET['search'])) {
            $Doctors = $DoctorModel->search($_GET['search']);
        }
        else if (isset($_GET['tag'])){
            $Doctors = $DoctorModel->tag($_GET['tag']);
        }
        else $Doctors = $DoctorModel->getAllDoctor_pagination($numPage);
        
        if ($show == 1){
            $DoctorView = new DoctorView();
            $DoctorView->showAllDoctor($Doctors);
        }
        else return sizeof($Doctors);
    }

    public function getTop3Doctors(){
        $this->InitDoctorController();
        $DoctorModel = new DoctorModel();
        $Doctors = $DoctorModel->getTop3Doctors();
        
        $DoctorView = new DoctorView();
        $DoctorView->show3TopDoctors($Doctors);
    }

//    public function addtoCart($id, $quantity)
//    {
//        require_once('../models/doctors.php');
//        require_once('../views/doctors.php');
//        $DoctorModel = new DoctorModel();
//        $DoctorView = new DoctorView();
//
//        $Doctor = $DoctorModel->getOneDoctor($id);
//
//        if(!empty($_SESSION['cartInfo']))
//        {
//            //and if session cart same
//            if (isset($_SESSION['cartInfo'][$id]) == $id) {
//                $_SESSION['cartInfo'][$id]['quantity'] += $quantity;
//            } else {
//                //if not same put new storing
//                $_SESSION['cartInfo'][$id] = array("Image" => $Doctor['Image'], "Name" => $Doctor['Name'], "Price" => $Doctor['Price'], "ID" => $Doctor['ID'], "quantity" => $quantity);
//            }
//        } else  {
//            $_SESSION['cartInfo'] = array();
//            $_SESSION['cartInfo'][$id] = array("Image" => $Doctor['Image'], "Name" => $Doctor['Name'], "Price" => $Doctor['Price'], "ID" => $Doctor['ID'], "quantity" => $quantity);
//        }
//    }
//
//    public function removeToCart($id)
//    {
//        require_once('../models/doctors.php');
//        require_once('../views/doctors.php');
//        $DoctorModel = new DoctorModel();
//        $DoctorView = new DoctorView();
//
//        if(!empty($_SESSION['cartInfo']))
//        {
//            unset($_SESSION['cartInfo'][$id]);
//        }
//    }

    public function showTag(){
        $this->InitDoctorController();
        $DoctorModel = new DoctorModel();
        $tags = $DoctorModel->getAllTag();

        $DoctorView = new DoctorView();
        $DoctorView->showAllTag($tags);
    }

//    public function showTagFooter(){
//        $this->InitDoctorController();
//        $DoctorModel = new DoctorModel();
//        $DoctorView = new DoctorView();
//        $tags = $DoctorModel->getAllTag();
//
//        $DoctorView->showTagFooter($tags);
//    }
}

?>