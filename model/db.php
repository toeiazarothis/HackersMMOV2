<?php
// define('UTILISATEUR','u852249137_patri');
// define('PASS','azerty89000');
// function connectionDB(){
// 	$nomServeur = "mysql.hostinger.fr";
// 	$nomDB = "u852249137_patri";
// 	$utilisateurServeur = UTILISATEUR;
// 	$motDePasse = PASS;

define('UTILISATEUR','root');
define('PASS','simplon');
function connectionDB(){
	$nomServeur = "localhost";
	$nomDB = "hackers";
	$utilisateurServeur = UTILISATEUR;
	$motDePasse = PASS;

	try {
		$bdd = new PDO("mysql:host=$nomServeur;dbname=$nomDB", $utilisateurServeur, $motDePasse, array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e)
	{
		return ('Echec de connection, raison: <strong>'. $e->getMessage().'<strong>.');
	}
	return $bdd;
}
 ?>
