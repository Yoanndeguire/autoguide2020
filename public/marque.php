<?php
/*
=========================================================================
Intégration web III - TP1
-------------------------------------------------------------------------
Votre nom :Yoann Deguire
-------------------------------------------------------------------------
Cette page affiche la liste des modèles en fonction de la marque fournie dans l'adresse
- Inclure le fichier de la class Auto
- Inclure le fichier donnees.inc.php contenant les données des voitures (crée la variable $voitures)
- Commencer par le fichier Auto.php

- Cette page s'attend à recevoir de l'adresse la donnée "nomMarque". Il faut donc récupérer cette donnée.
- S'il manque la marque dans l'adresse, on DOIT retourner à la page index.php
- Si la marque ne se trouve pas dans la variable $voitures, on DOIT retourner à la page index.php
=========================================================================
*/
include("../src/Auto.php");
include("../src/donnees.inc.php");
$nomMarque = $_GET['nomMarque'];

?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="css/autoguide.css" />
	<?php echo Auto::titre($nomMarque); ?>
</head>

<body>
	<div class="interface">
	<?php include("../components/header.php");?>

	<?php echo Auto::ariane($nomMarque, "", ""); ?>

		<section class="body">
			<article>
				<header>
				<h1><?php echo Auto::titre($nomMarque); ?></h1>
				</header>
				<?php echo Auto::listeModeles($nomMarque, $voiture[$nomMarque]); ?>
			</article>
		</section>
		<?php include("../components/footer.php");?>


	</div>
</body>

</html>