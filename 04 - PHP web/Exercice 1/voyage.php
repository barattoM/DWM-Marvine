<?php
$titrePage = "Voyage";

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

if (file_exists("./contenu.php")) {
    include("./contenu.php");
} else {
    echo "erreur";
}

if (file_exists("./footer.php")) {
    include("./footer.php");
} else {
    echo "erreur";
}

echo '
</body>

</html>';
