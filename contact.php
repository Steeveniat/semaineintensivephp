<!DOCTYPE html>
<html lang="en">
<?php include('connexion.php');?>
<head>
	<meta charset="UTF-8">
	<title>Birdie's Arena</title>
	<link rel="stylesheet" type="text/css" href="style/skin.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>

	<header>
		<h1><a href="index.php"><img src="img-layouts/logo.png" class="logo"></a></h1>
		<div class="navbar-top nav-home">
			<ul class="navbar-ul-top">
				<li class="navbar-li-top"><a href="index.php" class="navbar-a-top">Accueil</a></li>
				<li class="navbar-li-top"><a href="actualite.php" class="navbar-a-top">Actualités</a></li>
				<li class="navbar-li-top"><a href="billeterie.php" class="navbar-a-top">Billeterie</a></li>
				<li class="navbar-li-top"><a href="contact.php" class="navbar-a-top">Contact</a></li>
			</ul>
		</div>
	</header>
	<main>
		<form method="post" action="envoie.php">
			<p class="contact-p">Veuillez utiliser les informations ci-dessous.</p>
			<h2 class="contact-h2">Contact</h2>
			<hr class="contact-hr">

			<ul class="form-top formulaire">
				<li class="surname liste">
					<label for="nom" >Nom
						<strong class="star">*</strong>
						<br></label>
						<input type="text" id="nom" name="nom" class="input-zone" />
					</li>
					<li class="mail liste">
						<label for="email">E-mail
							<strong class="star">*</strong>
							<br></label>
							<input type="email" id="email" name="mail" class="input-zone"  />
						</li>
					</ul>
					<ul class="form-bot formulaire">
						<li class="subject liste">
							<label for="sujet" class="label">Sujet
								<strong class="star">*</strong>
								<br></label>
								<input type="text" id="sujet" name="sujet" class="input-zone"  />
							</li>
							<li class="object liste">
								<label for="objet" class="label">Objet
									<strong class="star">*</strong>
									<br></label>
									<input type="text" id="objet" name="objet" class="input-zone"  />
								</li>
							</ul>

							<ul class="textzone formulaire">
								<li class="liste">
									<label for="message">Message
										<strong class="star" class="label">*</strong>
									</label>
								</li><br>
								<textarea type="text" id="message" name="message"></textarea>
							</ul>
							<button class="contact-button">Envoyer</button>
						</form>


	</main>
	<footer>
		<ul class="footer-ul">
			<li class="footer-li"><a href="index.php" class="footbar"> Accueil</a></li>
			<li class="footer-li"><a href="actualite.php" class="footbar"> Actualités</a></li>
			<li class="footer-li"><a href="billeterie.php" class="footbar"> Billeteries</a></li>
			<li class="footer-li"><a href="contact.php" class="footbar"> Contact</a></li>
		</ul>
		<ul class="social">
			<li class="icon"><a href="#">
				<img src="img-layouts/twitter.png" class="icons"><br></a>
				Follow us on <br>Tweeter
			 </li>
			<li class="icon"><a href="#">
				<img src="img-layouts/instagram.png" class="icons"><br></a>
				Follow us on <br>Instagram
			 </li>
			<li class="icon"><a href="#">
				<img src="img-layouts/facebook.png" class="icons"><br></a>
				Follow us on <br>Facebook
			 </li>
		</ul>
		<div class="copyright">
			&#169; 2016 Birdie's Arena, Inc.
		</div>
	</footer>
</body>
</html>
