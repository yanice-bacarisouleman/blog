<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="image/fav.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreeSpeak. En route pour le bonheur</title>
    <link rel="stylesheet" href="css/inscription.css">
</head>
<body>
<div class="forminscri">
        <div class="img">
        <a href="index.php"><img src="image/fav.png" width="10%"></a>
        </div>
        <div class="inscri">
        <form action="inscription.php" method="post">
                <div class="formab"><p><b>Créer votre compte</p></b></div>
                <div class="forma">
                    <input type="login" name="login" class="formta" required="required" placeholder=" Nom d'utilisateur">
                    <input type="email" name="email" class="formta" required="required" placeholder=" Email">
                </div>
                <div class="formb">      
                    <input type="motdepasse" name="mdp" class="formta" required="required" placeholder=" Mot de passe">
                    <input type="cmotdepasse" name="cmdp" class="formta" required="required" placeholder=" Confirmez votre mot de passe">
                </div>
                <p class="conditions">En vous inscrivant, vous acceptez les <a href="#">Conditions d'Utilisation</a> et la <a href="#">Politique de Confidentialité</a>, incluant l'<a href="#">Utilisation de Cookies</a>.</p>
                <div class="hr"><hr width="65%"></div>
                <div class="forme">
                <button type="submit" class="buttonn"><b>Inscrivez-vous</b></button>
                </div>
                <p class="endtxt">Retourner sur la <a href="connexion.php">page de connexion</a></p>
        </form>
        </div>
</body>
</html>