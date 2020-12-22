<?php
if (file_exists("./head.php")) {
    include("./head.php");
} else {
    echo "erreur";
}


echo '<body>';

if (file_exists("./header.php")) {
    include("./header.php");
} else {
    echo "erreur";
}
echo '<div id="timer">00:00</div>';
echo '<div id="essai">Nombre d\'essais : 0</div>';
echo '<input type="button" value="Reset" id="reset">';
echo '<input type="button" value="Solution" id="solution">';

echo '<div class="jeu">';

    if (file_exists("./jeu.php")) {
        include("./jeu.php");
    } else {
        echo "erreur";
    }
   

echo '
</div>
<script src="Exercice.js"></script>
</body>

</html>';