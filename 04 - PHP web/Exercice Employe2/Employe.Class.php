<?php
class Employe
{
    /***************************** Attributs *****************************/
    private $_idEmploye;
    private $_nom;
    private $_prenom;
    private $_dateEmbauche;
    private $_poste;
    private $_salaire;
    private $_service;
    private static $_nbEmploye = 0;
    private $_agence;
    private $_enfants = [];

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

    public function getDateEmbauche()
    {
        return $this->_dateEmbauche;
    }

    public function setDateEmbauche(DateTime $dateEmbauche)
    {
        $this->_dateEmbauche = $dateEmbauche;
    }

    public function getPoste()
    {
        return $this->_poste;
    }

    public function setPoste($poste)
    {
        $this->_poste = $poste;
    }

    public function getSalaire()
    {
        return $this->_salaire;
    }

    public function setSalaire($salaire)
    {
        $this->_salaire = $salaire;
    }

    public function getService()
    {
        return $this->_service;
    }

    public function setService($service)
    {
        $this->_service = $service;
    }

    public static function getNbEmploye()
    {
        return self::$_nbEmploye;
    }

    public static function setNbEmploye($compteur)
    {
        self::$_nbEmploye = $compteur;
    }

    public function getAgence()
    {
        return $this->_agence;
    }

    public function setAgence(Agence $agence)
    {
        $this->_agence = $agence;
    }
    public function getEnfants()
    {
        return $this->_enfants;
    }

    public function setEnfants(array $enfants)
    {
        $this->_enfants = $enfants;
    }

     /**
     * Get the value of _idEmploye
     */ 
    public function getIdEmploye()
    {
        return $this->_idEmploye;
    }

    /**
     * Set the value of _idEmploye
     *
     * @return  self
     */ 
    public function setIdEmploye($_idEmploye)
    {
        $this->_idEmploye = $_idEmploye;

        return $this;
    }
    /*********************** Constructeur *********************************/

    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
        self::$_nbEmploye++;
    }
    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
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
    public function toString()
    {
        return "\nNom : " . $this->getNom() . "\tPrenom : " . $this->getPrenom() .
        "\nDate d'embauche : " . $this->getDateEmbauche()->format("d-m-Y") . "\tPoste : " . $this->getPoste() .
        "\nSalaire : " . $this->getSalaire() . "\tService : " . $this->getService() .
        "\n******************Enfants**********************" .
        "\nIl a " . count($this->getEnfants()) . " enfants : " .
        "\n" . $this->affichageEnfants() .
        "\n******************Agence***********************" .
        "\n" . $this->getAgence()->toString();
    }
    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] obj
     * @return bool
     */
    public function equalsTo()
    {
        return "";
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
    public function compareTo()
    {
        return "";
    }

    /**
     * Compare 2 objets sur le nom et le prénom
     * Renvoi 1 si le 1er est >
     *        0 si ils sont égaux
     *        -1 si le 1er est <
     *
     * @param [type] $obj1
     * @param [type] $obj2
     * @return void
     */
    public static function compareToNomPrenom($obj1, $obj2)
    {
        if ($obj1->getNom() < $obj2->getNom()) {
            return -1;
        } else if ($obj1->getNom() > $obj2->getNom()) {
            return 1;
        } else if ($obj1->getPrenom() < $obj2->getPrenom()) {
            return -1;
        } else if ($obj1->getPrenom() > $obj2->getPrenom()) {
            return 1;
        }

        return 0;
    }

    /**
     * Compare 2 objets sur le nom et le prénom
     * Renvoi 1 si le 1er est >
     *        0 si ils sont égaux
     *        -1 si le 1er est <
     *
     * @param [type] $obj1
     * @param [type] $obj2
     * @return void
     */
    public static function compareToServiceNomPrenom($obj1, $obj2)
    {
        if ($obj1->getService() < $obj2->getService()) {
            return -1;
        } else if ($obj1->getService() > $obj2->getService()) {
            return 1;
        } else {
            return self::compareToNomPrenom($obj1, $obj2);
        }

    }

    /**
     * Fonction qui renvoie l'année d'anciennete de l'employé
     *
     * @return Int année d'anciennete
     */
    public function anneeAnciennete()
    {
        $date = new DateTime('now'); // date actuelle
        $anneeAnciennete = $date->diff($this->getDateEmbauche(), true); //différence entre la date actuelle et la date d'embauche
        return $anneeAnciennete->format("%Y") * 1; //on récupère l'année et on fait *1 pour renvoyer un entier
    }
    /**
     * Calcule et renvoie la prime lié au salaire
     *
     * @return Float prime lié au salaire
     */
    private function primeSalaire()
    {
        return ($this->getSalaire() * 1000) * 0.05;
    }
    /**
     * Calcule et renvoie la prime lié à l'ancienneté
     *
     * @return Float prime lié à l'ancienneté
     */
    private function primeAnciennete()
    {
        return ($this->getSalaire() * 1000) * (0.02 * $this->anneeAnciennete());
    }
    /**
     * Calcule et renvoie la prime totale
     *
     * @return Float prime total
     */
    public function prime()
    {
        return $this->primeSalaire() + $this->primeAnciennete();
    }

    /**
     * Renvoi la masse salariale de l'employé
     *
     * @return void
     */
    public function masseSalariale()
    {
        return $this->getSalaire() * 1000 + $this->prime();
    }
    /**
     * Renvoie true si l'employé a accès aux cheques vacances, false sinon
     *
     * @return boolean
     */
    public function chequesVacances()
    {
        return $this->anneeAnciennete() >= 1 ? true : false;
    }

    /**
     * Renvoie les informations des enfants de l'employé
     *
     * @return String
     */
    private function affichageEnfants()
    {
        $info = "";
        foreach ($this->getEnfants() as $elt) {
            $info .= $elt->toString() . "\n";
        }
        return $info;
    }

    /**
     * Renvoie l'age des enfants de l'employé sous forme de tableau
     *
     * @return array
     */
    private function ageEnfants()
    {
        foreach ($this->getEnfants() as $elt) {
            $ageEnfants[] = $elt->age();
        }
        return $ageEnfants;
    }

    /**
     * Renvoie true si l'employé peut avoir des cheques de noel, false si il ne peut pas
     *
     * @return boolean
     */
    private function chequesNoel()
    {
        if (empty($this->getEnfants())) {
            return false;
        } else {
            $ageEnfants = $this->ageEnfants();
            $compteur = 0;
            foreach ($ageEnfants as $elt) {
                if ($elt > 18) {
                    $compteur++;
                }
            }
            if ($compteur == count($ageEnfants)) {
                return false;
            } else {
                return true;
            }
        }
    }

    /**
     * Retourne un tableau contenant le montant des chèques de Noel de l'employé
     *
     * @return array
     */
    public function tableauChequeNoel()
    {
        if ($this->chequesNoel()) {
            foreach ($this->ageEnfants() as $elt) {
                if ($elt >= 0 && $elt <= 10) {
                    $tableauChequeNoel[] = 20;
                } else {
                    if ($elt >= 11 && $elt <= 15) {
                        $tableauChequeNoel[] = 30;
                    } else {
                        if ($elt >= 16 && $elt <= 18) {
                            $tableauChequeNoel[] = 50;
                        }
                    }
                }
            }
            return $tableauChequeNoel;
        }
        return [];
    }

   
}
