<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food</title>
    <!--Css-->
    <link rel="stylesheet" href="css/food.css">
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
                <a href="user.php"><img src="images/menu (4).png" alt=""></a>
                <a href="calendar.php"><img src="images//mei (3).png" alt=""></a>
                <a href="trainer.html"><img src="images/mei (2).png" alt=""></a>
                <a href="food.php"><img src="images/mei (1).png" alt="" class="one"></a>
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
                    <p class="desc">Welcome & let's do some workout today</p>
                </div>
                <div class="search">
                    <img src="images/search-interface-symbol (1).png" alt="" class="ser">
                    <input type="search" placeholder="Search Location...">
                    <img src="images/notification (1).png" alt="">
                </div>
            </div>
            <!--center-->
            <div class="center">
                <div class="card">
                    <h5>Detax</h5>
                    <p>750 kcal</p>
                </div>
                <div class="card">
                    <h5>Decreasing</h5>
                    <p>750 kcal</p>
                </div>
                <div class="card">
                    <h5>Decreasing</h5>
                    <p>1000 kcal</p>
                </div>
                <div class="card">
                    <h5>Decreasing</h5>
                    <p>1500 kcal</p>
                </div>
                <div class="card">
                    <h5>Decreasing</h5>
                    <p>2000 kcal</p>
                </div>
            </div>
            <!--Dish-->
            <div class="healthy">
                <div class="card">
                    <img src="images/avocado.png" alt="">
                    <p>Vagan</p>
                </div>
                <div class="card">
                    <img src="images/carrot.png" alt="">
                    <p>Healthy</p>
                </div>
                <div class="card">
                    <img src="images/spinach.png" alt="">
                    <p>Gains</p>
                </div>
                <div class="card">
                    <img src="images/chili.png" alt="">
                    <p>Spicy</p>
                </div>
                <div class="card">
                    <img src="images/carb.png" alt="">
                    <p>High Carb</p>
                </div>
            </div>
            <div class="fo-text">
                <h3>Weekly Meal Plan</h3>
                <p>...</p>
            </div>
            <div class="dish">
                <div class="card">
                    <img src="images/dish (5).png" alt="">
                    <p>Breakfast</p>
                    <h5>Pancackes with fresh berries and caramel sauce</h5>
                    <h6>580 kcal, 180g</h6>
                </div>
                <div class="card">
                    <img src="images/dish (3).png" alt="">
                    <p>Lunch</p>
                    <h5>Grilled chicken, tomato sauce and green peas</h5>
                    <h6>420 kcal, 190g</h6>
                </div>
                <div class="card">
                    <img src="images/dish (1).png" alt="">
                    <p>Dinner</p>
                    <h5>Steamed chicken breast with vegetables</h5>
                    <h6>390 kcal, 200g</h6>
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
            <button><img src="images/editing.png" alt="">Edit Profile</button>
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