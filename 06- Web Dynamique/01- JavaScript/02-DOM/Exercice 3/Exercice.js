var image = document.getElementById("image");

image.addEventListener("click", function (){
    if(image.getAttribute("src")=="AmpouleHS.GIF"){
        image.src="AmpouleOk.GIF";
    }else{
        image.src="AmpouleHS.GIF";
    }
    
});

