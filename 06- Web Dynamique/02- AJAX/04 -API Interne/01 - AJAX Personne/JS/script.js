const requ = new XMLHttpRequest();
var total=document.getElementById("total");

requ.onreadystatechange = function(event) {
    // XMLHttpRequest.DONE === 4
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            var divCount=total;
            reponse=JSON.parse(this.responseText);
            console.log(reponse);
            divCount.innerHTML=reponse.nb;           
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

requ.open('GET', './Php/Model/Count.php', true);
requ.send(null);

const req2 = new XMLHttpRequest();
req2.open('GET', './Php/Model/Liste.php', true);
req2.send(null);

var table=document.getElementsByTagName("tbody")[0];
req2.onreadystatechange = function(event) {
    // XMLHttpRequest.DONE === 4
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            reponse=JSON.parse(this.responseText);
            console.log(reponse);
            for(let i=0;i<parseInt(total.innerHTML);i++){
                ligne=document.createElement("tr");
                ligne.setAttribute("class","crudLigne");
                table.appendChild(ligne);
                nom=document.createElement("td");
                prenom=document.createElement("td");
                nom.setAttribute("class","crudColonne");
                prenom.setAttribute("class","crudColonne");
                ligne.appendChild(nom);
                ligne.appendChild(prenom);
                boutons=document.createElement("td");
                boutons.setAttribute("class","crudColonneBtn");
                ligne.appendChild(boutons);
                afficher=document.createElement("a");
                modifier=document.createElement("a");
                supprimer=document.createElement("a");
                afficher.setAttribute("class","crudBtn crudBtnEdit");
                modifier.setAttribute("class","crudBtn crudBtnModif");
                supprimer.setAttribute("class","crudBtn crudBtnSuppr");
                boutons.appendChild(afficher);
                boutons.appendChild(supprimer);
                boutons.appendChild(modifier);
                

                afficher.innerHTML="Afficher";
                modifier.innerHTML="Modifier";
                supprimer.innerHTML="Supprimer";
                nom.innerHTML=reponse[i].nom;
                prenom.innerHTML=reponse[i].prenom;
            }
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};