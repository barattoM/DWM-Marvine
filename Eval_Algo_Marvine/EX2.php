<?php
/****************************************** Fonction *******************************************************************/
function demandeEntier(){ // Demande un entier à l'utilisateur
    do
    {
        do
        {
            $nombre = readline("Entrer le nombre pour lequel vous voulez la table de multiplication : ");
        } while (!is_numeric($nombre)); // on verifie que la chaine de caracterer ne contient que des chiffres
    } while (!is_int($nombre * 1)); // on vérifie que le nombre est entier (pas réel)
    return $nombre; //renvoi le nombre saisi
}
/***************************************** Fin fonction *****************************************************************/

//affichage titre
echo " ****\tTable de multiplication ****\n\n";
//On recommence le calcul tant que l'utilisateur n'a pas demandé de s'arrêter
do{

    $nombre=demandeEntier();

    //affichage de la table
    for($i=1;$i<=10;$i++){
        echo $nombre."\t x ".$i."\t = ".($nombre*$i)."\n";
    }

    //Demande de poursuite du programme de la part de l'utilisateur
    $choix=readline("Voulez vous continuer ? ");

    //Vérification de la saisie utilisateur
    while(strtoupper($choix)!="O" && strtoupper($choix)!="N" ){
        echo "\nErreur de saisie\n";
        $choix=readline("Voulez vous continuer ? ");
    }
}while(strtoupper($choix)=="O");

