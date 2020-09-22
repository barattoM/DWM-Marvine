<?php

//vérification de saisie
    //Avec un while
        // $nombre=readline("Donnez un nombre : ");

        // while(!ctype_digit($nombre)){
        //     echo "Saisie incorrect \n";
        //     $nombre=readline("Donnez un nombre : ");
        // }
    //Avec un do while        
    do{
        $nombre=readline("Donnez un nombre : ");
    }while(!ctype_digit($nombre));

for($i=1;$i<=10;$i++){
    echo $nombre."\t X \t".$i."\t = \t".$nombre*$i."\n";
}