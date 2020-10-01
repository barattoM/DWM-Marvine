<?php
function inverserMot($mot){
    $longueur=strlen($mot);
    if($longueur==1){
        return $mot;
    }
    else{
        return substr($mot,$longueur-1).inverserMot(substr($mot,0,$longueur-1));
    }
}

echo inverserMot("Bonjour");