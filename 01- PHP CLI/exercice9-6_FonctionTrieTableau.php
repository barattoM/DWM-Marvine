<?php
include "fonction.php";

function trieTableau($tab){
    //Tri à bulles : Tant que tout n'est pas trié, pour chaque élément du tableau si le suivant est plus grand on permute de place les 2 élément
    
   Do{
    //on part du principe que le tableau est bien trié, et dès que l'on fait une permutation il ne l'est plus. Si on ne fait plus de permutation alors il est trié et on sort de la boucle
    $trie=true;
    //on compare tout les éléments du tableau avec son voisin (sauf le dernier)
    for($i=0;$i<count($tab)-1;$i++){
        //si la valeur suivante est plus petite alors on permute les 2 valeurs dans le tableau
        if($tab[$i+1]<$tab[$i]){
            $temp=$tab[$i];
            $tab[$i]=$tab[$i+1];
            $tab[$i+1]=$temp;
            $trie=false;    
        }
    }
    }while(!$trie);
    return $tab;
}

$tab=creaTableau2();
echo "Tableau d'entrée : \n";
affichageTableau($tab);
echo "\nTableau trié : ";

//Methode 1

// $tab=trieTableau($tab);
// affichageTableau($tab);

//Methode 2

sort($tab);
affichageTableau($tab);


