var prenoms = [];
do{
    var prenom= prompt("Donnez un prenom");
    if(!(prenom=="" || prenom==null)){
         prenoms.push(prenom);
    }   
console.log(prenoms);
}while(!(prenom==""));

document.write("Vous avez saisie : "+prenoms.length+" prenoms <br> Liste des prénoms saisie : <br>");
for(let i in prenoms){
    document.write(prenoms[i]+"<br>");
}


