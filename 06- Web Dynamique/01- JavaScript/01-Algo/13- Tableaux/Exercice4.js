var tab=[54,62,47,14,65,71,2,21,4];

for (let i=0; i<tab.length; i++) {
    var temp;
    for (let j=0; j <tab.length; j++) {
        if (tab[j] > tab[i]) {
            temp = tab[j];
            tab[j] = tab[i];
            tab[i] = temp;
        }
    }

}
document.write(tab);
