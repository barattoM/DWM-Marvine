<?php

echo " Racine de l'equation du 2nd degré\n\tY=aX² + bX +c\n\n";


//On recommence le calcul tant que l'utilisateur n'a pas demandé de s'arrêter
do{
    //Saisie utilisateur
    $a=readline("Quelle est la valeur de a : ");
    $b=readline("Quelle est la valeur de b : ");
    $c=readline("Quelle est la valeur de c : ");

    //Test de l'équation
    if($a==0 && $b==0){ //Cas où l'équation n'est pas correcte
        echo "\n L'équation n'en est plus une !!!";
    }else{
        if($a==0){ //On est obliger de retester $a car on est pas dans le même cas que la solution au dessus : Cas si l'équation est du 1er degré
        echo "\n L'équation est du 1er degré !\n\n L'équation s'annule pour x=-(c/b) : ".-($c/$b)."\n";
        }
        else{
            //Calcul du déterminant
            $delta=pow($b,2)-4*$a*$c;

            if($delta<0){
                //Cas où il n'y a pas de solution réelle à l'équation
                echo "\n L'équation ne possède pas de racine réelle : \n d = ".$delta."\n";
            }
            else {
                if ($delta==0){
                    //Cas où il n'y a qu'une seule solution rèelle à l'équation
                    $x1=-($b/(2*$a));
                    echo "\nL'équation possède une racine double :\n d= ".$delta."\nx1=x2= ".$x1."\n";
                }
                else{
                    //Cas où il y a 2 solution réelle à l'équation
                    $x1=(-$b+sqrt($delta))/(2*$a);
                    $x2=(-$b-sqrt($delta))/(2*$a);
                    echo "\nL'équation possède 2 racines distinctes :\n d= ".$delta."\nL'équation s'annule pour :\n x1= ".$x1."\n x2= ".$x2."\n";
                }
            }
        }
    } 
    
    echo"\n";
    //Demande de poursuite du programme de la part de l'utilisateur
    $choix=readline("Voulez vous continuer ? ");

    //Vérification de la saisie utilisateur
    while(strtoupper($choix)!="O" && strtoupper($choix)!="N" ){
        echo "\nErreur de saisie\n";
        $choix=readline("Voulez vous continuer ? ");
    }
}while(strtoupper($choix)=="O");

echo "Au revoir et à bientôt!";




    
