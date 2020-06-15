<?php
session_start();
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
    <link rel="stylesheet" href="../public/css/bootstrap-4.5.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/jeu.css">
    <title>PAGE JEU</title>
</head>
<body>
    <header class="container-fluid">
        <div class="logo"><img src="../public/images/logo.png" alt="error" /></div>
        <h1>BIENVENUE SUR LE SITE DE QUIZZ</h1>
    </header>
    <div class="container-fluid conteneur">
        <h2>QUIZZ POUR TESTER VOTRE CULTURE GENERALE</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="cols- btn-warning btn btn-primary btn-lg disabled" role="button" title="Lien"><a class="href" href="deconnexion.php">Déconnexion</a></div>
            <div class="col col-md-9 float-right" style="background:red"><img class="img-circle float-right" src="<?= $_SESSION['image']?>" alt="erreur"></div>
            <div class="col float-right" style="background:green">
                <span><?= $_SESSION['prenom']?></span>
                <span><?=$_SESSION['nom']?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7" style="background:green">

            </div>
            <div class="col-md-5 col-xs-5">
                <div class="row">
                    <div class="col-md-12"></div>
                    <div class="col-md-11 col-xs-12"><div class="m-2 p-1  button text-center"><a class="btn w-100 btn-success" href="" class="text-center">TOP SCORE</a></div></div>
                    <div class="col-md-11 col-xs-12 "><div class="m-2 p-1 button text-center"><a class="btn w-100  btn-info" href="">5 Meilleurs Score</a></div></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>