<?php
require 'connexion.php';
$loginErr = array('err1' => '');

if (isset($_POST['LoginEmail']) && isset($_POST['Loginpass'])) {
    $Loginpass = $_POST['Loginpass'];
    $loginEmail = $_POST['LoginEmail'];

    $UserFN = " SELECT `first_name` From `login` where email = '$loginEmail'";
    $UserFirstNameV = mysqli_query($con, $UserFN);
    $UserFirstName = mysqli_fetch_assoc($UserFirstNameV);


    $ResIIII = " SELECT * From `login` where email = '$loginEmail'";
    $ResIIIII = mysqli_query($con, $ResIIII);
    $ResIIIIII = mysqli_fetch_assoc($ResIIIII);

    $Cryptpass = md5($Loginpass);

    $bring = " SELECT COUNT(email) From `login` where email = '$loginEmail'";
    $bring_res = mysqli_query($con, $bring);
    $resultII = mysqli_fetch_assoc($bring_res);

    $PassValue = " SELECT `password` From `login` where email = '$loginEmail'";
    $PassValueRes = mysqli_query($con, $PassValue);
    $resultIII = mysqli_fetch_assoc($PassValueRes);

    if ($resultII['COUNT(email)'] == 0) {
        $loginErr['err1'] = 'Email or Password inccorect, Try Again !!';
    } elseif ($resultII['COUNT(email)'] != 0 && $resultIII['password'] != $Cryptpass) {
        $loginErr['err1'] = 'Password inccorect Try Again !';
    } elseif ($resultII['COUNT(email)'] != 0 && $resultIII['password'] == $Cryptpass) {
        $loginErr['err1'] = ' ';
        $_SESSION['f_name'] = $UserFirstName['first_name'];
        $_SESSION['l_name'] = $UserFirstName['last_name'];
        $_SESSION['phone'] = $ResIIIIII['phone'];
        $_SESSION['email'] = $ResIIIIII['Email'];
        $_SESSION['id'] = $ResIIIIII['userid'];
        header('location: user.php');
    }
}