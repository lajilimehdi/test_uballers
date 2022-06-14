<?php
class Signup extends Dbh
{
    // inserer les donneés a la base 
    protected function setUser($prenom, $nom, $mail, $password, $date, $sexe)
    {
        $stmt = $this->connect()->prepare('INSERT INTO utilisateur(prenom,nom,email,password,daten,sexe) VALUES (?,?,?,?,?,?);');
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($prenom, $nom, $mail, $hashedPwd, $date, $sexe))) {
            $stmt = null;
            header("location:index.php?error=stmtfailed");
            exit();
        }
    }
    // verifier si l'utilisateur est deja inscri
    protected function checkUser($mail)
    {
        $stmt = $this->connect()->prepare('SELECT email FROM utilisateur WHERE email = ?');

        if (!$stmt->execute(array($mail))) {
            $stmt = null;
            header("location:index.php?error=stmtfailed");
            exit();
        }
        $resultcheck = "";
        if ($stmt->rowcount() > 0) {
            $resultcheck = false;
        } else {
            $resultcheck = true;
        }
        return $resultcheck;
    }
}
