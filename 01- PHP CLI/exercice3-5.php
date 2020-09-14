<?php
    $nb1=readline("Donnez un nombre ");
    $nb2=readline("Donnez un nombre ");
    if(($nb1<0 && $nb2<0) || ($nb1>0 && $nb2>0)){
        echo "Le produit est positif";
    }
    else{
        echo "Le produit est négatif";
    }