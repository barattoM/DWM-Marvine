<div class="contenu">
    <article>
        <div class="contenuArticle">
            <div class="titreArticle">
                <h4>Des vacances à la montagne, entre terre et ciel</h4>
            </div>
            <div class="texte">
                "La montagne ça vous gagne"! On a tous entendu ce slogan au moins une fois dans sa vie. Et
                globalement, on partage ce sentiment. Une fois qu'on a mis les p altitude, qu'on s'est perdu dans
                les petits villages de bois, qu'on a goûté aux joies des de ski et de l'après-ski, qu'on s'est
                baigné dans un lac de haute altitude, qu'on a obs nature endormie en hiver depuis sa location chalet
                ou qu'on s'est réveillé au printemps et découvert le goût savoureux d'un plat montagnard, c'est
                perdu! On éprouve chaque année le besoin irrépressible d'y retourner, ne serait ce que le temps d'un
                week-end.
            </div>
        </div>
        <div class="imageArticle">
            <img src="./01.jpg" alt="">
        </div>
    </article>
    <article>
        <div class="imageArticle">
            <img src="./02.jpg" alt="">
        </div>
        <div class="contenuArticle">
            <div class="titreArticle">
                <h4>Découvrez les plus belles plages de France</h4>
            </div>
            <div class="texte">
                Si vous souhaitez partir vous détendre sur une plage paradiasque, pas faire des milliers de
                kilomètres ! La France nous réserve de magnifiques ce côté là et n'a rien à envier aux plages du
                reste de monde. Alors prouver, voici une sélection non exhaustive des plus belles plages de F La
                plage des Huttes à Oléron, La plage de Palombaggia à Porto-Vecchio Pampelonne à Ramatuelle, La plage
                de Deauville dans le Calvados, L Corniche en Gironde, La plage de l'espiguette en Camargue, La plage
                de Les Pins en Côtes-d'Armor,...
            </div>
        </div>
    </article>
    <?php if (file_exists("./zoneDestination.php")) {
        include("./zoneDestination.php");
    } else {
        echo "erreur";
    } ?>
</div>