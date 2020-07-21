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
define( 'DB_NAME', 'gs1uganda' );

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
define( 'AUTH_KEY',         'ecijRW;4I4If>]#^8:@9<t8F|$^.c9%YMWK#2w`#F.q5qexA%,g>f>-iddi9OpDH' );
define( 'SECURE_AUTH_KEY',  '6&~0RU9Xy]]T.ebP`:{qsZJ[oJ2Sa!w*U_xgF`k&<ac5V@k+/4}N+ttTy:~GGDPG' );
define( 'LOGGED_IN_KEY',    'Kwf4.inI)[_?=LgrD)s}n,wpq^Op.:)at5&P!FhT<JK3:gV7Ab!xPy*E+>81JIWd' );
define( 'NONCE_KEY',        'hhQDw4,b|`Mk19Qj}adj.z_dP^}j*m=Hrkb1;<c6j= a(v`t2VXXawjFSeX@%4F`' );
define( 'AUTH_SALT',        'vk%0eQddsbh*/kn]X-1G{}~l4Y`KddT}L-xI8wSQzsg55Hz1CgBJT=Ul.o8P+-!,' );
define( 'SECURE_AUTH_SALT', '!H<F#H&.M=+h  `K.h/Q;|pEM?`=S)v.k;Y? s(iGxQ?CYzJ(!;^?$ZMVQ$fl43)' );
define( 'LOGGED_IN_SALT',   '/KIBySdW}wm/*K<BUhi!xA`?[yss36EOP-Y~(&`Ci0iTo+MlfAJd#5Z![p=)Wyn~' );
define( 'NONCE_SALT',       'U$_jmG+sL^U8i2ka{+p^;O)<b=>4$Ii-fD(*AU,!jwz $L6Sa]E3+GU*uS-?dk5_' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
