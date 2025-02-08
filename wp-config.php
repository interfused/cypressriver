<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u574872728_LQAxO' );

/** Database username */
define( 'DB_USER', 'u574872728_80jZS' );

/** Database password */
define( 'DB_PASSWORD', 'bvLwB4Qqz9' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '#-t2tBD y(JF84NQjV]-rB@M2P]Qjz8j*W^uX6)m.HcYdf@F6f?T:fSFUw-K[p/r' );
define( 'SECURE_AUTH_KEY',   '&it<#H]oknh&Dp%e}FqBxi9K3t)=NnP5I>4X$Jo[8.1QuL^5P+o=!5!|y9Se-v!3' );
define( 'LOGGED_IN_KEY',     'e-}raUWNGN6~RptTM;(==5U c3%M?+Fw(c[?yd3OmlT54wvpMx5`%DG@~GT+|y{N' );
define( 'NONCE_KEY',         '[zuqk_<c##&p|*W#yh_n8q7!;ScdS[bs7sz1BFQ#w<G})YBvZ*jojkUWvy9d=,2s' );
define( 'AUTH_SALT',         '!.CL_,/gTUnUyB|^e>*NvMAJR*z=r.T=6F9k]p!k)Ik3,1l1lcrKu}*b5>`D%Ybr' );
define( 'SECURE_AUTH_SALT',  '0P g1k5iL,([L(9e>Z`Aa`|=8R{bl67R[tv1V.3+UjpH>_!:`QJlaKq]Xo|VXuu$' );
define( 'LOGGED_IN_SALT',    'Knzej{ T#`Qk <9)9&40#xKZoGds,=43Cb:%00[_01*k]+[E!p|?C<fA]kTA|C^n' );
define( 'NONCE_SALT',        ':}H6(Wy?.]~*+Jbpp_#x8~.Wg5Dq4>4@t6?8_*_!]xVx7sHwB)%qwI+R6n.4Bg!9' );
define( 'WP_CACHE_KEY_SALT', 'DjV{RyJRlC8yK85g&!n/R~r7j>euE)G62-P?G3NJ4HO~L_{>3pb%qrVf_dy)]8~$' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '3853b87edc105b193de748b7b6ce9c1c' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
