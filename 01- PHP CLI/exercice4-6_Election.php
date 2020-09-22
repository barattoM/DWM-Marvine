<?php
    $score1=readline("Donnez le score du 1er candidat: ");
    $score2=readline("Donnez le score du 2e candidat: ");
    $score3=readline("Donnez le score du 3e candidat: ");
    $score4=readline("Donnez le score du 4e candidat: ");
    //Verification de saisie
    while($score1+$score2+$score3+$score4!=100 || !ctype_digit($score1) || !ctype_digit($score2) || !ctype_digit($score3) || !ctype_digit($score4)){
        echo "Saisie incorrect \n";
        $score1=readline("Donnez le score du 1er candidat: ");
        $score2=readline("Donnez le score du 2e candidat: ");
        $score3=readline("Donnez le score du 3e candidat: ");
        $score4=readline("Donnez le score du 4e candidat: ");
    }


    if($score1>50){
        echo "Candidat 1 élu";
    }
    else if ($score1<12.5 || $score2>50 || $score3>50 || $score4>50){
        echo "Le candidat 1 est battu";
    }
    else{
        if($score1>$score2 && $score1>$score3 && $score1>$score4){
            echo "Ballottage favorable";
        }
        else{
            echo "Ballottage défavorable";
        }
    }
