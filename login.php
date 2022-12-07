<?php
if (isset($_SESSION['email']) && !empty($_SESSION['email'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
    <link rel="stylesheet" href="./assets/css/base.css" />
    <link rel="stylesheet" href="./assets/css/login.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="image/x-icon" href="./assets/img/logo/iCare-logo-website.png" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>iCare - Login</title>
</head>

<body>
<script>
    function checkLogin(){
        let email = document.getElementsByClassName("form__input")[0].value;
        let password = document.getElementsByClassName("form__input")[1].value;
        $.ajax({
            type: "POST",
            url: "./services/login.php",
            data: {
                act: "login",
                email: email,
                password: password
            },
            success: function(data) {
                if (data == ""){
                    window.location.href = "index.php";
                }
                document.getElementsByClassName("msg")[0].innerHTML = data;
            }
        });
    }

</script>
<!--#######HEADER##########-->
<?php require_once("./views/header-login.php") ?>
<!--#######MAIN##########-->
<div class="main">
    <div class="grid wide-m">
        <div class="row container-fluid ">
            <div class="col-lg-3 "></div>
            <div class="col-sm-12 col-md-12 col-lg-6 login_form ">
                <div class="container-fluid">
                    <div class="row">
                        <h2 class="login_form__name">Sign in</h2>
                    </div>
                    <br>
                        <form action="./index.php?page=home" method="post">
                            <div class="row">
                                <label for="email"></label><input type="email" name="email" id="email" class="form__input" placeholder="Email" value="">
                            </div>
                            <div class="row">
                                <label for="password"></label><input type="password" name="password" id="password" class="form__input" placeholder="Password" value="">
                            </div>
                            <div class="row">
                                <!-- display msg when failed!! -->
                                <span class="msg"></span>
                            </div>
                            <div class="row remember-group">
                                <input type="checkbox" name="remember_me" id="remember_me" class="">
                                <label for="remember_me">Remember Me</label>
                            </div>
                            <div class="row">
                                <button class="btn btn-primary login-btn" onclick="checkLogin();">
                                    Sign in
                                </button>
                            </div>
                            <div class="row">
                                <p class="query">Don't have an account? <a href="./index.php?page=register">Register Here</a></p>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js "></script>
<script>
    document.getElementById('register-btn').addEventListener("click", function() {
        document.getElementById('modal').style.display = "flex";
    })
</script>
</body>
</html>