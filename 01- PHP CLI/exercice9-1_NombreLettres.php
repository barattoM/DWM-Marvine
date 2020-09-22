<?php
$mot=readline("Ecrivez un mot ");
while(!ctype_alpha($mot)){
    echo "Saisie incorrect \n";
    $mot=readline("Ecrivez un mot ");
}

//Methode 1
echo "Le mot fait ".strlen($mot)." caractères\n";

//Methode 2
$mot=str_split($mot);
echo "Le mot fait ".count($mot)." caractères";