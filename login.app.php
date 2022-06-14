<?php
if (isset($_POST["connexion"])) {
    // recuperer le données entrer par l'utlisateur

    $mail = $_POST["email1"];
    $password = $_POST["password1"];


    include "connexion.php";
    include "login.php";
    include "Controleurlogin.php";


    $login = new LoginContr($mail, $password);
    echo


    $login->loginUser();

    if (isset($_SESSION["mail"])) {
        header("location:resulta.php");
    } else {
        echo "<script> alert('errorr');</script>";
    }
}
