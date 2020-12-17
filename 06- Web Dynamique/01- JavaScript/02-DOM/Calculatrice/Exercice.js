var bouttons = document.getElementsByTagName('input');
var total = document.getElementById("total");
var calcul = document.getElementById("calcul")
//console.log(bouttons);
//var totalTemp=0;
var operateur="";

for(let elt in bouttons){
    bouttons[elt].addEventListener("click",function (e){
        console.log(e.target.getAttribute("value"));
        if(e.target.getAttribute("value")=="="){
            //pour le dernier calcul
            if(operateur=="+"){
                totalTemp+=parseInt(total.getAttribute("value"));
                calcul.setAttribute("value",calcul.getAttribute("value")+total.getAttribute("value")+"=");
                total.setAttribute("value",totalTemp);
                calcul.setAttribute("value",calcul.getAttribute("value")+total.getAttribute("value"));
                delete totalTemp;
                delete operateur;
            }else if(operateur=="-"){
                totalTemp-=parseInt(total.getAttribute("value"));
                calcul.setAttribute("value",calcul.getAttribute("value")+total.getAttribute("value")+"=");
                total.setAttribute("value",totalTemp);
                calcul.setAttribute("value",calcul.getAttribute("value")+total.getAttribute("value"));
                delete totalTemp;
                delete operateur;
            }else if(operateur=="*"){
                totalTemp*=parseInt(total.getAttribute("value"));
                calcul.setAttribute("value",calcul.getAttribute("value")+total.getAttribute("value")+"=");
                total.setAttribute("value",totalTemp);
                calcul.setAttribute("value",calcul.getAttribute("value")+total.getAttribute("value"));
                delete totalTemp;
                delete operateur;
            }else if(operateur=="/"){
                totalTemp/=parseInt(total.getAttribute("value"));
                calcul.setAttribute("value",calcul.getAttribute("value")+total.getAttribute("value")+"=");
                total.setAttribute("value",totalTemp);
                calcul.setAttribute("value",calcul.getAttribute("value")+total.getAttribute("value"));
                delete totalTemp;
                delete operateur;
            }
            
        }else if(e.target.getAttribute("value")=="C"){

            //console.log(total.getAttribute("value"));
            total.setAttribute("value",total.getAttribute("value").substring(0,total.getAttribute("value").length-1));

        }else if(e.target.getAttribute("value")=="-"){
           
            //initialisation
            if(typeof totalTemp == "undefined"){
                totalTemp=parseInt(total.getAttribute("value"));
                operateur="-";
                calcul.setAttribute("value",total.getAttribute("value")+operateur);
                total.setAttribute("value","");
            }else{
                totalTemp-=parseInt(total.getAttribute("value"));
                operateur="-";
                calcul.setAttribute("value",calcul.getAttribute("value")+total.getAttribute("value")+operateur);
                total.setAttribute("value","");
            }    

        }else if(e.target.getAttribute("value")=="+"){

            //initialisation
            if(typeof totalTemp == "undefined"){
                totalTemp=parseInt(total.getAttribute("value"));
                operateur="+";
                calcul.setAttribute("value",total.getAttribute("value")+operateur);
                total.setAttribute("value","");    
            }else{
                totalTemp+=parseInt(total.getAttribute("value"));
                operateur="+";
                calcul.setAttribute("value",calcul.getAttribute("value")+total.getAttribute("value")+operateur);
                total.setAttribute("value","");
            }
            //console.log("totalTemp : "+totalTemp);

        }else if(e.target.getAttribute("value")=="/"){

            //initialisation
            if(typeof totalTemp == "undefined"){
                totalTemp=parseInt(total.getAttribute("value"));
                operateur="/";
                calcul.setAttribute("value",total.getAttribute("value")+operateur);
                total.setAttribute("value","");
            }else{
                totalTemp/=parseInt(total.getAttribute("value"));
                operateur="/";
                calcul.setAttribute("value",calcul.getAttribute("value")+total.getAttribute("value")+operateur);
                total.setAttribute("value","");
            }

        }else if(e.target.getAttribute("value")=="*"){

            //initialisation
            if(typeof totalTemp == "undefined"){
                totalTemp=parseInt(total.getAttribute("value"));
                operateur="*";
                calcul.setAttribute("value",total.getAttribute("value")+operateur);
                total.setAttribute("value","");
            }else{
                totalTemp*=parseInt(total.getAttribute("value"));
                operateur="*";
                calcul.setAttribute("value",calcul.getAttribute("value")+total.getAttribute("value")+operateur);
                total.setAttribute("value","");
            }

        }else{
            //console.log(e.target.getAttribute("value"));
            total.setAttribute("value",total.getAttribute("value")+e.target.getAttribute("value"));
        }
    })
    
}