<?php

 Class TestInter extends Toto implements Inter {
	/***************************************** Attributs **********************************************/

	private $_ad ;
	private $_fa ;

	/***************************************** Accesseurs **********************************************/
	
	public function getAd()
	{
		return $this->_ad;
	}

	public function setAd($ad)
	{
		$this->_ad = $ad;
	}
	public function getFa()
	{
		return $this->_fa;
	}

	public function setFa($fa)
	{
		$this->_fa = $fa;
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
		return " ad : ".$this->getAd()	." fa : ".$this->getFa()	;
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

	public function test()
	{
		
	}

}