var tab=[];
var somme=0;
do{
    var nb=parseInt(prompt("Donnez un nombre ?"));
    if(nb!=0){
        tab.push(nb);
    }   
    somme+=nb;
}while(nb!=0);

document.write("Nb valeurs : "+tab.length+"<br>Somme :"+somme+"<br>Moyenne : "+somme/tab.length);