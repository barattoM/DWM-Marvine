<?php
    $age=readline("Donnez votre age : ");
    $sexe=readline("Donnez votre sexe (homme/femme) : ");
    //vérification de saisie
    while(ctype_digit($age)==false || ($sexe!="homme" && $sexe!="femme")){
        echo "Saisie incorrect \n";
        $age=readline("Donnez votre age : ");
        $sexe=readline("Donnez votre sexe (homme/femme) : ");     
    }
    if(($sexe=="homme" && $age>20) || ($sexe=="femme" && $age>18 && $age<35)){
        echo "Imposable";
    }
    else{
        echo "Pas imposable";
    }
    