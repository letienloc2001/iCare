
<?php
$host = "localhost";
$user = "root";
$password = "root";
$database = "iCare";
$conn = mysqli_connect($host, $user, $password, $database);
//if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
//}
if (mysqli_connect_errno()) {
    exit("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>