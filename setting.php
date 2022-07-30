<?php
session_start();
require 'signupchecker.php';
require 'settingUpDate.php';
require 'logOut.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
    <!--Css-->
    <link rel="stylesheet" href="css/setting.css">
    <!--Icon-->
    <link rel="stylesheet" href="css/all.min.css">
    <style>
    .logOut {
        width: 70px;
        height: 45px;
        border-radius: 12px;
        margin-left: -15px;
        background-color: #FB8500;
        color: #fff;
    }

    a {
        text-decoration: none;
        color: #fff;
    }

    input[type=submit] {
        margin-left: 20px;
    }
    </style>
</head>

<body>

    <div class="home">
        <div class="bar">
            <i class="fas fa-volleyball-ball"></i>
            <div class="menu">
                <a href="user.php"><img src="images/menu (4).png" alt=""></a>
                <a href="calendar.php"><img src="images//mei (3).png" alt=""></a>
                <a href="trainer.html"><img src="images/mei (2).png" alt=""></a>
                <a href="food.php"><img src="images/mei (1).png" alt=""></a>
                <a href="setting.php"><img src="images/settings.png" alt="" class="one"></a>
            </div>
            <form method="POST">
                <button type="submit" class="logOut" name="logOut">Log Out</button>
            </form>
        </div>
        <!--Left-->
        <div class="left">
            <!--Top-->
            <div class="top">
                <div class="info">
                    <p class="title">Profile</p>
                    <p class="desc">You can change your account information</p>
                </div>
                <div class="search">
                    <img src="images/search-interface-symbol (1).png" alt="" class="ser">
                    <input type="search" placeholder="Search Location...">
                    <img src="images/notification (1).png" alt="">
                </div>
            </div>
            <div class="center">
                <!--One-->
                <form method="POST" action="setting.php">
                    <div class="one">
                        <h3>Edit Profile</h3>

                    </div>
                    <!--Two-->
                    <div class="two">
                        <div class="walo">
                            <h3>Generals</h3>
                            <hr>
                        </div>
                        <div class="inp1">
                            <div class="lab">
                                <label for="">Username</label><br>
                                <input type="text" value="<?php echo $_SESSION['f_name'] ?>" name="first_name" id=""
                                    disabled>
                            </div>
                            <div class="lab">
                                <label for="">New Username</label><br>
                                <input type="text" name="New_first_name" id="">
                            </div>
                        </div>
                        <div class="two">
                            <div class="inp1">
                                <div class="lab">
                                    <label for="">Old Phone Number</label><br>
                                    <input type="tel" value="<?php echo $_SESSION['phone'] ?>" name="O_phone" id="">
                                </div>
                                <div class="lab">
                                    <label for="">New Phone Number</label><br>
                                    <input type="tel" name="N_phone" id="">
                                </div>
                            </div>
                            <div class="inp1">
                                <div class="lab">
                                    <label for="">Old Email</label><br>
                                    <input type="email" value="<?php echo $_SESSION['email'] ?>" name="O_email" id="">
                                </div>
                                <div class="lab">
                                    <label for="">New Email</label><br>
                                    <input type="email" name="N_email" id="">
                                </div>
                            </div>
                        </div>
                        <div class="inp1">
                            <div class="lab">
                                <label for="">Enter Your Password</label><br>
                                <input type="password" name="Uppass" id=""><br>
                                <span style="color: red;" class="emailfiel">
                                    <?php
                                    if (isset($errs['Wrongpass'])) {
                                        echo $errs['Wrongpass'];
                                    }
                                    ?>
                                </span>
                            </div>
                            <div class="btn" style="margin-top: 50px;">
                                <a href="">Cancel</a>
                                <input type='submit' style="  width: 100px;
                                                          text-align: center;
                                                          height : 40px;
                                                          background-color :#FB8500;
                                                          border-radius : 12px;
                                                          color : #fff;" class="updateBtn" name="updateBtn"
                                    value='Save changes'>
                            </div>
                        </div>

                    </div>

                </form>
            </div>

        </div>
        <!--Right-->
        <div class="righto">
            <div class="top">
                <h3>My Profile</h3>
                <p>...</p>
            </div>
            <img src="images/man (1).png" alt="">
            <p class="user"><?php echo $_SESSION['f_name'] ?></p>
            <p class="desc">Beginner</p>
            <button><img src="images/editing.png" alt=""><a href="setting.php">Edit Profile</a></button>
            <div class="calen">
                <div class="one">
                    <h3>February 2022</h3>
                    <div class="divo">
                        <img src="images/right-arrow.png" alt="">
                        <img src="images/right-arrow.png" alt="">
                    </div>
                </div>
                <div class="days">
                    <p>Sun</p>
                    <p>Mon</p>
                    <p>Tue</p>
                    <p>Wen</p>
                    <p>Thu</p>
                    <p>Fri</p>
                    <p>Sat</p>
                </div>
                <div class="dayn">
                    <p>09</p>
                    <p>10</p>
                    <p>11</p>
                    <p>12</p>
                    <p>13</p>
                    <p>14</p>
                    <p>15</p>
                </div>
            </div>
            <div class="amis">
                <p class="time">07:00</p>
                <p class="mod">|</p>
                <div class="info">
                    <p class="t1">My Schedule</p>
                    <p class="t2">3 Km Jogging</p>
                </div>
                <img src="images/man (1).png" alt="">
                <img src="images/man (2).png" alt="" class="one">
                <img src="images/woman.png" alt="" class="two">
                <p class="plus">+3</p>
            </div>
            <div class="amis">
                <p class="time">11:00</p>
                <p class="mod">|</p>
                <div class="info">
                    <p class="t1">My Schedule</p>
                    <p class="t2">Ranning at Park</p>
                </div>
                <img src="images/woman.png" alt="">
                <img src="images/man (2).png" alt="" class="one">
                <img src="images/man (1).png" alt="" class="two">
                <p class="plus">+5</p>
            </div>
        </div>
    </div>


</body>

</html>