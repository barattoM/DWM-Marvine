<?php
//Initialisation des tableaux
$t1=["Avion","BOINGG747","AIRBUSA380","LEARJET45","DC10","CONCORDE","ANTONOV32"];
$t2=["CodeAVION","BO","AB","LJ","DC","CO","AN"];
$t3=["Vitesse Croisiere","800","950","700","900","1400","560"];
$t4=["Rayon d'action","10000","12000","4500","8000","16000","2500"];

do{
    //Saisie du code de l'avion par l'utilisateur
    $code=readline("Entrez le code de l'avion : ");
    while(!(in_array(strtoupper($code),$t2))){ //Regarde si le code de l'avion saisie par l'utilisateur existe dans la base de données
        echo "Cet avion n'existe pas\n\n";
        $code=readline("Entrez le code de l'avion : ");
    }
    //affichage information sur l'avion
    $position=array_search(strtoupper($code),$t2); //On cherche l'indice de l'avion dans le tableau, pour pouvoir par la suite recuperer les informations dans les autres tableaux 
    echo "Avion : ".$t1[$position]." Vitesse : ".$t3[$position]." Rayon d'action : ".$t4[$position]."\n";

    //Demande à l'utilisateur si il veut avoir les statistiques des avions
    $choixStat=readline("\nVoulez vous éditer les statistiques (O/N) ");
    if(strtoupper($choixStat)=="O"){
        //Recherche de l'avion le plus rapide
        $max=0;//initialisation de la vitesse max à 0 (pas de vitesses négative)
        for($i=1;$i<count($t3);$i++){           
            if($t3[$i]>$max){
                $max=$t3[$i];
                $pos=$i; //indice de la vitesse la plus grande pour recuperer le nom de l'avion
            }
        }
        echo "L'avion qui vole le plus vite est le ".$t1[$pos]." à ".$max." km/h";

        //Calcul de la moyenne
        $somme=0;
        for($i=1;$i<count($t4);$i++){//on commence à 1 parce que l'indice 0 du tableau sert de référencement et ne nous intéresse pas
            $somme+=$t4[$i];
        }
        //$moyenne=$somme/count($t4);
        echo "\nLa moyenne des rayons d'action est de : ".$somme/(count($t4)-1)."\n";
    }

    echo"\n";
    //Demande de poursuite du programme de la part de l'utilisateur
    $choix=readline("Voulez vous faire une autre recherche (O/N) ");
    echo"\n";
    //Vérification de la saisie utilisateur
    while(strtoupper($choix)!="O" && strtoupper($choix)!="N" ){
        echo "\nErreur de saisie\n";
        $choix=readline("Voulez vous faire une autre recherche (O/N) ");
    }
}while(strtoupper($choix)=="O");

echo "Au revoir et à bientôt!";