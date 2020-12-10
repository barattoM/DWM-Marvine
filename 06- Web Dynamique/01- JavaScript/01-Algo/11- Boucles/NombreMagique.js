
do{
    var magic = parseInt(Math.random()*100);
    do{
        var nb=parseInt(prompt("Donnez un nombre ?"));
        if(nb<magic){
            alert("Plus grand");
        }else if(nb>magic){ 
            alert("Plus petit");
        }else{
            alert("Vous avez gagné");
        }
    }while(nb!=magic);
    var choix=confirm("Voulez vous rejouer ?")
}while(choix==true)