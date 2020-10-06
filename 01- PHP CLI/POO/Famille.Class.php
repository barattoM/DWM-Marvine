<?php

Class Famille{
    private $_pere;
    private $_mere;
    private $_voiture;
    /***************************Assesseurs **********************************************/

    public function getPere()
    {
        return $this->_pere;
    }

    public function setPere($pere)
    {
        $this->_pere = $pere;
    }

    public function getMere()
    {
        return $this->_mere;
    }

    public function setMere($mere)
    {
        $this->_mere = $mere;
    }

    public function getVoiture()
    {
        return $this->_voiture;
    }

    public function setVoiture($voiture)
    {
        $this->_voiture = $voiture;
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
    /*********************************Methode **********************************/

    public function toString(){
        return "Le père s'appelle ".$this->getPere()->getNom()." ".$this->getPere()->getPrenom().
        "\nLa mère s'appelle ".$this->getMere()->getNom()." ".$this->getMere()->getPrenom().
        "\nIls ont une voiture de la marque ".$this->getVoiture()->getMarque()." ,de modèle ".$this->getVoiture()->getModele()." et de couleur ".$this->getVoiture()->getCouleur();
    } 

}
