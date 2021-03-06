<?php
session_start();
if (isset($_POST['connexion'])) {
    include_once "traitement/fonctions.php";
    if (empty($_POST['login'])) {
        $message_login="Ce champ est obligatoire";
    }else {
        if (empty($_POST['pwd'])) {
            $message_pwd="Ce champ est obligatoire";
        }else{
            $login=$_POST['login'];
            $pwd=$_POST['pwd'];
            $bdd=connexion_bd();
            $query = $bdd->prepare('SELECT * FROM `utilisateur` WHERE login=? AND password=?');
            $query->execute(array($login,$pwd));
            $result=$query->rowCount();
            if ($result==1) {
                var_dump($result);
                var_dump($data=$query->fetch(PDO::FETCH_ASSOC));
                $_SESSION['nom']=$data['nom'];
                $_SESSION['prenom']=$data['prenom'];
                $_SESSION['image']=$data['image'];
                $_SESSION['login']=$data['login'];
                $_SESSION['role']=$data['role'];
                if ($_SESSION['role']=="admin") {
                    header('Location:pages/accueil.php');
                }else {
                    $_SESSION['score']=$data['score'];
                    header('Location:pages/jeu.php');
                }
            }
        }
        }
    }
//session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap-4.5.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/connexion.css">
    <script src="public/js/jquery.js"></script>
    <title>Connexion</title>
</head>
<body>
    <header class="container-fluid">
    <div class="logo"><img src="public/images/logo.png" alt="error" /></div>
    <h1>BIENVENUE SUR LE SITE DE QUIZZ</h1>
    </header>
    <div class="container-fluid">
    <div class="section1">
        <div class="ssection1">
            <h2>Connectez-vous</h2>
            <form action="" method="post" id="myform">
                <div class="control form-control">
                    <label for="" class="label">Login</label>
                    <input type="text" error="error-1" class="input" name="login" id="login">
                    <div class="error-form" id="error-1"><?= isset($message_login)?$message_login:""?></div>
                </div>
                <div class="form-control control">
                    <label for="" class="label">Mot de Passe</label>
                    <input type="password" error="error-2" class="input" name="pwd" id="pwd">
                    <div class="error-form" id="error-2"><?= isset($message_pwd)?$message_pwd:""?></div>
                </div>
                <div class="form-control control">
                    <input type="submit" value="Connexion" class="btn" name="connexion" id="btn">
                </div>
            </form>
        </div>
    </div>
    <div class="section2">
        <img src="public/images/quiz.jpg" alt="" srcset="">
        <a href="pages/inscriptionj.php"><div>S'inscrire pour jouer</div></a>
    </div>
    </div>
    <script>
    $(document).ready(function(){
$("form").submit(function(event){
/*Si la longueur de la valeur du champ #prenom est 0 (c'est-à-dire si
le champ n'a pas été rempli), on affiche un message et on empêche
l'envoi*/
if($("input").val().length === 0){
$(".error-form").html("Ce champ est obligatoire");
event.preventDefault();
}else{
//On effectue nos requêtes Ajax, sérialise, etc...
let chaine = $("form").serialize();
}
});});
</script>
</body>
</html>