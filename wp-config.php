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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'heritage-estate-planning' );

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
define( 'AUTH_KEY',         'sJPk;~R_W!~b*GZOVOO-}HorvP%`/g%LQo+c(wyTS^aH0z/?bw#2=X1!*s7,lTV(' );
define( 'SECURE_AUTH_KEY',  '#2z+M(g!:fE#3 %!X!V5J_c}`1Zbz<vm]wq8.KZs7??1cVH8U&XA4<,sRPY!OK.r' );
define( 'LOGGED_IN_KEY',    'Ghhe!?]8_|V`Pi#nc;L(W4%;;TzJ$#Qu;;z2^&7FS)!WtDU,UISqNq=gw#]H]S]K' );
define( 'NONCE_KEY',        'Au0tDO2f_&88Ivxw,n`c$56r_ye@gTX4a1@&2F%,MGCJ@#6=DP}Z}PaQ_d^aA^?q' );
define( 'AUTH_SALT',        'vTCt=g ry&b<znLn|D01KVTFE:l4T[C^}Fc.zu:M+h:}zC|OK=|Y1>{8OlGP0gc~' );
define( 'SECURE_AUTH_SALT', 'Y_ndO$u.vBm]8o#v:Aqt7ndUjR4{A/h<ok?1)x=-j*&}6S) d2f`@12fOgw_tzva' );
define( 'LOGGED_IN_SALT',   'Rs|WF_VxmWel~,6Nagthj~UhE3rwL$>jgVY0::F$SPuFGAm%m@Q%oX!WJD?G`pj(' );
define( 'NONCE_SALT',       '91j8$sfRW~sC;v}d19.0>9NIjN sTyPexp(m=<.y_6f8hQtCS,Zu+Ce(}66)YLcG' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
