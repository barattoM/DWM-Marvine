<?php

Class Personne{
    //Attributs
    private $_age;
    private $_nom;
    private $_prenom;

    //Constructeur
    public function __construct($age,$nom,$prenom)
    {
        $this->_age=$age;
        $this->_nom=$nom;
        $this->_prenom=$prenom;
    }

    //Assesseurs

    //Getter
    public function getAge(){
        return $this->_age;
    }
    public function getNom(){
        return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }

    //Setter
    public function setAge($age){
        $this->_age=$age;
    }
    public function setNom($nom){
        $this->_nom=$nom;
    }
    public function setPrenom($prenom){
        $this->_prenom=$prenom;
    }

    //Methode
    public function toString(){
        return "Age : ".$this->_age."\n"."Nom : ".$this->_prenom."\n"."Prenom : ".$this->_nom."\n";
    }
}
$p1=new Personne(20,"Dupont","Toto");
echo $p1->toString();