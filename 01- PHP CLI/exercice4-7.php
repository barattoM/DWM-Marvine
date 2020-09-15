<?php
        $age=readline("Donnez votre âge : ");
        $permis=readline("Depuis combiens de temps avez vous le permis ? ");
        $accident=readline("Combiens avez vous eu d'accidents ? ");
        $fidelite=readline("Depuis combiens de temps êtes vous assuré chez nous ? ");
        //vérification saisie
        while (ctype_digit($age)==false || ctype_digit($permis)==false || ctype_digit($accident)==false ||ctype_digit($fidelite)==false){
            echo "Saisie incorrecte \n";
            $age=readline("Donnez votre âge : ");
            $permis=readline("Depuis combiens de temps avez vous le permis ? ");
            $accident=readline("Combiens avez vous eu d'accidents ? ");
            $fidelite=readline("Depuis combiens de temps êtes vous assuré chez nous ? ");
        }

        // if($fidelite>1){
        //     echo "Vous êtes au tarif bleu";
        // }
        // else {
        //     if($age<25){
        //         if($permis<2){
        //             if($accident==0){
        //                 echo "Vous êtes au tarif rouge";
        //             }
        //             else{
        //                 echo "Vous n'êtes pas assuré";
        //             }
        //         }
        //         else{
        //            if($accident==0){
        //                 echo "Vous êtes au tarif orange";
        //            }
        //            else if($accident==1){
        //                 echo "Vous êtes au tarif rouge";
        //            }
        //            else{
        //                 echo "Vous n'êtes pas assuré";
        //            } 
        //         }
        //     }
        //     else{
        //         if ($permis<2){
        //             if($accident==0){
        //                 echo "Vous êtes au tarif orange";
        //            }
        //            else if($accident==1){
        //                 echo "Vous êtes au tarif rouge";
        //            }
        //            else{
        //                 echo "Vous n'êtes pas assuré";
        //            } 
        //         }
        //         else{
        //             if($accident==0){
        //                 echo "Vous êtes au tarif vert";
        //             }
        //             else if($accident==1){
        //                 echo "Vous êtes au tarif orange";
        //             }
        //             else if($accident==2){
        //                 echo "Vous êtes au tarif rouge";
        //             }
        //             else{
        //                 echo "Vous n'êtes pas assuré";
        //             }
        //         }
        //     }
        // }

        if($fidelite>1){
            echo "Vous êtes au tarif bleu";
        }
        else{
            //tarif vert
            if($age>=25 && $permis>=2 && $accident==0){
                echo "Vous êtes au tarif vert";
            }
            //tarif orange
            if(($age<25 && $permis>=2 && $accident==0) || ($age>=25 && $permis<2 && $accident==0) || ($age>=25 && $permis>=2 && $accident==1)){
                echo "Vous êtes au tarif orange";
            }
            //tarif rouge
            if(($age<25 && $permis<2 && $accident==0) || ($age<25 && $permis>2 && $accident==1) || ($age>=25 && $permis<2 && $accident==1) || ($age>=25 && $permis>=2 && $accident==2)){
                echo "Vous êtes au tarif rouge";
            }
            //refusé
            else{
                echo "Vous êtes refusé";
            }
        }