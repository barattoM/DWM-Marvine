<?php

function autoload($classe){
    require $classe.".Class.php";
}
spl_autoload_register("autoload");

//$monstreFacile=new MonstreFacile(["nom"=>"Poulet","estVivant"=>TRUE]);
//$monstreDifficile= new MonstreDifficile(["nom"=>"Minotaure","estVivant"=>TRUE]);

$joueur= new Joueur(["pointDeVie"=>50,"point"=>0]);
$ChoixMonstre=rand(0,10);
if($ChoixMonstre>=7){
    $monstre=new MonstreDifficile(["nom"=>"Minotaure","estVivant"=>TRUE]);
    echo "\nUn ".$monstre->getNom()." est apparue";
}
else {
    $monstre=new MonstreFacile(["nom"=>"Poulet","estVivant"=>TRUE]);
    echo "\nUn ".$monstre->getNom()." est apparue";
}

do{
    if($monstre->getEstVivant()==false){
         $ChoixMonstre=rand(0,10);
        if($ChoixMonstre>=7){
            $monstre=new MonstreDifficile(["nom"=>"Minotaure","estVivant"=>TRUE]);
            echo "\n***************************************** Monstre suivant";
            echo "\nUn ".$monstre->getNom()." est apparue";
            echo "\n";
        }
        else {
            $monstre=new MonstreFacile(["nom"=>"Poulet","estVivant"=>TRUE]);
            echo "\n***************************************** Monstre suivant";
            echo "\nUn ".$monstre->getNom()." est apparue";
            echo "\n";
        }
    }
       

    $attaqueJoueur=$joueur->attaque($monstre);
    if($attaqueJoueur){
        echo "\nLe héro touche et tue le ".$monstre->getNom();
        echo "\nLe héro a gagné la rencontre";
        echo "\n\n";
    }
    else{
        echo "\nLe héro rate le ".$monstre->getNom();
        echo "\n";
    }
    if($monstre->getEstVivant()){
        $attaqueMonstre=$monstre->attaque($joueur);
        if($attaqueMonstre!=0){
            echo "\nLe ".$monstre->getNom()." touche et enlève ".$attaqueMonstre." point de vie au héro";
            echo "\nIl reste ".$joueur->getPointDeVie()." point de vie au joueur";
            echo "\n";
        }
        else{
            echo "\nLe ".$monstre->getNom()." rate le héro et ne lui inflige pas de dégats";
            echo "\n";
        }
    }
    


}while($joueur->estVivant());

echo "\nVous avez été tué par un ".$monstre->getNom();
$monstreTotal=MonstreFacile::getNbMonstreFacile()-1;

echo "\nVous avez tué ".$monstreTotal." monstre :";
echo "\n\t".$monstreTotal-MonstreDifficile::getNbMonstreDifficile()." monstre facile";
echo "\n\t".MonstreDifficile::getNbMonstreDifficile()." monstre difficile";
$joueur->ajouterPoint($monstreTotal-MonstreDifficile::getNbMonstreDifficile(),MonstreDifficile::getNbMonstreDifficile());
echo "\nVotre score est de : ".$joueur->getPoint()." points\n";

