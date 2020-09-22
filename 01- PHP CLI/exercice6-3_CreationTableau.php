<?php
include "fonction.php";
for($i=0;$i<9;$i++){
    $note=readline("Donnez un nombre ");
    while(!ctype_digit($note)){
        echo "Saisie incorrect \n";
        $note=readline("Donnez un nombre ");
    }
    $tableau[]=$note;
}

affichageTableau($tableau);