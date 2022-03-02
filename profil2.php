<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profil2.css">
    <link rel="icon" href="image/fav.png">
    <title>FreeSpeak. En route pour le bonheur</title>
</head>
<body>
    <header class="sticky">
        <a href="connexion.php" id="header-img-link">
            <img src="image/FSP.png" alt="Logo de FreeSpeak" height="12.5%" width="12.5%" id="header-logo">
        </a>        
        <input type="search" placeholder=" Rechercher dans FreeSpeak" id="header-search">
        <nav>
            <a href="connexion.php" id="nav-connecter">Se déconnecter</a>
            
        </nav>
        <div class="navbar">
        <ul>
            <li>
                <button ><img src="image/profile.svg" alt=""></button>

                <ul>
                    <li><a href="connexion.php">Acceuil</a></li> 
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="">Categorie</a></li>
                    
                </ul>
            </li>
        </ul>
        </div>
    </header>
    <main>
    <div class="main">
        <div class="main-in">
            <h1>Votre compte</h1>
            <hr>
        <div class="liens">
            <a href="profil.php">Mon profil</a>
            <a href="profil2.php">Informations personnelles</a>
        </div>
        <hr class="bottomhr" width="15%">
        <div class="mdpmodif">
                <h1>Mot de passe</h1>
                <form class="form" method="POST" action = "profil2.php.php">
                <input class="inpute" type = "password" name = "password" id = "password" placeholder = 'Nouveau mot de passe'  /><br>
                <input class="inpute" type = "password" name = "passwordconfirm" id = "passwordconfirm" placeholder ='Confirmer le mot de passe' /><br>
                <input type = "submit" value = "Changer le mot de passe" name = "changepassword" class="button"/><br><br>
                </form>   
            </div>
        </div>
        
    </div>
</main>
    <footer>
    <ul class="navfooter">
        <li class="nav-item"><a href="">Page d'accueil</a></li>
        <li class="nav-item"><a href="#">Home</a></li>
        <li class="nav-item"><a href="profil.php">Votre Profil</a></li>
        <li class="nav-item"><a href="https://github.com/yanice-bacarisouleman/blog" target="_blank">Github</a></li>
    </ul>
    <p class="text-center">© 2022 Company, Inc</p>
</footer>
</body>
</html>