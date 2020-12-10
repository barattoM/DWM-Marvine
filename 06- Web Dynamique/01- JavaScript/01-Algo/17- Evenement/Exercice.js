function saisie(){
    var result=document.getElementById("nom").value ;
    alert("Vous avez entré : "+result);
}

function verif(){
    var texte=document.getElementById("label1");
    console.log(texte);
    var result=document.getElementById("nombre").value;
    if(result==magic){
        texte.innerHTML="Vous avez gagné !";
    }else if(result<magic){
        texte.innerHTML="Plus grand !";
    }else{
        texte.innerHTML="Plus petit !";
    } 
    
}

var magic = parseInt(Math.random()*100);
