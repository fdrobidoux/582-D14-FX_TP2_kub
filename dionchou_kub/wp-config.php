<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'dionchou_kub');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'dionchou');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'wpadmin');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'G-tYXdNYT6w]-@mQwX>ZC{&JOkdXL5/H|N+KdD?&P*e@^-~?aZ{Z?LBWlvYH|r.t');
define('SECURE_AUTH_KEY',  '9O%Ls4bhfR:#kq+vbx oYIuj-@Wy9eF=${M7mO !w)OQ g-32?0 GKMK-) czB&Z');
define('LOGGED_IN_KEY',    'RJ1-|FgVMzz@Za}3W^6ii;[lga156._&6Yg<eWe5rn#5zBUue|5dkr|=sq3]5I#:');
define('NONCE_KEY',        'h:Fu>l|iOP+52sF=9g,N3P1L^<zc(G{>*IAy9:L+5oS*&Q.7e^_ER(}+$K.T*+Yx');
define('AUTH_SALT',        '.IAP.f [tGhJJi-@D]?tr^%T.J6A84v05aK0/h9Y|--A%y/6.qbW$%iP~;<{,-{d');
define('SECURE_AUTH_SALT', 'C$Z-|]BBw 9LVD !{j8[3/LBz3~r#3-|(d0fo*@2vP)PCueQT(-c+hT(7&!j)KeF');
define('LOGGED_IN_SALT',   '2zSTJgj:|wZYo`Pgv`iazHn@4aK!0^Z|1N5V41+Af)@c B|Cw,u?BE#U2kL2NF;:');
define('NONCE_SALT',       '+,tWAG`)9 t4ML|}-x%RZR>ZM,lQ^yTf0G+5^Ja{:?Q[n]Gk>VUtdrN#P,$e~Mn,');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'kub_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

define( 'WP_MEMORY_LIMIT', '64M' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');