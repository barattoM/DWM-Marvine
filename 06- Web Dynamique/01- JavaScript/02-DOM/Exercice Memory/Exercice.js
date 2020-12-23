var cartesRecto = document.getElementsByClassName("recto");
var cartesVerso = document.getElementsByClassName("verso");
var timer = document.getElementById("timer");
var essai = document.getElementById("essai");
var reset = document.getElementById("reset");
var solution = document.getElementById("solution");
var joueur = document.getElementById("joueur");
var score = document.getElementById("score");

var check = [];
var memoireVerso = [];
var memoireRecto = [];

//Variable timer
var minute = 0;
var seconde = 0;
var timerFlag = true;

//Nombre d'essais
var compteur = 0;

//Test de victoire
var gagne = false;
var compteurVictoire = 0;
var pointJoueur1 = 0;
var pointJoueur2 = 0;
var tour = "Joueur 1";

var debug=true;

for (let i = 0; i < cartesRecto.length; i++) {
    cartesRecto[i].addEventListener("click", function memory(e) {
        //Initialisation de timer
        if (timerFlag == true) {
            Timer();
            timerFlag = false;
        }

        if(debug==true){ //évite le click pendant le délais si les 2 cartes sont différentes
            parent = e.target.parentNode;
            verso = parent.getElementsByClassName("verso")[0];
            memoireVerso.push(verso);
            memoireRecto.push(e.target);
            //Si on a pas encore tourné 2 cartes alors on permet de tourner une carte
            if (check.length < 2) {
                retourner(true, verso, e);
            }
            //Si 2 cartes sont tournés alors on regarde si elles sont identiques
            if (check.length == 2) {
                if (check[0] == check[1]) {
                    check = [];
                    memoireVerso = [];
                    memoireRecto = [];
                    compteurEssai();
                    compteurVictoire++;
                    if (tour == 'Joueur 1') {
                        pointJoueur1++;
                    } else {
                        pointJoueur2++;
                    }
                    score.innerHTML="Joueur 1 : "+pointJoueur1+" points <br>Joueur 2 : "+pointJoueur2+" points";
                    //console.log("Joueur 1" + pointJoueur1 + "Joueur 2" + pointJoueur2);
                    victoire();
                } else { //Si les 2 cartes sont différentes
                    debug=false; // on empeche le click pendant le setTimeout
                    t = setTimeout(retourner, 4000, false, verso, e);
                    compteurEssai();
                    //gestion du joueur
                    if (tour == "Joueur 1") {
                        tour = "Joueur 2";
                    } else {
                        tour = "Joueur 1";
                    }
                    //affichage joueur
                    joueur.innerHTML = tour + " à vous de jouer";
                }
            }
        }    
    });
}

reset.addEventListener("click", function () {
    //On remet toutes les cartes à l'état initial
    for (let i = 0; i < cartesRecto.length; i++) {
        cartesRecto[i].style.display = "flex";
        cartesVerso[i].style.display = "none";
    }
    //On remet tout les infos/variables à l'état initial
    check = [];
    memoireVerso = [];
    memoireRecto = [];
    timerFlag = true;
    clearTimeout(v);
    compteur = 0;
    essai.innerHTML = "Nombre d'essais : " + compteur;
    compteurVictoire = 0;
    minute = 0;
    seconde = 0;
    timer.innerHTML = "00:00";
    pointJoueur1 = 0;
    pointJoueur2 = 0;
    tour = "Joueur 1";
    joueur.innerHTML = tour + " à vous de jouer";
    gagne = false;
});

solution.addEventListener("click", function () {
    //Retourne toutes les cartes
    for (let i = 0; i < cartesRecto.length; i++) {
        cartesRecto[i].style.display = "none";
        cartesVerso[i].style.display = "flex";
    }
    clearTimeout(v);
});

function retourner(sens, verso, e) {
    // Si il n'y a pas 2 cartes de tirées
    if (sens == true) {
        //avec animation
        taille=parseInt(window.getComputedStyle(e.target).width);
        anim=setInterval(animation,50,e.target,verso,taille,true);
        // // Sans animation
        //e.target.style.display = "none";
        //verso.style.display = "flex";

        check.push(verso.getAttribute("src"));
    } else { // Les 2 cartes tirées n'était pas identiques donc on les retournes
        //avec animation
        //anim=setInterval(animation,50,memoireRecto,memoireVerso,false);

        // Sans animation
        memoireRecto[0].style.display = "flex";
        memoireRecto[1].style.display = "flex";
        memoireVerso[0].style.display = "none";
        memoireVerso[1].style.display = "none";

        memoireVerso = [];
        memoireRecto = [];
        check = [];
        debug=true; //pour réactiver le click
        clearTimeout(t);
    }
}

function animation(recto,verso,taille,sens){
    if(sens=true){
        // On récupère la taille
        var widthRecto=parseInt(window.getComputedStyle(recto).width);
        var widthVerso=parseInt(window.getComputedStyle(verso).width);
        if(parseInt(recto.style.width)<=10){
            recto.style.display="none";
            verso.style.display="flex";
            if(parseInt(verso.style.width)>=taille){
                verso.style.width=taille+"px";
                recto.style.width=taille+"px";
                clearInterval(anim);
            }else{
                widthVerso=widthVerso+10;
                verso.style.width=widthVerso+"px";
            }
            
        }else{
            widthRecto=widthRecto-10;
            verso.style.width=0;
            //console.log(widthRecto);
            recto.style.width=widthRecto+"px";
        }
    }else{

    }
    

}

//Timer
function Timer() {
    seconde++;
    if (seconde >= 60) {
        seconde = 0;
        minute++;
    }
    //gestion affichage minute
    if (minute < 10) {
        time = "0" + minute;
    } else {
        time = minute;
    }
    //gestion affichage seconde
    if (seconde < 10) {
        time += ":0" + seconde;
    } else {
        time += ":" + seconde;
    }
    timer.innerHTML = time;
    v = setTimeout("Timer()", 1000);
}

//compteur d'essai

function compteurEssai() {
    compteur++;
    essai.innerHTML = "Nombre d'essais : " + compteur;
}

//Condition victoire
function victoire() {
    if (compteurVictoire == 8) {
        clearTimeout(v);
        if (pointJoueur1 > pointJoueur2) {
            alert("Le joueur 1 gagne");
        } else if (pointJoueur1 < pointJoueur2) {
            alert("Le joueur 2 gagne");
        } else {
            alert("Egalité");
        }
    }
}