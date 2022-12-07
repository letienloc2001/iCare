<?php

class DoctorModel {
    public function InitConnect(){
        $con = mysqli_connect('localhost', 'root', 'root', 'iCare');
        if (mysqli_connect_errno()){
            die('Connection failed: '. mysqli_connect_error());
        }
        else return $con;
    }

    public function getAllDoctor(){
        $con = $this->InitConnect();

        $res = $con->query('SELECT * FROM doctor');
        $doctors = array();
        if ($res->num_rows > 0){
            while ($doctor = mysqli_fetch_assoc($res)){
                $doctors[] = $doctor;
            }
        }

        return $doctors;
    }

    public function getAllDoctor_pagination($numPage){
        $con = $this->InitConnect();
        $start = 12 * ($numPage - 1);
        $row = 12;
        $res = $con->query("SELECT * FROM doctor LIMIT $start, $row");
        $doctors = array();
        if ($res->num_rows > 0){
            while ($doctor = mysqli_fetch_assoc($res)){
                $doctors[] = $doctor;
            }
        }

        return $doctors;
    }

    public function getOneDoctor($id){
        $con = $this->InitConnect();

        $res = $con->query("SELECT * FROM product_table WHERE ID='$id'");
        return mysqli_fetch_assoc($res);
    }

//    public function Edit($action, $doctor){
//        if ($action == "addnew")
//        {
//            $conn = $this->InitConnect();
//
//            $sql = "INSERT INTO doctor (Image, Name, Price, Description, Tag) VALUES('".$doctor['Image']."', '".$doctor['Name']."', '".$doctor['Price']."', '".$doctor['Description']."', '".$doctor['Tag']."')";
//            if ($conn->query($sql) === TRUE) {
//                $conn->close();
//                return true;
//            }
//            else {
//                $conn->close();
//                return false;
//            }
//        }
//
//        if ($action == "edit")
//        {
//            $conn = $this->InitConnect();
//
//            $existID = mysqli_query($conn, "SELECT * FROM doctor WHERE ID = '".$doctor['ID']."'");
//            if (mysqli_num_rows($existID) == 0)
//                return false;
//            else
//            {
//                $sql = "UPDATE product_table SET Image = '".$doctor['Image']."', Name = '".$['Name']."', Price = '".$doctor['Price']."', Description = '".$doctor['Description']."', Tag = '".$doctor['Tag']."' WHERE ID = ".$doctor['ID']."";
//                if ($conn->query($sql) === TRUE) {
//                    $conn->close();
//                    return true;
//                }
//                else {
//                    $conn->close();
//                    return false;
//                }
//            }
//        }
//
//        if ($action == "delete")
//        {
//            $conn = $this->InitConnect();
//
//            $existID = mysqli_query($conn, "SELECT * FROM product_table WHERE ID = '".$doctor['ID']."'");
//            if (mysqli_num_rows($existID) == 0)
//                return false;
//            else
//            {
//                $sql = "DELETE FROM product_table WHERE ID = " . $doctor['ID'];
//                if ($conn->query($sql) === TRUE) {
//                    $conn->close();
//                    return true;
//                }
//                else {
//                    $conn->close();
//                    return false;
//                }
//            }
//        }
//    }

    public function getTop3Doctors() {
        $con = $this->InitConnect();

        $res = $con->query("call getTop3Doctors();");
        $doctors = array();
        $cnt = 0;
        if (mysqli_num_rows($res) < 3){
            while ($doctor = mysqli_fetch_assoc($res)){
                $doctors[] = $doctor;
                $cnt++;
            }
        }
        else {
            while ($doctor = mysqli_fetch_assoc($res)){
                if ($cnt == 3)
                    break;
                $doctors[] = $doctor;
                $cnt++;
            }
        }
        return $doctors;
    }

    public function countDoctorNumber()
    {
        $conn = $this->InitConnect();
        $numRows = mysqli_query($conn, "SELECT * FROM doctor");
        return mysqli_num_rows($numRows);
    }

    public function search($name){
        $con = $this->InitConnect();
        $res = $con->query('SELECT * FROM doctor WHERE doc_name LIKE \'' . $name . '%\'');
        $doctors = array();
        if (mysqli_num_rows($res) > 0){
            while ($doctor = mysqli_fetch_assoc($res)){
                $doctors[] = $doctor;
            }
        }
        return $doctors;
    }

//    public function specification($id){
//        $con = $this->InitConnect();
//        $res = $con->query('call getSpecializations('.$id.')');
//        $specifications = array();
//        if (mysqli_num_rows($res) > 0){
//            while ($specification = mysqli_fetch_assoc($res)){
//                $tagDB = $product['Tag'];
//                if (strpos($tagDB, $key) !== false){
//                    $products[] = $product;
//                }
//            }
//        }
//        return $products;
//    }
//    public function tag($key){
//        $con = $this->InitConnect();
//        $res = $con->query('SELECT * FROM product_table');
//        $products = array();
//        if (mysqli_num_rows($res) > 0){
//            while ($product = mysqli_fetch_assoc($res)){
//                $tagDB = $product['Tag'];
//                if (strpos($tagDB, $key) !== false){
//                    $products[] = $product;
//                }
//            }
//        }
//        return $products;
//    }
//
//    public function getAllTag(){
//        $con = $this->InitConnect();
//        $res = $con->query('SELECT * FROM product_table');
//        $tags = array();
//        if (mysqli_num_rows($res) > 0){
//            while ($tag = mysqli_fetch_assoc($res)){
//                $tagtmp = $tag['Tag'];
//                $tagtmp = explode(",", $tagtmp);
//                foreach ($tagtmp as $tag):
//                    $tags[] = $tag;
//                endforeach;
//            }
//        }
//        $tags = array_unique($tags);
//        unset($tags[sizeof($tags)]);
//        return $tags;
//    }
}

?>