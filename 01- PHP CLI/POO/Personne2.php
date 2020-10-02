<?php
require "Voiture.php";
class Personne2{
    //Attributs
    private $_age;
    private $_nom;
    private $_prenom;
    private $_voiture;
    //Constructeur

    public function __construct(Int $age,String $nom,String $prenom,Voiture $voiture)
    {
        $this->setAge($age);
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setVoiture($voiture);
    }
    //Assesseurs

    //Getter
    public function getAge(){
        return $this->age;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    //Setter
    public function setAge(Int $age){
        $this->age= $age>0 ? $age : NULL;
    }
    public function setNom(String $nom){
        $this->nom=strtoupper($nom);
    }
    public function setPrenom(String $prenom){
        $this->prenom=ucfirst(strtolower($prenom));
    }

    //Methodes

    public function toString(){
        return "\nAge : ".$this->age."\nNom : ".$this->nom."\nPrenom : ".$this->prenom;
    }

    public function equalTo(Personne2 $p){
        var_dump($this->nom);
        var_dump($p->getNom());
        var_dump($this->nom==$p->getNom());
        if($this->nom==$p->getNom() && $this->prenom==$p->getPrenom() && $this->age==$p->getAge()){
            return TRUE;
        }
        return FALSE;
    }
    public function compareTo(Personne2 $p){
        if($this->nom==$p->getNom()){
            return 0;
        }else{
            if($this->nom<$p->getNom()){
            return 1;
        }   else{
                return -1;
            }
        }
    }
}
$p1=new Personne2(20,"Dupont","Toto");
echo $p1->toString();
$p2=new Personne2(10,"Arold","Tata");
$p2=new Personne2(20,"Dupont","Toto");
echo $p2->toString();
echo "\n".$p1->compareTo($p2);