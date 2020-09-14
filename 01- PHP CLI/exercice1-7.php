<?php
    $a=1;
    $b=2;
    $c=3;
    $d=$b;
    $b=$a;
    $a=$c;
    $c=$d;
    echo "A : ".$a;
    echo "B : ".$b;
    echo "c : ".$c;