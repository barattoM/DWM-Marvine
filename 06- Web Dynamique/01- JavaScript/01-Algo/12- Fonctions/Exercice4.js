function tableMulti(nb){
    for(let i=1;i<=10;i++){
        document.write(i+" x "+nb+" = "+i*nb+"<br>");
    }
}
function moyenne(){
    var somme=0;
    var compteur=0;
    do{
        var n= parseInt(prompt("Donnez un nombre (0 pour arrêter)"));
        if(!(isNaN(n) || n==0)){
            compteur++;
            somme+=n;
        }    
    }while(n!=0);
    document.write("Somme : "+somme+" <br>Moyenne : "+somme/compteur);
}

function voyelles(){
    var mot=prompt("Donnez un mot");
    var voyelles=["o","i","e","a","u","y"];
    var compteur=0;
    for(let i=0;i<mot.length;i++){
        var lettre=mot.substr(i,1);
        if(voyelles.includes(lettre)){
            compteur+=1;
        }
    }
    document.write("Il y a "+compteur+" voyelles dans le mot "+mot);
}

function compteLettre(phrase,lettre){
    var compteur=0;
    for(let i=0;i<phrase.length;i++){
        var sub=phrase.substr(i,1);
        if(sub==lettre){
            compteur+=1;
        }
    }
    return compteur;
}


function choix(choix){
    switch(choix){
        case "1":
            tableMulti(parseInt(prompt("Donnez un nombre")));
            break;
        case "2":
            moyenne();
            break;
        case "3":
            voyelles();
            break;
        case "4":
            var phrase=prompt('Donnez une phrase');
            var lettre=prompt("Donnez une lettre");
            document.write("Il y a "+compteLettre(phrase,lettre)+" "+lettre+" dans le mot "+phrase);
    }
}

var option=prompt(" 1- Multiple \n 2- Somme et moyenne \n 3- Recherche de nombre de voyelles \n 4-Recherche du nombre des caractères suivants \n Entrez votre choix : ");

choix(option);