var quantite1 = document.getElementById("quantite1");
var quantite2 = document.getElementById("quantite2");
var prixUnitaire1 = document.getElementById("prixUnitaire1");
var prixUnitaire2 = document.getElementById("prixUnitaire2");
var prix1 = document.getElementById("prix1");
var prix2 = document.getElementById("prix2");
var total = document.getElementById("total");

// Première ligne
prixUnitaire1.addEventListener("change", function (){
    prix1.value= parseInt(prixUnitaire1.value) * parseInt(quantite1.value);
    total.value= parseInt(prix1.value) + parseInt(prix2.value);
});

quantite1.addEventListener("change", function (){
    prix1.value= parseInt(prixUnitaire1.value) * parseInt(quantite1.value);
    total.value= parseInt(prix1.value) + parseInt(prix2.value);
});

//Deuxieme ligne
prixUnitaire2.addEventListener("change", function (){
    prix2.value= parseInt(prixUnitaire2.value) * parseInt(quantite2.value);
    total.value= parseInt(prix1.value) + parseInt(prix2.value);
});

quantite2.addEventListener("change", function (){
    prix2.value= parseInt(prixUnitaire2.value) * parseInt(quantite2.value);
    total.value= parseInt(prix1.value) + parseInt(prix2.value);
});

