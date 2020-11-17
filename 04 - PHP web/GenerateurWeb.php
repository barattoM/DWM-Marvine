<?php
// VERIFICATION DE LA VALIDITE DU NOM DE DOSSIER 

do {
    $nomprojet = ucfirst(readline("Donnez le nom de votre projet : "));
    echo strlen($nomprojet) < 1 ? "Vous devez donner un nom a votre projet !\n" : "";
    echo is_dir($nomprojet) ? "Ce nom de dossier existe déjà.\n" : "";
}while(strlen($nomprojet) < 1 || is_dir($nomprojet));

// CREATION DES DIFFERENTS DOSSIERS DU PROJET WEB

mkdir('./' . $nomprojet, 0777, true);
mkdir('./' . $nomprojet . '/IMG', 0777, true);
mkdir('./' . $nomprojet . '/DOCS', 0777, true);
mkdir('./' . $nomprojet . '/HTML', 0777, true);
mkdir('./' . $nomprojet . '/CSS', 0777, true);
mkdir('./' . $nomprojet . '/JS', 0777, true);
mkdir('./' . $nomprojet . '/PHP', 0777, true);
mkdir('./' . $nomprojet . '/SQL', 0777, true);
mkdir('./' . $nomprojet . '/PHP'.'/MODEL', 0777, true);
mkdir('./' . $nomprojet . '/PHP'.'/VIEW', 0777, true);
mkdir('./' . $nomprojet . '/PHP'.'/CONTROLLER', 0777, true);

// CREATION DES DIFFERENTS FICHIERS DU PROJET WEB

$HTML_folder = fopen('./'.$nomprojet.'/HTML/'. 'index.html', "w");
$CSS_folder = fopen('./'.$nomprojet.'/CSS/'. 'style.css', "w");
$JS_folder = fopen('./'.$nomprojet.'/JS/'. 'script.js', "w");
$Index_folder = fopen('./'.$nomprojet.'/'. 'index.php', "w");

// INSERTION DES FICHIERS DE PROTECTIONS DE NIVEAU 1
$IMG_security = fopen($path . '/' . $nomprojet . '/IMG/' . 'index.php', "w");
$DOCS_security = fopen($path . '/' . $nomprojet . '/DOCS/' . 'index.php', "w");
$HTML_security = fopen($path . '/' . $nomprojet . '/HTML/' . 'index.php', "w");
$CSS_security = fopen($path . '/' . $nomprojet . '/CSS/' . 'index.php', "w");
$JS_security = fopen($path . '/' . $nomprojet . '/JS/' . 'index.php', "w");
$PHP_security = fopen($path . '/' . $nomprojet . '/PHP/' . 'index.php', "w");
$MODEL_security = fopen($path . '/' . $nomprojet . '/PHP' . '/MODEL/' . 'index.php', "w");
$VIEW_security = fopen($path . '/' . $nomprojet . '/PHP' . '/VIEW/' . 'index.php', "w");
$CONTROLLER_security = fopen($path . '/' . $nomprojet . '/PHP' . '/CONTROLLER/' . 'index.php', "w");
$SQL_security = fopen('./' . $nomprojet . '/SQL/' . 'index.php', "w");

$HTML_snippet = '<!doctype html>'."\n"
                .'<html lang="fr">'."\n"
                .'<head>'."\n"
                ."\t".'<meta charset="utf-8">'."\n"
                ."\t".'<title>Titre de la page</title>'."\n"
                ."\t".'<link rel="stylesheet" href="../CSS/style.css">'."\n"
                ."\t".'<script src="../JS/script.js"></script>'."\n"
                .'</head>'."\n"
                .'<body>'."\n"
                ."\t".'<header></header>'."\n"
                ."\t".'<nav></nav>'."\n"
                ."\t".'<!-- Le reste du contenu -->'."\n"
                ."\t".'<footer></footer>'."\n"
                .'</body>'."\n"
                .'</html>'."\n";

$CSS_snippet =  '/****  GENERAL ****/'."\n"
                .'html, body {'."\n"
                ."\t".'margin : 0;'."\n"
                ."\t".'padding : 0;'."\n"
                .'}'."\n\n"
                .'div, header, footer, nav, article {'."\n"
                ."\t".'display : flex;'."\n"
                ."\t".'flex : 1;'."\n"
                .'}'."\n\n"
                .'img, video {'."\n"
                ."\t".'width : 100%;'."\n"
                .'}'."\n\n";

fputs($HTML_folder,$HTML_snippet);
fputs($CSS_folder,$CSS_snippet);

echo is_dir($nomprojet) ? "Le dossier a été crée avec succès." : "Le dossier n'a pas été crée, un problème est survenue...";