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
var submit=document.getElementById("submit");
var imgConseils=document.getElementsByClassName("imgConseil");
var iconeErreurs=document.getElementsByClassName("imgErreur");

var flagNom=false;
var flagPostal=false;
var flagDDN=false;
var flagMail=false;
var flagMdp=false;

nom.addEventListener("blur",function(){
    //!/^[A-Za-z-' ]{3,}$/.test(nom.value)
    if(!nom.checkValidity()){
        erreurNom.textContent="Le nom doit être renseigné";
        iconeErreurs[0].setAttribute("src",'./uncheck.png');
        flagNom=false;
    }else{
        erreurNom.textContent="";
        flagNom=true;
        iconeErreurs[0].setAttribute("src",'./check.png');
        
    }
    verif();
    // for(let i=0;i<nom.value.length;i++){
    //     if(!isNaN(nom.value[i])){
    //         erreurNom.textContent="Le nom ne doit contenir que des lettres";
    //     }
    // }
});

nom.addEventListener("keyup",function(e){
    if(!isNaN(e.key)){
        nom.value=nom.value.substr(0,nom.value.length-1);
    }
});

postal.addEventListener("blur",function(e){
    //!/^\d{5}$/.test(postal.value)
    if(!postal.checkValidity()){
        erreurPostal.textContent="Le code postal doit contenir 5 caractères numériques";
        iconeErreurs[1].setAttribute("src",'./uncheck.png');
        flagPostal=false;      
    }else{
        erreurPostal.textContent="";
        flagPostal=true;
        iconeErreurs[1].setAttribute("src",'./check.png');
    }
    verif();
});

postal.addEventListener("keyup",function(e){
    if(isNaN(e.key) && e.key!="Backspace" ){
        postal.value=postal.value.substr(0,postal.value.length-1);
    }
});

DDN.addEventListener("blur",function(){
    //!/^[1-2][0-9][0-9][0-9]\-[0-1]?[0-9]\-[0-3]?[0-9]$/.test(DDN.value)
    if(!DDN.checkValidity()){
        erreurDDN.textContent="La date doit être renseigné";
        iconeErreurs[2].setAttribute("src",'./uncheck.png');
        flagDDN=false;     
    }else{
        erreurDDN.textContent="";
        flagDDN=true;
        iconeErreurs[2].setAttribute("src",'./check.png');
    }
    verif();
});

mail.addEventListener("blur",function(){
    //!/^[\w-]*\.?[\w-]+@[\w]+\.[a-z]{2,4}$/.test(mail.value)
    if(!mail.checkValidity()){
        erreurMail.textContent="L'adresse mail n'est pas valide";
        iconeErreurs[3].setAttribute("src",'./uncheck.png');
        flagMail=false;     
    }else{
        erreurMail.textContent="";
        flagMail=true;
        iconeErreurs[3].setAttribute("src",'./check.png');
    }
    verif();
});

mdp.addEventListener("input",function(e){
    //!/^\d{5}$/.test(Mdp.value)
    if(!mdp.checkValidity()){
        erreurMdp.textContent="Le mode de passe est invalide";
        iconeErreurs[4].setAttribute("src",'./uncheck.png');
        flagMdp=false;      
    }else{
        erreurMdp.textContent="";
        flagMdp=true;
        iconeErreurs[4].setAttribute("src",'./check.png');
    }
    verif();
});

mdp.addEventListener("mouseover",function(e){
    e.target.setAttribute("type","text");
});

mdp.addEventListener("mouseout",function(e){
    e.target.setAttribute("type","password");
});

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


function verif(){
    if(flagPostal && flagDDN && flagNom && flagMail && flagMdp){
        submit.removeAttribute("disabled");
    }
    else{
        submit.setAttribute("disabled","");
    }
}