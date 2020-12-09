var somme=0;
var compteur=0;
do{
    var n= parseInt(prompt("Donnez un nombre (0 pour arrêter)"));
    if(!(isNaN(n) || n==0)){
        compteur++;
        somme+=n;
    }    
}while(n!=0);

document.write(somme/compteur);
