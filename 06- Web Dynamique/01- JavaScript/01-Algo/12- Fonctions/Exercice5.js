function strtok(str1,str2,n){
    var mot= str1.split(str2);
    return mot[n-1];
}

document.write(strtok("robert ;dupont ;amiens ;80000",";",3));