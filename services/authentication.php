<?php
include 'connection.php';

function authenticate($email, $password): void
{
    global $conn;
    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    echo "<script>console.log('Debug Objects: " . mysqli_num_rows($result) . "' );</script>";
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['user_email'] = $row['email'];
        $_SESSION['user_type'] = $row['type'];
        header("Location: index.php?page=login_successful");
    } else {
        header("Location: index.php?page=login_failed");
    }
    exit;
}

authenticate($_POST['email'], $_POST['password']);