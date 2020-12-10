function produit(x,y){
    return x*y;
}
function afficheImg(image){
    
    var img = document.createElement("img");
    img.src = image;

    var div = document.getElementById("image");
    div.appendChild(img);
}

document.write(produit(2,3));

afficheImg("coeur.png");