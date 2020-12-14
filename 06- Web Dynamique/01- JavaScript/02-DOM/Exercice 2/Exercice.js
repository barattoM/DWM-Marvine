var date = document.getElementById("date");
var boutonDate = document.getElementById("boutonDate");

boutonDate.addEventListener("click", function (){
    auj= new Date;
    date.value= auj.getDate()+"/"+(auj.getMonth()+1)+"/"+auj.getFullYear();
});

var heure= document.getElementById("heure");
var boutonHeure = document.getElementById("boutonHeure");
boutonHeure.addEventListener("click", function (){
    auj= new Date;
    heure.value=auj.getHours()+":"+auj.getMinutes()+":"+auj.getSeconds();
});
