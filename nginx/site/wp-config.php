<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
define('WP_HOME','http://jerichoesber.com'); 
define('WP_SITEURL','http://jerichoesber.com');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'supervip');

/** MySQL database password */
define('DB_PASSWORD', '2Sjq17WlKeugmCqNxgys');

/** MySQL hostname */
define('DB_HOST', 'mysql');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '|&x~x[6?&f;~vF|R&<&@?3(>NJ|DxgYPY>j$5ry9NcSTk0-W DN5x]in`}+X?h&1');
define('SECURE_AUTH_KEY',  '`O;Cn~eCH,ua!M&5Wc{.rM,NunA*{Z6HsA|O#dh*%h0{A<70~{L..7rKz>+.+>im');
define('LOGGED_IN_KEY',    'iHzSWwQd_!_)OAiof_79E[8NXH8:sc]z$,hsdLl#CVR|C^H3-OyJs?cC|0)dX?Gz');
define('NONCE_KEY',        'W(F=q&2o0.sFTcmLG!m<hhd.8:bC+`R]?-J U=Z;@EH%VTk=9unN+]FK4*+|T0&c');
define('AUTH_SALT',        '-q|{h78Y,G8-{~),I%F=^#_[@|bH5(jo?jYWG+GJ0Hd-1)4ZHI:&moYx~(v_HC;R');
define('SECURE_AUTH_SALT', 'JfzE*UzCtu^t}5fXLExaY-o;`FRHiRzr2C.%p[ T^t;b,9/C>K!/8eyXBjG]dTx_');
define('LOGGED_IN_SALT',   '=>%T(#FdH[ZZ?K|/cDyw{TP`<=j%F%W -lre!czL5u)@/khV`uxc+%+`R:$>%(Hb');
define('NONCE_SALT',       'V)__beMCR-LCjlN$>PS@FX2ubVL{}!~L|dKAjAfrhA4e+9V#c66*Qd).bb?!}u()');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
