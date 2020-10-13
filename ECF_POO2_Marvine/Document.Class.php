<?php

Class Document {
	/***************************************** Attributs **********************************************/

	private $_auteur ;
	private $_titre ;
	private $_emprunte=FALSE;


	/***************************************** Accesseurs **********************************************/
	
	public function getAuteur()
	{
		return $this->_auteur;
	}

	public function setAuteur(Auteur $auteur)
	{
		$this->_auteur = $auteur;
	}
	public function getTitre()
	{
		return $this->_titre;
	}

	public function setTitre(String $titre)
	{
		$this->_titre = $titre;
	}
	
	public function getEmprunte()
	{
		return $this->_emprunte;
	}

	public function setEmprunte(Bool $emprunte)
	{
		$this->_emprunte = $emprunte;
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
		$reponse=$this->estEmprunte() ? "\nLe document est emprunté" : "\nLe document n'est pas emprunté";
		$reponse.=	"\n************auteur ***********"
					."\n".$this->getAuteur()->toString()	
					."\n\ntitre : ".$this->getTitre();
		return $reponse	;
	}

	/**
	* Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
	*
	* @param [type] obj
	* @return bool
	*/
	public function equalsTo(Document $doc){
		return  $this->getAuteur()->equalsTo($doc->getAuteur()) && $this->getTitre()==$doc->getTitre();
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
	 * retourne true si le document est emprunté, false sinon
	 *
	 * @return Boolean
	 */
	public function estEmprunte(){
		return $this->getEmprunte();
	}

}