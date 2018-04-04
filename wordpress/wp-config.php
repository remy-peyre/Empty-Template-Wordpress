<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'portfolio');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7zq9sDH]G.-TXrG1v3`2u5QWvL^,/:FcsG3j+E#S(^Ov5v#W;?}TarqaBYjt|Mvb');
define('SECURE_AUTH_KEY',  'w/i{{L17J<h&p*m-X(/saV/W%tAuU-21D-~&#Uc+IofU0p0*@amm,jVe0fP-{eg2');
define('LOGGED_IN_KEY',    ',e?~;$}dR?x7{j#n7>30iU^eVnKS.^1z;+|=#Bbc$I6j{C=5mpVh3yH><#k+FGmE');
define('NONCE_KEY',        ')*NSCJ~R(>UDRrty7,Y1>P~X-q;yeEWOd^9k%C9-JJN^*o4wFVU}/hz/cpcCR0U+');
define('AUTH_SALT',        'Fbs,83`6S6U8F^=LaKXt0v{}QZ+jv)O8hNc05h$`AEH|`6-:+&q3dgt>^_4]cD.V');
define('SECURE_AUTH_SALT', 'hlm.*1gPu%>YU?zCJq4%MR-b$GgIZ&:TK>%j}ezgeh^Hrr$x0Uh=pw 5U/z `oQ&');
define('LOGGED_IN_SALT',   '*E 00,5mf8pNvRE@h>U0!&[ilh>Yi`kxv9?Nf6kNA!^LQ^;E4P!;b%;)a42f;=g3');
define('NONCE_SALT',       'H8/[3mi.fRQHp#]>3y?hST=#z&1oGg}EEl|ewgzwHpbd6ay_&.vf2=PBo |=]7>r');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');