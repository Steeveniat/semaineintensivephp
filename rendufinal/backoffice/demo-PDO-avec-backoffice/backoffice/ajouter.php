<?php

require_once "../connect.php";
$sql = "INSERT INTO `pokemon`
(`nom`, `type`, `description`)
VALUES
(:nom, :type, :description);";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$stmt->bindValue(':type', $_POST['type'], PDO::PARAM_STR);
$stmt->bindValue(':description', $_POST['description'], PDO::PARAM_STR);
$stmt->execute();
header('Location: index.php');
