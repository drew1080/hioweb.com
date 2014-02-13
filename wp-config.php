<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wonderi4_wor21');

/** MySQL database username */
define('DB_USER', 'wonderi4_wor21');

/** MySQL database password */
define('DB_PASSWORD', '15GhrvwV');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^-=Nd_>%Ja 3b^)hje[H?;|K8-*Pp8?dnw{.;3KNl%ZsG%RM4#n^ShT?@$`7+=}H');
define('SECURE_AUTH_KEY',  'Rg_+-yPD,b}*:sJ#AM%%Yy^9B,]ga0OR<Sz/Sp_bnJ37L9DZ:hkr*t]YM+-?558m');
define('LOGGED_IN_KEY',    'xH_8qi2x>AeGXuEGyIkE9@VrU-|iL4HENu|hq.12[+gLrg~-c1L3z3pedbYAd<uh');
define('NONCE_KEY',        'Ng`EAs3? @heHK=|Z*c>T5J([z>U[Vb`<HCx5(56@~+50(-&=bCp%}|=USyL#mS2');
define('AUTH_SALT',        'easFi]5D]&-w:OC}px!+Q3aVwt%eStfM=|:^}6->LyTuS[[lYO^.lD+V-B2GZ]2j');
define('SECURE_AUTH_SALT', 'sA11=tIa$ E|oWU:oxVr5,@46k]#|Ig505;1lm+f#&.M8::!N<-BFa^z$6^l x$R');
define('LOGGED_IN_SALT',   '#VH9o)}ui5TWi>&eP^h5>xEF,|cURlyXgAuf@.jN/t*nFQ._=l>K,}|wbsu|_+>F');
define('NONCE_SALT',       '32-0Amx 7J% !z,A77YwaHn0=tS`vu/5 43g81A6B T*&v:2:z;_Qo6`rc../I[6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kdw_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
