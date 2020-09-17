<?php
$phrase=readline("Ecrivez une phrase ");
while(!ctype_print($phrase)){
    echo "Saisie incorrect \n";
    $phrase=readline("Ecrivez une phrase ");
}

//Methode 1
    // $mots=1;
    // $phrase=str_split($phrase,1);

    // for($i=0;$i<count($phrase);$i++){
    //     if($phrase[$i]==" "){
    //         $mots++;
    //     }
    // }
    // echo "La phrase comporte ".$mots." mots";

//Methode 2
    // $mots=1;
    // foreach(str_split($phrase,1) as $value){
    //     if($value==" "){
    //         $mots++; 
    //     }   
        
    // }
    // echo "La phrase comporte ".$mots." mots";

//Methode 3
    
    // //echo var_dump(count_chars($phrase,1));
    // //count_char va créer tableau contenant le charactère en indice et le nombre d'occurrences de celui ci dans la phrase pour chaque charactère différent
    // //Exemple : count_chars(toto,1) va contenir : ["o"][2] et ["t"][2]; il y a 2 "o" dans toto et 2 "t" dans toto
    // $occ=0;
    // $ok=false;
    // foreach(count_chars($phrase,1) as $i=>$val ){ //ici $i va prendre la valeur du charactère et $val le nombre d'occurences
        
    //     if(chr($i)==" "){  //on converti $i en char pour pouvoir le comparer au charactère espace
    //         //echo  "La phrase comporte ".($val+1)." mots"; //pas de cas d'erreur : si il n'y a qu'un mot, pas d'affichage
    //         //ajout des 2 variables pour le cas où il n'y a pas d'espace (1 mot)
    //         $occ=$val;
    //         $ok=true;
             
    //     }
    // }

    // if($ok){
    //     echo "La phrase comporte ".($occ+1)." mots";
    // }
    // else{
    //     echo "La phrase comporte 1 mots";
    // }

//Methode 4

// $t=explode(" ",$phrase);
// echo count($t);

//Methode 5

echo str_word_count($phrase,0);
