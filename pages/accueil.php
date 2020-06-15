<?php
session_start();
//session_destroy(); 
if (!isset($_SESSION['role'])) {
    header('location: ../index.php');
    exit;
}

?>
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
            <a href="deconnexion.php"><div class="deconnexion">Déconnexion</div></a>
            <h3>CREER ET PARAMETRER VOTRE QUIZZ</h3>
            <div class="row-cols-5" style="float:right">
                <div class="img-profil" style="    position: absolute;
    left: 90%;
    top: 0%;
    width: 8%;
    height: 40px;
    border-radius: 70%;
    border: 1px solid #ebe0c2;  "><img style="width:100%;height:100%; border-radius:60%" src="../public/images/<?= $_SESSION['image']?>" alt="erreur" srcset=""></div>
                <span><?= $_SESSION['prenom']?></span>
                <span><?= $_SESSION['nom']?></span>
            </div>
        </div>
        <div class="menu">
            <ul class="ul-group">
                <li><a href="listJ.php" class="load">Liste joueurs</a></li>
                <li><a href="inscriptiona.php" class="load">Créer Admin</a></li>
                <li><a href="listQ.php" class="load">Liste Questions</a></li>
                <li><a href="question.php" class="load">Créer Questions</a></li>
            </ul>
        </div>
        <div class="container contenu" id="div">
        </div>
    </div>
    <script src="../public/js/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {  
            $("a.load").click(function() {
            $("#div").load(this.href);
                return false;
            });
        });
    </script>
</body>
</html>