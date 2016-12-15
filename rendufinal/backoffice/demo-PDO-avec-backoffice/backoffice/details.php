<?php
/**
 * Created by PhpStorm.
 * User: yann
 * Date: 14/12/16
 * Time: 10:26
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
    <title>Details de : <?=$row['nom']?></title>
    <style>
        .pokevisible{
            color: #128f27;
        }
        .pokecache{
            color: #ff9900;
        }
    </style>
</head>
<body>
<p><a href="index.php">&lt; Index</a></p>
<h1 class="<?=($row['visible']?'pokevisible':'pokecache');?>"><?=$row['nom']?></h1>
<h2>Type</h2>
<p><?=$row['type']?></p>
<h2>Description</h2>
<p><?=nl2br($row['description']);?></p>
<h2>Image</h2>
<?php
if ($row['img'] !== '') :
    ?>
    <img src="../img/<?=$row['img']?>" alt="" width="50">
<?php else :?>
    <img src="../img/Captain_Placeholder.jpg" alt="" width="200">
<?php endif;?>
</body>
</html>
