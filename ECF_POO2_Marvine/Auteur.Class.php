<?php

Class Auteur {
	/***************************************** Attributs **********************************************/

	private $_nom ;
	private $_prenom ;
	private $_dateNaissance ;
	private $_dateDeces = NULL ;


	/***************************************** Accesseurs **********************************************/
	
	public function getNom()
	{
		return $this->_nom;
	}

	public function setNom(String $nom)
	{
		$this->_nom = $nom;
	}
	public function getPrenom()
	{
		return $this->_prenom;
	}

	public function setPrenom(String $prenom)
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
	public function getDateDeces()
	{
		return $this->_dateDeces;
	}

	public function setDateDeces(DateTime $dateDeces)
	{
		$this->_dateDeces = $dateDeces;
	}
	

	/***************************************** Constructeur **********************************************/

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

	/***************************************** Methode **********************************************/

	/**
	* Transforme l'objet en chaine de caractères
	*
	* @return String
	*/
	public function toString(){
		$reponse="nom : ".$this->getNom()	." prenom : ".$this->getPrenom()	.
					"\ndateNaissance : ".$this->getDateNaissance()->format("d-m-Y");
		$reponse.= $this->estVivant() ? "\nL'auteur est toujours en vie" : "\ndateDeces : ".$this->getDateDeces()->format("d-m-Y");
		return 	$reponse	;
	}

	/**
	* Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
	*
	* @param [type] obj
	* @return bool
	*/
	public function equalsTo(Auteur $auteur){
		return $this->getNom()==$auteur->getNom() && $this->getPrenom()==$auteur->getPrenom() && $this->getDateNaissance()==$auteur->getDateNaissance() && $this->getDateDeces()==$auteur->getDateDeces() ;
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
	 * retourne true si l’auteur est vivant, false sinon 
	 *
	 * @return Boolean
	 */
	public function estVivant(){
		return $this->getDateDeces()==NULL;
	}


}