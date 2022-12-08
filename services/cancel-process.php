<?php
    include("./connection.php");
    if(isset($_GET['state']))
        $state = $_GET['state'];
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    if($state == 'cancel'){
        $sql = "DELETE FROM `patient2doctor` WHERE meeting_id=$id";
        $result = mysqli_query($conn, $sql);
    }
    header("Location:../index.php?page=profile");
?>