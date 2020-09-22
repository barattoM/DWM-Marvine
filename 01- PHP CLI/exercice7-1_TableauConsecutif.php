<?php
include "fonction.php";
$tab=creaTableau(5);
$consec=true;
$i=0;
if($tab[0]<$tab[$i+1]){ //Sens croissant
    $sens=1;
}else{
    $sens=0; //Evite une erreur undefined variable si le tableau est décroissant
}

do{
    $ok=false;
    if($sens==1){ //Sens croissant
        if ($tab[$i]+1==$tab[$i+1]){ 
            $i+=1;
            $ok=true;
        }
    }else{ //Sens décroissant
        if ($tab[$i]-1==$tab[$i+1]){
            $i+=1;
            $ok=true;
        }
        
    }  
    if(!$ok){
            $consec=false;
        }


    // if($tab[$i]+1==$tab[$i+1] || $tab[$i]-1==$tab[$i+1] ){
    //     $i+=1;
    // }
    

    
}while($consec && $i<count($tab)-1);

if($consec==true){
    echo "Le tableau est consécutif";
}
else{
    echo "Le tableau n'est pas consécutif";
}