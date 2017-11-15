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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'test');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', '192.168.100.13');

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
define('AUTH_KEY',         'B_04K|KZVg5So)?nw?>Unzat7T1{,`R-gsg=u+r!n$mxSZ+ChzwKX6=z6W]DT=s#');
define('SECURE_AUTH_KEY',  '9+&O-bIHlf0u+E!=h+wQv&{N-uCUb+gtYFvt86uPTv:PjmhL)ibVd+(Bd&_5,HSM');
define('LOGGED_IN_KEY',    'i|?{ g_m=_.wOC8j`zd6YK-jsGfocBR{a}kpUv/nxui4~-d*[[shYUj-5!{fp2;@');
define('NONCE_KEY',        'A#:jM1@fJ]!?Zyv,Nk<~Nu19Nd.Dghf$oRn6w!Wr}{GJ&P5!J78yDpdFCS;^5fu$');
define('AUTH_SALT',        'y2hOU){1UqvpVjzEBZ]U5(Q7@:7o2*6jev~UZAU=IY&+YL4!w$C]6V#L;WK8(mu>');
define('SECURE_AUTH_SALT', '>c&Q:]e|k&z0y0h2!1}uc]II1<kc/v*/ izGwt#h1Hr}^6`T_2/BoZ/U2A.}*]`M');
define('LOGGED_IN_SALT',   'T|ve__B@imM}E53qnSZOsTExKW?muzPkSM+nRQ;GdU2#c;#P%$yM6roi,+!l`dy=');
define('NONCE_SALT',       '<zZXXx`V:wnF{To,!@b(ci~ucBZB( t.CWv/l:H^IOOr#p#l]*Wg@h@bJ[;Kd%(s');

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
