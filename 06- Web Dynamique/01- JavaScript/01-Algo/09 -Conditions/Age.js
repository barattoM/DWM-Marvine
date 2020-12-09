var naissance = window.prompt("Donnez votre année de naissance");
var auj=new Date();
var age= auj.getFullYear()-parseInt(naissance);
if(age>18){
    document.write("Votre age : "+age+" , vous êtes majeur");
}else{
    document.write("Votre age : "+age+" , vous êtes mineur");
}


