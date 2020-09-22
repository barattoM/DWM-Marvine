<?php
//initialisation du tableau
for($i=0;$i<13;$i++){
    for($j=0;$j<9;$j++){
        $t[$i][$j]=rand(0,1000);
        echo $t[$i][$j]."\t";
    }
    echo "\n";
}

//Recherche de la plus grand valeur du tableau
$max=$t[0][0];
//On parcours la 1ere dimension du tableau
for($i=0;$i<13;$i++){
    //On parcours la 2e dimension du tableau
    for($j=0;$j<9;$j++){
        if($t[$i][$j]>$max){
            $max=$t[$i][$j];
        }
    }
}

echo "La valeur la plus grande du tableau est ".$max;
