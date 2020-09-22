<?php
    $valeur=readline("Combiens de valeur voulez vous ? ");
    while(!ctype_digit($valeur)){
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

    if($valeur!=0){
        //Calcul de la moyenne
        $somme=0;
        foreach($notes as $val){
            $somme=$somme+$val;
        }
        unset($val);
        $moyenne=$somme/count($notes);
        //Affichage des notes supérieurs à la moyenne
        echo "La moyenne est de : ".$moyenne." \nLes notes au dessus de la moyenne sont :";
        foreach($notes as $val){
            if($val>$moyenne){
                echo "\n".$val;
            }
        }
    }