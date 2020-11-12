<?php

$titrePage="Final Fantasy XIV - Accueil";

if (file_exists("../PHP/head.php")) {
  include("../PHP/head.php");
} else {
  echo "erreur";
}

if (file_exists("../PHP/header.php")) {
  include("../PHP/header.php");
} else {
  echo "erreur";
}

if (file_exists("../PHP/footer.php")) {
  include("../PHP/footer.php");
} else {
  echo "erreur";
}

if (file_exists("../PHP/nav.php")) {
  include("../PHP/nav.php");
} else {
  echo "erreur";
}