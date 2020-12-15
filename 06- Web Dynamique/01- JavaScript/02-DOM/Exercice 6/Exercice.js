var h1=document.getElementsByTagName("h1");
var texte1=document.getElementById("texte1");

texte1.addEventListener("click", function (){
    if(texte1.style.color=="red"){
        texte1.style.color="black";
    }else{
        texte1.style.color="red";
    }   
});

// initialisation de la couleur des h1
for(let i=0;i<h1.length;i++){
    h1[i].style.color="black";
}

for(let i=0;i<h1.length;i++){
    h1[i].addEventListener("click", function (){
        for(let i=0;i<h1.length;i++){
            if(h1[i].style.color=="red"){
                h1[i].style.color="black";
            }else if(h1[i].style.color=="black"){
                h1[i].style.color="yellow";
            }else if(h1[i].style.color=="yellow"){
                h1[i].style.color="red";
            }
            
        }
    });
}