<?php

class Voiture
{

    /*****************Attributs***************** */
    private $_marque;
    private $_modele;
    private $_immatriculation;
    private $_couleur;
    private $_kilometres;

    /*****************Accesseurs***************** */

    public function getMarque()
    {
        return $this->_marque;
    }

    public function setMarque($_marque)
    {
        $this->_marque = $_marque;
    }

    public function getModele()
    {
        return $this->_modele;
    }

    public function setModele($_modele)
    {
        $this->_modele = $_modele;
    }

    public function getImmatriculation()
    {
        return $this->_immatriculation;
    }

    public function setImmatriculation($_immatriculation)
    {
        $this->_immatriculation = $_immatriculation;
    }

    public function getCouleur()
    {
        return $this->_couleur;
    }

    public function setCouleur($_couleur)
    {
        $this->_couleur = $_couleur;
    }

    public function getKilometres()
    {
        return $this->_kilometres;
    }

    public function setKilometres($_kilometres)
    {
        $this->_kilometres = $_kilometres;
    }

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

    /*****************Autres Méthodes***************** */
    
    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString()
    {
        return "";
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] $obj
     * @return bool
     */
    public function equalsTo($obj)
    {
        return true;
    }
    /**
     * Compare 2 objets
     * Renvoi 1 si le 1er est >
     *        0 si ils sont égaux
     *        -1 si le 1er est <
     *
     * @param [type] $obj1
     * @param [type] $obj2
     * @return void
     */
    public static function compareTo($obj1, $obj2)
    {
        return 0;
    }

    public function repeindre($coul)
    {
        $this->setCouleur($coul);
    }

    public function rouler($km)
    {
        $this->setKilometres($this->getKilometres()+$km);
    }
}