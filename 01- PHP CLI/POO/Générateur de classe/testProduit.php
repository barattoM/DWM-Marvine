<?php
function autoload($classe){
    require $classe.".Class.php";
}
spl_autoload_register("autoload");

$date1=new DateTime("08-10-2020");
$cat1=new Categorie(["libelle"=>"Alimentaire","tva"=>5]);
$lieu1=new Lieudestockage(["numeroEntrepot"=>206,"zone"=>"A","ville"=>"Dunkerque"]);
$lieu2=new Lieudestockage(["numeroEntrepot"=>250,"zone"=>"C","ville"=>"Boulogne"]);
$p1=new Produit(["numero"=>50230,"designation"=>"truc","couleur"=>"noir","dateValidite"=>$date1,"categorie"=>$cat1,"lieuxStockage"=>[$lieu1],"prixHT"=>20]);

echo $p1->prixTTC();
$p1->entreeEnStock($lieu2);
echo "\n".$p1->toString();