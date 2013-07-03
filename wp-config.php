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
define('DB_NAME', 'asplund');

/** MySQL database username */
define('DB_USER', 'Grant');

/** MySQL database password */
define('DB_PASSWORD', 'GMYady1234');

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
define('AUTH_KEY',         '9-s^z^Hbyrk`/cDa4>q2<Q3)ikW+Ghu?AV7~GZGFV!bIZ%;gwpgkw}}NA(};a2t:');
define('SECURE_AUTH_KEY',  ':,rLV7Nhpbjs-6.MQi}$BhY! dCma+|G,-UVvrw-1O@(0U0-0zy]+}4>VBVe7b_6');
define('LOGGED_IN_KEY',    'N;s0,CdT^pAed4y2{vX,z5|D-w}[S+JF_p!Urx7y#=!X&~.#]&|82X*TM1HDvQMm');
define('NONCE_KEY',        '/StFE^do+8/<HRm6)8+(H%!fDfw~)1mxh|AhHdF0^%6i#wOcAP-:9Dpb)|F#CYV,');
define('AUTH_SALT',        'y8&tK,SgGp=-UsB</`-q=hy&p,XD#Ors.=+h,-`b`5co,K5W3dZlZ%!}2m/7@ciG');
define('SECURE_AUTH_SALT', ']9|CQ5Nz%%?%djFYjXnz+%C3rLq^p<# NLzdR>P?4LnGw|yJN5BbLXFIC-#W.Ou*');
define('LOGGED_IN_SALT',   'SEds;Z=,N(,*-xw$hD~;<Hr:2%J+i0|`cV!lQfW^7wU(i5&~G~{MYv~_N8-c79+j');
define('NONCE_SALT',       '-x^se%aP.L)T/>PV@|{5iJ$;:5{<TD%`~*_64 ~Yh(/<3uj9=o)G0PHg~/{b.Pj/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
