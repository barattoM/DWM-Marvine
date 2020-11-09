<?php

if (file_exists("./head.php")) {
    include("./head.php");
} else {
    echo "erreur";
}


echo '<body>';

echo '<div class="page">';

    if (file_exists("./header.php")) {
        include("./header.php");
    } else {
        echo "erreur";
    }

    if (file_exists("./navigation.php")) {
        include("./navigation.php");
    } else {
        echo "erreur";
    }
    
    echo'<div class="corps">';

        if (file_exists("./hautCorps.php")) {
            include("./hautCorps.php");
        } else {
            echo "erreur";
        }


        if (file_exists("./historique.php")) {
            include("./historique.php");
        } else {
            echo "erreur";
        }

    echo'</div>';

    if (file_exists("./footer.php")) {
        include("./footer.php");
    } else {
        echo "erreur";
    }
echo'    
</div>
</body>

</html>';