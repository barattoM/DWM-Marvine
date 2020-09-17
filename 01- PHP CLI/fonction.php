<?php
/*******************************************************************     Demande un entier à l'utilisateur ********************************************/
function demandeEntier(){ // Demande un entier à l'utilisateur
    do
    {
        do
        {
            $nombre = readline("Entrer un entier : ");
        } while (!is_numeric($nombre)); // on verifie que la chaine de caracterer ne contient que des chiffres
    } while (!is_int($nombre * 1)); // on vérifie que le nombre est entier (pas réel)
    return $nombre; //renvoi le nombre saisi
}

/*******************************************************************     Création de tableau avec taille ********************************************/
function creaTableau($nb){
    for($i=0;$i<$nb;$i++){
        $note=demandeEntier();
        $notes[$i]=$note;
    }
    return $notes;
}
/*******************************************************************     Création de tableau sans taille ********************************************/
function creaTableau2(){
    do{
        $fin=true;
        $note=readline("Donnez un nombre  (0 pour finir) ");
        while(!ctype_digit($note)){
            echo "Saisie incorrect \n";
            $note=readline("Donnez un nombre (0 pour finir) ");
        }
        if($note==0){
            $fin=false;
        }
        else{
            $tableau[]=$note;
        }
    }while($fin);
    return $tableau;
}
/*******************************************************************     Affichage tableau avec foreach ********************************************/
function affichageTableau($tableau){
    foreach($tableau as $elt){
        echo $elt." ";
    }
}

/*******************************************************************     Affichage tableau avec un for ********************************************/
function affichageTableau2($tableau){
    for($i=0;$i<count($tableau);$i++){
        echo $tableau[$i]." ";
    }
}