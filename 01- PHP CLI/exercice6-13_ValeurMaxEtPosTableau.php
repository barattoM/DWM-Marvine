<?php
    $valeur=readline("Combiens de valeur voulez vous ? ");
    while(!ctype_digit($valeur)){
        echo "Saisie incorrect \n";
        $valeur=readline("Combiens de valeur voulez vous ? ");
    }

    //initialisation du tableau
    for($i=0;$i<$valeur;$i++){
        $nombre=readline("Donnez un nombre ");
        while(!ctype_digit($nombre)){
            echo "Saisie incorrect \n";
            $nombre=readline("Donnez un nombre ");
        }
        $valeurs[$i]=$nombre;
    }
    //Recherche de la plus grande valeur et de sa position dans le tableau
    if($valeur!=0){
        $max=$valeurs[0];
        foreach($valeurs as $key => $val){
            if($val>$max){
                $max=$val;
                $pos=$key;
            }
        }
        echo "La plus grande valeur est ".$max." à la position ".$pos+1;
    }
    