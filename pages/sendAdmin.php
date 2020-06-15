<?php
require_once "../traitement/fonctions.php";
require_once "../data/database.php";
global $pdo;
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $login=$_POST['login'];
    $pwd1=$_POST['pwd1'];
    $pwd2=$_POST['pwd2'];
    $image=$_FILES['file']['name'];
    if ($pwd1===$pwd2) {
        if (is_admin($login)) {
            $message="Ce login existe!!";
        }else {
            $req = $pdo->prepare("INSERT INTO utilisateur (`iduser`,`nom`,`prenom`,`login`,`password`,`role`,`score`,`image`) VALUES (NULL,:nom,:prenom,:login,:password,:role,:score,:image)");
            $addAdmin = $req->execute(array(
                'nom'=>$nom,
                'prenom'=>$prenom,
                'login'=>$login,
                'password'=>$pwd1,
                'role'=>'admin',
                'score'=>0,
                'image'=>$image
            )); 
            if($addAdmin){
                echo 'ok';
            }else{
                echo 'erreur';
            }
        }
        
    }else {
        echo 'ERREUR';
    }
?>