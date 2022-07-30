<?php
$errs = array('WrongPass' => '');
require 'connexion.php';
require 'signupchecker.php';
require 'Log-inChecker.php';
if (isset($_POST['New_first_name']) && isset($_POST['N_phone'])  && isset($_POST['N_email']) &&  isset($_POST['Uppass'])) {
    $NewName = $_POST['New_first_name'];
    $Newphone = $_POST['N_phone'];
    $NewMail = $_POST['N_email'];
    $Uppass = $_POST['Uppass'];
    $Cpass =  md5($Uppass);


    if (isset($_POST['updateBtn'])) {
        $id = $_SESSION['id'];

        $slqtEmail = ("SELECT * FROM `login` where userid = '$id'");

        $Valll = mysqli_query($con, $slqtEmail);
        $res = mysqli_fetch_assoc($Valll);
        $ActualEmail = $res['Email'];
        $Actualphone = $res['phone'];
        $Actualpass = $res['password'];

        if ($Actualpass == $Cpass) {
            $SqlUpdateN = mysqli_query($con, "UPDATE `login` set first_name = '$NewName' where userid = '$id' ");
            $SqlUpdatePH = mysqli_query($con, "UPDATE `login` set phone = '$Newphone' where userid = '$id' ");
            $SqlUpdateE = mysqli_query($con, "UPDATE `login` set Email = '$NewMail' where userid = '$id' ");

            $_SESSION['f_name'] = $NewName;
            $_SESSION['phone'] = $Newphone;
            $_SESSION['email'] = $NewMail;
        } else {
            $errs['Wrongpass'] = 'incorrect password';
        }
    }
};