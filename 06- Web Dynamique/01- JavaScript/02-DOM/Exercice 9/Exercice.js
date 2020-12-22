var carre = document.getElementById("carre");
var haut = document.getElementById("haut");
var bas = document.getElementById("bas");
var gauche = document.getElementById("gauche");
var droite = document.getElementById("droite");
var fin = document.getElementById("fin");
var troll = document.getElementById("troll");
var troll2 = document.getElementById("troll2");
var compteur= document.getElementById("touche");

var pas = 5;

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

/*************************************************  Obstacle avec la souris *******************************************************************/

var ecartY, ecartX;

//triche

// document.addEventListener("click", (e) => {
//     console.log("clientY " + e.clientY + " clientX " + e.clientX);
//     carre.style.top = e.clientY + "px";
//     carre.style.left = e.clientX +"px";
// });

var compteurCollision=0;

function deplaceSouris(e)
{
    //Gestion du Timer
    if(flagTime==false){
        Timer();
        flagTime=true;
    }

    if (!collisionObstacles(parseInt(e.clientY) + ecartY, parseInt(e.clientX) + ecartX)) {
        carre.style.top = parseInt(e.clientY) + ecartY + "px";
        carre.style.left = parseInt(e.clientX) + ecartX + "px";
    }
    //condition de victoire
    if (collisionFin(fin,parseInt(e.clientY) + ecartY, parseInt(e.clientX) + ecartX)){
        clearTimeout(t);
        alert("Vous avez gagné !");
        /*************************** Changement de niveau ************************************/
        //on enlève les anciens obstacles
        for(let i=obstacles.length-1; i>=0 ; i--){ //on part de la fin d'obstacles car obstacles est redéfinie à chaque itération de la boucle (elle perd un élément à chaque fois)
            if(obstacles[i].getAttribute("id")=="bordHaut" || obstacles[i].getAttribute("id")=="bordGauche" || obstacles[i].getAttribute("id")=="bordDroit" || obstacles[i].getAttribute("id")=="bordBas" ){
                
            }else{
                obstacles[i].className = "obstacleFini";
            }
            
        }
        //on insère les nouveaux obstacles
        for(let i=obstacles2.length-1; i>=0 ; i--){
            obstacles2[i].className = "obstacle";
        }
        carre.style.top="5.5vh";
        carre.style.left="3vw";
        fin.style.top="4.7vh";
    }
};


var carre = document.getElementById('carre');
var flagMouv = false;

carre.addEventListener("mousedown", (e)=>
{
    ecartY = parseInt(window.getComputedStyle(carre).top) - parseInt(e.clientY);
    ecartX = parseInt(window.getComputedStyle(carre).left) - parseInt(e.clientX);
    flagMouv = true;
});

document.addEventListener("mousemove", (e) =>
{
    if(flagMouv == true)
    {
        deplaceSouris(e);
    }
});

carre.addEventListener("mouseup", (e) =>
{
    flagMouv = false;
});

//Gestion des collisions
/**
 * Méthode qui renvoi vrai s'il y a une collision avec l'obstacle
 * @param {*} obstacle //obstacle fixe
 * @param {*} posX //position en x souhaité
 * @param {*} posY //position en y souhaité
 */
function collisionUnObstacle(obstacle, posX, posY) {
    var styleObjet = window.getComputedStyle(carre);
    var w = parseInt(styleObjet.width);
    var h = parseInt(styleObjet.height);
    var styleObstacle = window.getComputedStyle(obstacle);
    var tob = parseInt(styleObstacle.top);
    var lob = parseInt(styleObstacle.left);
    var wob = parseInt(styleObstacle.width);
    var hob = parseInt(styleObstacle.height);
    if (posY < lob + wob && posY + w > lob && posX < tob + hob && posX + h > tob) {
        console.log("collision n°" + compteurCollision + "  " + obstacle.id);
        compteurCollision++;
        compteur.innerHTML="Nombre de collision : "+ compteurCollision;
        flagMouv = false;

        //gestion du malus si les secondes sont supérieur à 55s
        if(seconde>55){
            secondeTemp=seconde;
        }
    
        seconde+=5;
        //gestion des collisions troll
        if(tob==parseInt(window.getComputedStyle(troll).top) && lob==parseInt(window.getComputedStyle(troll).left) && wob==parseInt(window.getComputedStyle(troll).width) && hob==parseInt(window.getComputedStyle(troll).height) ){
            troll.style.backgroundColor = "black";
            troll2.style.backgroundColor = "white";
        }
        //gestion des collisions troll2
        if(tob==parseInt(window.getComputedStyle(troll2).top) && lob==parseInt(window.getComputedStyle(troll2).left) && wob==parseInt(window.getComputedStyle(troll2).width) && hob==parseInt(window.getComputedStyle(troll2).height) ){
            troll.style.backgroundColor = "white";
            troll2.style.backgroundColor = "black";
            troll.className = "";
            for (let i=invisibles.length-1; i>=0 ; i--) { //on part de la fin d'invisibles car il est redéfinie à chaque itération de la boucle (elle perd un élément à chaque fois)
                invisibles[i].className = "obstacle";
            }
        }
        return true;
    }
    return false;
}

