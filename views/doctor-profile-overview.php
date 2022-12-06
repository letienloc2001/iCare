<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo/iCare-logo-website.png" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/profile/user-info-card.css">
    <link rel="stylesheet" href="../assets/css/profile/section.css">
    <link rel="stylesheet" href="../assets/css/profile/profile-page.css">
    <link rel="stylesheet" href="../assets/css/profile/request-appointment.css">
    <link rel="stylesheet" href="../assets/css/profile/today-appointment.css">
    <link rel="stylesheet" href="../assets/css/profile/summary.css">
    <link rel="stylesheet" href="../assets/css/profile/review.css">


</head>

<body>
    <!-- <header>
        ?php require_once("header.php") ?>
    </header> -->

    <main>
        <?php require_once("./profile-components/user-info-card.php") ?>
        <div>
            <?php require_once("./profile-components/section-bar-1.php") ?>
            <?php require_once("./profile-components/summary.php") ?>
            <div class="detail">
                <?php require_once("./profile-components/request-appointment.php") ?>
                <?php require_once("./profile-components/today-appointment.php") ?>
            </div>
            <?php require_once("./profile-components/review.php") ?>
        </div>

    </main>
</body>

</html>