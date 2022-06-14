<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />






    <title>Inscription</title>
</head>

<body>
    <div class="header">
        <a hre="#"><span class="fb">Facebook</span></a>
        <span class="connexion">
            <form action="login.app.php" method="POST">
                <table>
                    <tr>
                        <td>Adresse e-mail ou mobile</td>
                        <td>Mt de passe</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="email1" id="email1"></td>
                        <td><input type="password" name="password1" id="password1"></td>
                        <td><input type="submit" value="connexion" name="connexion" class="btn"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><a href="#" class="'mdp">Information du compte oubliées ?</a></td>
                    </tr>
                </table>
            </form>
        </span>
    </div>
    <div class="forminscri">
        <form method="post" action="inscription.php">
            <h3>Inscription</h3>
            <p>C'est gratuit (et ça le restera toujours )</p>
            <input type="text" class="inscription" placeholder="Prénom" name="prenom" style="width:170px" id="prenom">
            <input type="text" class="inscription" placeholder="Nom de la famille" name="nom" style="width:179px" id="nom">
            <input type="text" class="inscription" placeholder="Numéro de mobile ou e-mail" name="mail" style="width:330px" id="email">
            <input type="password" class="inscription" placeholder="Nouveau mot de passe" name="password" style="width:220px" id="password">
            <br><br>
            <span class="naissance"> Date de naissance</span>
            <br>
            <select name="day" id="day">
            </select>
            <select name="month" id="month">
            </select>
            <select name="year" id="year">
            </select>


            <a href="#" class="pddn"> Pourquoi indiquer ma date de <br>naissance</a>
            <br><br>
            <input type="radio" name="sexe" id="femme" value="femme">Femme
            <input type="radio" name="sexe" id="homme" value="homme">Homme
            <br><br><br>
            <p class="condition"> En appyant sur Iinscription vous acceptez nous <a href="#">Condition <br> générales </a>
                ,notre <a href="#">Politique d'utilisation des données</a> et notre <br><a href="#">Politique d'utilisations
                    des cookies </a>. Vous recevrez peut-etre des <br>textos de notre part et vous pouvez a tout <br>moment
                vous désabonner .
            </p><br>
            <input type="submit" value="Inscription" name="submit" id="soumettre">

        </form>

        <?php
        // afficher les messages d'eurreur
        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if (strpos($fullUrl, "error=emptyinput")) {
            echo "vous devez remplir tous le champs";
        }
        if (strpos($fullUrl, "invalidmail")) {
            echo "email invalide";
        }
        if (strpos($fullUrl, "error=mailutiliser")) {
            echo "email deja utiliser";
        }

        ?>




    </div>
    <script src="app.js"></script>
</body>

</html>