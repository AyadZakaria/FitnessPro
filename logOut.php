<?php
require 'connexion.php';
if (isset($_POST['logOut'])) {
    session_start();
    unset($_SESSION['f_name']);
    unset($_SESSION['l_name']);
    unset($_SESSION['phone']);
    unset($_SESSION['email']);
    unset($_SESSION['id']);
    header('location: signup.php');
}