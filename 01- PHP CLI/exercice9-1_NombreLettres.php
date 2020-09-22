<?php
$mot=readline("Ecrivez un mot ");
while(!ctype_alpha($mot)){
    echo "Saisie incorrect \n";
    $mot=readline("Ecrivez un mot ");
}
echo "Le mot fait ".strlen($mot)." caractères";