<?php

final Class Tata {
	/***************************************** Attributs **********************************************/

	private $_geg ;
	private $_rz ;

	/***************************************** Accesseurs **********************************************/
	
	public function getGeg()
	{
		return $this->_geg;
	}

	public function setGeg($geg)
	{
		$this->_geg = $geg;
	}
	public function getRz()
	{
		return $this->_rz;
	}

	public function setRz($rz)
	{
		$this->_rz = $rz;
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
		return " geg : ".$this->getGeg()	." rz : ".$this->getRz()	;
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

	final public function test(){
		return;
	}
}