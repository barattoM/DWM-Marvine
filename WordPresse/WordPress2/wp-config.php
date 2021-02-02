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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'C=}wo+!jlfZ,=0pk|v=oyidVcOqdUX}U[Md8AZylTov*({j68(88Vu[UBH8c9$*g' );
define( 'SECURE_AUTH_KEY',  'DF1 1J;0xUA1o?(ul9nU^O?N)d0E<+4H{m>xG%3Gvgt:c<-_xHZSD#RSqWC!aXXG' );
define( 'LOGGED_IN_KEY',    '=tR2xQf?6^&oj%f6w&-qK1@+g*p%7iO[]M=6y+VF7{P V_P$-{vfOab~M8m>ik=(' );
define( 'NONCE_KEY',        '5B1AC4+EdhWhq}Z(WIFxBoVj/{6|(@.-67^*ompPVLlkCVk~3I&(;bj$6?,`4Psc' );
define( 'AUTH_SALT',        ')xgk=N1!Tyk  G(?d`DVG:9.#:Qm|t@`+O,f2EA{]^A2cQC;L@{=Fb<gC[;L R#U' );
define( 'SECURE_AUTH_SALT', 'pofIy/fP{84=s~S9_}|pbNGZ6eYYv^t.zQY:+jJ7GKhZa^@OsYZ$:WUpfy9KZNLS' );
define( 'LOGGED_IN_SALT',   ',,o>)[ 2Zz:t|k{T_4os!dI(ye.S?vul1_dM2,r:8Cy_vXfuTl8ap6=J%%$j9f[a' );
define( 'NONCE_SALT',       '74YnCfKAs/TcCa(~PDxWTz2u:r%Fx74S^#jnJ4n*q_unW P0W[tK^^ sy*$jps1B' );
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
