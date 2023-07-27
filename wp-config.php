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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'drGZ:~33<)|{{27tIR6884Z<.U+<q;S}H|I}mZI8@>n%.fQ7p{SY@`@`%<w*Y*Jh' );
define( 'SECURE_AUTH_KEY',  '_K@QQ=|=~P4W0VBKC 9oC|%g-%OR-bpy.FV[ d7X7D~GeQz),Kp>0uxpw7G/C:@-' );
define( 'LOGGED_IN_KEY',    'T:!xw84}m 1?Rl5;>s>I_.[Ge43NQo*2w4n|$);>bR xfKsh>|1S8<t_qo/n-kT_' );
define( 'NONCE_KEY',        '+gPhKSVI8(<<oa~&F&j>{lD=N LC*7^>S_9ZJa`4%0$4$>S7?f:3~Le-t<A*m l}' );
define( 'AUTH_SALT',        'BF3~!cuC)IMk-o!T|0^+m4S#h)lB4be6c`$i@KI@e3!W6W%]clxN)VJdr7BKX#)(' );
define( 'SECURE_AUTH_SALT', 'DG7fRN7KFX`4AdOti2_iJY>wiR5j}7Ky$i}Z(V2%:5!4%s;o{caL|NYmnn$XE%g>' );
define( 'LOGGED_IN_SALT',   '3eKjzsU;6E|_W*&BUg>Cj>/MGwyxADlZ bn#aY)RTvzyRl|-T/jA$|Mn*plP8~yb' );
define( 'NONCE_SALT',       '_B6dDOPW3d$x-jBJIq^v*_[v1V+4B2i=<)jx,1&.uB60!bNx=D6[4[xF+5K~9gX~' );

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
