<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Formulaire</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="centrer"><h1>Calcul du Taux d'intérêt</h1></div>
    <fieldset>   
        <div class="espaceHor"></div>
        <div class="champs">
            <label>Capital Emprunté </label>
            <div class="espace"></div>
            <input type="text" id="capital" pattern="[0-9]+"/>
            <div>€</div>
            <div class="erreur" id="erreurCapital"></div>
        </div>
        <div class="espaceHor"></div>
        <div class="champs">
            <label>Taux Nominal Annuel </label>
            <div class="espace"></div>
            <input type="input" id="taux" pattern="[0-9]{1,2}"/>
            <div>%</div>
            <div class="erreur" id="erreurTaux"></div>
        </div>
        <div class="espaceHor"></div>
        <div class="champs">
            <label>Durée d'emprunt </label>
            <div class="espace"></div>
            <input type="text" id="duree" pattern="[0-9]+"/>
            <div>Ans</div>
            <div class="erreur" id="erreurDuree"></div>
        </div>
        <div class="espaceHor"></div>
        </fieldset>
        <div class="espaceHor"></div>
        <div class="espaceHor"></div>
        <fieldset>
            <div class="espaceHor"></div>
            <div class="champs">
                <label>Mensualité </label>
                <div class="espace"></div>
                <input type="text" id="mensualite" disabled/>
                <div>€</div>
                <div></div>
            </div>
            <div class="espaceHor"></div>
            <div class="champs">
                <label>Coût Total </label>
                <div class="espace"></div>
                <input type="text" id="cout" disabled/>
                <div>€</div>
                <div></div>
            </div>
            <div class="espaceHor"></div>
        </fieldset>
        <div class="espaceHor"></div>
        <div class="espaceHor"></div>
        <div>
            <div></div>
            <div>
                <div class="centrer"><button id="calcul">Calculer</button></div>
                <div class="centrer"><button id="reset">Nouveau Calcul</button></div>
            </div>
            <div></div>
        </div>
        
    <script src="script.js"></script>
</body>
</html>