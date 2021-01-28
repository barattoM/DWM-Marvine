<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpresse1' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'WordPresse' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'lN1hTO 3e9w6>VVWIG6ntf/-]A*pTmYvrc+>x,;e**2$7^VVmhc92~y{LVZuN3. ' );
define( 'SECURE_AUTH_KEY',  'itL^sU()R5{fDROE;t,CL9#feeG%p+)+Umm<hwDoGK^Z)}k5)d/~,b&(~:mS[Sg>' );
define( 'LOGGED_IN_KEY',    '6tDhS_(fE8L0S||bd8ezO4h>{2_!=$syA7cE|N+ti|Yr*7DLYwEQd[ir$i9l?h.9' );
define( 'NONCE_KEY',        'rQU]+$E1+s|>R;(:d`ZbeG/a5g,^Am}{w=D)6E]Aw#7JucyZ|Xd/0T%f,7)/7.!8' );
define( 'AUTH_SALT',        'Cmd60|2too_{z`(`q8jZOUsMG[P+-`6,@g&jXdD-MB7.V!?+ /!<K_5#!n&lv.HG' );
define( 'SECURE_AUTH_SALT', 'GQ~}@;1-sp+pLNpmKP${A*dI>ZsJ%9Trq;{Ez;JNk(7DBFIQUJ`SCGF{ixMfa/#+' );
define( 'LOGGED_IN_SALT',   'DP_Ya41Bu;c)1t3_gIH0gAnT;{LdyQ[;Gg}FMCAL$6sa3?PEc.VhH)w43F)zLt3.' );
define( 'NONCE_SALT',       '=JI8WQ*qzT|!?>D=e(```0*8J V^5p41_L7`Wk;qi%bvui,1,Z(l2x>qO5BHi-;8' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
