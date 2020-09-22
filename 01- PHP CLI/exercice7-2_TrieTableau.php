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
//Tri dans l'ordre décroissant
    //Tri par section : On recherche la plus grande valeur dans le tableau et on la place en 1ère position, puis on recherche la plus grande valeur (sans regarder la valeur precedente) et on la place en 2e positon, ... 

    for($i=0;$i<count($notes)-1;$i++){
        $posMaxi=$i;
        for($j=$i+1;$j<count($notes);$j++){
            if($notes[$j]>$notes[$posMaxi]){
                $posMaxi=$j;
            }       
        }
        $temp=$notes[$i];
        $notes[$i]=$notes[$posMaxi];
        $notes[$posMaxi]=$temp;
    }


    //Tri à bulles : Tant que tout n'est pas trié, pour chaque élément du tableau si le suivant est plus grand on permute de place les 2 élément
    
    Do{
        //on part du principe que le tableau est bien trié, et dès que l'on fait une permutation il ne l'est plus. Si on ne fait plus de permutation alors il est trié et on sort de la boucle
        $trie=true;
        //on compare tout les éléments du tableau avec son voisin (sauf le dernier)
        for($i=0;$i<count($notes)-1;$i++){
            //si la valeur suivante est plus grande alors on permute les 2 valeurs dans le tableau
            if($notes[$i+1]>$notes[$i]){
                $temp=$notes[$i];
                $notes[$i]=$notes[$i+1];
                $notes[$i+1]=$temp;
                $trie=false;    
            }
        }
    }while(!$trie);


    //Affichage tableaux décroissant


    echo "\nVoici le tableau rangé par ordre décroissant :\n";
    foreach($notes as $val){
        echo $val." ";
    }

