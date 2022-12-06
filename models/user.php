<?php

class UserModel {
    public function InitConnect(){
        $con = mysqli_connect('localhost', 'root', 'root', 'iCare');

        if (mysqli_connect_errno()){
            die('Connection failed: '. mysqli_connect_error());
        }
        else return $con;
    }

    public function getAllUser(){
        $con = $this->InitConnect();

        $res = $con->query('SELECT * FROM user_table');
        $users = array();
        if ($res->num_rows > 0){
            while ($user = mysqli_fetch_assoc($res)){
                $users[] = $user;
            }
        }

        $con->close();
        return $users;
    }

    public function getOneUser($email){
        $con = $this->InitConnect();

        $res = $con->query("SELECT * FROM user_table WHERE Email='$email'");
        $user = mysqli_fetch_assoc($res);

        $con->close();
        return $user;
    }

    public function changeUserData($email, $password, $phone, $avatar){
        // check valid step first
        $con = $this->InitConnect();

        if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password) || !filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($phone) > 12) {
            $con->close();
            return false;
        }

        $res = $con->query("UPDATE user_table SET Password='$password', Email='$email', PhoneNumber='$phone', Avatar='$avatar' WHERE Email='$email'");
        $con->close();
        return true;
    }

    public function deleteOneUser($email){
        $con = $this->InitConnect();
        $res = $con->query("DELETE FROM user_table WHERE Email='$email'");
        $con->close();
    }

    public function checkLogin($email, $password){
        $con = $this->InitConnect();

        $res = $con->query("SELECT Password FROM user_table WHERE Email = '$email'");
        if (mysqli_num_rows($res) == 0){
            return 0;
        }
        else {
            if ($password == $res->fetch_assoc()['Password']){
                $con->close();
                return 1;
            }
            else {
                $con->close();
                return 0;
            }
        }
    }


    // password is at least one number, one upper case letter, one lower case letter and one special character
    // username a-z A-Z 0-9 _ . 5 to 20 chars


    public function checkSignUp($email, $password, $phone){
        $con = $this->InitConnect();

        $res = $con->query("SELECT * FROM user_table WHERE Email = '$email'");
        if (mysqli_num_rows($res) == 0) {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $con->close();
                return 4;       // 4 is email
            }
            if (strlen($phone) > 13 || strlen($phone) < 9){
                $con->close();
                return 5;       // 5 is phone
            }
            if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password)){
                $con->close();
                return 3;       // 3 is password
            }

            $sql = "INSERT INTO user_table (Email, Password, Email, PhoneNumber, PermissionComment) VALUES ('".$username."', '".$password."', '".$email."','".$phone."', 1)";
            if ($con->query($sql) == TRUE) {
                $con->close();
                return 1;       // 1 is ok
            }
            else {
                $con->close();
                return -1;      // query
            }
        }
        else {
            return 0;           // 0 is duplicate
        }
    }

    public function checkForget($username){
        $con = $this->InitConnect();

        $res = $con->query("SELECT * FROM user_table WHERE Username = '" . $username . "'");
        if (mysqli_num_rows($res) == 0){
            return 0;
        } else {
            return mysqli_fetch_assoc($res)['Password'];
        }
    }

    public function checkCommentPermission($username){
        $con = $this->InitConnect();
        $res = $con->query("SELECT PermissionComment FROM user_table WHERE Username = '" . $username . "'");
        if ($res->fetch_assoc()['PermissionComment'] == 1){
            return true;
        }
        else return false;
    }

    public function getSomeUser($arr){
        $con = $this->InitConnect();
        $users = array();
        foreach ($arr as $comment):
            $res = $con->query("SELECT * FROM user_table WHERE Username = '" . $comment['Username'] . "'");
            $user = mysqli_fetch_assoc($res);
            $users[$user['Username']] = array("Image" => $user['Avatar']);
        endforeach;
        return $users;
    }

    public function getPictureOneUser($username){
        $con = $this->InitConnect();
        $res = $con->query("SELECT Avatar FROM user_table WHERE Username = '" . $username . "'");
        $pic = $res->fetch_assoc()['Avatar'];
        return $pic;
    }
}

?>