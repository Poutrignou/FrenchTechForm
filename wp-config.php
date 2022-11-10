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
define( 'DB_NAME', 'frenchtechform' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         'iJ9s:,^1~?~ULU,7!>q$M`v:=&$H`6%mIjS<7/f&hmGvLYsNbp4qxk27rl9@x/u9' );
define( 'SECURE_AUTH_KEY',  'RL83l2m6*u-X;xVV4PH@4ziO4QO|Ns~:]C@?:O^gM9YPL_Uwjo*7uzv[N:p[kV~!' );
define( 'LOGGED_IN_KEY',    'pU@*%<UPM+@4kBEy~5aR&(4x/5ZU ?qIlvrL;W(Bl:*o{UX^23C#%F,3h@?FSsDL' );
define( 'NONCE_KEY',        '}+1_uxpjz@v#/;T*5r5yEa1CdtR5n--> l{N~TZb3q?J$r|M<k1*s<;>n:!KO5:x' );
define( 'AUTH_SALT',        'E<[b#)-K;^0>9r,rQ;Eb78<Jy$8J0e_tO+olj_}Fab=$2pADj4Dc3vN.mF|DQg3,' );
define( 'SECURE_AUTH_SALT', '}|UD9H9ZQFA1 j0%U.6ohgEGgNS+2tHD`=)<`2A2r.l7QbZBwR?iz,#[gTF<63,r' );
define( 'LOGGED_IN_SALT',   'qIF#c riwUqQ4y+01/WeFmh3ywr-0e%4!u$lTGG?(<}.28u[K r@1RI5f6dlN8Ev' );
define( 'NONCE_SALT',       'u/lDFvf,QdDn9Kw!{LptNC1Yg?ByX/#(#S;JU>5vX)6U?,&(Ptx[]6uL)r;Oz]Q]' );
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
