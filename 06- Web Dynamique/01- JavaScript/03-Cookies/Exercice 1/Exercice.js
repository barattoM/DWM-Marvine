function createCookie(name, value, days) {
    // permet de créer un cookie 
    if (days) {
        // si le nombre de jour est renseigné, on le transforme en millieme de seconde
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "expires=" + date.toGMTString();
    }
    else var expires = "";
    //le cookie doit contenir clé=valeur;expires=temps;path=nomDomaine
    document.cookie = name + "=" + value + "; " + expires + "; path=/";
}

function readCookie(name) {
    // on récupère tous les cookies du site en une fois, séparé par ;
    // on range dans un tableau chaque cookie 
    var listeCookies = document.cookie.split(';');
    for (let i = 0; i < listeCookies.length; i++) {
        // pour chaque cookie, on sépare en tableau la clé et la valeur
        var unCookie = listeCookies[i].split("=");
        // si la clé correspond au cookie cherché, on renvoi la valeur
        if (unCookie[0] == name) return unCookie[1];
    }
    return null;
}

function eraseCookie(name) {
    // pour supprimer un cookie, on le périme
    createCookie(name, "", -1);
}

var affichage=document.getElementById("affichage");
var reset=document.getElementById("reset");
var mode=document.getElementById("mode");
var body=document.getElementsByTagName("body")[0];

// eraseCookie("compteur");

reset.addEventListener("click", function (){
    createCookie("compteur",0,1);
    affichage.innerHTML='Vous avez visiter cette page : '+readCookie("compteur")+' fois' ;
});

mode.addEventListener("click", function(){
    if(body.style.backgroundColor=="var(--nuit)"){
        body.style.backgroundColor="var(--jour)";
        createCookie("mode",'var(--jour)',1);
    }else{
        body.style.backgroundColor="var(--nuit)";
        createCookie("mode",'var(--nuit)',1);
    }
});

console.log(readCookie("compteur"));
if(readCookie("compteur")==null){
    createCookie("compteur",0,1);
    console.log(readCookie("compteur"));
}else{
    affichage.innerHTML='Vous avez visiter cette page : '+readCookie("compteur")+' fois' ;
    var cpt=parseInt(readCookie("compteur"))+1;
    createCookie("compteur",cpt,1);
}



