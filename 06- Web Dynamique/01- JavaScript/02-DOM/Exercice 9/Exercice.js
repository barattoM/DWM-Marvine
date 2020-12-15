var carre=document.getElementById("carre");
var haut=document.getElementById("haut");
var bas=document.getElementById("bas");
var gauche=document.getElementById("gauche");
var droite=document.getElementById("droite");
var pas=5;

// Bouger avec des boutons

haut.addEventListener("mousedown",function(){
    //console.log(window.getComputedStyle(carre).top);
    var top=window.getComputedStyle(carre).top;
    var pos= parseInt(top.substring(0,top.indexOf("p")));
    //console.log(pos);
    var mouv= pos-pas;
    //console.log(mouv);
    carre.style.top=mouv+"px";
});

bas.addEventListener("mousedown",function(){
    var top=window.getComputedStyle(carre).top;
    var pos= parseInt(top.substring(0,top.indexOf("p")));
    var mouv= pos+pas;
    carre.style.top=mouv+"px";
});

gauche.addEventListener("mousedown",function(){
    var left=window.getComputedStyle(carre).left;
    var pos= parseInt(left.substring(0,left.indexOf("p")));
    var mouv= pos-pas;
    carre.style.left=mouv+"px";
});

droite.addEventListener("mousedown",function(){
    var left=window.getComputedStyle(carre).left;
    var pos= parseInt(left.substring(0,left.indexOf("p")));
    var mouv= pos+pas;
    carre.style.left=mouv+"px";
});

//Bouger avec les fleches

document.addEventListener("keydown",(e)=>{
    //console.log(e.key);
    if(e.key=="ArrowUp"){
        var top=window.getComputedStyle(carre).top;
        var pos= parseInt(top.substring(0,top.indexOf("p")));
        var mouv= pos-pas;
        carre.style.top=mouv+"px";
    }else if(e.key=="ArrowDown"){
        var top=window.getComputedStyle(carre).top;
        var pos= parseInt(top.substring(0,top.indexOf("p")));
        var mouv= pos+pas;
        carre.style.top=mouv+"px";
    }else if(e.key=="ArrowLeft"){
        var left=window.getComputedStyle(carre).left;
        var pos= parseInt(left.substring(0,left.indexOf("p")));
        var mouv= pos-pas;
        carre.style.left=mouv+"px";
    }else if(e.key=="ArrowRight"){
        var left=window.getComputedStyle(carre).left;
        var pos= parseInt(left.substring(0,left.indexOf("p")));
        var mouv= pos+pas;
        carre.style.left=mouv+"px";
    }

});

//Bouger avec la souris

