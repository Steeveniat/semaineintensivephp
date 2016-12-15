<?php
/**
 * Created by PhpStorm.
 * User: yann
 * Date: 14/12/16
 * Time: 11:21
 */
require_once "../connect.php";
if(isset($_GET['id'])){
    $id = (int) $_GET['id'];
} else {
    header('Location: index.php');
}
$sql = "UPDATE 
`pokemon` 
SET 
  `visible` = 0
WHERE 
id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();
header('Location: index.php');
