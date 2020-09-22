<?php
for($i=0;$i<13;$i++){
    for($j=0;$j<9;$j++){
        $t[$i][$j]=rand(0,100);
        echo $t[$i][$j]."\t";
    }
    echo "\n";
}

$max=$t[0][0];
for($i=0;$i<13;$i++){
    for($j=0;$j<9;$j++){
        if($t[$i][$j]>$max){
            $max=$t[$i][$j];
        }
    }
}

echo "La valeur la plus grande du tableau est ".$max;
