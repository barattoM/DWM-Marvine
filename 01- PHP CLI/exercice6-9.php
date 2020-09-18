<?php
include "fonction.php";
$tab=creaTableau(5);
$somme=0;
for($i=0;$i<count($tab);$i++){
    $somme+=$tab[$i];
}
echo "La somme des valeurs du tableau est ".$somme."\n";

echo "La somme des valeurs du tableau est ".array_sum($tab);