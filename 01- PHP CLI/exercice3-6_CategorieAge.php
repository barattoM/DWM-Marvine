<?php
    $age=readline("Age de l'enfant ? ");
    // if($age>=6 && $age<=7){
    //     echo "Poussin";
    // }
    // else if($age>=8 && $age<=9){
    //     echo "Pupille";
    // }
    // else if($age>=10 && $age<=11){
    //     echo "Minime";
    // }
    // else if($age>=12){
    //     echo "Cadet";
    // }
    // else{
    //     echo "Hors catégorie";
    // }

    switch ($age){
        case $age>=6 && $age<=7 :
            echo "Poussin";
            break;
        case $age>=8 && $age<=9 :
            echo "Pupille";
            break;
        case $age>=10 && $age<=11 :
            echo "Minime";
            break;
        case $age>=12 :
            echo "Cadet";
            break;
        default :
            echo "Hors catégorie";
    }