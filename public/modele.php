<?php
/*
=========================================================================
Intégration web III - TP1
-------------------------------------------------------------------------
Votre nom :Yoann Deguire
-------------------------------------------------------------------------
Cette page affiche une auto en fonction de la marque et de l'adresse fournis dans l'adresse
- Inclure le fichier de la class Auto
- Inclure le fichier donnees.inc.php contenant les données des voitures
- Commencer par le fichier Auto.php

- Cette page s'attend à recevoir de l'adresse les données "nomMarque" et "nomModele". Il faut donc récupérer ces données.
- S'il manque une de ces deux données dans l'adresse, on DOIT retourner à la page index.php
- Récupérer la voiture correspondante
- Si la voiture ne se trouve pas dans la variable $voitures, on DOIT retourner à la page index.php
=========================================================================
*/
include("../src/Auto.php");
include("../src/donnees.inc.php");

$nomMarque = $_GET['nomMarque'];
$nomModele = $_GET['nomModele'];


?><!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="css/autoguide.css" />
	<title><?php echo Auto::titre($nomModele); ?></title>
</head>

<body>
	<div class="interface">
		<?php include("../components/header.php");?>

		<?php echo Auto::ariane($nomMarque,$nomModele); ?>

		<section class="body">
			<article>
				<header>
				<h1><?php echo Auto::titre($nomModele); ?></h1>
				</header>
				<?php echo Auto::affichageVoiture($voitures, $nomMarque, $nomModele); ?>
				
			</article>
		</section>
		<?php include("../components/footer.php");?>

	</div>
</body>

</html>