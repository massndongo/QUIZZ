<?php
    $host = 'mysql-massam.alwaysdata.net';
    $dbname = 'massam_quizz';
    $username = 'massam';
    $password = 'L@coste90';
      try {
      // se connecter à mysql
      $pdo = new PDO("mysql:host=$host;dbname=$dbname","$username","$password");
      } catch (PDOException $exc) {
        return $exc->getMessage();
        exit();
      }