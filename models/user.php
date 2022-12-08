<?php

class UserModel
{
    public function InitConnect()
    {
        $con = mysqli_connect('localhost', 'root', 'root', 'iCare');

        if (mysqli_connect_errno()) {
            die('Connection failed: ' . mysqli_connect_error());
        } else return $con;
    }

    public function getAllUser()
    {
        $con = $this->InitConnect();

        $res = $con->query('SELECT * FROM user_table');
        $users = array();
        if ($res->num_rows > 0) {
            while ($user = mysqli_fetch_assoc($res)) {
                $users[] = $user;
            }
        }

        $con->close();
        return $users;
    }

    public function getOneUser($email)
    {
        $con = $this->InitConnect();

        $res = $con->query("SELECT * FROM user WHERE Email='" . $email . "'");
        $user = mysqli_fetch_assoc($res);

        $con->close();
        return $user;
    }

    public function getOneUserName($id)
    {
        $con = $this->InitConnect();
        if ($_SESSION['user_type'] == 'a') {
            $res = $con->query("SELECT admin_name FROM admin WHERE admin_id=" . $id);
            return $res->fetch_assoc()['admin_name'];
        } else if ($_SESSION['user_type'] == 'p') {
            $res = $con->query("SELECT patient_name FROM patient WHERE patient_id=" . $id);
            return $res->fetch_assoc()['patient_name'];
        } else {
            $res = $con->query("SELECT doc_name FROM doctor WHERE doc_id=" . $id);
            return $res->fetch_assoc()['doc_name'];
        }
    }

    public function changeUserData($email, $password, $phone, $avatar)
    {
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

    public function deleteOneUser($email)
    {
        $con = $this->InitConnect();
        $res = $con->query("DELETE FROM user_table WHERE Email='$email'");
        $con->close();
    }

    public function checkLogin($email, $password): int
    {
        $con = $this->InitConnect();

        $res = $con->query("SELECT Password FROM user WHERE Email = '$email'");
        if (mysqli_num_rows($res) == 0) {
            return 0;
        } else {
            if ($password == $res->fetch_assoc()['Password']) {
                $con->close();
                return 1;
            } else {
                $con->close();
                return 0;
            }
        }
    }


    // password is at least one number, one upper case letter, one lower case letter and one special character
    // username a-z A-Z 0-9 _ . 5 to 20 chars


    public function checkSignUp($username, $password, $nic, $email): int
    {
        $con = $this->InitConnect();

        $check1 = $con->query("SELECT * FROM user WHERE Email = '".$email."'");
        $check2 = $con->query("SELECT * FROM patient WHERE nic_number = '".$nic."'");
        if (mysqli_num_rows($check1) > 0) {
            return 0; // 0: email exists
        }
        if (mysqli_num_rows($check2) > 0) {
            return 1; //1: nic exists
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $con->close();
            return 2; //2: is wrong email
        }
        if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password)) {
            $con->close();
            return 3; // 3 is password
        }

        $sql = "call register_patient('".$username."','".$password."','".$nic."','".$email."');";
        if ($con->query($sql)) {
            $con->close();
            return 10;       // 10 is ok
        } else {
            $con->close();
            return -1;      // query
        }
    }

    public function getPictureOneUser($id)
    {
        $con = $this->InitConnect();
        if ($_SESSION['user_type'] == 'a') {
            return "";
        } else if ($_SESSION['user_type'] == 'p') {
            $res = $con->query("SELECT image_url FROM patient WHERE patient_id =" . $id);
        } else {
            $res = $con->query("SELECT image_url FROM doctor WHERE doc_id =" . $id);
        }
        return $res->fetch_assoc()['image_url'];
    }
}
