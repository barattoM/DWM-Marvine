function GetInteger(){
    var nb=parseInt(prompt("Donnez un entier"));
    return nb;
}

function InitTab(){
    var taille=GetInteger();
    var tableau=[];
    for(let i=0;i<taille;i++){
        tableau[i]=saisieTab();
    }
    return tableau;
}

function saisieTab(){
    return prompt("Donnez la valeur du tableau");
}

function afficheTab(tab){
    for(let i=0;i<tab.length;i++){
        document.write(i+" => "+tab[i]+"<br>");
    }
}

function rechercheTab(tab){
    var pos=parseInt(prompt("Quelle valeur ?"));
    return tab[pos];
}

function infoTab(tab){
    var somme=0;
    var max=0;
    for(let i=0;i<tab.length;i++){
        somme+=tab[i];
        if(tab[i]>max){
            max=tab[i];
        }
    }
    document.write("max = "+max+"<br>Moyenne = "+somme/tab.length);
}

var tab=InitTab();
afficheTab(tab);
document.write(rechercheTab(tab));
infoTab(tab);
