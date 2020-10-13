<?php

Class Joueur {
	/***************************************** Attributs **********************************************/

	private $_pointDeVie ;
	private $_point ;


	/***************************************** Accesseurs **********************************************/
	
	public function getPointDeVie()
	{
		return $this->_pointDeVie;
	}

	public function setPointDeVie($pointDeVie)
	{
		$this->_pointDeVie = $pointDeVie;
	}
	public function getPoint()
	{
		return $this->_point;
	}

	public function setPoint($point)
	{
		$this->_point = $point;
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
		return " pointDeVie : ".$this->getPointDeVie()	." point : ".$this->getPoint()	;
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
	 * retourne true si le joueur est toujours en vie, false sinon
	 *
	 * @return boolean
	 */
	public function estVivant(){
		return $this->getPointDeVie()>0 ? TRUE : FALSE;
	}

	/**
	 * retourne True si le joueur a attaquer le monstre, false sinon. Et tue le monstre en paramètre
	 *
	 * @param MonstreFacile $monstre Le monstre à attaquer
	 * @return boolean
	 */
	public function attaque(MonstreFacile $monstre){
		//lancement des dé de la part du monstre et du joueur
		$jetJoueur=De::lanceLeDe();
		$jetMonstre=De::lanceLeDe();
		echo "\nMon hero attaque : ".$jetJoueur." le ".$monstre->getNom()." : ".$jetMonstre;
		//Si le joueur réussis son coups alors on tue le monstre
		if($jetJoueur>=$jetMonstre){
			$monstre->setEstVivant(false);
			return true;
		}
		return false;
		
	}	

	/**
	 * Enleve les point de vie au joueur et retourne true si le joueur a subit des dégats, false sinon
	 *
	 * @param Int $degats Dégats donner par le monstre
	 * @return boolean
	 */
	public function subitDegats(Int $degats){
		//lancement du jet de dé pour la défense
		$jetBouclier=De::lanceLeDe();
		echo "\nBouclier : ".$jetBouclier;
		//Si le joueur n'a pas réussis à se défendre on lui retire les PDV
		if($jetBouclier>2){
			$this->setPointDeVie($this->getPointDeVie()-$degats);
			return true;
		}
		return false;
	}

	/**
	 * remplis le score du joueur
	 *
	 * @param Int $nbMonstreFacile	Nombre de monstre facile battu
	 * @param Int $nbMonstreDifficile	Nombre de monstre difficile battu
	 * @return void
	 */
	public function ajouterPoint(Int $nbMonstreFacile, Int $nbMonstreDifficile){
		$this->setPoint($nbMonstreFacile+$nbMonstreDifficile*2);
	}
}