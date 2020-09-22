<?php
require "fonction.php";
//initialisation du dictionnaire
$dictionnaire=["azerty","tata","toto","try"];
//Demande du mot à rechercher
$mot=readline("Quel mot recherchez vous ? ");
while(!ctype_print($mot)){
    echo "Saisie incorrect \n";
    $mot=readline("Ecrivez une phrase ");
}

//Methode 1
    // if(in_array(strtolower($mot),$dictionnaire)){
    //     echo "\nLe mot ".$mot." existe"; 
    // }
    // else{
    //     echo "\nLe mot ".$mot." n'existe pas"; 
    // }

//Methode 2

$result=false;
foreach($dictionnaire as $elt){
    if(strtolower($elt)==strtolower($mot)){
        $result=true;
    }
}

if($result){
    echo "\nLe mot ".$mot." existe"; 
}
else{
    echo "\nLe mot ".$mot." n'existe pas"; 
}