<?php

 Class TriangleRectangle {
	/***************************************** Attributs **********************************************/

	private $_base ;
	private $_hauteur ;

	/***************************************** Accesseurs **********************************************/
	
	public function getBase()
	{
		return $this->_base;
	}

	public function setBase($base)
	{
		$this->_base = $base;
	}
	public function getHauteur()
	{
		return $this->_hauteur;
	}

	public function setHauteur($hauteur)
	{
		$this->_hauteur = $hauteur;
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
		return $this->afficherTriangle()	;
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

	protected function hypotenuse(){
		return sqrt(pow($this->getHauteur(),2)+pow($this->getBase(),2));
	}

	public function perimetre(){
		return $this->getHauteur()+$this->getBase()+$this->hypotenuse();
	}

	public function aire(){
		return ($this->getHauteur()*$this->getBase())/2;
	}

	public function afficherTriangle(){
		return "Base : ".$this->getBase()." Hauteur : ".$this->getHauteur()
				."\nPérimètre ".$this->perimetre()." Aire :".$this->aire();
	}
}