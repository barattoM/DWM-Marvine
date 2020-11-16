<?php
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
$agence1=new Agence(["idAgence"=>1,"nom"=>"SOS","adresse"=>"150 rue de la plage","codePostal"=>"20500","ville"=>"Orange","modeRestauration"=>"Restaurant"]);
$agence2=new Agence(["idAgence"=>2,"nom"=>"TIU","adresse"=>"10 boulevard des pigeons","codePostal"=>"21404","ville"=>"Paris","modeRestauration"=>"Ticket"]);
$agence3=new Agence(["idAgence"=>3,"nom"=>"Truc","adresse"=>"25 avenue de la paix","codePostal"=>"52172","ville"=>"Nantes","modeRestauration"=>"Ticket"]);
$enfant1=new Enfant(["idEnfant"=>1,"nom"=>"Dupont","prenom"=>"Titi","dateNaissance"=>$date2]);
$enfant2=new Enfant(["idEnfant"=>2,"nom"=>"Dufour","prenom"=>"Titi","dateNaissance"=>$date1]);
$enfant3=new Enfant(["idEnfant"=>3,"nom"=>"Arnold","prenom"=>"Giselle","dateNaissance"=>$date4]);
$enfant4=new Enfant(["idEnfant"=>4,"nom"=>"Dupont","prenom"=>"Regis","dateNaissance"=>$date5]);
$e1 = new Employe(["idEmploye"=>1,"nom"=>"Dupont","prenom"=>"Martin","dateEmbauche" => $date1,"poste"=>"Comptable", "salaire" => 50,"service"=>"Comptabilité","agence"=>$agence1,"enfants"=>[$enfant1,$enfant4]]);
$e2 = new Employe(["idEmploye"=>2,"nom"=>"Dupont","prenom"=>"Jean","dateEmbauche" => $date2,"poste"=>"faef", "salaire" => 10,"service"=>"rza","agence"=>$agence2,"enfants"=>[$enfant1,$enfant4]]);
$e3 = new Employe(["idEmploye"=>3,"nom"=>"Dufour","prenom"=>"Toto","dateEmbauche" => $date3,"poste"=>"zv", "salaire" => 15,"service"=>"trh","agence"=>$agence3,"enfants"=>[$enfant2]]);
$e4 = new Employe(["idEmploye"=>4,"nom"=>"Arnold","prenom"=>"Tata","dateEmbauche" => $date4,"poste"=>"Comptable", "salaire" => 20,"service"=>"Comptabilité","agence"=>$agence2,"enfants"=>[$enfant3,$enfant2]]);
$e5 = new Employe(["idEmploye"=>5,"nom"=>"Bupour","prenom"=>"Martin","dateEmbauche" => $date5,"poste"=>"fa", "salaire" => 30,"service"=>"dad","agence"=>$agence1]);

$listeEmploye[]=$e1;
$listeEmploye[]=$e2;
$listeEmploye[]=$e3;
$listeEmploye[]=$e4;
$listeEmploye[]=$e5;