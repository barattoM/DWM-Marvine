<?php
$t=[[0,1,2],[3,4,5],[6,7,8],[9,10,11],[12,13,14]];
for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        echo $t[$i][$j]."\t";
    }
    echo "\n";
}

echo"\n";

for($i=0;$i<3;$i++){
    if ($i==0){
        echo " ___________\n";
    }else{
        echo "___|___|___|\n";
    }
    
    for($j=0;$j<3;$j++){
        
        echo "| ".$t[$i][$j]." ";
    }
    echo "|\n|";
}
echo "___|___|___|\n";

echo "\n";


for($i=0;$i<3;$i++){
    if ($i==0){
        echo "\t    1\t    2\t    3\n";
        echo "\t _______________________\n";
    }else{
        echo "_______|_______|_______|\n";
    }
    $chiffre=$i+1;
    echo "    ".$chiffre;    
    for($j=0;$j<3;$j++){
            echo "\t|   ".$t[$i][$j]." ";      
    }
    echo "\t|\n\t|";
}
echo "_______|_______|_______|\n";

echo "\n";
for($i=0;$i<5;$i++){
    if ($i==0){
        for($k=1;$k<=3;$k++){
            echo "\t    ".$k;
        }  
        echo"\n";
        for(){
            
        }
        echo "\t _______________________\n";
    }else{
        for($k=1;$k<=3;$k++){
            echo "_______|";
        }
        echo "\n";
    }
    $chiffre=$i+1;
    echo "    ".$chiffre;    
    for($j=0;$j<3;$j++){
            echo "\t|   ".$t[$i][$j]." ";      
    }
    echo "\t|\n\t|";
}
for($k=1;$k<=3;$k++){
    echo "_______|";
}

