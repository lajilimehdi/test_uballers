<?php

class Inscripstion extends Signup
{
    private $prenom;
    private $nom;
    private $mail;
    private $password;
    private $date;
    private $sexe;

    public function __construct($prenom, $nom, $mail, $password, $date, $sexe)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->mail = $mail;
        $this->password = $password;
        $this->date = $date;
        $this->sexe = $sexe;
    }
    // inscrire le nouveau utilisateur
    public function signupUser()
    {
        if ($this->emtyInput() == false) {

            header("location: index.php?error=champs vide");
            exit();
        }
        if ($this->invalidEmail() == false) {

            header("location: index.php?error=invalidemail");
            exit();
        }
        if ($this->mailMatch() == true) {

            header("location: index.php?error=emailutiliser");
            exit();
        }

        $this->setUser($this->prenom, $this->nom, $this->mail, $this->password, $this->date, $this->sexe);
    }
    // verifier si les champs sont vide
    public function emtyInput()
    {
        $result = "";
        if (empty($this->prenom) || empty($this->nom) || empty($this->mail) || empty($this->password) || empty($this->sexe)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    // verifier le format d'email
    public function invalidEmail()
    {
        $result = "";
        if (!filter_var($this->mail, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    //verifier si l'email est deja utliser
    public function mailMatch()
    {
        $result = "";
        if ($this->checkUser($this->mail)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
