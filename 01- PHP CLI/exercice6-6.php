<?php
$Suite[0]=1;
$Suite[1]=1;
for($i=2;$i<7;$i++){
    $Suite[$i]=$Suite[$i-1]+$Suite[$i-2];
}
for($i=0;$i<7;$i++){
    echo $Suite[$i]." ";
}