/**
 * Méthode qui renvoi vrai s'il y a une collision avec l'un des obstacles
 * @param {*} posX //position en x souhaité
 * @param {*} posY //position en y souhaité
 */
function collisionObstacles(posX, posY) {
    var pasCollision = true;
    var listeObstacles = document.querySelectorAll('.obstacle');
    //on teste pour chacun des obstacles
    listeObstacles.forEach(function (obstacle) {
        pasCollision = pasCollision && !collisionUnObstacle(obstacle, posX, posY);
    });
    return !pasCollision;
}

/**
 * Méthode qui renvoi vrai s'il y a une collision avec la fin
 * @param {*} fin //fin fixe
 * @param {*} posX //position en x souhaité
 * @param {*} posY //position en y souhaité
 */
function collisionFin(fin, posX, posY) {
    var styleObjet = window.getComputedStyle(carre);
    var w = parseInt(styleObjet.width);
    var h = parseInt(styleObjet.height);
    var styleObstacle = window.getComputedStyle(fin);
    var tob = parseInt(styleObstacle.top);
    var lob = parseInt(styleObstacle.left);
    var wob = parseInt(styleObstacle.width);
    var hob = parseInt(styleObstacle.height);
    if (posY < lob + wob && posY + w > lob && posX < tob + hob && posX + h > tob) {
        return true;
    }
    return false;
}

/*************************************************  Obstacle avec le clavier *******************************************************************/

var obstacles = document.getElementsByClassName("obstacle");
var invisibles = document.getElementsByClassName("invisible");
var obstacles2 =document.getElementsByClassName("obstacle2");

// console.log(obstacle.offsetLeft);// coté gauche obstacle
// console.log(obstacle.offsetLeft+parseInt(window.getComputedStyle(obstacle).width)); //coté droit obstacle
// console.log(obstacle.offsetTop+parseInt(window.getComputedStyle(obstacle).height)); //coté bas obstacle
// console.log(obstacle.offsetTop); //coté haut obstacle

var coteGaucheFin = fin.offsetLeft;
var coteDroitFin = fin.offsetLeft + fin.offsetWidth;
var coteBasFin = fin.offsetTop + fin.offsetHeight;
var coteHautFin = fin.offsetTop;

var flagTime=false;
var gagner=false;

