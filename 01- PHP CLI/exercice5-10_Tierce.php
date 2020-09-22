<?php
    $n=readline("Combien de chevaux partants : ");
    $p=readline("Combien de chevaux joués : ");
    while(!ctype_digit($n) || !ctype_digit($p) || $n<$p || $n==0 || $p==0){
        echo "Saisie incorrect \n";
        $n=readline("Combien de chevaux partants : ");
        $p=readline("Combien de chevaux joués : ");
    }
$X=gmp_fact($n)/gmp_fact($n-$p);
$Y=gmp_fact($n)/(gmp_fact($p)*gmp_fact($n-$p));
echo "Dans l'ordre : une chance sur ".$X." de gagner \n";
echo "Dans le désordre : une chance sur ".$Y." de gagner";