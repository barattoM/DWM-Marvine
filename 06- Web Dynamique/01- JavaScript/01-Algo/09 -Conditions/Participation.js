var statut= prompt("Etes-vous célibataire ? (O/N)");
var enfants= parseInt(prompt("Combiens d'enfants ?"));
var salaire= parseInt(prompt("Saisir le salaire"));
var participation = 0;
if(statut.toUpperCase()=="O"){
    participation+=20;
}else{
    participation+=25;
}

if(enfants>0){
    participation+=10*enfants;
}

if(salaire<1200){
    participation+=10;
}

if(participation>50){
    participation=50;
}

document.write("La participation est de "+participation+"%");
