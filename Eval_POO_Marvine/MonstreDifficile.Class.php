<?php

Class MonstreDifficile extends MonstreFacile {
	/***************************************** Attributs **********************************************/
	private static $_nbMonstreDifficile;


	/***************************************** Accesseurs **********************************************/
	public static function getNbMonstreDifficile()
	{
		return self::$_nbMonstreDifficile;
	}

	public static function setNbMonstreDifficile($nbMonstreDifficile)
	{
		self::$_nbMonstreDifficile = $nbMonstreDifficile;
	}
	

	/***************************************** Constructeur **********************************************/

	public function __construct(array $options = [])
	{
		parent::__construct($options);
		if (!empty($options)) // empty : renvoi vrai si le tableau est vide
		{
			$this->hydrate($options);
		}
		self::$_nbMonstreDifficile++;
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
		return ;
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
	 * retourne les dégats infligé au joueur. Si le coup est réussis alors le joueur perd des PDV
	 *
	 * @param Joueur $joueur Le joueur à attaquer
	 * @return boolean
	 */
	public function attaque(Joueur $joueur){
		//lancement des dé de la part du monstre et du joueur
		$jetMonstre=De::lanceLeDe();
		$jetJoueur=De::lanceLeDe();
		echo "\n".$this->getNom()." attaque : ".$jetMonstre." mon héro : ".$jetJoueur;
		$degatsTotaux=0;
		//On regarde si le monstre a réussis son attaque physique et on applique les dégats si elle réussi
		if($jetMonstre>$jetJoueur){
			$degatsSubit=$joueur->subitDegats(10);
			$degatsTotaux+=$degatsSubit ? 10 : 0; //si l'attaque réussis on augmente les dégats subits par le joueur
			echo "\n\tAttaque physique touché";
		}
		else{
			echo "\n\tAttaque physique loupé";
		}
		//lancement du dé pour l'attaque magique du monstre
		$jetMagique=De::lanceLeDe();
		echo "\n\tSort magique : ".$jetMagique;
		//On regarde si le monstre réussis son attaque magique et on applique les dégats si elle réussi
		if($jetMagique!=6){
			$degatsSubit=$joueur->subitDegats($jetMagique*5);
			$degatsTotaux+=$degatsSubit ? $jetMagique*5 : 0; //si l'attaque réussis on augmente les dégats subits par le joueur
			echo "\n\tAttaque magique touché";
		}
		else{
			echo "\n\tAttaque magique loupé";
		}
		return $degatsTotaux;
	}



}