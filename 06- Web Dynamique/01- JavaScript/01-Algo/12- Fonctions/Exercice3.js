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

var phrase=prompt('Donnez une phrase');
var lettre=prompt("Donnez une lettre");
document.write("Il y a "+compteLettre(phrase,lettre)+" "+lettre+" dans le mot "+phrase);