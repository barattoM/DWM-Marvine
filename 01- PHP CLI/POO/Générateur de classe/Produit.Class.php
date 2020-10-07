<?php

 Class Produit {
	/***************************************** Attributs **********************************************/

	private $_numero ;
	private $_designation ;
	private $_couleur ;
	private $_dateValidite ;
	private $_categorie ;
	private $_lieuxStockage=[] ;
	private static $_compteur=0 ;
	private $_prixHT ;

	/***************************************** Accesseurs **********************************************/
	
	public function getNumero()
	{
		return $this->_numero;
	}

	public function setNumero($numero)
	{
		$this->_numero = $numero;
	}
	public function getDesignation()
	{
		return $this->_designation;
	}

	public function setDesignation($designation)
	{
		$this->_designation = $designation;
	}
	public function getCouleur()
	{
		return $this->_couleur;
	}

	public function setCouleur($couleur)
	{
		$this->_couleur = $couleur;
	}
	public function getDateValidite()
	{
		return $this->_dateValidite;
	}

	public function setDateValidite(DateTime $dateValidite)
	{
		$this->_dateValidite = $dateValidite;
	}
	public function getCategorie()
	{
		return $this->_categorie;
	}

	public function setCategorie($categorie)
	{
		$this->_categorie = $categorie;
	}
	public function getLieuxStockage()
	{
		return $this->_lieuxStockage;
	}

	public function setLieuxStockage(Array $lieuxStockage)
	{
		$this->_lieuxStockage = $lieuxStockage;
	}
	public static function getCompteur()
	{
		return self::$_compteur;
	}

	public static function setCompteur($compteur)
	{
		self::$_compteur = $compteur;
	}
	public function getPrixHT()
	{
		return $this->_prixHT;
	}

	public function setPrixHT($prixHT)
	{
		$this->_prixHT = $prixHT;
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
		return "numero : ".$this->getNumero()	." designation : ".$this->getDesignation()
				."\ncouleur : ".$this->getCouleur()	." dateValidite : ".$this->getDateValidite()->format("d-m-Y")
				."\nprixHT : ".$this->getPrixHT()
				."\n***********Categorie*************"
				."\ncategorie : ".$this->getCategorie()->toString()
				."\n********Lieux de stockage *******"
				."\nlieuxStockage : \n".$this->affichageLieuStockage();
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

	private function affichageLieuStockage(){
		$tab=$this->getLieuxStockage();
		$string="";
		foreach($tab as $elt){
			$string.=$elt->toString()."\n";
		}
		return $string;
	}

	public function estPerime(){
		$date = new DateTime('now'); // date actuelle
		if ($date>$this->getDateValidite()){
			return true;
		}
		return false;
	}

	public function entreeEnStock(LieuDeStockage $lieu){
		$lieux=$this->getLieuxStockage();
		$lieux[]=$lieu;
		$this->setLieuxStockage($lieux);		
	}

	public function prixTTC(){
		return $this->getPrixHT()+ $this->getPrixHT()* ($this->getCategorie()->getTva() / 100);
	}
	
	public function triCategDesign(){
		return "";
	}

}