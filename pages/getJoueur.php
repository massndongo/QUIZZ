<?php
include_once "../data/database.php";
global $pdo;
    $limit=3;
    $offset=$_GET['offset'];
    $sql ="
    SELECT nom,prenom,score 
    FROM utilisateur
    WHERE role='joueur'
    ORDER BY iduser DESC
    LIMIT {$limit}
    OFFSET {$offset}
    ";
    $req = $pdo->query($sql);
    $result = $req->fetchAll(2);
    echo json_encode($result);
?>