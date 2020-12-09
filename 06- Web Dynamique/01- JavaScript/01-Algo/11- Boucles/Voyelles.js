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