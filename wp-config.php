<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thiagobiff' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

/** Absolute path to the WordPress directory. */
// if ( !defined('ABSPATH') )
// define('ABSPATH', dirname(__FILE__) . '/');
// define('CONCATENATE_SCRIPTS', false);

define( 'AUTH_KEY',         ')KO!`#r!CX]o,MDW&{T&!Fu~%Lw{xi,jp8%WWW0N!|3 q)se$o$Ke(WF$/dbEze&' );
define( 'SECURE_AUTH_KEY',  'LE5Bh9-,8k#$-~#VfbFNKv+HV8N#512>18qNxbt7a:qw/v~_W<z{[MIO@ o?xdJ-' );
define( 'LOGGED_IN_KEY',    ':2,kgs8G!:mL9n>IC0%rbPyjv!w$97%h.*KiM4yS<.m1Yh$TY9ZSV5/bztB&YLQr' );
define( 'NONCE_KEY',        '[kq{*p+AUasI=]6y:v5t>io[L>b>+%jZ0n3y_b|n_Mc]Jt@m1,uBA{._k+lpUH-|' );
define( 'AUTH_SALT',        '{u4^0IPU:;JI(oYekCmcOOuDpXKGLyatQz$5M@4-XF+;uGwR.lQ{dO~8saIv@ljJ' );
define( 'SECURE_AUTH_SALT', 'x8mMTGsv[QMZVDBG;Cf#p[]^?i_;HzZ=LA:LtU@-v{M[&eW$P`]`1K$AzUd,8a5>' );
define( 'LOGGED_IN_SALT',   '~lNX;}w0]cOv,xuF^$d;Z~?igFnIj`7;k(CC%7<^K*Mal/]NR,%9vR--d=+a:+jh' );
define( 'NONCE_SALT',       'EK1JZwE$Z/)):nW(gNe=Xs_MX!)]AeRAV>RLLtNtj0(hdD<reJ$FB922KOGu/KQ+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
