var PU= parseInt(prompt("Saisir le prix unitaire"));
var QTECOM= parseInt(prompt("Saisir la quantité commandée"));
var TOT= PU*QTECOM;
if(TOT>500){
    var PORT=0;
}
else{
    var PORT= 0.02*TOT;
    if(PORT<6){
        PORT=6;
    }
}

if(TOT>=100 && TOT<=200){
    var REM=0.05*TOT;
}
else if(TOT>200){
    var REM=0.10 * TOT;
}
else{
    var REM=0;
}

var PAP=TOT+PORT-REM;

document.write("Prix à payer : "+PAP+" € \n"+"Port : "+PORT+" € \n"+"Remise : "+REM+" €");

