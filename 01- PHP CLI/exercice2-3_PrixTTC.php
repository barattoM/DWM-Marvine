<?php  
    $prixHT=readline("Donnez le prix HT : ");
    $nbArticle=readline("Donnez le nombre d'article : ");
    $TVA=readline("Donnez le taux de la TVA : ");
    echo "Prix TTC : ".$prixHT*$nbArticle*$TVA;