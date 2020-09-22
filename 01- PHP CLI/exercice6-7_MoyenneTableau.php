<?php
    //exercice 6-3: initialisation d'un tableau de 9 notes 
    for($i=0;$i<9;$i++){
        $note=readline("Donnez une note ");
        while(!ctype_digit($note)){
            echo "Saisie incorrect \n";
            $note=readline("Donnez une note ");
        }
        $notes[$i]=$note;
    }
    //exercice 6-7: calcul de la moyenne des notes
    $somme=0;
    for($i=0;$i<count($notes);$i++){
        $somme=$somme+$notes[$i];
    }
    $moyenne=$somme/count($notes);
    echo "La moyenne des notes est de ".$moyenne;
