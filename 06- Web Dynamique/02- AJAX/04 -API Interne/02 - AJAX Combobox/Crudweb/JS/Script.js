var regions = document.getElementById("region");
console.log(regions);
var departements=document.getElementById("departement");
console.log(departements);

const req = new XMLHttpRequest();
const req2 = new XMLHttpRequest();

req.open('GET','./index.php?page=ListeRegion', true);
req.send(null);

//on vérifie les changements d'états de la requête
req.onreadystatechange = function (event) {
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log(this.responseText);
            reponse = JSON.parse(this.responseText);
            for(let i=0;i<reponse.length;i++){ // On crée les options de l'input avec les pays récupèré
                option = document.createElement("option");
                option.setAttribute("value",reponse[i].idRegion);
                option.innerHTML=reponse[i].LibelleRegion;
                regions.appendChild(option);
            }
        }
            console.log("Réponse reçue: %s", this.responseText);
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
}

regions.addEventListener("input",function(){
    idRegion=regions.value;
    //console.log(idRegion);
    req2.open('POST','./index.php?page=ListeDepartement', true);
    req2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    req2.send("idRegion="+idRegion);
});

req2.onreadystatechange = function (event) {
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log(this.responseText);
            reponse = JSON.parse(this.responseText);
            departements.innerHTML="";
            console.log(reponse);
            for(let i=0;i<reponse.length;i++){ // On crée les options de l'input avec les pays récupèré
                option = document.createElement("option");
                option.setAttribute("value",reponse[i].idDepartement);
                option.innerHTML=reponse[i].LibelleDepartement;
                departements.appendChild(option);
            }
        }
            console.log("Réponse reçue: %s", this.responseText);
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
}


