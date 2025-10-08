<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'karasco' );

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
define( 'AUTH_KEY',         'NV;UvFyUo;EWA@3NW0asik.b3JKP85iEOK:lvb;~ry?0Q5*M6sBCc]S}6sR#w|:B' );
define( 'SECURE_AUTH_KEY',  'x>d%=rfH#M,]<B4+sPHE+&K_}=DVVN.P7/U3m]g^XORvX?_Kkp$#<%$h.R3ShJ[7' );
define( 'LOGGED_IN_KEY',    '?#J1d]6,i5KsR/E2<|B2^${6_w};pEJ{-i#on}^[+^XcOLx2krfSLB[>9V^]4!aP' );
define( 'NONCE_KEY',        '%=9V;MFlS:s#AHOJ.>~O<eInFZbd`84^._MKJ`8iB+^:^+G`e}?;]{98yefR{+5p' );
define( 'AUTH_SALT',        '<1`+F7m3eR{A/`K.O=tCE==gzA&dM{3?<jwRHeT.!w0JdF.YkAfV}#$dxgB4KC@[' );
define( 'SECURE_AUTH_SALT', 'uW%(sD]pJxuSu,JK^18H?HRF#$7{6Rg6L~<2GdPrl]&$53a~n^&a-y}l7Df^04DZ' );
define( 'LOGGED_IN_SALT',   'J,:~;!G#Io+&:e<:qhf|o~!-s9-2~9x82`kYFI>5@m+q6VT4Z)+_CpEvf7tR+l)d' );
define( 'NONCE_SALT',       't%qJnF;=L^Emy^Q++udi49Bq1UabrE>1nunEo#f=mK]W`n=:jvSr<.f=~~,Zp$R~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
