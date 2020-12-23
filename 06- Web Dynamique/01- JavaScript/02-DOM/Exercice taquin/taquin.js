var boutons=document.getElementsByClassName("bouton");

for(let i=0;i<boutons.length;i++){
    boutons[i].addEventListener("click",e=>{
        taquin(e)
    });
}

//Remplissage des images en random

//var nb = [1, 2, 3, 4, 5, 6, 7, 8 ]; //si la case vide n'est pas random
var nb = [1, 2, 3, 4, 5, 6, 7, 8, 9];
nb = nb.map((p) => [p, Math.random()]);
nb = nb.sort((a, b) => a[1] - b[1]);
nb = nb.map((p) => p[0]);
for(let i=0;i<boutons.length;i++){
    boutons[i].style.backgroundImage='url("'+nb[i]+'.jpg")';
    // si la case vide est random
    if(nb[i]==9){
        var pos=i;
    }
}
//si la case vide est random
boutons[pos].setAttribute("class","vide")

var vide=document.getElementsByClassName("vide")[0];
var xVide=vide.getAttribute("x");
var yVide=vide.getAttribute("y");

//si la case vide n'est pas random
//on ajoute un event click sur la casse vide de départ
// vide.addEventListener("click",e=>{
//     taquin(e)
// });

function taquin(e){
    xClick=parseInt(e.target.getAttribute("x"));
    yClick=parseInt(e.target.getAttribute("y"));
    if((xClick-1==xVide || xClick+1==xVide) && (yClick==yVide)){ //les cases à gauche ou droite
        changer(xClick,yClick,e);
    }
    if((yClick-1==yVide || yClick+1==yVide) && (xClick==xVide) ){ //les cases en haut et en bas
        changer(xClick,yClick,e);
    }
}

function changer(xClick,yClick,e){
    vide.style.backgroundImage=window.getComputedStyle(e.target).backgroundImage;
    vide.setAttribute("class","bouton");
    e.target.style.backgroundImage='url("9.jpg")'
    e.target.setAttribute("class","vide");
    xVide=xClick;
    yVide=yClick;
    vide=document.getElementsByClassName("vide")[0]; //On change vide
    boutons=document.getElementsByClassName("bouton"); //On change les boutons
}