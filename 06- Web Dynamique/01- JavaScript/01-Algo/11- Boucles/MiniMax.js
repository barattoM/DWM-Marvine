var max=0;
var first=true;
do{
    var n= parseInt(prompt("Donnez un nombre (0 pour arrêter)"));
    if(!(isNaN(n) || n==0)){
        if(first==true){
            first=false;
            min=n;
        }
        if(n>max){
            max=n;
        }
        if(n<min){
            min=n;
        }
        
    }    
}while(n!=0);

document.write("Maximum : "+max+"<br>Minimum : "+min);
