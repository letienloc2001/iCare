
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
    <title>iCare - Register</title>
</head>

<body>
<script>

    function checkSignUp(){
        let name  = document.getElementsByClassName("form__input")[0].value;
        let pass  = document.getElementsByClassName("form__input")[1].value;
        let nic   = document.getElementsByClassName("form__input")[2].value;
        let email = document.getElementsByClassName("form__input")[3].value;
        $.ajax({
            type: "POST",
            url: "services/login.php",
            data: {
                act: "reg",
                username: name,
                password: pass,
                nic: nic,
                email: email
            },
            success: function(data) {
                document.getElementsByClassName("msg")[0].innerHTML = "";
                document.getElementsByClassName("msg")[1].innerHTML = "";
                document.getElementsByClassName("msg")[2].innerHTML = "";
                document.getElementsByClassName("msg")[3].innerHTML = "";
                if (data == "10"){
                    alert("Register successfully!");
                    window.location.href="login.php";
                }
                else {
                    if (data == "-1"){
                        document.getElementsByClassName("msg")[3].innerHTML = "Something unexpected happend.";
                    } else if (data == "0"){
                        document.getElementsByClassName("msg")[3].innerHTML = "Email already existed.";
                    } else if (data == "1"){
                        document.getElementsByClassName("msg")[2].innerHTML = "NIC already existed.";
                    } else if (data == "2"){
                        document.getElementsByClassName("msg")[3].innerHTML = "Wrong email format.";
                    } else if (data == "3"){
                        document.getElementsByClassName("msg")[1].innerHTML = "Invalid password. Password must be 8 - 20 characters, contains at least 1 number, 1 upper, 1 lower, 1 special character.";
                    }
                    alert("Register Failed!");
                }


            }
        });
    }
</script>
<!--#######HEADER##########-->
<?php require_once("./views/header-login.php") ?>
<!--#######MAIN##########-->
<div class="main">
    <div class="grid wide-m">
        <div class="row modal__container">
            <div class="col-lg-3 "> </div>
            <div class="col-sm-12 col-md-12 col-lg-6 login_form ">
                <div class="container-fluid">
                    <div class="row">
                        <h2 class="login_form__name">Sign Up</h2>
                    </div>
                    <br>
                    <form class="register" method="post">
                        <div class="row">
                        <div class="row">
                            <input type="text" name="name" id="name" class="form__input" placeholder="Full Name" required>
                            <span class="msg"></span>
                        </div>
                        <div class="row">
                            <input type="password" name="password" id="password" class="form__input" placeholder="Password" required>
                            <span class="msg"></span>
                        </div>
                        <div class="row">
                            <input type="text" name="nic" id="nic" class="form__input" placeholder="National Identity Card No." required>
                            <span class="msg"></span>
                        </div>
                        <div class="row">
                            <input type="email" name="email" id="email" class="form__input" placeholder="Email" required>
                            <span class="msg"></span>
                        </div>
                        <div class="row">
                            <button class="btn btn-success login-btn" onclick="checkSignUp();">
                                Sign Up
                            </button>
                        </div>
                        <div class="row">
                            <p class="query">Already have an account? <a class="col-md-3" href="./index.php=page=login">Log in</a></p>
                        </div>
                        </div>
                    </form>
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
    document.getElementById('back-btn').addEventListener("click", function() {
        document.getElementById('modal').style.display = "none";
    })
</script>
</body>
</html>