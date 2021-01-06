var nom=document.getElementById("nom");
var erreurNom=document.getElementById("erreurNom");
var postal=document.getElementById("postal");
var erreurPostal=document.getElementById("erreurPostal");
var DDN=document.getElementById("DDN");
var erreurDDN=document.getElementById("erreurDDN");
var mail=document.getElementById("mail");
var erreurMail=document.getElementById("erreurMail");
var mdp=document.getElementById("mdp");
var erreurMdp=document.getElementById("erreurMdp");
var verifMdp=document.getElementById("verifMdp");
var erreurMdp=document.getElementById("erreurVerifMdp");
var submit=document.getElementById("submit");
var oeil=document.getElementById("oeil");
var imgConseils=document.getElementsByClassName("imgConseil");
var iconeErreurs=document.getElementsByClassName("imgErreur");
var checkMdp=document.getElementsByClassName("checkMdp")[0];
var checks=document.getElementsByClassName("check");

// var flagNom=false;
// var flagPostal=false;
// var flagDDN=false;
// var flagMail=false;
// var flagMdp=false;

// Tableau pour activer/desactiver le bouton valider
var tabVerif={
    "nom":0,
    "postal":0,
    "DDN":0,
    "mail":0,
    "mdp":0,
    "verifMdp":0
}

