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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'jiandre' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'cip-mysql:3306' );
define( 'WP_HOME', 'http://192.168.99.102:5050/' ); # EXTERNAL IP
define( 'WP_SITEURL', 'http://192.168.99.102:5050/' ); # EXTERNAL IP

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '20Tq7M`3-4$U-VH%gPkf?igA$?9*;(c]F>,i%Fo199qB!7- #+=H1G2+W`8Y>N|R');
define('SECURE_AUTH_KEY',  'n%M*COvX)aLwM%ITF3qj8AT-TL:]}>H@:V,f{YtiL_ApZ%xGF4fk)l+d1l[aCY<Y');
define('LOGGED_IN_KEY',    'y+YGu|.M{{y5nN5+j3}mfe6qi4h* 9fZz|=-(/T:xkM<X )><3kj*,%Co~wf|u<?');
define('NONCE_KEY',        'w(9Dokr`].E 1!&0)J>f?5^>*Dy](:++%;k,ywQtAj`+V@EL2?+VZ =%Y;#Nss`2');
define('AUTH_SALT',        '0j|p3nOObQ<Z35T{Nu->ZFlXPhhwuy?uTY$qKQRs1^P%4~F:YBpKSELxyi|RjV]@');
define('SECURE_AUTH_SALT', 'X;Sw/:G!-*<c/drD~+dWR6B^<NM,*&L,dl:>3+&k$Z|[EB5,~tU}p[Q<ud-P%|a>');
define('LOGGED_IN_SALT',   ':i9HSLS8opV.9mvY05)OLCgcPdt2o[MfXBK|JMqEH&hT74r_iu+ 9UvL$%+eLf00');
define('NONCE_SALT',       'k-_9aA,@l?^C(!ru<-6w&+&@V{jpGUAoDV9k`3:8+ZwRkCr:dPti^T(Na#wKvCsC');

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
