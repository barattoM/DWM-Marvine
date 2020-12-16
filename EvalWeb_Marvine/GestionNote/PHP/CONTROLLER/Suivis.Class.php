<?php

class Suivis 
{

	/*****************Attributs***************** */

	private $_idSuivi;
	private $_idMatiere;
	private $_matiere; //On récupère les infos de la matière dans le suivi
	private $_idEleve;
	private $_eleve; //On récupère les infos de l'élève dans le suivi
	private $_note;
	private $_coefficient;

	/***************** Accesseurs ***************** */


	public function getIdSuivi()
	{
		return $this->_idSuivi;
	}

	public function setIdSuivi($idSuivi)
	{
		$this->_idSuivi=$idSuivi;
	}

	public function getIdMatiere()
	{
		return $this->_idMatiere;
	}

	public function setIdMatiere($idMatiere)
	{
		$this->_idMatiere=$idMatiere;
		$this->setMatiere(MatieresManager::findById($idMatiere));
	}

	public function getIdEleve()
	{
		return $this->_idEleve;
	}

	public function setIdEleve($idEleve)
	{
		$this->_idEleve=$idEleve;
		$this->setEleve(ElevesManager::findById($idEleve));
	}

	public function getNote()
	{
		return $this->_note;
	}

	public function setNote($note)
	{
		$this->_note=$note;
	}

	public function getCoefficient()
	{
		return $this->_coefficient;
	}

	public function setCoefficient($coefficient)
	{
		$this->_coefficient=$coefficient;
	}

	public function getMatiere()
	{
		return $this->_matiere;
	}

	public function setMatiere($matiere)
	{
		$this->_matiere = $matiere;
	}

	public function getEleve()
	{
		return $this->_eleve;
	}

	public function setEleve($eleve)
	{
		$this->_eleve = $eleve;
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
 			$methode = "set".ucfirst($key); //ucfirst met la 1ere lettre en majuscule
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
		return "IdSuivi : ".$this->getIdSuivi()."IdMatiere : ".$this->getIdMatiere()."IdEleve : ".$this->getIdEleve()."Note : ".$this->getNote()."Coefficient : ".$this->getCoefficient()."\n";
	}


	
}