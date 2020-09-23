<?php
echo "\t CALCUL D'UN CERCLE\n\n";
//On continue de demander le rayon d'un cercle jusqu'à ce que l'utilisateur saisie N pour faire un autre calcul
do{
    $rayon=readline("Quel est le rayon du cercle : ");
    //affichage calcul
    echo "Sa circonférence est de \t: ".(2*pi()*$rayon);
    echo "\nSa surface est de \t\t: ".(pi()*pow($rayon,2))."\n\n";

    //Demande de poursuite du programme de la part de l'utilisateur
    $choix=readline("Voulez vous faire un autre calcul (O/N) : ");
    echo "\n";

    //Vérification de la saisie utilisateur
    while(strtoupper($choix)!="O" && strtoupper($choix)!="N" ){
        echo "\nErreur de saisie\n";
        $choix=readline("Voulez vous faire un autre calcul (O/N) : ");
    }

}while (strtoupper($choix)=="O");
echo "Au revoir et à bientôt!";
