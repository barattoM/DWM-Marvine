<?php
include "fonction.php";
$tab=creaTableau(5);
$consec=true;
$i=0;
do{
    if($tab[$i]+1==$tab[$i+1]){
        $i+=1;
    }
    else{
        $consec=false;
    }
}while($consec && $i<count($tab)-1);

if($consec==true){
    echo "Le tableau est consécutif";
}
else{
    echo "Le tableau n'est pas consécutif";
}