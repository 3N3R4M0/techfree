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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'techfree_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';r(X({+?U-B?h86$G0T;wIDLc>ULzD[8ihj5k2tBUJgnhd}PlU2t0ShEU8&?3ZJg' );
define( 'SECURE_AUTH_KEY',  'dtF;ZCPny8HikXA?zCQ|K}-ZZ9W%*abYhl&q5V&R=Z(|UhUT2lceksWP#D4kS55o' );
define( 'LOGGED_IN_KEY',    '#]]Y-Bi+r$en4J-HGNV7J8A)ZXRB RM! _ Tp*(>>kO(;o!]5F9$6*d3C!MmP!^7' );
define( 'NONCE_KEY',        'f(@3VIyhF_QBhIaS)mN4L/GY>IV9;=c2p/-.j;K?KjKj^rU/CYXg^u@M~#H*1ET0' );
define( 'AUTH_SALT',        '`_xk)9s[y.~!m)X!1>HW?:jP}^z1,eoD9e6fy0.vvqEi-|r&Rz&r3LcTv%io|bN ' );
define( 'SECURE_AUTH_SALT', '*G[j-;|.B](3[%5G)@~htks}2-p)Trh0!J7]_!)7mf4j,chM*Q}3!/sEZjs( c$b' );
define( 'LOGGED_IN_SALT',   '6UZ<zf?<TjjpKE#eGg=vMd)n3{O}JCu|4E~Q)|U|qZs[0LF1m@`cS475)yU+: &N' );
define( 'NONCE_SALT',       ' =IVxN=!OH1e_b@5ro.QX]|~=3J<cAV!j; Jk*}0y#3a|gR640rD;!$r?hO6q5cm' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
