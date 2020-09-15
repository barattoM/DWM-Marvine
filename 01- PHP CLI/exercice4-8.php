<?php
$jour = false;
$mois = false;
$annee = false;
$verifJour = false;
$verifMois = false;

//Vérification de saisie
while (!ctype_digit($jour) || !ctype_digit($mois) || !ctype_digit($annee) || !$verifJour || !$verifMois ) {
    $verifJour = false;
    $verifMois = false;
    $jour = readline("Donnez un jour ");
    $mois = readline("Donnez un mois ");
    $annee = readline("Donnez une année ");
    //Vérification du type
    if (ctype_digit($jour) == false || ctype_digit($mois) == false || ctype_digit($annee) == false) {
        echo "Saisie incorrect \n";
    }
    //Vérification validité du jour
    if ($jour <= 0 || $jour > 31) {
        echo "Jour invalide \n";
    } else {
        $verifJour = true;
    }
    //Vérification validité du mois
    if ($mois > 12 || $mois <= 0) {
        echo "Mois invalide \n";
    } else {
        $verifMois = true;
    }
}

//Cas du mois de février
if ($mois == 2) {
    //Février ne peut avoir que 29 jours maximum
    if($jour>29){
        echo "Date invalide";
    }
    else{
        //Cas année bissextile
        if($jour==29){
            if($annee%4==0){
                if($annee%100==0){
                    if($annee%400==0){
                        //bissextile
                        echo "Date valide";
                    }
                    else{
                        //Pas bissextile
                        echo "Date invalide";
                    }
                }
                else{
                    //bissextile
                    echo "Date valide";
                }
            }
            else{
                //Pas bissextile
                echo "Date invalide";
            }
        }      
        else{
        //bissextile
        echo "Date valide";
        }
    }
}
//Cas des autres mois
else {
    //Cas des mois à 31 jours
    if ($mois == 1 || $mois == 3 || $mois == 5 || $mois ==7 || $mois == 8 || $mois == 10 || $mois == 12) {
        echo "Date valide";
    }
    //Cas des mois à 30 jours
    else {
        if ($jour > 30) {
            echo "Date invalide";
        } else {
            echo "Date valide";
        }
    }
}
