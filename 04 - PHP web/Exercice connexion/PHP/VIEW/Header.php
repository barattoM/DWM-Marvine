
<header>
    <a href="index.php?codePage=default">
        <div><img class="logo" src="./IMG/logo.png" alt="logo"></div>
    </a>
        <div class="titre colonne centrer"><div class="centrer">Mediatech !</div><div class="soustitre centrer">Le site par excellence pour retrouver les meilleurs films du moment !</div></div>
    <!-- <a href="index.php?codePage=default">
        <div><img class="logo" src="./IMG/logo.png" alt="logo"></div>
    </a> -->
    <?php
    if(empty($_SESSION['utilisateur'])){
        echo '<div class="colonne">
        <a href="index.php?codePage=formAjoutUtilisateur">
            <div class="boutons">
                Inscription
            </div>
        </a>
        <a href="index.php?codePage=formConnexionUtilisateur">
            <div class="boutons">
                Connexion
            </div>
        </a>
        </div>';
    }
    else{
        echo '<a href="index.php?codePage=actionsUtilisateurs&mode=deconnexionUtilisateur">
                <div class="boutons">
                    Deconnexion
                </div>
            </a>';
        
    }
    ?>
    </header>
    <nav>
        <div></div>
        <div>
        <a href="index.php?codePage=listeFilms">
            <div class="boutons">
                Liste des Films
            </div>
        </a>
        <a href="index.php?codePage=listeActeurs">
            <div class="boutons">
                Liste des Acteurs
            </div>
        </a>
        <a href="index.php?codePage=listeGenres">
            <div class="boutons">
                Listes des Genres
            </div>
        </a>
        <a href="index.php?codePage=listeRealisateurs">
            <div class="boutons">
                Listes des Réalisateurs
            </div>
        </a>
        <a href="index.php?codePage=listeStudios">
            <div class="boutons">
                Listes des Studios
            </div>
        </a>
        <?php
        if(isset($_SESSION['utilisateur']) && $_SESSION['utilisateur']->getRole()=="Admin"){
            echo '<a href="index.php?codePage=admin">
                        <div class="boutons">
                            Page admin
                        </div>
                    </a>';
        }
       
        ?>
        </div>
        <div></div>
    </nav>
