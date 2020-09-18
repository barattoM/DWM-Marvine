<?php
include "fonction.php";
$nb=readline("Combiens de valeurs dans le tableau ? ");
$tab=creaTableau($nb);
$pos=0;
$neg=0;
for($i=0;$i<count($tab);$i++){
    if($tab[$i]<0){
        $neg++;
    }
    else{
        $pos++;
    }
}

echo "Il y a ".$neg." valeurs négatives et ".$pos." valeurs positives dans le tableau";