<?php
/*
=========================================================================
Intégration web III - TP1
-------------------------------------------------------------------------
Votre nom : Yoann Deguire
-------------------------------------------------------------------------
Cette page devrait contenir les tests des méthodes
- Inclure le fichier de la class Auto
- Inclure le fichier donnees.inc.php contenant les données des voitures
- Commencer par le fichier Auto.php
=========================================================================
*/
include_once("../src/Auto.php");
include_once("../src/donnees.inc.php");
/*LIGNE DE TEST*/
// echo Auto::titre('Ford', 'Fiesta', 'strong');
// echo Auto::titre('Deguire', 'Yoann', 'h1');
// ... CONTINUER ...

// var_dump(Auto::trouverModele($voitures, 'Lada', 'Fiesta'));
// var_dump(Auto::trouverModele($voitures, 'Ford', 'California'));
// var_dump(Auto::trouverModele($voitures, 'Ford', 'Fiesta'));
var_dump(Auto::ariane('Ford', 'Fiesta'));
echo Auto::image('Ford', 'Fiesta');
echo Auto::listeMarques($voitures);
// echo Auto::listeModele($nomMarque, $voitures[$nomMarque]);
echo Auto::ligne_puissance($voitures['Ford']['Fiesta']);
echo Auto::ligne_moteur($voitures['Ford']['Fiesta']);
echo Auto::ligne_transmissions($voitures['Ford']['Fiesta']);
echo Auto::ligne_consommation($voitures['Ford']['Fiesta']);
echo Auto::affichageVoiture($voitures['Ford']['Fiesta'], 'Ford', 'Fiesta');
?>