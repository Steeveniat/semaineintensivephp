<?php include('connexion.php');

if(isset($_GET['id'])){
    $id = (int) $_GET['id'];
} else {
    header('Location: index.php');
}
$sql = "DELETE FROM `evenement` WHERE id_event = :id_event;";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id_event', $id, PDO::PARAM_INT);
$stmt->execute();
header('Location: backoffice.php');
