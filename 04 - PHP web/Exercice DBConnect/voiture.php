<?php

include "Voiture.Class.php";

try{
    $db=new PDO('mysql:host=localhost;dbname=Voiture2;charset=utf8', 'root', '');
}
catch(Exception $e){
    if ($e->getCode()==1049)
    {
        echo "Base de données indisponible";
        die();  // permet d'arrêter l'execution
    }
    else if ($e->getCode()==1045)   // erreur identification
    {
        echo "La connexion a échouée";
        die();
    }
    else{
        die('Erreur : ' . $e->getMessage());
    }
}

/********************************************/
/*****          REQUETE SIMPLE          *****/
/********************************************/

// $requete=$db->query("SELECT idVoiture, marque, modele, immatriculation, couleur, kilometres FROM voiture");
// $reponse = $requete->fetch(PDO::FETCH_ASSOC);
// $voiture = new Voiture($reponse);


/********************************************/
/*****  REQUETE AVEC RESULTAT MULTIPLE  *****/
/********************************************/

$requete=$db->query("SELECT idVoiture, marque, modele, immatriculation, couleur, kilometres FROM voiture");
while($reponse= $requete->fetch(PDO::FETCH_ASSOC)){
    $voitures[]= new Voiture($reponse);
}

/********************************************/
/*****      REQUETE d'AJOUT SIMPLE      *****/
/********************************************/

// $requete=$db->exec('INSERT INTO voiture(marque, modele, immatriculation, couleur, kilometres) VALUES ("Audi","S5","5144adada","verte","5000")');


/********************************************/
/*****     REQUETE d'AJOUT PARAMETRE    *****/
/********************************************/

// $voiture= new Voiture(["marque"=>"Audi","modele"=>"S5","immatriculation"=>"aa545caac","couleur"=>"Jaune","kilometres"=>0]);

// $requete= $db->prepare('INSERT INTO voiture(marque, modele, immatriculation, couleur, kilometres) VALUES (:marque,:modele,:immatriculation,:couleur,:kilometres)');

// $requete->bindValue(':marque',$voiture->getMarque());
// $requete->bindValue(':modele',$voiture->getModele());
// $requete->bindValue(':immatriculation',$voiture->getImmatriculation());
// $requete->bindValue(':couleur',$voiture->getCouleur());
// $requete->bindValue(':kilometres',$voiture->getKilometres());

// $requete->execute();


/********************************************/
/*****     REQUETE d'AJOUT COMPOSEE     *****/
/********************************************/


$voiture= new Voiture(["marque"=>"Audi","modele"=>"S5","immatriculation"=>"aa545caac","couleur"=>"Jaune","kilometres"=>100]);


$requete = $db->prepare('INSERT INTO voiture(marque, modele, immatriculation, couleur, kilometres) VALUES ("'.$voiture->getMarque().'","'.$voiture->getModele().'","'.$voiture->getImmatriculation().'","'.$voiture->getCouleur().'",'.$voiture->getKilometres().')');


$requete->execute();
