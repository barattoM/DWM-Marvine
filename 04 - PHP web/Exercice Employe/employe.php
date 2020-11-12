<?php 

require ("Employe.Class.php");

function autoload($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("autoload");

$date1 = new DateTime("30-12-2020");
$date2 = new DateTime("30-11-2008");
$date3 = new DateTime("30-10-2002");
$date4 = new DateTime("10-05-1999");
$date5 = new DateTime("15-12-2015");
$agence1=new Agence(["nom"=>"SOS","adresse"=>"150 rue de la plage","codePostal"=>"20500","ville"=>"Orange","modeRestauration"=>"Restaurant"]);
$agence2=new Agence(["nom"=>"TIU","adresse"=>"10 boulevard des pigeons","codePostal"=>"21404","ville"=>"Paris","modeRestauration"=>"Ticket"]);
$agence3=new Agence(["nom"=>"Truc","adresse"=>"25 avenue de la paix","codePostal"=>"52172","ville"=>"Nantes","modeRestauration"=>"Ticket"]);
$enfant1=new Enfant(["nom"=>"Dupont","prenom"=>"Titi","dateNaissance"=>$date2]);
$enfant2=new Enfant(["nom"=>"Dufour","prenom"=>"Titi","dateNaissance"=>$date1]);
$enfant3=new Enfant(["nom"=>"Arnold","prenom"=>"Giselle","dateNaissance"=>$date4]);
$enfant4=new Enfant(["nom"=>"Dupont","prenom"=>"Regis","dateNaissance"=>$date5]);
$e1 = new Employe(["nom"=>"Dupont","prenom"=>"Martin","dateEmbauche" => $date1,"poste"=>"Comptable", "salaire" => 50,"service"=>"Comptabilité","agence"=>$agence1,"enfants"=>[$enfant1,$enfant4]]);
$e2 = new Employe(["nom"=>"Dupont","prenom"=>"Jean","dateEmbauche" => $date2,"poste"=>"faef", "salaire" => 10,"service"=>"rza","agence"=>$agence2,"enfants"=>[$enfant1,$enfant4]]);
$e3 = new Employe(["nom"=>"Dufour","prenom"=>"Toto","dateEmbauche" => $date3,"poste"=>"zv", "salaire" => 15,"service"=>"trh","agence"=>$agence3,"enfants"=>[$enfant2]]);
$e4 = new Employe(["nom"=>"Arnold","prenom"=>"Tata","dateEmbauche" => $date4,"poste"=>"Comptable", "salaire" => 20,"service"=>"Comptabilité","agence"=>$agence2,"enfants"=>[$enfant3,$enfant2]]);
$e5 = new Employe(["nom"=>"Bupour","prenom"=>"Martin","dateEmbauche" => $date5,"poste"=>"fa", "salaire" => 30,"service"=>"dad","agence"=>$agence1,"enfants"=>[$enfant3]]);

$t[]=$e1;
$t[]=$e2;
$t[]=$e3;
$t[]=$e4;
$t[]=$e5;



echo '<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Employé</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
';

foreach ($t as $elt){
    echo $elt->toStringHTML();
}

echo '</body>
</html>';

