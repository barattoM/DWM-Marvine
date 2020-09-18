<?php
include "fonction.php";
echo "Tableau1 \n";
$tab=creaTableau(4);
echo "Tableau2 \n";
$tab2=creaTableau(2);
$somme=0;
for($i=0;$i<count($tab);$i++){
    for($j=0;$j<count($tab2);$j++){
        $somme+=$tab[$i]*$tab2[$j];
    }
}

echo "Le Schtroumpf des tableaux vaut : ".$somme;

