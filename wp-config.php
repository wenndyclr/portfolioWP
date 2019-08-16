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
define( 'DB_NAME', 'portfoliowp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Ku(F FHj%y^vitK~*s=rJ]p75od]s$N_*2#$O H;_Wc^`Sj~o5LdiW(e.HrP^Nb>' );
define( 'SECURE_AUTH_KEY',  '+XMCS@q@Zm2ls)c2wc3tG{)8y)U.cj7>|jFx_NtQQ^ZBvc_R8$]>)=|_fJ)S$,Gk' );
define( 'LOGGED_IN_KEY',    'Arf)vn>fy TsNI.A8kF-;bTHy]/uMm$[@U,-,%Er 7(F.4hB%x5a]XVVp:@<&SD!' );
define( 'NONCE_KEY',        't7/<^.W{,44Ff-O2j<h0^9D8{(tiiyU+hp=x##Q2y]O`s>s U4,Z {]51*=3}ZEU' );
define( 'AUTH_SALT',        '9?p]4uH]}%8~grla`cyWpk;MCjf_+,J%M.kS7Ia!Oj)FQzdiU.O~bLinUaNus&%L' );
define( 'SECURE_AUTH_SALT', '^2{0Soih#bz<Au8L9Az@Y>pw:;co/~bT|Dr%EFO`tuLPq4/:aGp#:re0-xT)!r0W' );
define( 'LOGGED_IN_SALT',   '|[`68[1q4z#Cm%q9=%E0x}eSq%ML@~dqjZUsp@^?.m2hHD%_>;dxiGsikb%A0WZ>' );
define( 'NONCE_SALT',       'kl$KIx!mY6$sE<PBRJ%gaISgv9VEV:3QxNDCz4$mI4uIb6wQlnWWqTfa&fsH<kqg' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'sw_';

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
