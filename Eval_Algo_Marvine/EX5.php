<?php
echo "**** Analyse des chaines de caractères ****\n";
//Demande d'une phrase à l'utilisateur
$phrase=readline("Taper une chaine de caractères : ");
$phrase=str_split($phrase,1);//Conversion de la chaines de caractères en tableau pour pouvoir analyser chaque caractères 1 à 1

//Initialisation
$chiffres=0;
$alpha=0;
$voyelles=0;
$speciaux=0;
$dictionnaire=["o","i","e","a","u","y"]; //Dictionnaire de voyelles

//On parcours toute la phrase caractères par caractères, et on incrémente les compteurs quand le caractères correspond au type
foreach($phrase as $elt){
    //calcul de chiffres
    if(ctype_digit($elt)){
        $chiffres++;
    }
    //calcul de caractères aphanumérique
    if(ctype_alpha($elt)){
        $alpha++;
    }
    //calcul de voyelles
    if(in_array(strtolower($elt),$dictionnaire)){ //on regarde si le caractère est dans le dictionnaire de voyelles
        $voyelles+=1; 
    }
    //calcul de consonnes
    $consonnes=$alpha-$voyelles; //les caractères aphanumériques sont soit des voyelles soit des consonnes, comme on connais le nombre de voyelles on en déduit les consonnes
    //calcul caractères spéciaux
    if(ctype_punct($elt)){ //tout les caractères spéciaux sauf les espaces
        $speciaux++;
    }
    if($elt==" "){ //on ajoute les espaces qui ne sont pas reconnus commme caractères spéciaux par la fonction ctype_punt
        $speciaux++;
    }
}
//calcul de caractères
$caracteres=count($phrase);


//Affichage
echo "La chaine comprend : ";
echo "\n\t".$caracteres." caractères";
echo "\n\t\t".$chiffres." chiffres";
echo "\n\t\t".$alpha." caractères alphanumérique";
echo "\n\t\t\t".$voyelles." voyelles";
echo "\n\t\t\t".$consonnes." consonnes";
echo "\n\t\t".$speciaux." caractères spéciaux";