var nb=parseInt(prompt("Donnez un nombre ?"));
var div=true;
var compteur=2;
do{

    if(nb==0 || nb==1){
        div=false;
    }else if(nb%compteur==0){
        div=false;
    }
    console.log(compteur);
    compteur++;


}while(div==true && compteur<nb);
if(div==true){
    document.write("Il est premier");
}else{
    document.write("Il est pas premier");
}