<?php
    $prix=readline("Donnez le prix d'achat : ");
    while(!ctype_digit($prix)){
        echo "Saisie incorrect \n";
        $prix=readline("Donnez le prix d'achat : ");
    }
    $somme=$prix;
    $sommeRendu=0;
    while ($prix!=0){
        $paye=readline("Combien avez vous payé ? ");
        while(!ctype_digit($paye) || $paye<$prix){
            echo "Saisie incorrect \n";
            $paye=readline("Combien avez vous payé ? ");
        }
        $remise=$paye-$prix;
        $sommeRendu=$sommeRendu+$remise;
        echo "Prix de l'article : ".$prix."\n"."Somme payée : ".$paye."\n".$remise." Euros rendu \n";
        $prix=readline("Donnez le prix d'achat : ");
        while(!ctype_digit($prix)){
            echo "Saisie incorrect \n";
            $prix=readline("Donnez le prix d'achat : ");
        }
        $somme=$somme+$prix;
    }
    echo "Prix total : ".$somme."\n";
    echo "Total rendu : ".$sommeRendu;