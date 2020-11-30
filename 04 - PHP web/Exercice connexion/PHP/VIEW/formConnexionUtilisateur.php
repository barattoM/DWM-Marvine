<form action="index.php?codePage=actionsUtilisateurs&mode=selectUtilisateur" method="POST">

<div>
<label for="pseudo">Pseudo : </label>
<input name="pseudo"/>
</div>

<div>
<label for="motDePasse">Mot de passe : </label>
<input type="password" name="motDePasse" required/>
</div>

<div><button type="submit" value="Connexion">Connexion</button></div>

<button><a href="index.php?codePage=default">Annuler</a></button>