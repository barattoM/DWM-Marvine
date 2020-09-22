<?php
    $prix=readline("Donnez le prix d'achat : ");
    while(!ctype_digit($prix)){
        echo "Saisie incorrect \n";
        $prix=readline("Donnez le prix d'achat : ");
    }
    $somme=$prix;
    $sommeRendu=0;
    //On poursuit la saisie des achats tant que l'utilisateur n'entre pas la valeur 0
    while ($prix!=0){
        //Vérifiaction de la saisie utilisateur pour la somme payé
        $paye=readline("Combien avez vous payé ? ");
        while(!ctype_digit($paye) || $paye<$prix){
            echo "Saisie incorrect \n";
            $paye=readline("Combien avez vous payé ? ");
        }
        $remise=$paye-$prix;
        $sommeRendu=$sommeRendu+$remise;
        //Affichage
        echo "Prix de l'article : ".$prix."\n"."Somme payée : ".$paye."\n".$remise." Euros rendu \n";
        //Vérification de la saisie utilisateur pour le prix de l'article
        $prix=readline("Donnez le prix d'achat : ");
        while(!ctype_digit($prix)){
            echo "Saisie incorrect \n";
            $prix=readline("Donnez le prix d'achat : ");
        }
        $somme=$somme+$prix;
    }
    //Affichage
    echo "Prix total : ".$somme."\n";
    echo "Total rendu : ".$sommeRendu;