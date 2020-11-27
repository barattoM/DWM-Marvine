<form action="index.php?codePage=actionsUtilisateurs&mode=ajoutUtilisateur" method="POST">
<div>
<label for="nom">Nom : </label>
<input name="nom"/>
</div>
<div>
<label for="prenom">Prenom : </label>
<input name="prenom"/>
</div>
<div>
<label for="motDePasse">Mot de passe : </label>
<input name="motDePasse"/>
</div>
<div>
<label for="adresseMail">Adresse mail : </label>
<input name="adresseMail"/>
</div>
<div>
<input name="role" value="Utilisateur" type= "hidden"/>
</div>
<div>
<label for="pseudo">Pseudo : </label>
<input name="pseudo"/>
</div>
<div><button type="submit" value="Inscription">Inscription</button>

<button><a href="index.php?codePage=default">Annuler</a></button>