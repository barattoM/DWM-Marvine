<?php
$val=1;
for($i=0;$i<1;$i++){
    for($j=0;$j<2;$j++){
        $t[$i][$j]=$val;
        $val++;
        echo $t[$i][$j]." ";
    }
    echo "\n";
}