<?php
echo "123";
include("./connection.php");
if (isset($_GET['state']))
    $state = $_GET['state'];
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
if ($state == 'accept') {
    $sql = "call approveMeeting($id)";
    $result = mysqli_query($conn, $sql);
} else {
    $sql = "call denyMeeting($id)";
    $result = mysqli_query($conn, $sql);
}
header('Location:../index.php?page=profile');
