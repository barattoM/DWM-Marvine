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

document.addEventListener("click",  (e) =>{
   
    /****************  Methode sans collision ******************************/
    console.log("clientY "+e.clientY+" clientX "+e.clientX);
    carre.style.top=e.clientY+"px";
    carre.style.left=e.clientX+"px";

    /****************  Methode avec collision ******************************/
    
    // //On récupère les infos du carré
    // var coteGaucheCarre=carre.offsetLeft; // x
    // var coteDroitCarre=carre.offsetLeft+carre.offsetWidth; // x+width
    // var coteBasCarre=carre.offsetTop+carre.offsetHeight; // y+height
    // var coteHautCarre=carre.offsetTop; // y

    // var collision=false; //on initialise la collision à false

    // //on parcourt les obstacles
    // for(let i in obstacles){
    //     //On récupère les infos de l'obstacle
    //     var coteGaucheObstacle=obstacles[i].offsetLeft;
    //     var coteDroitObstacle=obstacles[i].offsetLeft+obstacles[i].offsetWidth;
    //     var coteBasObstacle=obstacles[i].offsetTop+obstacles[i].offsetHeight;
    //     var coteHautObstacle=obstacles[i].offsetTop;
    //     if(coteGaucheCarre < coteDroitObstacle &&
    //         coteDroitCarre > coteGaucheObstacle &&
    //         coteHautCarre < coteBasObstacle &&
    //         coteBasCarre >  coteHautObstacle){ //collision
    //         collision=true;
    //     }
    // }
    // if(collision==false){
    //     carre.style.top=e.clientY+"px";
    //     carre.style.left=e.clientX+"px";
    // } 
});

//Obstacle

var obstacles=document.getElementsByClassName("obstacle");

// console.log(obstacle.offsetLeft);// coté gauche obstacle
// console.log(obstacle.offsetLeft+parseInt(window.getComputedStyle(obstacle).width)); //coté droit obstacle
// console.log(obstacle.offsetTop+parseInt(window.getComputedStyle(obstacle).height)); //coté bas obstacle
// console.log(obstacle.offsetTop); //coté haut obstacle



document.addEventListener("keydown",(e)=>{

    //On récupère les infos du carré

    var coteGaucheCarre=carre.offsetLeft; // x
    var coteDroitCarre=carre.offsetLeft+carre.offsetWidth; // x+width
    var coteBasCarre=carre.offsetTop+carre.offsetHeight; // y+height
    var coteHautCarre=carre.offsetTop; // y

    if(e.key=="ArrowUp"){
        var top=window.getComputedStyle(carre).top;
        var pos= parseInt(top.substring(0,top.indexOf("p")));
        var mouv= pos-pas;
        var collision=false; //on initialise la collision à false

        // rect1.x < rect2.x + rect2.width && 
        // rect1.x + rect1.width > rect2.x &&
        // rect1.y < rect2.y + rect2.height &&
        // rect1.height + rect1.y > rect2.y
        // // rect1=Carre  
        // // rect2=obstacle
        // coteGaucheCarre < coteDroitObstacle &&
        // coteDroitCarre > coteGaucheObstacle &&
        // coteHautCarre < coteBasObstacle &&
        // coteBasCarre >  coteHautCarre

        //on parcourt les obstacles
        for(let i in obstacles){
            //On récupère les infos de l'obstacle
            var coteGaucheObstacle=obstacles[i].offsetLeft;
            var coteDroitObstacle=obstacles[i].offsetLeft+obstacles[i].offsetWidth;
            var coteBasObstacle=obstacles[i].offsetTop+obstacles[i].offsetHeight;
            var coteHautObstacle=obstacles[i].offsetTop;
            //On vérifie qu'il n'y a pas de collision avec l'obstacle, si il y a une collision on collision deviens true
            if(coteGaucheCarre < coteDroitObstacle &&
                coteDroitCarre > coteGaucheObstacle &&
                coteHautCarre-pas < coteBasObstacle &&
                coteBasCarre >  coteHautObstacle){ //collision
                collision=true;
            }
        }
        //On effectue le mouvement si on n'a pas détecté de collision
        if(collision==false){
            carre.style.top=mouv+"px";
        }
            

    }else if(e.key=="ArrowDown"){
        var top=window.getComputedStyle(carre).top;
        var pos= parseInt(top.substring(0,top.indexOf("p")));
        var mouv= pos+pas;
        var collision=false;
        for(let i in obstacles){
            var coteGaucheObstacle=obstacles[i].offsetLeft;
            var coteDroitObstacle=obstacles[i].offsetLeft+obstacles[i].offsetWidth;
            var coteBasObstacle=obstacles[i].offsetTop+obstacles[i].offsetHeight;
            var coteHautObstacle=obstacles[i].offsetTop;
            if(coteGaucheCarre < coteDroitObstacle &&
                coteDroitCarre > coteGaucheObstacle &&
                coteHautCarre < coteBasObstacle &&
                coteBasCarre+pas >  coteHautObstacle){
                collision=true;
            }
        }
        if(collision==false){
            carre.style.top=mouv+"px";
        }
        


    }else if(e.key=="ArrowLeft"){
        var left=window.getComputedStyle(carre).left;
        var pos= parseInt(left.substring(0,left.indexOf("p")));
        var mouv= pos-pas;
        var collision=false;
        for(let i in obstacles){

            var coteGaucheObstacle=obstacles[i].offsetLeft;
            var coteDroitObstacle=obstacles[i].offsetLeft+obstacles[i].offsetWidth;
            var coteBasObstacle=obstacles[i].offsetTop+obstacles[i].offsetHeight;
            var coteHautObstacle=obstacles[i].offsetTop;

            if(coteGaucheCarre-pas < coteDroitObstacle &&
                coteDroitCarre > coteGaucheObstacle &&
                coteHautCarre < coteBasObstacle &&
                coteBasCarre >  coteHautObstacle){
                collision=true;
            }
        }
        if(collision==false){
            carre.style.left=mouv+"px";
        }
        
        

    }else if(e.key=="ArrowRight"){
        var left=window.getComputedStyle(carre).left;
        var pos= parseInt(left.substring(0,left.indexOf("p")));
        var mouv= pos+pas;
        var collision=false;
        for(let i in obstacles){

            var coteGaucheObstacle=obstacles[i].offsetLeft;
            var coteDroitObstacle=obstacles[i].offsetLeft+obstacles[i].offsetWidth;
            var coteBasObstacle=obstacles[i].offsetTop+obstacles[i].offsetHeight;
            var coteHautObstacle=obstacles[i].offsetTop;

            if(coteGaucheCarre < coteDroitObstacle &&
                coteDroitCarre+pas > coteGaucheObstacle &&
                coteHautCarre < coteBasObstacle &&
                coteBasCarre >  coteHautObstacle){
                    collision=true;
            }
        }
        if(collision==false){
            carre.style.left=mouv+"px";
        }
    }

});
