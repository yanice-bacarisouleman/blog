<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="image/fav.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreeSpeak. En route pour le bonheur</title>
    <link rel="stylesheet" href="css/connexion.css">
</head>
<body>
<div class="body">
    <div class="connexiongauche"></div>
    <div class="connexiondroite">
        <div class="img">
            <img src="image/fav.png" width="50%">
        </div>
        <div class="formcon">
            <h1>La liberté ça se<br>passe ici</h1>
            <p class="noir"><b>Rejoignez FreeSpeak dès aujourd'hui.</b></p>
        </div>
        <div class="formulaire">
            <form action="connexion.php" method="post">
                <div>                  <p class="noms"><b>Login</b></p>
                    <input type="connexion" name="login" class="formta" required="required">
                        <div class="stylemdp"><p class="noms"><b>Mot De passe</b></p>
                            <input type="motdepasse" name="mdp" class="formta" required="required">
                        </div>
                </div>
                <div class="hr"><hr width="25%"></div>
            </form>
        </div>
        <div>
            <button type="submit" class="buttonn"><b>Se connecter</b></button>
        </div>
        <div class="inscri">
            <p class="ou">ou</p>
            <button onclick="window.location.href= 'inscription.php';" type="submit" class="button2"><b>Inscrivez-vous</b></button></a>   
            <p class="compte"><b>Vous n'avez pas de compte ?</b></p>
                
    </div>
    </div>
</div>
<footer>
    <ul class="navfooter">
        <li class="nav-item"><a href="">Page d'accueil</a></li>
        <li class="nav-item"><a href="#">Home</a></li>
        <li class="nav-item"><a href="#">Home</a></li>
        <li class="nav-item"><a href="https://github.com/yanice-bacarisouleman/blog" target="_blank">Github</a></li>
    </ul>
    <p class="text-center">© 2022 Company, Inc</p>
</footer>
</body>
</html>