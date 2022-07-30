<?php
session_start();
require 'signupchecker.php';
require 'Log-inChecker.php';
require 'logOut.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!--Css-->
    <link rel="stylesheet" href="css/user.css">
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
    </style>
</head>

<body>


    <div class="home">
        <div class="bar">
            <i class="fas fa-volleyball-ball"></i>
            <div class="menu">
                <a href="user.php"><img src="images/menu (4).png" alt="" class="one"></a>
                <a href="calendar.php"><img src="images//mei (3).png" alt=""></a>
                <a href="trainer.html"><img src="images/mei (2).png" alt=""></a>
                <a href="food.php"><img src="images/mei (1).png" alt=""></a>
                <a href="setting.php"><img src="images/settings.png" alt=""></a>
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
                    <p class="title">Hello,
                        <?php if (isset($_SESSION['l_name'])) {;
                            echo $_SESSION['l_name'];
                        }; ?>
                    </p>
                    <p class="desc"> Welcome & let's get Started </p>
                </div>
                <div class="search">
                    <img src="images/search-interface-symbol (1).png" alt="" class="ser">
                    <input type="search" placeholder="Search Location...">
                    <img src="images/notification (1).png" alt="">
                </div>
            </div>
            <!--center-->
            <div class="center">
                <div class="static">
                    <h3>Active</h3>
                    <div class="scroll">
                        <p>Daily</p>
                        <p>Week</p>
                        <p>Month</p>
                        <p>Year</p>
                    </div>
                    <img src="images/curve-arrow.png" alt="">
                    <div class="hrs">
                        <hr>
                        <hr>
                        <hr>
                        <hr>
                        <hr>
                        <hr>
                        <hr>
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
                </div>
                <div class="cards">
                    <div class="card">
                        <img src="images/barefoot.png" alt="">
                        <div class="info">
                            <h3>5596</h3>
                            <p>Total Steps</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/danger.png" alt="">
                        <div class="info">
                            <h3>2275 kcal</h3>
                            <p>Total Calories</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/lighting (1).png" alt="">
                        <div class="info">
                            <h3>8,5 Km</h3>
                            <p>Distance</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--Bottom-->
            <div class="bottom">
                <div class="cards">
                    <div class="card">
                        <div class="left">
                            <img src="images/leg.jpg" alt="">
                            <div class="info">
                                <h3>Stretching Legs</h3>
                                <p>15 Times</p>
                            </div>
                        </div>
                        <img src="images/heart (1).png" alt="" class="ht">
                    </div>
                    <div class="card">
                        <div class="left">
                            <img src="images/stretching-beautiful-young-female-athlete-practicing-monochrome-purple-portrait-sportive-caucasian-fit-model-training-body-building-healthy-lifestyle-beauty-action-concept.jpg"
                                alt="">
                            <div class="info">
                                <h3>Training Abs</h3>
                                <p>12 Times</p>
                            </div>
                        </div>
                        <img src="images/heart (1).png" alt="" class="ht">
                    </div>
                    <div class="card">
                        <div class="left">
                            <img src="images/full-shot-woman-stretching-arm.jpg" alt="">
                            <div class="info">
                                <h3>Stretching Arm</h3>
                                <p>18 Times</p>
                            </div>
                        </div>
                        <img src="images/heart (1).png" alt="" class="ht">
                    </div>
                </div>
                <!--Msg-->
                <div class="msg">
                    <div class="top">
                        <h3>Messages</h3>
                        <a href="ChatPage.html">View All ></a>
                    </div>
                    <div class="cent">
                        <div class="card">
                            <div class="left">
                                <img src="images/man (1).png" alt="">
                                <div class="info">
                                    <p class="title">Dianne Resell</p>
                                    <p class="desc">Do you have time to...</p>
                                </div>
                            </div>
                            <div class="right">
                                <p>10:15</p>
                                <span>1</span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="left">
                                <img src="images/man (2).png" alt="">
                                <div class="info">
                                    <p class="title">Marvin Kamilo</p>
                                    <p class="desc">Hey bro i just ran 15k...</p>
                                </div>
                            </div>
                            <div class="right">
                                <p>08:15</p>
                                <span>2</span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="left">
                                <img src="images/woman.png" alt="">
                                <div class="info">
                                    <p class="title">Dianne Resell</p>
                                    <p class="desc">Don't forget to jogg...</p>
                                </div>
                            </div>
                            <div class="right">
                                <p>22:15</p>
                                <span>3</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Right-->
        <div class="righto">
            <div class="top">
                <h3>My Profile</h3>
                <p>...</p>
            </div>
            <img src="images/man (1).png" alt="">
            <p class="user">
                <?php
                echo $_SESSION['f_name'];
                ?>
            </p>
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