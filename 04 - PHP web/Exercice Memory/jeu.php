<?php

//initialisation tableau aléa
for($i=1;$i<=8;$i++){
    $t[]=$i;
    $t[]=$i;
}

//ligne  
for ($j = 1; $j < 5; $j++) {
    echo '<div class="espaceHor"></div>';
    echo '<div class="ligne">';
    //case   
    for ($i = 1; $i < 5; $i++) {
        $pos=array_rand($t);           
        $nb=$t[$pos];
        echo '<div class="espace"></div>
                    <div class="case">
                        <img class="recto" src="plage.jpg" alt="">
                        <img class="verso" src="'.$nb.'.jpg" alt="">
                    </div>';
        array_splice($t,$pos,1); //suppression de la valeur dans le tableau
    }
    echo '<div class="espace"></div>
                </div>';
}
