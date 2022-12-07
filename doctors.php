<?php
if (!isset($_SESSION['current_page_shop']))
    $_SESSION['current_page_shop'] = 1;
require_once('controllers/doctors.php');
$doctorController = new DoctorController();
$_SESSION['maxPageNumber'] = $doctorController->countDoctorNumber() / 12 + 1;

function generatePageNumber()
{
    echo '<li><a class="current" href="./index.php?page=doctors&p='. $_SESSION['current_page_shop'] .'">'. $_SESSION['current_page_shop'] .'</a></li>';
}
if (isset($_GET['p'])) {
    $_SESSION['current_page_shop'] = $_GET['p'];
}
if (isset($_GET['act']))
{
    if ($_GET['act'] == 'left')
    {
        if ($_SESSION['current_page_shop'] > 1)
            $_SESSION['current_page_shop']--;
        header("Location: ./index.php?page=doctors&p=". $_SESSION['current_page_shop']);
    }
    else if ($_GET['act'] == 'right')
    {
        if ($_SESSION['current_page_shop'] < $_SESSION['maxPageNumber'] - 1)
            $_SESSION['current_page_shop']++;
        header("Location: ./index.php?page=doctors&p=". $_SESSION['current_page_shop']);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="./images/logo.svg" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet prefetch" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/base.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/doctors.css" />

    <link rel="stylesheet" href="./assets/css/scrollbar.css" />
    <link rel="shortcut icon" type="image/x-icon" href="./assets/img/logo/iCare-logo-website.png.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>iCare - Doctors</title>
</head>

<body>
<?php require_once("./views/header.php"); ?>
<div class="main">
    <div class="page-title" style="background-image: url('./assets/img/home/home-background.jpg'); padding: 30px 0;">
        <div class="grid wide-m">
            <div class="container-fluid">
                <div class="row content-row icare">
                    <div class="page-title-inner col-xl-8 col-lg-8 col-sm-8 col-8">
                        <h1 class="page-title__name">Doctors</h1>
                        <div class="page-title__dir">
                            <ul class="page-title__dir-list">
                                <li class="page-title__dir-item">
                                    <a href="./index.php?page=home" class="page-title__dir-link">Home</a>
                                </li>
                                <span> > </span>
                                <li class="page-title__dir-item">
                                    <a href="./index.php?page=doctors" class="page-title__dir-link">Doctors</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="icare-filter-search col-xl-4 col-lg-4 col-sm-4 col-4">
                        <form class="icare-filter-search_form d-flex" method="post"
                              action="index.php?page=doctors&search="
                              onsubmit="changeTarget(this)">
                            <input class="icare-filter-search_input" type="text" placeholder="Search Here" name="search_value"/>
                            <button class="icare-filter-search_btn" type="submit" onsubmit="">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // change target of form to get search value
        function changeTarget(form) {
            form.action = "index.php?page=doctors&search=" + form.search_value.value;
        }
    </script>

    <div class="container content-container">
        <div class="row content-row icare">
            <div class="icare-primary col-xl-8 col-lg-8 col-sm-12 col-12">
                <div class="icare-sort-bar d-flex">
                    <div class="icare-sort-bar_note">
                        <p class="icare-sort-bar_note">
                            <?php
                            echo "Showing ";
                            if (!isset($_GET['search']) && !isset($_GET['tag'])){
                                echo 12*$_SESSION['current_page_shop']-11;
                                echo " - ";
                                if ($_SESSION['current_page_shop']*12 <= $doctorController->countDoctorNumber())
                                    echo 12*$_SESSION['current_page_shop'];
                                else echo $doctorController->countDoctorNumber();
                                echo " of ";
                            }
                            ?>
                            <?php
                            if (!isset($_GET['search']) && !isset($_GET['tag'])){
                                echo $doctorController->countDoctorNumber();
                            }
                            else echo $doctorController->getAllDoctor_pagination($_SESSION['current_page_shop'], 0);
                            ?>
                            results
                        </p>
                    </div>

                </div>
                <div class="icare-items row">
                    <?php
                    $doctorController->getAllDoctor_pagination($_SESSION['current_page_shop'], 1);
                    ?>
                </div>
                <nav class="icare-pagination">
                    <ul class="icare-page-numbers justify-content-center">
                            <?php
                            if ($_SESSION['maxPageNumber'] > 0) {
                                if ($_SESSION['current_page_shop']>1) {
                                    echo '<li><a href="./index.php?page=doctors&act=left">'.($_SESSION['current_page_shop']-1).'</a></li>';
                                }
                                generatePageNumber();
                                if ($_SESSION['current_page_shop'] < $_SESSION['maxPageNumber']-1) {
                                    echo '<li><a href="./index.php?page=doctors&act=right">'.($_SESSION['current_page_shop']+1).'</a></li>';
                                }
                            }
                            ?>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="icare-filter-panel col-xl-4 col-lg-4 col-sm-12 col-12">
                <div class="icare-filter-group">
                    <h2 class="organic-filter-group_heading text-left" style="padding-bottom: 15px; text-align: center;">Specification</h2>
                    <div class="icare-filter-group_wrapper">
                        <?php
                        $doctorController->showTag();
                        ?>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <?php require_once("./views/footer.php") ?>
    <?php require_once("./views/scrollbar.php") ?>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js "></script>
</body>
</html>