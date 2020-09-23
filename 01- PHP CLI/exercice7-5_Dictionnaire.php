<?php
require "fonction.php";
//initialisation du dictionnaire

$dictionnaire=["azerty","ab","tata","toto","try"]; //Tableau impaire pour les test
//$dictionnaire=["azerty","tata","toto","try"]; //Tableau paire pour les test

//Demande du mot à rechercher
$mot=readline("Quel mot recherchez vous ? ");
while(!ctype_print($mot)){
    echo "Saisie incorrect \n";
    $mot=readline("Quel mot recherchez vous ? ");
}

//Methode 1
    // if(in_array(strtolower($mot),$dictionnaire)){
    //     echo "\nLe mot ".$mot." existe"; 
    // }
    // else{
    //     echo "\nLe mot ".$mot." n'existe pas"; 
    // }

//Methode 2

// $result=false;
// foreach($dictionnaire as $elt){
//     if(strtolower($elt)==strtolower($mot)){
//         $result=true;
//     }
// }

// if($result){
//     echo "\nLe mot ".$mot." existe"; 
// }
// else{
//     echo "\nLe mot ".$mot." n'existe pas"; 
// }

//Methode 3 dichotomie


$debut=0;
$fin=count($dictionnaire);
$milieu=intdiv($debut+$fin,2);
echo "\n".$fin." ".$milieu;
echo "\n div de 1 ".intdiv(1,2);
//boucle tant qu'on a pas trouver la valeur ou que debut+1=fin
$trouve=false;
while(!$trouve || $milieu!=0){
    if($mot==$dictionnaire[$milieux]){

    }
    else 
        if ($mot<$dictionnaire[$milieux]){

    }
        else{

        }
    
    
    //changement de la fin
    if($mot<$milieu){
        $fin=$milieu;
    }else{ //changement du début
        $debut=$milieu;
    }
    //calcul et changement du milieu
    $milieu=intdiv($debut+$fin,2);

}