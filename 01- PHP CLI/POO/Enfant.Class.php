<?php
Class Enfant{
    /***************************** Attributs *****************************/
    private $_nom;
    private $_prenom;
    private $_dateNaissance;
    /********************************Accesseurs **************************/
    
    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function getDateNaissance()
    {
        return $this->_dateNaissance;
    }

    public function setDateNaissance(DateTime $dateNaissance)
    {
        $this->_dateNaissance = $dateNaissance;
    }

    /*********************** Constructeur *********************************/

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

    /********************************Methode *****************************/

    /**
    * Transforme l'objet en chaine de caractères
    *
    * @return String
    */
    public function toString(){
        return "Nom : ".$this->getNom()."\tPrenom : ".$this->getPrenom()."\tDate de naissance : ".$this->getDateNaissance()->format("d-m-Y")."\tAge : ".$this->age();
    }

    /**
    * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
    *
    * @param [type] obj
    * @return bool
    */
    public function equalsTo(){
        return  "";
    }

    /**
    * Compare 2 objets
    * Renvoi 1 si le 1er est >
    *        0 si ils sont égaux
    *        -1 si le 1er est <
    *
    * @param [type] obj1
    * @param [type] obj2
    * @return void
    */
    public function compareTo(){
        return "";
    }

    /**
     * Retourne l'age de l'enfant
     * 
     * @return Int
     */
    public function age(){
        $date=new DateTime('now'); // date actuelle
        $age=$date->diff($this->getDateNaissance(),true); //différence entre la date actuelle et la date d'embauche
        return $age->format("%Y")*1; //on récupère l'année et on fait *1 pour renvoyer un entier
    }

    
}