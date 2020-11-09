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


echo '<div class="jeu">';

    if (file_exists("./jeu.php")) {
        include("./jeu.php");
    } else {
        echo "erreur";
    }
    
echo '
</div>

</body>

</html>';