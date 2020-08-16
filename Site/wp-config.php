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
define( 'DB_NAME', 'weedzen' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Admin1234!!' );

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
define( 'AUTH_KEY',         'g}b1i#C&1+/%EwV)tcdiO6ZeH3@bkzH@VY9Kp~GhJ#fJzu=~Ak1#^OPWa!X|6p L' );
define( 'SECURE_AUTH_KEY',  '3$+sMbfQmhRv]B?t8Bd7 ZJ<W[`Fr4P.|c=(=bQixQ=[p`me/LOU8C3}2GUB3RN?' );
define( 'LOGGED_IN_KEY',    'Qo @*AWW%:(0X{^^{~qxe.s{{5)G4JU)5K1{W`7LZ<B%{/lG$Hd*0Kd(TU[^:/Dm' );
define( 'NONCE_KEY',        'v1Q.]@]m<-zp*`+]P|5?R{akequwpLgkjXvOovg*I|-c6wTt k/c$Em*Nwfa4Z44' );
define( 'AUTH_SALT',        'f9R8pMW(gOlmMX!gyeYPnVoEN:H*k+,DNr[$U>-kW~&j*<#@W^jqp.s~|(o&^VS<' );
define( 'SECURE_AUTH_SALT', ']!unY)%t,|d&7T5=>[%.;5EgAV5Yl*MS>1@{_odD@ENx~Vl@V;iL~lB<81F<QKdk' );
define( 'LOGGED_IN_SALT',   'kWCPv[niM]{83]m;B%<yb}4E{dlonWhc`_qdzyLzga)[3BBTO:|A|u@uRTY-NvU@' );
define( 'NONCE_SALT',       'v;(.n6dblcP{okRN0AyqjIJEWuXO N 4Dr> o5ziYJ%m>G#m;Kh2$mA+ nWykHs?' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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

  define('FS_METHOD', 'direct');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
