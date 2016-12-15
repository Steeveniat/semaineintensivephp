<?php
    // include('connexion.php');
  try
  {
      $pdo = new PDO('mysql:host=localhost;dbname=DATA_EVENT;charset=utf8', 'root', 'root');
  }
  catch(PDOException $exception)
  {
      die('Erreur : '.$exception->getMessage());
  }

  $pdo->exec("SET NAMES UTF8");

?>
