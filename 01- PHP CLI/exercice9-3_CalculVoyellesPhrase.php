<?php
$phrase=readline("Ecrivez une phrase ");
while(!ctype_print($phrase)){
    echo "Saisie incorrect \n";
    $phrase=readline("Ecrivez une phrase ");
}
//Methode 1
    // $compteur=0;
    // //strtolower pour palier à la casse
    // $phrase=strtolower($phrase);
    // foreach(count_chars($phrase,1) as $i=>$val ){ 
        
    //         if(chr($i)=="o" || chr($i)=="i" || chr($i)=="e" || chr($i)=="a" || chr($i)=="u" || chr($i)=="y"){
    //             $compteur+=$val;
    //         }
    //     }

    // echo "Il y a ".$compteur." voyelles dans cette phrase \n";

//Methode 2
    
    // //strtolower pour palier à la casse
    // $phrase=strtolower($phrase);

    // $total=substr_count($phrase,"o",0,strlen($phrase));
    // $total+=substr_count($phrase,"i",0,strlen($phrase));
    // $total+=substr_count($phrase,"e",0,strlen($phrase));
    // $total+=substr_count($phrase,"a",0,strlen($phrase));
    // $total+=substr_count($phrase,"u",0,strlen($phrase));
    // $total+=substr_count($phrase,"y",0,strlen($phrase));

    // echo "Il y a ".$total." voyelles dans cette phrase\n";

//Methode 3

    // //strtolower pour palier à la casse
    // $phrase=strtolower($phrase);
    // $phrase=str_split($phrase);
    // $voyelles=0;
    // for($i=0;$i<count($phrase);$i++){
    //     if($phrase[$i]=="o" || $phrase[$i]=="i" ||$phrase[$i]=="e" ||$phrase[$i]=="a" ||$phrase[$i]=="u" ||$phrase[$i]=="y"){
    //         $voyelles+=1;
    //     }
    // }
    // echo "Il y a ".$voyelles." voyelles dans cette phrase \n";


//Methode 4
    $dictionnaire=["o","i","e","a","u","y"];
    $compteur=0;
    $phrase=strtolower($phrase);
    foreach(str_split($phrase,1) as $elt){
        if(in_array($elt,$dictionnaire)){
            $compteur+=1; 
        }
    }

    echo "Il y a ".$compteur." voyelles dans cette phrase \n";