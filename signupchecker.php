<?php
$errors = array('email' => '');
require 'connexion.php';

/*conexion to the data base*/
if (
    isset($_POST['nom']) && isset($_POST['email']) &&
    isset($_POST['phone']) && isset($_POST['pass'])
) {
    $f_nom = $_POST['nom'];
    $l_nom = $_POST['Pnom'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = MD5($_POST['pass']);

    $Vkey = md5(time() . $f_nom);
    echo $Vkey;


    $sql_test = "SELECT COUNT(email) FROM `login` WHERE email = '$email' ";
    $selectEmail = mysqli_query($con, $sql_test);
    $result = mysqli_fetch_assoc($selectEmail);

    if ($result['COUNT(email)'] == 0) {
        $sql = "INSERT INTO `login` (`first_name`, `Email`, `phone`, `password`, `last_name`,`Vkey`) 
        VALUES ('$f_nom', '$email','$phone', '$pass','$l_nom','$Vkey')";
        mysqli_query($con, $sql);
        $errors["email"] = " ";

        $Res = "SELECT * From `login` where email = '$email'";
        $ResI = mysqli_query($con, $Res);
        $ResII = mysqli_fetch_assoc($ResI);
        echo var_dump($ResII);

        $_SESSION['f_name'] = $ResII['first_name'];
        $_SESSION['l_name'] = $ResII['last_name'];
        $_SESSION['phone'] = $ResII['phone'];
        $_SESSION['email'] = $ResII['Email'];
        $_SESSION['id'] = $ResII['userid'];


        header('location: user.php');
    } else {
        $errors["email"] = " This email is already exists ";
    }
};