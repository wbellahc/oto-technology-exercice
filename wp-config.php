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
define( 'DB_NAME', 'oto_technology_exercice' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'JSkbPXaspY7,W&n{@9;B%B^5uF-m&ZN7^N>O:=[)ytPl%BxF*>Q#KA=G=8}Z@%v<' );
define( 'SECURE_AUTH_KEY',  '_7-O8hg&F)Tqq)U%[h@$02Vi`)FGXZmFhvVi+ExASG>#q&e`jCyTZqF~463Cd:Fh' );
define( 'LOGGED_IN_KEY',    'bp9=1XrVG-rTT0&Q,Q#e 5Yyv-B?zc{BgN__o&Cp@9k915%TMc6_7`zQswZ8T^(N' );
define( 'NONCE_KEY',        'vk-E0>Hy[&^T-y4_XlvLwT_;(<?|Mh,~Pj 2DQ=]15+9$no6^T/@Pr/on 3@R~c9' );
define( 'AUTH_SALT',        '7uUPnX6/@UYD0#Gd+=Jj!KO@)~COtd*Xt4k&PvT#/u&B5f KY&d)Ga[cgaYPB&-z' );
define( 'SECURE_AUTH_SALT', 'LwR,|K 2,3D2_GKE^<4?%1SOHdw$u=meR7*q:T`.:N=Xl=Z%]31zH$$?W_RZ%N`i' );
define( 'LOGGED_IN_SALT',   'Bt7)k)aZ1eOP,1wOpkES~I[z!pJqraI2DI`hM]qr`_1F)104!H;7Fq7or?,f%byU' );
define( 'NONCE_SALT',       '69/y@+ORiz,_*EUdWoCsuO#LGJF6,z]KYo+:jkv{i80RMfH=W/v re)DTm&29&S+' );
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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
