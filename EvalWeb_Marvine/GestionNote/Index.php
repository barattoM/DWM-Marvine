<?php

require("./Outils.php");

Parametres::init();

DbConnect::init();

session_start();

/******Les langues******/
/***On récupère la langue***/
if (isset($_GET['lang']))
{
	$_SESSION['lang'] = $_GET['lang'];
}

/***On récupère la langue de la session/FR par défaut***/
$lang=isset($_SESSION['lang']) ? $_SESSION['lang'] : 'FR';
/******Fin des langues******/

$routes=[
	"default"=>["PHP/VIEW/","Login","Connection"],
	"TestelevesManager"=>["PHP/MODEL/TESTMANAGER/","TestelevesManager","Test de eleves"],
	"TestmatieresManager"=>["PHP/MODEL/TESTMANAGER/","TestmatieresManager","Test de matieres"],
	"TestsuivisManager"=>["PHP/MODEL/TESTMANAGER/","TestsuivisManager","Test de suivis"],
	"TestutilisateursManager"=>["PHP/MODEL/TESTMANAGER/","TestutilisateursManager","Test de utilisateurs"],

	"MenuProviseur"=>["PHP/VIEW/","MenuProviseur","Menu Proviseur"],

	"GestionEleves"=>["PHP/VIEW/","GestionEleves","Gestion des élèves"],
	"GestionEnseignants"=>["PHP/VIEW/","GestionEnseignants","Gestion des enseignants"],
	"GestionNotes"=>["PHP/VIEW/","GestionNotes","Gestion des notes"],
	"GestionMatieres"=>["PHP/VIEW/","GestionMatieres","Gestion des matières"],

	"FormEleves"=>["PHP/VIEW/","FormEleves","Formulaire des élèves"],
	"FormEnseignants"=>["PHP/VIEW/","FormEnseignants","Formulaire des enseignants"],
	"FormNotes"=>["PHP/VIEW/","FormNotes","Formulaire des notes"],
	"FormMatieres"=>["PHP/VIEW/","FormMatieres","Formulaire des matières"],

	"ActionsEleves"=>["PHP/VIEW/","ActionsEleves","Actions sur les eleves"],
	"ActionsEnseignants"=>["PHP/VIEW/","ActionsEnseignants","Actions sur les enseignants"],
	"ActionsNotes"=>["PHP/VIEW/","ActionsNotes","Actions sur les notes"],
	"ActionsMatieres"=>["PHP/VIEW/","ActionsMatieres","Actions sur les matières"],
	"ActionsConnexion"=>["PHP/VIEW/","ActionsConnexion","Actions sur la connexion"],
];

if(isset($_GET["page"]))
{

	$page=$_GET["page"];

	if(isset($routes[$page]))
	{
		AfficherPage($routes[$page]);
	}
	else
	{
		AfficherPage($routes["default"]);
	}
}
else
{
	AfficherPage($routes["default"]);
}