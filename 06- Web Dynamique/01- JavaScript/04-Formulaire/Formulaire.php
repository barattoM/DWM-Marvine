<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Formulaire</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST" action="test.php">
    <fieldset>
        <legend>Vos coordonnées</legend>
        <div class="espaceHor"></div>
        <div class="champs">
            <label>Nom :</label>
            <div class="espace"></div>
            <input type="text" id="nom" required pattern="[A-Za-z-' ]{3,}"/>
            <div class="image">
                <img class="imgConseil" src="./intero.png" alt="">
                <div class="conseil">Votre nom sans caractères spéciaux</div>
                <img class="imgErreur" src="" alt="">
            </div>
            <div class="erreur" id="erreurNom"></div>
        </div>
        <div class="espaceHor"></div>
        <div class="champs">
            <label>Code postal :</label>
            <div class="espace"></div>
            <input type="input" id="postal" required title="5 chiffres attendue" pattern="\d{5}"/>
            <div class="image">
                <img class="imgConseil" src="./intero.png" alt="">
                <div class="conseil">Votre code postal, il contient 5 chiffres</div>
                <img class="imgErreur" src="" alt="">
            </div>
            <div class="erreur" id="erreurPostal"></div>
        </div>
        <div class="espaceHor"></div>
        <div class="champs">
            <label>Date de naissance :</label>
            <div class="espace"></div>
            <input type="date" id="DDN" required pattern="[1-2][0-9][0-9][0-9]\-[0-1]?[0-9]\-[0-3]?[0-9]"/>
            <div class="image">
                <img class="imgConseil" src="./intero.png" alt="">
                <div class="conseil">Votre date de naissance au format jj/mm/aaaa</div>
                <img class="imgErreur" src="" alt="">
            </div>
            <div class="erreur" id="erreurDDN"></div>
        </div>
        <div class="espaceHor"></div>
        <div class="champs">
            <label>E-mail :</label>
            <div class="espace"></div>
            <input type="texte" id="mail" required pattern="[\w]*\.?[\w-]+@[\w]+\.[a-z]{2,4}"/>
            <div class="image">
                <img class="imgConseil" src="./intero.png" alt="">
                <div class="conseil">Votre adresse mail</div>
                <img class="imgErreur" src="" alt="">
            </div>
            <div class="erreur" id="erreurMail"></div>
        </div>
        <div class="espaceHor"></div>
        <div class="champs">
            <label>Mot de passe :</label>
            <div class="espace"></div>
            <input type="password" id="mdp" required pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[\d])(?=.*[!@#\$%\^&\*+])[a-zA-Z\d!@#\$%\^&\*+]{8,}"/>
            <div class="image">
                <img class="imgConseil" src="./intero.png" alt="">
                <div class="conseil gros">Il doit contenir au moins 8 caractères dont une majuscule, une minuscule, un caratère spécial et un chiffre</div>
                <img class="imgErreur" src="" alt="">
            </div>
            <div class="erreur" id="erreurMdp"></div>
        </div>
        <div class="espaceHor"></div>
        <div class="champs">
            <div class="espaceG"></div>
            <input type="submit" id="submit" value="Valider le formulaire" disabled/>
            <div class="espaceG"></div>
        </div>
        <div class="espaceHor"></div>
    </fieldset>    
    </form>
    <script src="Formulaire.js"></script>
</body>
</html>