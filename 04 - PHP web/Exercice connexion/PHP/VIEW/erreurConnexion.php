<?php
echo "Identifiants ou mot de passe invalide. Veuillez réessayer .";
echo "SESSION";
var_dump($_SESSION);

header("Refresh:3; location:index.php?codePage=formConnexionUtilisateur");