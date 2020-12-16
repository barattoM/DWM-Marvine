<?php 
    if(isset($_SESSION['utilisateur']) && $_SESSION['utilisateur']->getLogin()=="Proviseur" ){
      echo '<div>
      <div class="colonne petitFlex">
          <div>Gestion de : </div>
          <ul>
              <li><a href="index.php?page=GestionEleves">Elèves</a></li>
              <li><a href="index.php?page=GestionEnseignants">Enseignants</a></li>
              <li><a href="index.php?page=GestionNotes">Notes</a></li>
              <li><a href="index.php?page=GestionMatieres">Matières</a></li>
          </ul> 
      </div>'; 
      
      echo '<div class="colonne centrer">

      <a href="index.php?page=FormEnseignants&mode=ajout" class="boutons">Ajouter un enseignant</a>
  ';
    
        $utilisateurs=UtilisateursManager::getList();
        foreach($utilisateurs as $unUtilisateur){
            if($unUtilisateur->getLogin()!="Proviseur"){
                echo '<div>';
                echo '<div class="espace"></div>';
                echo '<div class="centrer">'.$unUtilisateur->getMatiere()->getlibelleMatiere().'</div>';
                echo '<div class="espace"></div>';
                echo '<div class="centrer">'.$unUtilisateur->getLogin().'</div>';
                echo '<div class="espace"></div>';
                echo '<div class="centrer">'.$unUtilisateur->getNomUtilisateur().'</div>';
                echo '<div class="espace"></div>';
                echo '<div class="centrer">'.$unUtilisateur->getPrenomUtilisateur().'</div>';
                echo '<div class="icone centrer"><a class="" href = "index.php?page=FormEnseignants&mode=modif&id='.$unUtilisateur->getIdUtilisateur().'"><img src="./IMG/modifier.png" alt=""></a></div>';
                echo '<div class="espace"></div>';
                echo '<div class="icone centrer"><a class="" href = "index.php?page=ActionsEnseignants&mode=delete&id='.$unUtilisateur->getIdUtilisateur().'"><img src="./IMG/supprimer.png" alt=""></a></div>';
                echo '<div class="espace"></div>';
                echo '</div>';
            }        
        }

        echo "</div>
        </div>";
    }else{
        header("location:index.php?page=default");
    }   
    ?>
