<?php

// BEGIN iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Désactivez l’éditeur de code - iThemes Security > Réglages > Ajustements WordPress > Éditeur de code
// END iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'xCCM0?4ieiQX%O}@H&^xiqM 6uU>pXRqo_I:%,<<Ewl_:8N)}eiPMi)qt68(E)3C' );
define( 'SECURE_AUTH_KEY',  'MRc1Qa:%aW/{S_tA[n=$t0+%kmWXfbgEzjt46.|{L~,2,HSSKE)f)epkf?Q#Jl}`' );
define( 'LOGGED_IN_KEY',    'n.uF1$Pz IWCcBs2AR`[lNk~M/g}E0&6>MBz3}cEV@{o^L YGwp]c]e7th6m] YJ' );
define( 'NONCE_KEY',        '&6crl^3<*orz`3Ut1&6O?]j{8^S*Wo*E/FW9.^XVnZB8~/Ow?6b}+L5v`^+waFW3' );
define( 'AUTH_SALT',        'dT_uzlz2gMhXJ]>{c^aXvRVO5_%7d0c<5-*C619QWZF9~5XCVHf4h<yxHYlyr*sp' );
define( 'SECURE_AUTH_SALT', '_Tr=vw/u|YS>F%DR2Rh/_N0a4<6jN|6G>XR@[S]0LB;JIuqkYI5{7_:mO72Vz(?b' );
define( 'LOGGED_IN_SALT',   '9Ha5X(BC+3oWW<t-;|D))h_TwDH<EnXZQBeA6=>WKpQW]j%CqNuc;Ipe@#?rSga+' );
define( 'NONCE_SALT',       'V90A74QL_v_gr-]Wo^Fpy}{bQftc??RK#4S^`1h:bepCxn(F?2c%(9@C>4P51$ly' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
