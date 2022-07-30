<?php
session_start();
require 'Log-inChecker.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--Css-->
    <link rel="stylesheet" href="css/log-in.css">
    <link rel="stylesheet" href="css/home.css">
    <!--Icon-->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
</head>
<style>
#sub-btn {
    background-color: var(--btn-color);
    border: solid 0.5px transparent;
    border-radius: 25px;
    width: 100px;
    height: 40px;
    cursor: pointer;
}
</style>

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
                <li><a href="index.html">Home</a></li>
                <li><a href="map2.html">Locations</a></li>
                <li><a href="store.html">Store</a></li>
                <li><a href="index.html#pack">Pack</a></li>
                <li><a href="ChatPage.html">Cantact Us</a></li>
            </ul>
            <input type="checkbox" name="" id="dark">
            <a id="sbag"><i class="bi bi-handbag"></i></a>
            <div class="bag" id="bog">
                <a href="Check out.html">
                    <div class="select" id="selecto">
                        <div class="pro">
                            <img src="images/nike (3).png" alt="">
                            <p>Nike Air 38</p>
                        </div>
                        <hr>
                    </div>
                </a>
                <span id="exit">></span>
            </div>
            <!--Social
            <div class="socio">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
            </div>-->
            <!--Get-->
            <a href="signup.html" class="get">Get free trial</a>
            <!--Menu-->
            <div class="me"><i class="fas fa-bars"></i></div>
        </div>
        <!--Body-->
        <div class="body">
            <!--Left-->
            <div class="left">
                <h1 class="text"><span style="color:#FB8500;">"</span> Take care of your <br>Health.<br> The human body
                    is <br> the best work of art<span style="color:#FB8500;"> .</span><span
                        style="color:#FB8500;">"</span></h1>
                <p class="desc">you don't have a account yet ?</p>
                <p class="btn"> <a href="signup.php"> Sign Up </a> </p>
            </div>
            <!--Right-->
            <div class="login">
                <h1>Login</h1>
                <span style="color:red"> <?php echo $loginErr['err1'] ?> </span>
                <form method="post" action="log-in.php">
                    <div class="text-area">
                        <input name="LoginEmail" type="email" value="<?php if (isset($_POST['LoginEmail'])) {
                                                                            echo $_POST['LoginEmail'];
                                                                        } ?>" required>
                        <span></span>
                        <label>Email</label>
                    </div>
                    <div class="text-area">
                        <input name="Loginpass" type="password" required>
                        <span></span>
                        <label>Password</label>
                    </div>
                    <div class="forgetpass">Forgot Password?</div>
                    <input type="submit" id="sub-btn" value="Log in">
                    <div class="signup">
                        Not a member? <a href="signup.php">Signup</a>
                    </div>
                </form>
            </div>
        </div>
        <!--S-Bar-->

        <script src="main.js"></script>



</body>

</html>