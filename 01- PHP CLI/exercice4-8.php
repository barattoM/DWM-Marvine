<?php 
    $jour=readline("Donnez un jour ");
    $mois=readline("Donnez un mois ");
    $annee=readline("Donnez une année ");

    //Vérification de saisie
    while(ctype_digit($jour)==false || ctype_digit($mois)==false || ctype_digit($annee)==false){
        echo "Saisie incorrect \n";
        $jour=readline("Donnez un jour ");
        $mois=readline("Donnez un mois ");
        $annee=readline("Donnez une année ");
    }
    