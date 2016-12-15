<!DOCTYPE html>

<html>
  <?php include('connexion.php');?>
  <head>
  	<meta charset="UTF-8">
  	<title>Birdie's Arena - Accueil</title>
  	<link rel="stylesheet" type="text/css" href="style/skin.css">
  	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  </head>
  <body>
     <main>
   		<header>
   		   <?php include('header.php') ?>
         <div class="navbar-bot">
           <ul class="navbar-ul-bot">
             <li class="navbar-li-bot"><a href="concert.php" class="navbar-a-bot">Concert</a></li>
             <li class="navbar-li-bot"><a href="spectacle.php" class="navbar-a-bot">Spectacle</a></li>
             <li class="navbar-li-bot"><a href="sport.php" class="navbar-a-bot">Sport</a></li>
           </ul>
         </div>
   		</header>
   		<hr>

      <?php
      $reponse = $pdo->query("SELECT   `id_event`, `type`, `titre`, `heure`, `prix`, `description`, `resume`, `ouverture`, `date_event`, `photo`, DATE_FORMAT(date_event,'%e') as jour, DATE_FORMAT(date_event,'%M') as mois, DATE_FORMAT(date_event,'%Y') as annee FROM evenement WHERE type='concert'");

      while ($donnees = $reponse->fetch()){?>
          <div class="details">
            <div class="image"><img src="img-layouts/concert/<?= $donnees['photo']?>" alt="photo"/></div>
            <div class="date clearfix">
            <h5 class="jour"><?= $donnees['jour'] ?></h5>
            <h5 class="mois"><?= $donnees['mois']?></h5>
            <h5 class="annee"><?= $donnees['annee'] ?></h5>
          </div>

          <div class="description">
            <div class="titre">
              <h5 class="nom_gp"><?= $donnees['titre'] ?></h5>
              <p class="gp_des"><?= $donnees['description']?></p>
            </div>


            <div class='infos'>
              <h5>Ouverture des portes</h5>
              <p><?=$donnees['ouverture']?></p>
              <h5>Debut de l'évenement</h5>
              <p><?=$donnees['heure'] ?></p>
              <form action="details_event.php" method="post">
                <a href="details_event.php?id=<?=$donnees['id_event']?>" class="infos">Plus d'infos</a>
              </form>
          </div>
        </div>
      </div>
      <hr>

      <?php }
      $reponse->closeCursor(); // Termine le traitement de la requête

      ?>

   		<br>
    </main>
<?php include('footer.php') ?>

   </body>
   </html>
