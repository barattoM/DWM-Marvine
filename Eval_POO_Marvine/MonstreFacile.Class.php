<?php

Class MonstreFacile {
	/***************************************** Attributs **********************************************/

	private $_nom;
	private $_estVivant=true ;
	private static $_nbMonstreFacile;


	/***************************************** Accesseurs **********************************************/
	
	public function getEstVivant()
	{
		return $this->_estVivant;
	}

	public function setEstVivant($estVivant)
	{
		$this->_estVivant = $estVivant;
	}
	
	public function getNom()
	{
		return $this->_nom;
	}

	public function setNom($nom)
	{
		$this->_nom = $nom;
	}

	public static function getNbMonstreFacile()
	{
		return self::$_nbMonstreFacile;
	}

	public static function setNbMonstreFacile($nbMonstreFacile)
	{
		self::$_nbMonstreFacile = $nbMonstreFacile;
	}

	/***************************************** Constructeur **********************************************/

	public function __construct(array $options = [])
	{
		if (!empty($options)) // empty : renvoi vrai si le tableau est vide
		{
			$this->hydrate($options);
		}
		self::$_nbMonstreFacile++;
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
		return " estVivant : ".$this->getEstVivant()	;
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

	/**
	 * Retourne les dégats infligé au joueur
	 *
	 * @param Joueur $joueur Le joueur à attaquer
	 * @return Int	Point de dégats infligé au joueur
	 */
	public function attaque(Joueur $joueur){
		//lancement des dé de la part du monstre et du joueur
		$jetMonstre=De::lanceLeDe();
		$jetJoueur=De::lanceLeDe();
		echo "\n".$this->getNom()." attaque : ".$jetMonstre." mon héro : ".$jetJoueur;
		//On vérifie si le monstre touche le joueur
		if($jetMonstre>$jetJoueur){
			$degatsSubit=$joueur->subitDegats(10);
			//Si le joueur subit des dégats on renvois les dégats
			if($degatsSubit){
				return 10;
			}
			return 0;
		}
		return 0;
	}


	

	
}