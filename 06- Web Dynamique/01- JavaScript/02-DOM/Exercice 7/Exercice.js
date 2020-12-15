var ul=document.getElementById("dessert");
var bouton=document.getElementById("ajout");

bouton.addEventListener("click",function(){
    var result=prompt("Donnez un dessert");
    var ligne = document.createElement("li");
    ligne.innerHTML=result;
    ul.appendChild(ligne);
});

ul.addEventListener("mouseover",function(){
    var li=document.getElementsByTagName("li");
    for(let i=0;i<li.length;i++){
        var ligne=li[i];
        ligne.addEventListener("click",function(){
            ul.removeChild(ligne);
        });
    }
});

