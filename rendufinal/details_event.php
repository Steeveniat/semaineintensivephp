<!DOCTYPE html>
<html lang="fr">

<?php include('connexion.php');?>


<head>
	<meta charset="utf-8">
	<title>BIRDIE'S ARENA</title>
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

		<?php
		$reponse = $pdo->prepare("SELECT `id_event`, `type`, `titre`, `heure`, `prix`, `description`, `resume`, `ouverture`, `date_event`, `photo`, DATE_FORMAT(date_event,'%e') as jour, DATE_FORMAT(date_event,'%M') as mois, DATE_FORMAT(date_event,'%Y') as annee FROM evenement WHERE id_event=:idevent") ;
		$reponse->bindValue(':idevent',$_GET['id']??0);
		$reponse->execute();
		$donnees = $reponse->fetch();
		?>
			<div class="event clearfix">
				<img src="img-layouts/<?= $donnees['photo']?>" alt="image">
				<div class="detailsevent">
					<h3><?= $donnees['titre']?></h3>
					<h3><?= $donnees['jour']?> <?= $donnees['mois']?> <?= $donnees['annee']?></h3>
					<div class="heure">
						<p class="horraires">Ouverture de la soiree : <?= $donnees['heure']?> </p>
					</div>
					<a href="#">billetterie</a>

					<br><br>
					<p class="fulldetails"><?= $donnees['resume']?></p>
				</div>
			</div>

			<?php
			$reponse->closeCursor(); // Termine le traitement de la requête
			include('footer.php');?>
	</main>
</body>
</html>
