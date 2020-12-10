var jeune=0;
var moyen=0;
var vieux=0;
do{
    var age=parseInt(prompt("Donnez un age ?"));
    if(age<20){
        jeune+=1;
    }else if (age>40){
        vieux+=1;
    }else{
        moyen+=1;
    }
}while(age!=100);

document.write("Jeune : "+jeune+"<br>Moyen : "+moyen+"<br>Vieux : "+vieux);

