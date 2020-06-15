<?php
function connexion_bd(){
    $host = 'mysql-massam.alwaysdata.net';
    $dbname = 'massam_quizz';
    $username = 'massam';
    $password = 'L@coste90';
      try {
      // se connecter à mysql
      $pdo = new PDO("mysql:host=$host;dbname=$dbname","$username","$password");
      return $pdo;
      } catch (PDOException $exc) {
        return $exc->getMessage();
        exit();
      }
}
function is_login($login){
    $connect=connexion_bd();
    $role="joueur";
    $query=$connect->prepare("SELECT * FROM utilisateur WHERE login=? and role=? ");
    $query->execute(array($login,$role));
    $result=$query->rowCount();
    if ($result==1) {
        return true;
    }
    return false;
}
function is_admin($login){
    $connect=connexion_bd();
    $role="admin";
    $query=$connect->prepare("SELECT * FROM utilisateur WHERE login=? and role=? ");
    $query->execute(array($login,$role));
    $result=$query->rowCount();
    if ($result==1) {
        return true;
    }
    return false;
}
?>