<?php
/*$t=[[0,1,2,2],[3,4,5,2],[6,7,8,2],[9,10,11,2],[12,13,14,2]];*/
$ligne=readline("Ligne : ");
$colonne=readline("Colonne : ");
for ($i=0;$i<$ligne;$i++){
    for($j=0;$j<$colonne;$j++){
        $t[$i][$j]=rand(0,10);
    }
}
/************************************************** Affichage tableau simple *********************************************/
/*
for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        echo $t[$i][$j]."\t";
    }
    echo "\n";
}

echo"\n";
*/
/**************************************************Fin affichage tableau simple *********************************************/

/************************************************** Affichage tableau graphique *********************************************/
/*
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
*/
/************************************************** Fin affichage tableau graphique *********************************************/

/************************************************** Affichage tableau graphique+numero ligne/colonne *********************************************/
/*
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
*/
/************************************************** Fin affichage tableau graphique+numero ligne/colonne *********************************************/

/************************************************** Affichage tableau graphique dynamique *********************************************/

echo "\n";
for($i=0;$i<count($t);$i++){   
    if ($i==0){ //haut du tableau
        //affichage du nombre de la colonne
        for($k=1;$k<=count($t[$i]);$k++){
            echo "\t    ".$k;    
        }          
        echo"\n\t ";
        //ligne supérieur du tableau
        for($k=1;$k<=count($t[$i]);$k++){
            if($k==count($t[$i])){
                echo "_______";
            }else{
                echo "________";
            }
        }
        echo"\n";
        //echo "\t _______________________\n";
    }else{ //Centre du tableau
        //ligne intermédiaire
        for($k=1;$k<=count($t[$i]);$k++){
            echo "_______|";
        }
        echo "\n";
    }
    //affichage du nombre de la ligne
    $chiffre=$i+1;
    echo "    ".$chiffre; 
    //affichage des élément du tableau   
    for($j=0;$j<count($t[$i]);$j++){
            echo "\t|   ".$t[$i][$j];      
    }
    echo "\t|\n\t|";
}
//bas du tableau
for($k=1;$k<=count($t[0]);$k++){
    echo "_______|";
}

/************************************************** Fin affichage tableau graphique dynamique *********************************************/