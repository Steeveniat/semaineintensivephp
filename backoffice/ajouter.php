<?php include('connexion.php');

$sql = "INSERT INTO `evenement`
(`id_event`, `type`,`titre`, `heure`, `prix`, `description`, `resume`,`ouverture`,`date_event`,`photo`)
VALUES
(:id_event, :type, :titre, :heure, :prix, :description, :resume, :ouverture, :date_event, :photo);";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id_event', $_POST['id'], PDO::PARAM_STR);
$stmt->bindValue(':type', $_POST['type'], PDO::PARAM_STR);
$stmt->bindValue(':titre', $_POST['nom'], PDO::PARAM_STR);
$stmt->bindValue(':heure', $_POST['heure'], PDO::PARAM_STR);
$stmt->bindValue(':prix', $_POST['prix'], PDO::PARAM_STR);
$stmt->bindValue(':description', $_POST['description'], PDO::PARAM_STR);
$stmt->bindValue(':resume', $_POST['resume'], PDO::PARAM_STR);
$stmt->bindValue(':ouverture', $_POST['ouverture'], PDO::PARAM_STR);
$stmt->bindValue(':date_event', $_POST['date'], PDO::PARAM_STR);
$stmt->bindValue(':photo', $_POST['photo'], PDO::PARAM_STR);
$stmt->execute();

header('Location: backoffice.php');
