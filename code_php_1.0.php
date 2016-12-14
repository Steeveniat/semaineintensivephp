<?php

$reponse = $pdo->query('SELECT *, DATE_FORMAT(date_event,"%e") as jour, DATE_FORMAT(date_event,"%M") as mois, DATE_FORMAT(date_event,"%Y") as annee FROM SPECTACLE');

// On affiche chaque entrée une à une
// echo '<div class="details">';
while ($donnees = $reponse->fetch())
{
  echo '<div class="details">';
    echo '<div class="image"><img src="img-layouts/spectacle/' . $donnees['photo'] . '" alt="photo"/></div>';
  echo '<div class="date clearfix">';
  echo '<h5 class="jour">'.$donnees['jour'] . '</h5>';
  echo '<h5 class="mois">'.$donnees['mois'] . '</h5>';
  echo '<h5 class="annee">'.$donnees['annee'] . '</h5>';
  echo '</div>';

  echo '<div class="description">';

  echo '<div class="titre"><h5 class="nom_gp">'.$donnees['titre'].'</h5><p class="gp_des">'.$donnees['description'].'</p></div>';


  echo "<div class='infos'><h5>Ouverture des portes</h5><p>".$donnees['ouverture'].'</p>';
  echo "<h5>Debut de l'évenement</h5><p>".$donnees['heure'].'</p></div>';

  echo '</div></div>';


}
// echo '</div>';

$reponse->closeCursor(); // Termine le traitement de la requête


 ?>
