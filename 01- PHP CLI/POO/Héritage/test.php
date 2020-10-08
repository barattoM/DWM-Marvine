<?php

function autoload($classe){
    require $classe.".Class.php";
}
spl_autoload_register("autoload");

$r1=new Rectangle(["longueur"=>10,"largeur"=>15]);
$tr1=new TriangleRectangle(["base"=>5,"hauteur"=>10]);
$c1=new Cercle(["diametre"=>10]);
$p1=new Pave(["longueur"=>10,"largeur"=>5,"hauteur"=>15]);
$py1=new Pyramide(["base"=>5,"hauteur"=>10,"haut"=>15]);
$s1=new Sphere(["diametre"=>15]);

echo "************ Rectangle **********";
echo "\n".$r1->toString();
echo "\n\n********Triangle rectangle********";
echo "\n".$tr1->toString();
echo "\n\n********* Cercle **********";
echo "\n".$c1->toString();
echo "\n\n*********** Pave **********";
echo "\n".$p1->toString();
echo "\n\n********** Pyramide ***********";
echo "\n".$py1->toString();
echo "\n\n************ Sphère ***********";
echo "\n".$s1->toString();