// Tableau pour les vérif sur le mot de passe
var tabCheckValidityMdp=[
    new RegExp(/^[a-zA-Z\d!@#\$%\^&\*+]{8,}$/),
    new RegExp(/^(?=.*[A-Z])[a-zA-Z\d!@#\$%\^&\*+]+$/),
    new RegExp(/^(?=.*[a-z])[a-zA-Z\d!@#\$%\^&\*+]+$/),
    new RegExp(/^(?=.*[!@#\$%\^&\*+])[a-zA-Z\d!@#\$%\^&\*+]+$/),
    new RegExp(/^(?=.*[0-9])[a-zA-Z\d!@#\$%\^&\*+]+$/)
];

/*************************************** Nom ********************************************/ 

//Check la validité du nom
nom.addEventListener("blur",function(){
    //!/^[A-Za-z-' ]{3,}$/.test(nom.value)
    if(!nom.checkValidity()){
        erreurNom.textContent="Le nom doit être renseigné";
        iconeErreurs[0].setAttribute("src",'./uncheck.png');
        tabVerif["nom"]=0;
        // flagNom=false;
    }else{
        erreurNom.textContent="";
        tabVerif["nom"]=1;
        // flagNom=true;
        iconeErreurs[0].setAttribute("src",'./check.png');
        
    }
    verif();
    // for(let i=0;i<nom.value.length;i++){
    //     if(!isNaN(nom.value[i])){
    //         erreurNom.textContent="Le nom ne doit contenir que des lettres";
    //     }
    // }
});

//suppression des valeurs non désirés 
nom.addEventListener("keyup",function(e){
    if(!isNaN(e.key)){
        nom.value=nom.value.substr(0,nom.value.length-1);
    }
});

/*************************************** Code postal ********************************************/ 

//Check la validité du code postal
postal.addEventListener("blur",function(e){
    //!/^\d{5}$/.test(postal.value)
    if(!postal.checkValidity()){
        erreurPostal.textContent="Le code postal doit contenir 5 caractères numériques";
        iconeErreurs[1].setAttribute("src",'./uncheck.png');
        tabVerif["postal"]=0;
        // flagPostal=false;      
    }else{
        erreurPostal.textContent="";
        tabVerif["postal"]=1;
        //flagPostal=true;
        iconeErreurs[1].setAttribute("src",'./check.png');
    }
    verif();
});

//suppression des valeurs non désirés
postal.addEventListener("keyup",function(e){
    if(isNaN(e.key) && e.key!="Backspace" ){
        postal.value=postal.value.substr(0,postal.value.length-1);
    }
});

/*************************************** Date de naissance ********************************************/ 

//Check la validité de la date de naissance
DDN.addEventListener("blur",function(){
    //!/^[1-2][0-9][0-9][0-9]\-[0-1]?[0-9]\-[0-3]?[0-9]$/.test(DDN.value)
    if(!DDN.checkValidity()){
        erreurDDN.textContent="La date doit être renseigné";
        iconeErreurs[2].setAttribute("src",'./uncheck.png');
        tabVerif["DDN"]=0;
        // flagDDN=false;     
    }else{
        erreurDDN.textContent="";
        tabVerif["DDN"]=1;
        // flagDDN=true;
        iconeErreurs[2].setAttribute("src",'./check.png');
    }
    verif();
});

/*************************************** Mail ********************************************/ 

//Check la validité du mail
mail.addEventListener("blur",function(){
    //!/^[\w-]*\.?[\w-]+@[\w]+\.[a-z]{2,4}$/.test(mail.value)
    if(!mail.checkValidity()){
        erreurMail.textContent="L'adresse mail n'est pas valide";
        iconeErreurs[3].setAttribute("src",'./uncheck.png');
        tabVerif["mail"]=0;
        //flagMail=false;     
    }else{
        erreurMail.textContent="";
        tabVerif["mail"]=1;
        //flagMail=true;
        iconeErreurs[3].setAttribute("src",'./check.png');
    }
    verif();
});

/*************************************** Mot de passe ********************************************/ 

//Check la validité du mot de passe
mdp.addEventListener("input",function(e){
    checkValidityMdp();
    if(!mdp.checkValidity()){
        erreurMdp.textContent="Le mot de passe est invalide";
        iconeErreurs[4].setAttribute("src",'./uncheck.png');
        tabVerif["mdp"]=0;
        //flagMdp=false;      
    }else{
        erreurMdp.textContent="";
        tabVerif["mdp"]=1;
        // flagMdp=true;
        iconeErreurs[4].setAttribute("src",'./check.png');
    }
    verif();
});

//Gestion des l'affichage des validations du mot de passe
mdp.addEventListener("focus",function(e){ 
    checkMdp.style.display="unset";
});
mdp.addEventListener("focusout",function(e){ 
    checkMdp.style.display="none";
});

//Check la validité de la vérification du mot de passe
verifMdp.addEventListener("input",function(e){
    if(mdp.value!=verifMdp.value){
        erreurVerifMdp.textContent="Les mot de passe doivent correspondre";
        iconeErreurs[5].setAttribute("src",'./uncheck.png');
        tabVerif["verifMdp"]=0;
        //flagMdp=false;      
    }else{
        erreurMdp.textContent="";
        tabVerif["verifMdp"]=1;
        // flagMdp=true;
        iconeErreurs[5].setAttribute("src",'./check.png');
    }
    verif();
});

//Gestion de l'affichage du mot de passe
oeil.addEventListener("mouseover",function(e){
    mdp.setAttribute("type","text");
});
oeil.addEventListener("mouseout",function(e){
    mdp.setAttribute("type","password");
});

//Empeche le copié collé dans le champ de la verif mdp
verifMdp.addEventListener("paste", annule);

/*************************************** Conseils ********************************************/ 

//Gestion de l'affichage des conseils
for(let i=0;i<imgConseils.length;i++){
    imgConseils[i].addEventListener("mouseover",function(e){
        var parent=e.target.parentNode;
        conseil = parent.getElementsByClassName("conseil")[0];
        conseil.style.display="unset";    
    });
    imgConseils[i].addEventListener("mouseout",function(e){
        var parent=e.target.parentNode;
        conseil = parent.getElementsByClassName("conseil")[0];
        conseil.style.display="none";
    });
}


/*************************************** Fonctions ********************************************/ 

function annule(event) {
    //methode qui empeche le coller dans l'input confirm 
    event.preventDefault()
    return false;
}

function verif(){
    // if(flagPostal && flagDDN && flagNom && flagMail && flagMdp){
    //     submit.removeAttribute("disabled");
    // }
    // else{
    //     submit.setAttribute("disabled","");
    // }
    var valid=0;
    var taille=0;
    for(let i in tabVerif){
        taille++;
        if(tabVerif[i]==1){
            valid++;
        }
    }
    if(valid==taille){
        submit.removeAttribute("disabled");
    }else{
        submit.setAttribute("disabled","");
    }

}

function checkValidityMdp(){
    //8 caractères
    if(tabCheckValidityMdp[0].test(mdp.value)){
        checks[0].setAttribute("src",'./check.png');
    }else{
        checks[0].setAttribute("src",'./uncheck.png');
    }

    //Majuscule
    if(tabCheckValidityMdp[1].test(mdp.value)){
        checks[1].setAttribute("src",'./check.png');
    }else{
        checks[1].setAttribute("src",'./uncheck.png');
    }

    //Minuscule
    if(tabCheckValidityMdp[2].test(mdp.value)){
        checks[2].setAttribute("src",'./check.png');
    }else{
        checks[2].setAttribute("src",'./uncheck.png');
    }

    //1 caractère spécial
    if(tabCheckValidityMdp[3].test(mdp.value)){
        checks[3].setAttribute("src",'./check.png');
    }else{
        checks[3].setAttribute("src",'./uncheck.png');
    }

    //1 chiffre
    if(tabCheckValidityMdp[4].test(mdp.value)){
        checks[4].setAttribute("src",'./check.png');
    }else{
        checks[4].setAttribute("src",'./uncheck.png');
    }
}