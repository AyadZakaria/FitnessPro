<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <!--Css-->
    <link rel="stylesheet" href="css/calendar.css">
    <!--Icon-->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <a href="user.php"><img src="images/menu (4).png" alt=""></a>
                <a href="calendar.php"><img src="images//mei (3).png" alt="" class="one"></a>
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
                        <?php if (isset($_SESSION['f_name'])) {;
                            echo $_SESSION['f_name'];
                        }; ?>

                    </p>
                    <p class="desc">Welcome & let's do some workouts </p>
                </div>
                <div class="search">
                    <img src="images/search-interface-symbol (1).png" alt="" class="ser">
                    <input type="search" placeholder="Search Location...">
                    <img src="images/notification (1).png" alt="">
                </div>
            </div>
            <!--center-->
            <div class="center">
                <!--One-->
                <div class="one">
                    <h3>Timeline</h3>
                    <div class="btn">
                        <button>Week</button>
                        <button>Month</button>
                    </div>
                </div>
                <!--Cal-->
                <div class="cal">
                    <!--Days-->
                    <div class="days">
                        <div class="day">
                            <h5>San</h5>
                            <p>09</p>
                        </div>
                        <div class="day">
                            <h5>Mon</h5>
                            <p>10</p>
                        </div>
                        <div class="day">
                            <h5>Tus</h5>
                            <p>11</p>
                        </div>
                        <div class="day">
                            <h5>Wen</h5>
                            <p>12</p>
                        </div>
                        <div class="day">
                            <h5>Thu</h5>
                            <p>13</p>
                        </div>
                        <div class="day">
                            <h5>Fri</h5>
                            <p>14</p>
                        </div>
                        <div class="day">
                            <h5>Sat</h5>
                            <p>15</p>
                        </div>
                    </div>
                    <hr class="vr">
                    <div class="hor">
                        <hr>
                        <hr>
                        <hr>
                        <hr>
                        <hr>
                        <hr>
                    </div>
                    <div class="bod">
                        <div class="lef">
                            <div class="sect">
                                <p>09:00 AM</p>
                                <hr>
                            </div>
                            <div class="sect">
                                <p>12:00 AM</p>
                                <hr>
                            </div>
                            <div class="sect">
                                <p>04:00 AM</p>
                                <hr>
                            </div>
                            <div class="sect">
                                <p>08:00 PM</p>
                                <hr>
                            </div>
                            <div class="sect">
                                <p class="pro">11:00 PM</p>
                                <hr>
                            </div>
                        </div>
                        <div class="rig">
                            <div class="card">
                                <p>Coffee With Aim team...</p>
                                <span>09:10 - 9:45 AM</span>
                            </div>
                            <div class="card">
                                <p>meeting with coach...</p>
                                <span>12:00 - 02:00 AM</span>
                            </div>
                            <div class="card">
                                <p>Lunch time now...</p>
                                <span>08:10 - 10:45 AM</span>
                            </div>
                            <div class="card">
                                <p>Dinner time now...</p>
                                <span>11:10 - 00:00 AM</span>
                            </div>
                        </div>
                        <div class="hor-end">
                            <hr>
                            <hr>
                            <hr>
                            <hr>
                            <hr>
                            <hr>
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
                <?php if (isset($_SESSION['f_name'])) {
                    echo $_SESSION['f_name'];
                }
                ?>
            </p>
            <p class="desc">Beginner</p>
            <button><img src="images/editing.png" alt=""><a href="setting.php">Edit Profile</a></button>
            <div class="one">
                <div class="one-start">
                    <h3>3 Hours Activity</h3>
                    <div class="let">
                        <i class="fa-solid fa-coins"></i>
                        <p>Time Slot</p>
                    </div>
                </div>
                <div class="two">
                    <div class="elem">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                        <p>09:00AM - 10:00AM</p>
                    </div>
                    <div class="elem">
                        <i class="fa-solid fa-stopwatch-20"></i>
                        <p>45 min</p>
                    </div>
                    <div class="elem">
                        <i class="fa-solid fa-calendar-days"></i>
                        <p>Feb 12, 2022</p>
                    </div>
                    <div class="elem">
                        <i class="fa-solid fa-person-running"></i>
                        <p>2 Sessions</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


</body>

</html>