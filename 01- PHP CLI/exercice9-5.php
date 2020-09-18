<?php
function purge($phrase,$char){
    $tabPhrase=str_split($phrase,1);
    foreach($tabPhrase as $i => $elt){
        if($elt==$char){
            unset($tabPhrase[$i]);
        }
    }
    $phrase=implode($tabPhrase);
    return $phrase;
}

function purge2($phrase,$char){
    $tabPhrase=str_split($phrase,1);
    for($i=0;$i<count($tabPhrase);$i++){
        unset($tabPhrase[array_search($char, $tabPhrase)]);
    }   
    $phrase=implode($tabPhrase);
    return $phrase;
}


$phrase=readline("Ecrivez une phrase ");
while(!ctype_print($phrase)){
    echo "Saisie incorrect \n";
    $phrase=readline("Ecrivez une phrase ");
}

$char=readline("Que voulez vous effacer ? ");
while(!ctype_print($char)){
    echo "Saisie incorrect \n";
    $char=readline("Que voulez vous effacer ? ");
}

echo "Avec purge : ".purge($phrase,$char)."\n";
echo "Avec replace : ".str_replace($char,"",$phrase)."\n";
echo "Avec purge2 : ".purge2($phrase,$char);

