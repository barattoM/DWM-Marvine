var image = document.getElementById("image");

image.addEventListener("click",function(){
    setTimeout(function(){
        if(image.getAttribute("src")=="2.jpg"){  
            image.setAttribute("src","3.jpg");
        }
        else{
            image.setAttribute("src","2.jpg");
        }
    },3000);

});

//Changement de l'image automatique toute les 3s

// setInterval(function () {
//     if (image.getAttribute("src") == "2.jpg") {
//         image.setAttribute("src", "3.jpg");
//     }
//     else {
//         image.setAttribute("src", "2.jpg");
//     }
// }, 3000);
