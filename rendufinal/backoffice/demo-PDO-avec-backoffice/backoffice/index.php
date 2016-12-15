<?php
/**
 * Created by PhpStorm.
 * User: yann
 * Date: 14/12/16
 * Time: 10:14
 */
require_once "../connect.php";
$sql = "SELECT id, nom, visible FROM pokemon";
$stmt = $pdo->prepare($sql);
$stmt->execute();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Back office</title>
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
<form action="ajouter.php" method="post">
    <h1>Ajouter un pokemon</h1>
    <p>
        <label for="nom">Nom</label><br>
        <input type="text" id="nom" name="nom" placeholder="pikachu">
    </p>
    <p>
        <label for="type">Type</label><br>
        <input type="text" id="type" name="type" placeholder="Electrique">
    </p>
    <p>
        <label for="description">Description</label><br>
        <textarea name="description" id="description" cols="30" rows="10" placeholder="Once upon a time..."></textarea>
    </p>
    <p>
        <input type="submit" value="La magie du grand cycle de la viiiiie">
    </p>
</form>
<table>
    <thead>
        <th>nom</th>
        <th>action</th>
    </thead>
    <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)){?>
    <tr>
        <td>
            <a class="<?=($row['visible']?'pokevisible':'pokecache');?>" href="details.php?id=<?=$row['id']?>"><?=$row['nom']?></a>
        </td>
        <td>
            <a href="change.php?id=<?=$row['id']?>">Modifier</a>
            <a href="killkill.php?id=<?=$row['id']?>">Supprimer</a>
            <?php if($row['visible'] == 0){?>
            <a href="afficher.php?id=<?=$row['id']?>">Afficher</a>
            <?php } else {?>
            <a href="cacher.php?id=<?=$row['id']?>">Cacher</a>
            <?php } ?>
        </td>
    </tr>
    <?php } ?>
</table>
</body>
</html>
