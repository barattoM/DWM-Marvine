<?php
include "fonction.php";
echo "Tableau1 \n";
$tab=creaTableau(5);
echo "Tableau2 \n";
$tab2=creaTableau(5);
for($i=0;$i<count($tab);$i++){
    $tab3[$i]=$tab[$i]+$tab2[$i];
}

echo "Tableau 1 : ".affichageTableau($tab)."\n";
echo "Tableau 2 : ".affichageTableau($tab2)."\n";
echo "Tableau 3 : ".affichageTableau($tab3)."\n";