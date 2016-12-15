<?php
/**
 * Created by PhpStorm.
 * User: yann
 * Date: 14/12/16
 * Time: 11:04
 */
require_once "../connect.php";
if(isset($_GET['id'])){
    $id = (int) $_GET['id'];
} else {
    header('Location: index.php');
}
$sql = "SELECT 
    `id`, 
    `nom`, 
    `type`, 
    `description`, 
    `visible`, 
    `img` 
FROM 
    `pokemon` 
WHERE 
  id = :id
;";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if(!$row){
    header('Location: index.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier : <?=$row['nom']?></title>
</head>
<body>
<form action="dochange.php" method="post">
    <input type="hidden" name="id" value="<?=$row['id']?>">
    <h1>Modifier le pokemon <?=$row['nom']?></h1>
    <p>
        <label for="nom">Nom</label><br>
        <input type="text" id="nom" name="nom" value="<?=$row['nom']?>">
    </p>
    <p>
        <label for="type">Type</label><br>
        <input type="text" id="type" name="type" value="<?=$row['type']?>">
    </p>
    <p>
        <label for="img">Image</label><br>
        <input type="text" id="img" name="img" value="<?=$row['img']?>">
    </p>
    <p>
        <label for="description">Description</label><br>
        <textarea name="description" id="description" cols="30" rows="10"><?=$row['description']?></textarea>
    </p>
    <p>
        <input type="submit" value="Change toi petit oiseau">
    </p>
</form>
</body>
</html>
