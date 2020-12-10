function societe(){
    var result=document.getElementById("societe").value ;
    if(result.length<1){
        alert("Le champs société doit être renseigné");
    }
}

function contact(){
    var result=document.getElementById("contact").value ;
    if(result.length<1){
        alert("Le champs personne à contacter doit être renseigné");
    }
}

function postal(){
    var result=document.getElementById("postal").value ;
    console.log(result);
    if(isNaN(result)==true || result.length!=5){
        alert("Le champs code postal doit être renseigné");
    }
}

function ville(){
    var result=document.getElementById("ville").value ;
    if(result.length<1){
        alert("Le champs ville doit être renseigné");
    }
}

function mail(){
    var result=document.getElementById("mail").value ;
    // if(result.includes("@")==false){
    //     alert("Le champs E-mail doit être renseigné");
    // }
    if(!(/^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)$/.test(result))){
        alert("Le champs E-mail doit être renseigné");
    }
}

function selectionner(){
    var result=document.getElementById("environnement").value ;
    var texte=document.getElementById("saisieEnvironnement");
    texte.value=result;
}

function verif(){
    societe();
    contact();
    postal();
    ville();
    mail();
}