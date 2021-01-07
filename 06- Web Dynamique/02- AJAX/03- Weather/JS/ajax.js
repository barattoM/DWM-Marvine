// Utilisation de l'Ajax pour appeler l'API et récuperer les enregistrements
var contenu = document.getElementById("contenu");
var enregs; // contient la reponse de l'API
// on définit une requete
const req = new XMLHttpRequest();
const req2 = new XMLHttpRequest();
//Initialisation de la combo box
var choix=document.getElementById("choix");
req2.open('GET','http://api.openweathermap.org/data/2.5/group?id=3020685,3029161,2988507,2995468,2998324,2990968,524901&appid=4f00f8b80c9b221ffd12e64353e31667&units=metric&lang=fr', true);
req2.send(null);

//on vérifie les changements d'états de la requête
req2.onreadystatechange = function (event) {
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            reponse = JSON.parse(this.responseText);
            enregs=reponse.list; //On récupère la liste des pays
            for(let i=0;i<enregs.length;i++){ // On crée les options de l'input avec les pays récupèré
                option = document.createElement("option");
                option.setAttribute("value",enregs[i].name+","+enregs[i].country); //la value aura la valeur : nomDeLaVille,pays ; pour une réutilisation plus simple pour l'affichage
                option.innerHTML=enregs[i].name;
                choix.appendChild(option);
            }
        }
            console.log("Réponse reçue: %s", this.responseText);
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
}

choix.addEventListener("input",function(){
    var url="http://api.openweathermap.org/data/2.5/weather?q="+choix.value+"&appid=4f00f8b80c9b221ffd12e64353e31667&units=metric&lang=fr";
    req.open('GET',url, true);
    req.send(null);
});

var ville=document.getElementsByClassName("ville")[0];
//on vérifie les changements d'états de la requête
req.onreadystatechange = function (event) {
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            // la requete a abouti et a fournit une reponse
            //on décode la réponse, pour obtenir un objet
            reponse = JSON.parse(this.responseText);
            ligne=document.getElementById("info");
            ville.innerHTML=reponse.name;
            ligne.children[0].innerHTML = reponse.weather[0].description;
            ligne.children[1].innerHTML = reponse.main.temp_min+"°C";
            ligne.children[2].innerHTML = reponse.main.temp_max+"°C";
            }
            console.log("Réponse reçue: %s", this.responseText);
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
}



//on envoi la requête
req.open('GET','http://api.openweathermap.org/data/2.5/weather?q=Dunkerque,fr&appid=4f00f8b80c9b221ffd12e64353e31667&units=metric&lang=fr', true);
req.send(null);