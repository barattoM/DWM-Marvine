var nom=document.getElementById("nom");
var erreurNom=document.getElementById("erreurNom");
var postal=document.getElementById("postal");
var erreurPostal=document.getElementById("erreurPostal");
var DDN=document.getElementById("DDN");
var erreurDDN=document.getElementById("erreurDDN");
var submit=document.getElementById("submit");
var imgConseils=document.getElementsByClassName("imgConseil");
var iconeErreurs=document.getElementsByClassName("imgErreur");

var flagNom=false;
var flagPostal=false;
var flagDDN=false;

nom.addEventListener("blur",function(){
    if(nom.value.length<3){
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
    if(postal.value.length!=5){
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
    if(DDN.value.length==0){
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
    if(flagPostal && flagDDN && flagNom){
        submit.removeAttribute("disabled");
    }
    else{
        submit.setAttribute("disabled","");
    }
}