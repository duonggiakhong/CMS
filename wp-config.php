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
define( 'AUTH_KEY',         'Ey#CR$:eQ5}0g4d .ZG@Lq_Zr34DD?P&/_zC,(Bu[t:WvCjY{r-Fz,u>hL}<!ED!' );
define( 'SECURE_AUTH_KEY',  's,~q2+05(]8*fA)!6-txwl&UrUk=Q=kWm6Vv1@1C|BG9;vY~Q[YHoU=W~JHiy/PI' );
define( 'LOGGED_IN_KEY',    'mum|tuiF<6>VocuJnXZ(HF+>U%l!s a; A;VMxhiTp!;~[)v#^NKYC.P%~IHLjuJ' );
define( 'NONCE_KEY',        '#Fw3#lQZo@6 ^q3fj:V_O;#DLck4s#L5HcXe>,mXts,?&?C1n7$og0h2,c4NRdAv' );
define( 'AUTH_SALT',        'jIzzvW~jW:}x{]_U0P1EDp#5]]YXvWyE7puPc-s&KarcL[U7aXfB,1taT#2+O~>8' );
define( 'SECURE_AUTH_SALT', '[K]ol8^4&cbN0N0Sz;F>l>jz<Ij/S|OS:<+0Cm])|!E!2`J7fZwMdsq/COut+T(&' );
define( 'LOGGED_IN_SALT',   '3N+DD;(11*0?(t<`^hXj:k_;0j+v<[7Iw8*yaE%)9IqzM,.;PPaYUH|&R/-s65_V' );
define( 'NONCE_SALT',       '#*C4kH-0xS@]z1UD/2^d=,n`o.vmJ6]*{ZwYlj0:j2h:u|GP BpEt:98VnwcH^W%' );

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
