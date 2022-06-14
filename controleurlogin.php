<?php

class LoginContr extends Login
{

    private $mail;
    private $password;


    public function __construct($mail, $password)
    {

        $this->mail = $mail;
        $this->password = $password;
    }

    public function loginUser()
    {
        if ($this->emtyInput() == false) {

            header("location: index.php?error=emptyinput");
            exit();
        }
        if ($this->invalidEmail() == false) {

            header("location: index.php?error=invalidmail");
            exit();
        }
        if ($this->mailMatch() == false) {

            header("location: index.php?error=utilisateur non inscri");
            exit();
        }

        $this->getUser($this->mail, $this->password);
    }
    // verifier si les champs sont vide
    public function emtyInput()
    {
        $result = "";
        if (empty($this->mail) || empty($this->password)) {
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
    //verifier si l'utilisateur est bien inscri
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
