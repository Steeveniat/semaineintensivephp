<?php
/**
 * Created by PhpStorm.
 * User: yann
 * Date: 14/12/16
 * Time: 11:10
 */
require_once "../connect.php";
$sql = "UPDATE 
`pokemon` 
SET 
  `nom`=:nom,
  `type`=:type,
  `description`=:description,
  `img`=:img
WHERE 
id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$stmt->bindValue(':type', $_POST['type'], PDO::PARAM_STR);
$stmt->bindValue(':description', $_POST['description'], PDO::PARAM_STR);
$stmt->bindValue(':img', $_POST['img'], PDO::PARAM_STR);
$stmt->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
$stmt->execute();
header('Location: details.php?id='.$_POST['id']);
