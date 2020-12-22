var cartesRecto=document.getElementsByClassName("recto");
var cartesVerso=document.getElementsByClassName("verso");
var timer=document.getElementById("timer");
var essai=document.getElementById("essai");
var reset=document.getElementById("reset");
var solution=document.getElementById("solution");

var check=[];
var memoireVerso=[];
var memoireRecto=[];

//Variable timer
var minute=0;
var seconde=0;
var secondeTemp=0;
var timerFlag=true;

//Nombre d'essais
var compteur=0;

//Test de victoire
var gagne=false;
var compteurVictoire=0;

for(let i=0;i<cartesRecto.length;i++){
    cartesRecto[i].addEventListener("click",function memory(e){
        //Initialisation de timer
        if(timerFlag==true){
            Timer();
            timerFlag=false;
        }

        parent=e.target.parentNode;
        verso=parent.getElementsByClassName("verso")[0];
        memoireVerso.push(verso);
        memoireRecto.push(e.target);
        //Si on a pas encore tourné 2 cartes alors on permet de tourner une carte
        if(check.length<2){
            retourner(true,verso,e);   
        }  
        //Si 2 cartes sont tournés alors on regarde si elles sont identiques
        if(check.length==2){
            if(check[0]==check[1]){
                check=[];
                memoireVerso=[];
                memoireRecto=[];
                compteurEssai();
                compteurVictoire++;
                victoire();
            }else{ //Si les 2 cartes sont différentes
                t=setTimeout(retourner,2000,false,verso,e);
                compteurEssai();
            }
        }   
    });
}

reset.addEventListener("click",function (){
    //On remet toutes les cartes à l'état initial
    for(let i=0;i<cartesRecto.length;i++){
        cartesRecto[i].style.display="flex";
        cartesVerso[i].style.display="none";
    }
    //On remet tout les infos/variables à l'état initial
    timerFlag=true;
    clearTimeout(v);
    compteur=0;
    essai.innerHTML="Nombre d'essais : "+compteur;
    compteurVictoire=0;
    minute=0;
    seconde=0;
    timer.innerHTML="00:00";
});

solution.addEventListener("click",function (){
    //Retourne toutes les cartes
    for(let i=0;i<cartesRecto.length;i++){
        cartesRecto[i].style.display="none";
        cartesVerso[i].style.display="flex";
    }
});

function retourner(sens,verso,e){
    // Si il n'y a pas 2 cartes de tirées
    if(sens==true){
        e.target.style.display="none";
        verso.style.display="flex";
        check.push(verso.getAttribute("src"));
        console.log(check);
    }else{ // Les 2 cartes tirées n'était pas identiques donc on les retournes
        memoireRecto[0].style.display="flex";
        memoireRecto[1].style.display="flex";
        memoireVerso[0].style.display="none";
        memoireVerso[1].style.display="none";
        memoireVerso=[];
        memoireRecto=[];
        check=[];
        clearTimeout(t);
    }
}

//Timer
function Timer(){
    seconde++;
    if(seconde>=60){
            seconde=0;
            minute++;
            secondeTemp=0; 
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
    v=setTimeout("Timer()",1000);
}

//compteur d'essai

function compteurEssai(){
    compteur++;
    essai.innerHTML="Nombre d'essais : "+compteur;
}

//Condition victoire
function victoire(){
    if(compteurVictoire==8){
        clearTimeout(v);
        alert("Vous avez gagné");
    }
}