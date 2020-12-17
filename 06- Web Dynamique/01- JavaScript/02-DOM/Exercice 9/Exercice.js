var carre=document.getElementById("carre");
var haut=document.getElementById("haut");
var bas=document.getElementById("bas");
var gauche=document.getElementById("gauche");
var droite=document.getElementById("droite");
var pas=5;

// Bouger avec des boutons

// haut.addEventListener("mousedown",function(){
//     //console.log(window.getComputedStyle(carre).top);
//     var top=window.getComputedStyle(carre).top;
//     var pos= parseInt(top.substring(0,top.indexOf("p")));
//     //console.log(pos);
//     var mouv= pos-pas;
//     //console.log(mouv);
//     carre.style.top=mouv+"px";
// });

// bas.addEventListener("mousedown",function(){
//     var top=window.getComputedStyle(carre).top;
//     var pos= parseInt(top.substring(0,top.indexOf("p")));
//     var mouv= pos+pas;
//     carre.style.top=mouv+"px";
// });

// gauche.addEventListener("mousedown",function(){
//     var left=window.getComputedStyle(carre).left;
//     var pos= parseInt(left.substring(0,left.indexOf("p")));
//     var mouv= pos-pas;
//     carre.style.left=mouv+"px";
// });

// droite.addEventListener("mousedown",function(){
//     var left=window.getComputedStyle(carre).left;
//     var pos= parseInt(left.substring(0,left.indexOf("p")));
//     var mouv= pos+pas;
//     carre.style.left=mouv+"px";
// });

// //Bouger avec les fleches

// document.addEventListener("keydown",(e)=>{
//     //console.log(e.key);
//     if(e.key=="ArrowUp"){
//         var top=window.getComputedStyle(carre).top;
//         var pos= parseInt(top.substring(0,top.indexOf("p")));
//         var mouv= pos-pas;
//         carre.style.top=mouv+"px";
//         console.log(carre.offsetLeft);
//         console.log(carre.offsetTop);
//     }else if(e.key=="ArrowDown"){
//         var top=window.getComputedStyle(carre).top;
//         var pos= parseInt(top.substring(0,top.indexOf("p")));
//         var mouv= pos+pas;
//         carre.style.top=mouv+"px";
//         console.log(carre.offsetLeft);
// console.log(carre.offsetTop);

//     }else if(e.key=="ArrowLeft"){
//         var left=window.getComputedStyle(carre).left;
//         var pos= parseInt(left.substring(0,left.indexOf("p")));
//         var mouv= pos-pas;
//         carre.style.left=mouv+"px";
//         console.log(carre.offsetLeft);
// console.log(carre.offsetTop);
//     }else if(e.key=="ArrowRight"){
//         var left=window.getComputedStyle(carre).left;
//         var pos= parseInt(left.substring(0,left.indexOf("p")));
//         var mouv= pos+pas;
//         carre.style.left=mouv+"px";
//         console.log(carre.offsetLeft);
// console.log(carre.offsetTop);

//     }

// });

//Bouger avec la souris

//Obstacle

var obstacle=document.getElementsByClassName("obstacle")[0];

console.log(obstacle.offsetLeft);// coté gauche obstacle
console.log(obstacle.offsetLeft+parseInt(window.getComputedStyle(obstacle).width)); //coté droit obstacle
console.log(obstacle.offsetTop+parseInt(window.getComputedStyle(obstacle).height)); //coté bas obstacle
console.log(obstacle.offsetTop); //coté haut obstacle

var coteGaucheObstacle=obstacle.offsetLeft;
var coteDroitObstacle=obstacle.offsetLeft+parseInt(window.getComputedStyle(obstacle).width);
var coteBasObstacle=obstacle.offsetTop+parseInt(window.getComputedStyle(obstacle).height);
var coteHautObstacle=obstacle.offsetTop;


document.addEventListener("keydown",(e)=>{
    //console.log(e.key);
    var coteGaucheCarre=carre.offsetLeft;
    var coteDroitCarre=carre.offsetLeft+parseInt(window.getComputedStyle(carre).width);
    var coteBasCarre=carre.offsetTop+parseInt(window.getComputedStyle(carre).height);
    var coteHautCarre=carre.offsetTop;
    if(e.key=="ArrowUp"){
        var top=window.getComputedStyle(carre).top;
        var pos= parseInt(top.substring(0,top.indexOf("p")));
        var mouv= pos-pas;
        console.log("coteBasObstacle "+coteBasObstacle+" mouv "+mouv);
        if(coteBasObstacle<mouv || coteGaucheCarre>coteDroitObstacle || coteDroitCarre<coteGaucheObstacle || coteBasCarre<coteHautObstacle){
            carre.style.top=mouv+"px";
        }

    }else if(e.key=="ArrowDown"){
        var top=window.getComputedStyle(carre).top;
        var pos= parseInt(top.substring(0,top.indexOf("p")));
        var mouv= pos+pas;

/********************************************************************************************* A continuer ******************************************** */        
        var mouvTest=mouv+parseInt(window.getComputedStyle(carre).height)
        console.log("coteHautObstacle "+coteHautObstacle+" mouv "+mouvTest);
        if(coteHautObstacle>mouvTest || coteGaucheCarre>coteDroitObstacle || coteDroitCarre<coteGaucheObstacle || coteBasCarre<coteHautObstacle){
            carre.style.top=mouv+"px";
        }


    }else if(e.key=="ArrowLeft"){
        var left=window.getComputedStyle(carre).left;
        var pos= parseInt(left.substring(0,left.indexOf("p")));
        var mouv= pos-pas;
        carre.style.left=mouv+"px";
        
console.log(carre.offsetTop);
    }else if(e.key=="ArrowRight"){
        var left=window.getComputedStyle(carre).left;
        var pos= parseInt(left.substring(0,left.indexOf("p")));
        var mouv= pos+pas;
        carre.style.left=mouv+"px";


    }

});
