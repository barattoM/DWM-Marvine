<?php

function autoload($classe){
    require $classe.".Class.php";
}
spl_autoload_register("autoload");

$auteur1=new Auteur(["nom"=>"dadaf","prenom"=>"datz","dateNaissance"=>new DateTime("10-10-1800"),"dateDeces"=>new DateTime("10-10-1845")]);
$auteur2=new Auteur(["nom"=>"caz","prenom"=>"bfd","dateNaissance"=>new DateTime("05-04-1946")]);

$doc1=new Document(["auteur"=>$auteur1,"titre"=>"Misérable","emprunte"=>TRUE]);
$doc2=new Document(["auteur"=>$auteur1,"titre"=>"Misérable","emprunte"=>False]);
$doc3=new Document(["auteur"=>$auteur2,"titre"=>"vvz","emprunte"=>False]);

$livre1=new Livre(["auteur"=>$auteur1,"titre"=>"Misérable","emprunte"=>TRUE,"nbPages"=>250]);
$video1=new Video(["auteur"=>$auteur2,"titre"=>"daz","emprunte"=>false,"sousTitres"=>True]);
$audio1=new EnregistrementAudio(["auteur"=>$auteur2,"titre"=>"vervz","emprunte"=>true,"duree"=>20]);

echo $livre1->toString();
echo "\n".$video1->toString();
echo "\n".$audio1->toString();

// if($doc1->equalsTo($doc3)){
//     echo "Les 2 document sont égaux\n";
//     echo $doc1->toString();
// }
// else{
//     echo "les document ne sont pas égaux";
//     echo "\nDocument 1 :\n";
//     echo $doc1->toString();
//     echo "\n\nDocument 2 :\n";
//     echo $doc3->toString();
// }

// var_dump($auteur1->equalsTo($auteur2));
// echo $doc1->toString();
// var_dump($doc1->equalsTo($doc2));