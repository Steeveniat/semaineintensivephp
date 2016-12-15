<?php
include('../connexion.php');

$sql = "SELECT `id_event`, `type`, `titre`, `heure`, `prix`, `description`, `resume`, `ouverture`, `date_event`, `photo` FROM `evenement` ";
$stmt = $pdo->prepare($sql);
$stmt->execute();
?>

<form action="ajouter.php" method="post">
    <h1>Ajouter un EVENT</h1>
    <p>
        <label for="type">type</label><br>
        <select class="type" name="type">
            <option value="concert">concert</option>
            <option value="spectacle">spectacle</option>
            <option value="sport">sport</option>
        </select>
    </p>
    <p>
        <label for="nom">groupe / equipe / titre</label><br>
        <input type="text" id="nom" name="nom" placeholder="psg / ol">
    </p>
    <p>
        <label for="heure">heure</label><br>
        <input type="text" id="heure" name="heure" placeholder="00:00">
    </p>
    <p>
        <label for="ouverture">Ouverture</label><br>
        <input type="text" id="ouverture" name="ouverture" placeholder="00:00">
    </p>
    <p>
        <label for="prix">Prix</label><br>
        <input type="text" id="prix" name="prix" placeholder="30">
    </p>
    <p>
        <label for="date">date</label><br>
        <input type="text" id="date" name="date" placeholder="AAAA-MM-JJ">
    </p>a

    <p>
        <label for="description">Description</label><br>
        <textarea name="description" id="description" cols="30" rows="10" placeholder="triuc de dingue"></textarea>
    </p>
    <p>
        <label for="description">Presentation</label><br>
        <textarea name="resume" id="resume" cols="30" rows="10" placeholder="voila voila "></textarea>
    </p>

    <p>
        <label for="type">photo</label><br>
        <input type="text" id="photo" name="photo" placeholder="photo.php">
    </p>





    <p>
        <input type="submit" value="Ajouter l'evenement">
    </p>
</form>


<table>
    <thead>
        <th>Groupe</th>
    </thead>
    <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
    <tr>
        <td><?=$row['titre']?>

            <a href="sup_donnee.php?id=<?=$row['id_event']?>">Supprimer</a>
        </td>

    </tr>
    <?php endwhile;?>
</table>
