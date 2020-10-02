<?php
require "Personne.php";

Class Voiture{
    //Attributs
    private $_marque;
    private $_modele;
    private $_km;
    //Constructeur

    public function __construct(String $marque,String $modele,Int $km)
    {
        $this->setMarque($marque);
        $this->setModele($modele);
        $this->setKm($km);
    }
    //Assesseurs

    //Getter
    public function getMarque(){
        return $this->marque;
    }
    public function getModele(){
        return $this->modele;
    }
    public function getKm(){
        return $this->km;
    }
    //Setter
    public function setMarque(String $marque){
        $this->marque=strtoupper($marque);
    }
    public function setModele(String $modele){
        $this->modele=strtoupper($modele);
    }
    public function setKm(Int $km){
        $this->km=$km;
    }

    //Methodes

    public function toString(){
        return "\nMarque : ".$this->marque."\nModele : ".$this->modele."\nKm : ".$this->km;
    }

    public function equalTo(Voiture $v){
        
    }
    
    public function compareTo(Voiture $v){
        
    }
}