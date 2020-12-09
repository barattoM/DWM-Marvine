var nb1 = window.prompt("Donnez un nombre");
var nb2 = window.prompt("Donnez un nombre");
var operateur = window.prompt("Donnez un opérateur");
var nb1=parseInt(nb1);
var nb2=parseInt(nb2);
if(operateur!="+" && operateur!="-" && operateur!="*" && operateur!="/"  ){
    document.write("Erreur");
}
else{
    switch(operateur){
        case "+":{
            document.write(nb1+" + "+nb2+" = "+(nb1+nb2));
            break;
        }
        case "-":{
            document.write(nb1+" - "+nb2+" = "+(nb1-nb2));
            break;
        }
        case "*":{
            document.write(nb1+" * "+nb2+" = "+(nb1*nb2));
            break;
        }
        case "/":{
            if(nb2==0){
                document.write("Division par zéro");
            }else{
                document.write(nb1+" / "+nb2+" = "+(nb1/nb2));
            }
            break;
        }
    }
}

