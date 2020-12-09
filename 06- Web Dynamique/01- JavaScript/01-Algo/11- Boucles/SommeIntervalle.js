var n1= parseInt(prompt("Donnez un nombre"));
var n2= parseInt(prompt("Donnez un nombre"));
var somme=0;
for(let i=n1; i<n2;i++){
    somme+=i;
    console.log(somme);
}
document.write(somme);