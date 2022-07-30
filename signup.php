<?php
session_start();
require 'connexion.php';
require 'signupchecker.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!--Css-->
    <link rel="stylesheet" href="css/log-in.css">
    <link rel="stylesheet" href="css/home.css">
    <!--Icon-->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
</head>

<body>

    <!--Home-->
    <div class="home">
        <!--Nav Bar-->
        <div class="nav-bar">
            <!--Logo-->
            <div class="logo">
                <i class="fas fa-volleyball-ball"></i>
                <p>Fitness Pro</p>
            </div>
            <!--Nav-->
            <ul>
                <li>I</li>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="map2.html">Locations</a></li>
                <li><a href="store.html">Store</a></li>
                <li><a href="index.html#pack">Pack</a></li>
                <li><a href="ChatPage.html">Cantact Us</a></li>
            </ul>
            <input type="checkbox" name="" id="dark">
            <a id="sbag"><i class="bi bi-handbag"></i></a>
            <div class="bag" id="bog">
                <div class="select" id="selecto">
                    <div class="pro">
                        <img src="images/nike (3).png" alt="">
                        <p>Nike Air 38</p>
                    </div>
                    <hr>
                </div>
                <span id="exit">></span>
            </div>
            <!--Social
            <div class="socio">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
            </div>-->
            <!--Get-->
            <a href="signup.php" class="get">Get free trial</a>
            <!--Menu-->
            <div class="me"><i class="fas fa-bars"></i></div>
        </div>
        <!--Body-->
        <div class="body">
            <!--Left-->
            <div class="left">
                <h1 class="text"> <span style="color:#FB8500;">"</span> Be<br>Part Of Our<br>Community <span
                        style="color:#FB8500;">.</span> <span style="color:#FB8500;">"</span></h1>
                <p class="desc">In Case You Already Have an Account </p></br>
                <span class="btn">
                    <a href="log-in.php">Log in</a>
                </span>
            </div>
            <!--Right-->
            <div class="sign-up">
                <h1>Signup</h1>
                <form action='signup.php' method="post">
                    <div class="text-area">
                        <input type="text" name='Pnom' required>
                        <span></span>
                        <label>Nom & Prenom</label>
                    </div>
                    <div class="text-area">
                        <input type="text" name='nom' required>
                        <span></span>
                        <label>username</label>
                    </div>
                    <div class="text-area">
                        <input type="email" name="email" required></br>
                        <span style="color: red;" class="emailfiel">
                            <?php
                            echo $errors["email"];
                            ?>
                        </span>
                        <label>E-mail</label>
                    </div>
                    <div class="text-area">
                        <input type="tel" name="phone" required>
                        <span></span>
                        <label>Phone Number</label>
                    </div>
                    <div class="text-area">
                        <input type="password" name="pass" required>
                        <span></span>
                        <label>Password</label>
                    </div>

                    <div class="forgetpass">Forgot Password?</div>
                    <input type="submit" value="Sign up" style="width: 100px; height: 40px;">
                    <div class="signup">
                        Already have an account? <a href="log-in.php">Log in</a>
                    </div>
                </form>
            </div>
        </div>
        <script src="main.js"></script>
</body>

</html>