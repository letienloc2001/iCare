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

    <link rel="stylesheet" href="../assets/css/profile/user-info-card.css">
    <link rel="stylesheet" href="../assets/css/profile/section.css">
    <link rel="stylesheet" href="../assets/css/profile/profile-page.css">
    <link rel="stylesheet" href="../assets/css/profile/request-appointment.css">
    <link rel="stylesheet" href="../assets/css/profile/today-appointment.css">
    <link rel="stylesheet" href="../assets/css/profile/summary.css">
    <link rel="stylesheet" href="../assets/css/profile/review.css">


    <!-- <script src="section.js"></script> -->
</head>

<body>
    <header>
        <?php require_once("header.php") ?>
    </header>

    <main>
        <?php require_once("./profile-components/user-info-card.php") ?>
        <div>
            <?php require_once("./profile-components/section-bar.php") ?>
            <div class="summary">
                <div class="total-appointment">
                    <div class="total-detail">
                        <div class="portion">
                            <span class="total-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-clipboard2-data" viewBox="0 0 16 16">
                                    <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z" />
                                    <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z" />
                                    <path d="M10 7a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 0-1 1v3a1 1 0 1 0 2 0V9a1 1 0 0 0-1-1Z" />
                                </svg>
                            </span>
                            10000tr
                        </div>
                        Total appointments
                    </div>
                </div>
                <div class="accepted-appointment">
                    <div class="total-detail">
                        <div class="portion">
                            <span class="total-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-clipboard2-plus" viewBox="0 0 16 16">
                                    <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z" />
                                    <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z" />
                                    <path d="M8.5 6.5a.5.5 0 0 0-1 0V8H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V9H10a.5.5 0 0 0 0-1H8.5V6.5Z" />
                                </svg>
                            </span>
                            50%
                        </div>
                        Accepted appointments
                    </div>
                </div>
                <div class="declined-appointment">
                    <div class="total-detail">
                        <div class="portion">
                            <span class="total-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-clipboard2-minus" viewBox="0 0 16 16">
                                    <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z" />
                                    <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z" />
                                    <path d="M6 8a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1H6Z" />
                                </svg>
                            </span>
                            50%
                        </div>
                        Declined appointments
                    </div>
                </div>
            </div>
            <div class="detail">
                <?php require_once("./profile-components/request-appointment.php") ?>
                <?php require_once("./profile-components/today-appointment.php") ?>
            </div>
            <div class="review">
                <h4>Review</h4>
                <div class="review-star">
                    starrrrrrrrrrrrrrr
                </div>
                <div class="review-table" style="height: 300px">

                </div>
            </div>
        </div>

    </main>
</body>

</html>