<?php

 Class Pyramide extends TriangleRectangle{
	/***************************************** Attributs **********************************************/
	private $_haut;

	/***************************************** Accesseurs **********************************************/
	
	public function getHaut()
	{
		return $this->_haut;
	}

	public function setHaut($haut)
	{
		$this->_haut = $haut;
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
		return "Périmètre : ".$this->perimetre()." Volume : ".$this->volume();
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

	public function perimetre(){
		return parent::perimetre() //périmètre de la base de la pyramide
				+$this->getHaut()//tranche/hauteur de la pyramide
				+sqrt(pow($this->getHaut(),2)+pow($this->getBase(),2)) *2; //2 coté du triangle isocèle
	}

	public function volume(){
		return (1/3)*parent::aire()*$this->getHauteur();
	}


	
}