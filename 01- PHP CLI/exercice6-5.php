<?php
$N[0]=1;
for($k=1;$k<6;$k++){
    $N[$k]=$N[$k-1]*2;
}
for($i=0;$i<6;$i++){
    echo $N[$i]." ";
}

echo "\n";
$N[0]=1;
echo $N[0]." ";
for($k=1;$k<6;$k++){
    $N[$k]=$N[$k-1]*2;
    echo $N[$k]." ";
}