document.addEventListener("keydown", (e) => {

    //Gestion du Timer
    if(flagTime==false){
        Timer();
        flagTime=true;
    }

    //On récupère les infos du carré

    var coteGaucheCarre = carre.offsetLeft; // x
    var coteDroitCarre = carre.offsetLeft + carre.offsetWidth; // x+width
    var coteBasCarre = carre.offsetTop + carre.offsetHeight; // y+height
    var coteHautCarre = carre.offsetTop; // y

    if (e.key == "ArrowUp") {
        var top = window.getComputedStyle(carre).top;
        var pos = parseInt(top.substring(0, top.indexOf("p")));
        var mouv = pos - pas;
        var collision = false; //on initialise la collision à false

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
        var i = 0;
        while (i < obstacles.length && collision == false) {
            //On récupère les infos de l'obstacle
            var coteGaucheObstacle = obstacles[i].offsetLeft;
            var coteDroitObstacle = obstacles[i].offsetLeft + obstacles[i].offsetWidth;
            var coteBasObstacle = obstacles[i].offsetTop + obstacles[i].offsetHeight;
            var coteHautObstacle = obstacles[i].offsetTop;
            //On vérifie qu'il n'y a pas de collision avec l'obstacle, si il y a une collision on collision deviens true
            if (coteGaucheCarre < coteDroitObstacle &&
                coteDroitCarre > coteGaucheObstacle &&
                coteHautCarre - pas < coteBasObstacle &&
                coteBasCarre > coteHautObstacle) { //collision
                collision = true;
                //gestion du malus si les secondes sont supérieur à 55s
                if(seconde>55){
                    secondeTemp=seconde;
                }
                seconde+=5;

                compteurCollision++;
                compteur.innerHTML="Nombre de collision : "+ compteurCollision;
            }
            i++;

        }
        //On effectue le mouvement si on n'a pas détecté de collision
        if (collision == false) {
            carre.style.top = mouv + "px";
        }

        //Condition de victoire
        if (coteGaucheCarre < coteDroitFin &&
            coteDroitCarre > coteGaucheFin &&
            coteHautCarre - pas < coteBasFin &&
            coteBasCarre > coteHautFin) { //collision
            alert("Vous avez gagné !");
            gagner=true;
        }


    } else if (e.key == "ArrowDown") {
        var top = window.getComputedStyle(carre).top;
        var pos = parseInt(top.substring(0, top.indexOf("p")));
        var mouv = pos + pas;
        var collision = false;
        var i = 0;
        while (i < obstacles.length && collision == false) {
            var coteGaucheObstacle = obstacles[i].offsetLeft;
            var coteDroitObstacle = obstacles[i].offsetLeft + obstacles[i].offsetWidth;
            var coteBasObstacle = obstacles[i].offsetTop + obstacles[i].offsetHeight;
            var coteHautObstacle = obstacles[i].offsetTop;
            if (coteGaucheCarre < coteDroitObstacle &&
                coteDroitCarre > coteGaucheObstacle &&
                coteHautCarre < coteBasObstacle &&
                coteBasCarre + pas > coteHautObstacle) {

                //gestion du malus si les secondes sont supérieur à 55s
                if(seconde>55){
                    secondeTemp=seconde;
                }
                seconde+=5;

                collision = true;
                compteurCollision++;
                compteur.innerHTML="Nombre de collision : "+ compteurCollision;
                if (coteHautObstacle == troll2.offsetTop) { //si l'obstacle est l'objet troll2
                    troll.style.backgroundColor = "white";
                    troll2.style.backgroundColor = "black";
                    troll.className = "";
                    for (let i=invisibles.length-1; i>=0 ; i--) { //on part de la fin d'invisibles car il est redéfinie à chaque itération de la boucle (elle perd un élément à chaque fois)
                        invisibles[i].className = "obstacle";
                    }
                }
            }
            i++;
        }
        if (collision == false) {
            carre.style.top = mouv + "px";
        }

        if (coteGaucheCarre < coteDroitFin &&
            coteDroitCarre > coteGaucheFin &&
            coteHautCarre < coteBasFin &&
            coteBasCarre + pas > coteHautFin) { //collision
            alert("Vous avez gagné !");
            gagner=true;
        }

    } else if (e.key == "ArrowLeft") {
        var left = window.getComputedStyle(carre).left;
        var pos = parseInt(left.substring(0, left.indexOf("p")));
        var mouv = pos - pas;
        var collision = false;
        var i = 0;
        while (i < obstacles.length && collision == false) {

            var coteGaucheObstacle = obstacles[i].offsetLeft;
            var coteDroitObstacle = obstacles[i].offsetLeft + obstacles[i].offsetWidth;
            var coteBasObstacle = obstacles[i].offsetTop + obstacles[i].offsetHeight;
            var coteHautObstacle = obstacles[i].offsetTop;

            if (coteGaucheCarre - pas < coteDroitObstacle &&
                coteDroitCarre > coteGaucheObstacle &&
                coteHautCarre < coteBasObstacle &&
                coteBasCarre > coteHautObstacle) {

                //gestion du malus si les secondes sont supérieur à 55s
                if(seconde>55){
                    secondeTemp=seconde;
                }
                seconde+=5;

                collision = true;
                compteurCollision++;
                compteur.innerHTML="Nombre de collision : "+ compteurCollision;
            }
            i++;
        }
        if (collision == false) {
            carre.style.left = mouv + "px";
        }

        if (coteGaucheCarre - pas < coteDroitFin &&
            coteDroitCarre > coteGaucheFin &&
            coteHautCarre < coteBasFin &&
            coteBasCarre > coteHautFin) { //collision
            alert("Vous avez gagné !");
            gagner=true;
        }

    } else if (e.key == "ArrowRight") {
        var left = window.getComputedStyle(carre).left;
        var pos = parseInt(left.substring(0, left.indexOf("p")));
        var mouv = pos + pas;
        var collision = false;
        var i = 0;
        while (i < obstacles.length && collision == false) {

            var coteGaucheObstacle = obstacles[i].offsetLeft;
            var coteDroitObstacle = obstacles[i].offsetLeft + obstacles[i].offsetWidth;
            var coteBasObstacle = obstacles[i].offsetTop + obstacles[i].offsetHeight;
            var coteHautObstacle = obstacles[i].offsetTop;

            if (coteGaucheCarre < coteDroitObstacle &&
                coteDroitCarre + pas > coteGaucheObstacle &&
                coteHautCarre < coteBasObstacle &&
                coteBasCarre > coteHautObstacle) {
                
                //gestion du malus si les secondes sont supérieur à 55s
                if(seconde>55){
                    secondeTemp=seconde;
                }
                seconde+=5;

                collision = true;
                compteurCollision++;
                compteur.innerHTML="Nombre de collision : "+ compteurCollision;
                if (coteGaucheObstacle == troll.offsetLeft) { //si l'obstacle est l'objet troll
                    troll.style.backgroundColor = "black";
                    troll2.style.backgroundColor = "white";
                }
            }
            i++;
        }
        if (collision == false) {
            carre.style.left = mouv + "px";
        }

        if (coteGaucheCarre < coteDroitFin &&
            coteDroitCarre + pas > coteGaucheFin &&
            coteHautCarre < coteBasFin &&
            coteBasCarre > coteHautFin) { //collision
            alert("Vous avez gagné !");
            gagner=true;
        }
    }
    if(gagner==true){
        clearTimeout(t);
        /*************************** Changement de niveau ************************************/
        //on enlève les anciens obstacles
        for(let i=obstacles.length-1; i>=0 ; i--){ //on part de la fin d'obstacles car obstacles est redéfinie à chaque itération de la boucle (elle perd un élément à chaque fois)
            if(obstacles[i].getAttribute("id")=="bordHaut" || obstacles[i].getAttribute("id")=="bordGauche" || obstacles[i].getAttribute("id")=="bordDroit" || obstacles[i].getAttribute("id")=="bordBas" ){
                
            }else{
                obstacles[i].className = "obstacleFini";
            }
            
        }
        //on insère les nouveaux obstacles
        for(let i=obstacles2.length-1; i>=0 ; i--){
            obstacles2[i].className = "obstacle";
        }
        carre.style.top="5.5vh";
        carre.style.left="3vw";
        fin.style.top="4.7vh";
        gagner=false;
    }
});

