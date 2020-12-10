function tableMulti(nb){
    for(let i=1;i<=10;i++){
        document.write(i+" x "+nb+" = "+i*nb+"<br>");
    }
}

tableMulti(parseInt(prompt("Donnez un nombre")));