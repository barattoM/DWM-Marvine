<?php
$age = readline("Donnez votre âge : ");
$permis = readline("Depuis combiens de temps avez vous le permis ? ");
$accident = readline("Combiens avez vous eu d'accidents ? ");
$fidelite = readline("Depuis combiens de temps êtes vous assuré chez nous ? ");
//vérification saisie
while (!ctype_digit($age) || !ctype_digit($permis) || !ctype_digit($accident) || !ctype_digit($fidelite)) {
    echo "Saisie incorrecte \n";
    $age = readline("Donnez votre âge : ");
    $permis = readline("Depuis combiens de temps avez vous le permis ? ");
    $accident = readline("Combiens avez vous eu d'accidents ? ");
    $fidelite = readline("Depuis combiens de temps êtes vous assuré chez nous ? ");
}

//Methode 1

// if($fidelite>1){
//     echo "Vous êtes au tarif bleu";
// }
// else {
//     if($age<25){
//         if($permis<2){
//             if($accident==0){
//                 echo "Vous êtes au tarif rouge";
//             }
//             else{
//                 echo "Vous n'êtes pas assuré";
//             }
//         }
//         else{
//            if($accident==0){
//                 echo "Vous êtes au tarif orange";
//            }
//            else if($accident==1){
//                 echo "Vous êtes au tarif rouge";
//            }
//            else{
//                 echo "Vous n'êtes pas assuré";
//            }
//         }
//     }
//     else{
//         if ($permis<2){
//             if($accident==0){
//                 echo "Vous êtes au tarif orange";
//            }
//            else if($accident==1){
//                 echo "Vous êtes au tarif rouge";
//            }
//            else{
//                 echo "Vous n'êtes pas assuré";
//            }
//         }
//         else{
//             if($accident==0){
//                 echo "Vous êtes au tarif vert";
//             }
//             else if($accident==1){
//                 echo "Vous êtes au tarif orange";
//             }
//             else if($accident==2){
//                 echo "Vous êtes au tarif rouge";
//             }
//             else{
//                 echo "Vous n'êtes pas assuré";
//             }
//         }
//     }
// }

//Methode 2

// if($fidelite>1){
//     echo "Vous êtes au tarif bleu";
// }
// else{
//     //tarif vert
//     if($age>=25 && $permis>=2 && $accident==0){
//         echo "Vous êtes au tarif vert";
//     }
//     //tarif orange
//     if(($age<25 && $permis>=2 && $accident==0) || ($age>=25 && $permis<2 && $accident==0) || ($age>=25 && $permis>=2 && $accident==1)){
//         echo "Vous êtes au tarif orange";
//     }
//     //tarif rouge
//     if(($age<25 && $permis<2 && $accident==0) || ($age<25 && $permis>2 && $accident==1) || ($age>=25 && $permis<2 && $accident==1) || ($age>=25 && $permis>=2 && $accident==2)){
//         echo "Vous êtes au tarif rouge";
//     }
//     //refusé
//     else{
//         echo "Vous êtes refusé";
//     }
// }

//Methode 3

// //tarif vert
// if ($age >= 25 && $permis >= 2 && $accident == 0) {
//     if ($fidelite > 1) {
//         echo "Vous êtes au tarif bleu";
//     } else {
//         echo "Vous êtes au tarif vert";
//     }

// } 
// else {
//     //tarif orange
//     if (($age < 25 && $permis >= 2 && $accident == 0) || ($age >= 25 && $permis < 2 && $accident == 0) || ($age >= 25 && $permis >= 2 && $accident == 1)) {
//         if ($fidelite > 1) {
//             echo "Vous êtes au tarif vert";
//         } else {
//             echo "Vous êtes au tarif orange";
//         }
//     } 
//     else {

//         //tarif rouge
//         if (($age < 25 && $permis < 2 && $accident == 0) || ($age < 25 && $permis > 2 && $accident == 1) || ($age >= 25 && $permis < 2 && $accident == 1) || ($age >= 25 && $permis >= 2 && $accident == 2)) {
//             if ($fidelite > 1) {
//                 echo "Vous êtes au tarif orange";
//             } else {
//                 echo "Vous êtes au tarif rouge";
//             }
//         }
//         //refusé
//         else {
//             echo "Vous êtes refusé";
//         }

//     }
// }

//Methode 4 bonus-malus
    //bonus initialisé à 3 parce que le tarif bleu ne peut être obtenu que si on a pas perdu de point (plus de 25 ans, permis depuis plus de 2 ans et 0 accidents) et qu'on est fidèle depuis plus de 1 an
    $bonus=3;
    
    
    //Perte de point par rapport à l'âge
    if ($age<25){
        $bonus=$bonus-1;
    }
    //Perte de point par rapport au permis
    if($permis<2){
        $bonus=$bonus-1;
    }
    //Perte de point à cause des accidents
    if($accident!=0){
        $bonus=$bonus-$accident;
    }
    
    //Attribution du bonus si il est assuré depuis plus de 1 an
    if($fidelite>1){
        $bonus++;
    }

    //bonus de 4 ou plus équivaut au tarif bleu
    //bonus de 3 équivaut au tarif vert
    //bonus de 2 équivaut au tarif orange
    //bonus de 1 équivaut au tarif rouge
    //bonus de 0 ou moins équivaut à être refusé

    switch($bonus){
        case $bonus>=4 :
            echo "Vous êtes au tarif bleu";
            break;
        case 3 :
            echo "Vous êtes au tarif vert";
            break;
        case 2 :
            echo "Vous êtes au tarif orange";
            break;
        case 1 :
            echo "Vous êtes au tarif rouge";
            break;
        default :
            echo "Vous êtes refusé";
            break;

    }