// code triche
var code=[];

document.addEventListener("keydown", function (e) {
    funCode(e);
});

function funCode(e){
    code[e.key]=true;
    //console.log(e.key);
    if(code["a"] && e.key=="z"){
        for(let i=obstacles.length-1; i>=0 ; i--){ //on part de la fin d'obstacles car obstacles est redéfinie à chaque itération de la boucle (elle perd un élément à chaque fois)
            // console.log(i);
            // console.log(obstacles);
            obstacles[i].className = "cheat";
        }
    }
    if(code.length>2){
        delete code;
    }
}

//Timer
var timer=document.getElementById("timer");
var minute=0;
var seconde=0;
var secondeTemp=0;
function Timer(){
    seconde++;
    if(seconde>=60){
        //gestion malus si le timer est au dessus de 55secondes
        if(secondeTemp!=0 && seconde>55){
            secondeTemp=seconde-secondeTemp;     
            seconde=secondeTemp;
            minute++;
            secondeTemp=0;
        }else{
            seconde=0;
            minute++;
            secondeTemp=0;
        }    
    }
    //gestion affichage minute
    if(minute<10){
        time="0"+minute;
    }else{
        time=minute;
    }
    //gestion affichage seconde
    if(seconde<10){
        time+=":0"+seconde;
    }else{
        time+=":"+seconde;
    }
    timer.innerHTML=time;
    t=setTimeout("Timer()",1000);
}