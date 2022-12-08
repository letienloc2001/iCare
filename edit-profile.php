<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo/iCare-logo-website.png" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="./assets/css/profile/user-info-card.css">
    <link rel="stylesheet" href="./assets/css/profile/section.css">
    <link rel="stylesheet" href="./assets/css/profile/profile-page.css">
    <link rel="stylesheet" href="./assets/css/profile/request-appointment.css">
    <link rel="stylesheet" href="./assets/css/profile/today-appointment.css">
    <link rel="stylesheet" href="./assets/css/profile/summary.css">
    <link rel="stylesheet" href="./assets/css/profile/review.css">
    <link rel="stylesheet" href="./assets/css/profile/patient-appointment.css"> -->
    <link rel="stylesheet" href="./assets/css/profile/edit-profile.css">
    <link rel="stylesheet" href="./assets/css/login.css" />


</head>

<?php
include "./services/connection.php";
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$name = "";
$address_num = "";
$street = "";
$ward = "";
$district = "";
$city = "";

if (isset($_SESSION['id']))
    $id = $_SESSION['id'];
if (isset($_SESSION['user_type']))
    $user_type = $_SESSION['user_type'];
if ($user_type === 'd') {
    $sql1 = "CALL getDoctorDetails($id);";
    $record = mysqli_query($conn, $sql1);
    while ($user_info = mysqli_fetch_assoc($record)) {
        $name = $user_info['doc_name'];
        $address_num = $user_info['clinic_number'];
        $street = $user_info['street'];
        $ward = $user_info['ward'];
        $district  = $user_info['district'];
        $city = $user_info['city'];
    }
} else if ($user_type === 'p') {
    $sql1 = "select * from patient where patient_id =$id";
    $record = mysqli_query($conn, $sql1);
    while ($user_info = mysqli_fetch_assoc($record)) {
        $name = $user_info['patient_name'];
        $address_num = $user_info['house_number'];
        $street = $user_info['street'];
        $ward = $user_info['ward'];
        $district  = $user_info['district'];
        $city = $user_info['city'];
    }
}

?>

<body>
    <header>
        <?php require_once("./views/header.php") ?>
    </header>
    <div class="main">
        <div class="grid wide-m">
            <div class="row container-fluid ">
                <div class="col-lg-3 "></div>
                <div class="col-sm-12 col-md-12 col-lg-9 login_form ">
                    <div class="container-fluid">
                        <div class="row">
                            <h2 class="login_form__name">Edit Profile</h2>
                        </div>
                        <br>
                        <form action="./services/edit-profile-process.php" method="get">
                            <div class="row">
                                <label for="email">Your name: </label><input type="text" name="name" id="email" class="form__input" value="<?php echo $name ?>">
                            </div>
                            <div class="row">
                                <label for="email">Your address's number</label><input type="text" name="address_number" id="email" class="form__input" value="<?php echo $address_num ?>">
                            </div>
                            <div class="row">
                                <label for="email">Street: </label><input type="text" name="street" id="email" class="form__input" value="<?php echo $street ?>">
                            </div>
                            <div class="row">
                                <label for="email">Ward: </label><input type="text" name="ward" id="email" class="form__input" value="<?php echo $ward ?>">
                            </div>
                            <div class="row">
                                <label for="email">District: </label><input type="text" name="district" id="email" class="form__input" value="<?php echo $district ?>">
                            </div>
                            <div class="row">
                                <label for="email">City: </label><input type="text" name="city" id="email" class="form__input" value="<?php echo $city ?>">
                            </div>

                            <div class="row">
                                <button class="btn btn-primary login-btn">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>