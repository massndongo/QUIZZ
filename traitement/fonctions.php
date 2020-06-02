<?php
function connexion_bd($nomDB="quizz"){
    $hote = 'localhost';
    $utilisateur = 'root';
    $mdp = '';
    $nombdd = $nomDB; // Nom de la base de données
    $bdd = new mysqli($hote, $utilisateur, $mdp, $nombdd);
    if ($bdd->connect_error) {
        $bdd='Erreur de connexion (' . $bdd->connect_errno . ') ' . $bdd->connect_error;
    }
    return $bdd;
}
?>