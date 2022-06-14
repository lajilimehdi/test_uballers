<?php
class Login extends Dbh
{

    protected function getUser($mail, $password)
    {
        $stmt = $this->connect()->prepare('SELECT password FROM  utilisateur WHERE email = ?');

        // verifier si la requette a passer
        if (!$stmt->execute(array($mail))) {
            $stmt = null;
            header("location:index.php?error=stmtfailed");
            exit();
        }
        // verifier que l'utilisateur existe
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: index.php?error=ussernotfound");
        }
        // verification de mot de passe
        $pwdHased = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($password, $pwdHased[0]["password"]);
        if ($checkPwd == false) {
            $stmt = null;
            header("location: index.php?error=invalide  password" . $pwdHased[0]["password"]);
            exit();
        } elseif ($checkPwd == true) {
            $stmt = $this->connect()->prepare('SELECT * FROM  utilisateur WHERE email = ? ;');
            if (!$stmt->execute((array($mail)))) {
                $stmt = null;
                header("location:indek.php?error=stmtfalied");
                exit();
            }
            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("location:index.php?error=ussernotfoud");
            }
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION["mail"] = $user[0]["email"];


            $stmt = null;
        }
    }
    // verifier que l'utlisateur est deja inscri
    protected function checkUser($mail)
    {
        $stmt = $this->connect()->prepare('SELECT password FROM utilisateur WHERE email = ?');

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
