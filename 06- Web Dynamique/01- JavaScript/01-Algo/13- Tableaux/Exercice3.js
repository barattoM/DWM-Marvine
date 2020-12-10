var prenoms=["toto","titi","tata","tutu","tete"];
var prenom=prompt("Donnez un nom");

var pos=prenoms.indexOf(prenom);
prenoms.splice(pos,1);
prenoms.push("");