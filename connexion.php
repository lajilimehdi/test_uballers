<?php
class Dbh
{
    // connection a la base
    protected function connect()
    {
        $user = 'root';
        $pass = '';


        try {
            $db = new PDO('mysql:host=localhost;dbname=facebook', $user, $pass);
            return $db;
        } catch (PDOException $e) {
            print "erreur : " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
