<?php
if (isset($_POST["submit"])) {
    // recupere les donneés enter par l'utlisateur
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $mail = $_POST["mail"];
    $password = $_POST["password"];
    $d = $_POST["day"];
    $m = $_POST["month"];
    $y = $_POST["year"];
    $sexe = $_POST["sexe"];
    $date = date('Y-m-d', strtotime($y . '-' . $m . '-' . $d));

    include "connexion.php";
    include "Signup.php";
    include "Controleur.php";

    $signup = new Inscripstion($prenom, $nom, $mail, $password, $date, $sexe);
    $signup->signupUser();
    //
    echo "<script> alert('sussess')</script>";
    header("location:index.php?error=none");
}
