<?php
$phrase=readline("Ecrivez une phrase ");
while(!ctype_print($phrase)){
    echo "Saisie incorrect \n";
    $phrase=readline("Ecrivez une phrase ");
}