<?php
function autoload($classe){
    require $classe.".Class.php";
}
spl_autoload_register("autoload");


$agence1=new Agence(["nom"=>"SOS","adresse"=>"150 rue de la plage","codePostal"=>"20500","ville"=>"Orange"]);

echo $agence1->toString();