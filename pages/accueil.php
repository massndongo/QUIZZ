<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/bootstrap-4.5.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/accueil.css">
    <title>ACCUEIL</title>
</head>
<body>
<header>
    <div class="logo"><img src="../public/images/logo.png" alt="error" /></div>
    <h1>BIENVENUE SUR LE SITE DE QUIZZ</h1>
    </header>
    <div class="conteneur">
        <div class="container-fluid">
            <a href="http://"><div class="deconnexion">Déconnexion</div></a>
            <h3>CREER ET PARAMETRER VOTRE QUIZZ</h3>
            <div class="profil">
                <div class="img-profil"><img src="" alt="erreur" srcset=""></div>
                <span>Massam NDONGO</span>
            </div>
        </div>
        <div class="menu">
            <ul class="ul-group">
                <li><a href="">Liste joueurs</a></li>
                <li><a href="accueil.php?page=ca">Créer Admin</a></li>
                <li><a href="">Liste Questions</a></li>
                <li><a href="">Créer Questions</a></li>
            </ul>
        </div>
        <div class="container contenu">
            <?php
                if (isset($_GET['page'])) {
                    if ($_GET['page']=='ca') {
                        require_once "inscriptiona.php";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>