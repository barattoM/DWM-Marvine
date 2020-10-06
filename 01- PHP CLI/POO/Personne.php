<?php
require "Voiture.Class.php";
class Personne{
    //Attributs
    private $_age;
    private $_nom;
    private $_prenom;
    private $_voiture;
       /*****************Constructeur***************** */

       public function __construct(array $options = [])
       {
           if (!empty($options)) // empty : renvoi vrai si le tableau est vide
           {
               $this->hydrate($options);
           }
       }
       public function hydrate($data)
       {
           foreach ($data as $key => $value)
           {
               $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
               if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
               {
                   $this->$methode($value);
               }
           }
       }
    /*public function __construct(String $n,String $p,Voiture $v)
    {
        $this->setNom($n);
        $this->setPrenom($p);
        $this->setVoiture($v);
    }*/
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
    public function getVoiture(){
        return $this->_voiture;
    }
    //Setter
    public function setAge(Int $age){
        $this->_age= $age>0 ? $age : NULL;
    }
    public function setNom(String $nom){
        $this->_nom=strtoupper($nom);
    }
    public function setPrenom(String $prenom){
        $this->_prenom=ucfirst(strtolower($prenom));
    }
    public function setVoiture(Voiture $voiture){
        $this->_voiture=$voiture;
    }

    //Methodes

    public function toString(){
        return "\nAge : ".$this->_age."\nNom : ".$this->_nom."\nPrenom : ".$this->_prenom." Voiture : ".$this->_voiture;
    }

    public function equalTo(Personne $p){
        if($this->_nom==$p->getNom() && $this->_prenom==$p->getPrenom() && $this->_age==$p->getAge()){
            return TRUE;
        }
        return FALSE;
    }
    public function compareTo(Personne $p){
        if($this->_nom==$p->getNom()){
            return 0;
        }else{
            if($this->_nom<$p->getNom()){
            return 1;
        }   else{
                return -1;
            }
        }
    }
}
$v1=new Voiture(["marque"=>"Audi","modele"=>"A3"]);
//$p1=new Personne("Dupont","Toto",$v1);
$p1=new Personne(["nom"=>"Dupont","prenom"=>"Toto","age"=>20,$v1]);
var_dump($p1);
echo $p1->toString();
//$p2=new Personne(["nom"=>"Arold","prenom"=>"Tata","age"=>25]);
//$p2=new Personne2(20,"Dupont","Toto");
echo $p2->toString();
echo "\n".$p1->compareTo($p2);