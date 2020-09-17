<?php

$valeur=readline("Combiens de valeur voulez vous ? ");
while(!ctype_digit($valeur) || $valeur==0){
    echo "Saisie incorrect \n";
    $valeur=readline("Combiens de valeur voulez vous ? ");
}

//initialisation du tableau
for($i=0;$i<$valeur;$i++){
    $note=readline("Donnez un note ");
    while(!ctype_digit($note)){
        echo "Saisie incorrect \n";
        $note=readline("Donnez un note ");
    }
    $notes[$i]=$note;
}

//Affichage du tableau initial
echo "Le tableau que vous avez entré est :\n";
foreach($notes as $val){
    echo $val." ";
}

//Inversion du tableau
for($i=0;$i<intdiv(count($notes),2);$i++){
    $temp=$notes[$i];
    $notes[$i]=$notes[(count($notes)-1)-$i];
    $notes[(count($notes)-1)-$i]=$temp;
}

//Affichage du tableau inversé
echo "\nLe tableau inversé est :\n";
foreach($notes as $val){
    echo $val." ";
}
