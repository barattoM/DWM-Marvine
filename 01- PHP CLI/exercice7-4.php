<?php
require "fonction.php";
$tab=creaTableau2();
$indice=readline("Quel valeur supprimer ? ");

//Methode 1
// unset($tab[$indice]);
// echo affichageTableau($tab);

//Methode 2 : On coupe le tableau en 2 parties, la partie avant l'indice et la partie après l'indice puis on refusione le tableau
$t1=array_slice($tab,0,$indice);
$t2=array_slice($tab,$indice,count($tab));
$tab=;
echo affichageTableau($tab);
