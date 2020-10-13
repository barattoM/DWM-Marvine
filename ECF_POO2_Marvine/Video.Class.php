<?php

Class Video extends Document {
	/***************************************** Attributs **********************************************/

	private $_sousTitres ;


	/***************************************** Accesseurs **********************************************/
	
	public function getSousTitres()
	{
		return $this->_sousTitres;
	}

	public function setSousTitres($sousTitres)
	{
		$this->_sousTitres = $sousTitres;
	}
	

	/***************************************** Constructeur **********************************************/

	public function __construct(array $options = [])
	{
		parent::__construct($options);
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
		$reponse=$this->getSousTitres() ? "\nLa vidéo contient des sous-titres" : "\nLa vidéo ne contient pas des sous-titres";
		return 	parent::toString().$reponse;
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

}