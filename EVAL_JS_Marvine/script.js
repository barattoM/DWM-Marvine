/************ Récupération des éléments ************/

// Récupération des inputs
var capital=document.getElementById("capital");
var taux=document.getElementById("taux");
var duree=document.getElementById("duree");
var mensualite=document.getElementById("mensualite");
var cout=document.getElementById("cout");

// Récupération des boutons
var calcul=document.getElementById("calcul");
var reset=document.getElementById("reset");

// Récupération des erreurs
var erreur=document.getElementsByClassName("erreur");


/************ Event Listener ************/

capital.addEventListener("input",checkValidity);
taux.addEventListener("input",checkValidity);
duree.addEventListener("input",checkValidity);

reset.addEventListener("click",resetInput); // Bouton qui reset l'appli
calcul.addEventListener("click",calculer); // Bouton qui calcul la mensualité et le taux

/************ Fonctions ************/

/**
 * Fonction qui vérifie la validité du champs remplis et affiche une erreur si ils n'est pas bon
 * Modifie également l'affichage de la mensualité si tout les champs sont correctement renseignés
 * 
 * @param {*} e 
 */
function checkValidity(e){
    if(!e.target.checkValidity()){
        e.target.parentNode.children[4].innerHTML="Format incorrect";
    }else{
        e.target.parentNode.children[4].innerHTML="";
        if(check()){
            calculer();
        }
    }
}

/**
 * Fonction qui retourne vrai si tout les champs sont valide et faux sinon
 */
function check(){
    if(capital.value!="" && taux.value!="" && duree.value!="" && erreur[0].innerHTML=="" && erreur[1].innerHTML=="" && erreur[2].innerHTML==""){
        return true;
    }
    return false;
}

/**
 * Fonction qui met à jour l'affichage de l'appli (reset de l'affichage)
 */
function resetInput(){
    capital.value="";
    taux.value="";
    duree.value="";
    mensualite.value="";
    cout.value="";
    for(let i=0;i<erreur.length;i++){ // On remet les erreur à zéro
        erreur[i].innerHTML="";
    }
}

/**
 * Fonction qui calcule et affiche la mensualité et le coût total
 */
function calculer(){
    var capitalValue=parseInt(capital.value);
    var tauxValue=parseInt(taux.value);
    var dureeValue=parseInt(duree.value);
    var nbMois= dureeValue*12; //calcul du nombre de mois
    var mens=(capitalValue * tauxValue/12)/(1- Math.pow(1+tauxValue/12,-nbMois)); //calcul de la mensualité
    //mise à jour de l'affichage
    mensualite.value=roundDecimal(mens,2); 
    cout.value=roundDecimal(capitalValue+mens*dureeValue,2);
}

/**
 * Fonction qui permet d'arrondir un nombre avec la précision indiqué en paramètre
 * @param {*} nombre    Nombre à arrondir
 * @param {*} precision Precision de l'arrondi
 */
function roundDecimal(nombre, precision){
    var tmp = Math.pow(10, precision);
    return Math.round( nombre*tmp )/tmp;
}