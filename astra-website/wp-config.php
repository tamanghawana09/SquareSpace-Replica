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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'astra_test' );

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
define( 'AUTH_KEY',         '7Tz+*GO=)XS>vEJ?wc;4jgPtGn8Urp7Eo9lx+I/zxrG6:plY$d7~ ze#*oU.?FbS' );
define( 'SECURE_AUTH_KEY',  '-d^9X&P[o6~~if?D:G d@#|-#_1=-,/?S0`bReJ^--jxk{=Sk4i<j~`m[PyKp|h@' );
define( 'LOGGED_IN_KEY',    'in8zbRuJw+abriUVKM&@&*r`IEtFo0]?K+3[O_M7F=3eFKYJm]in[zq*@Atl%)o!' );
define( 'NONCE_KEY',        'b,Xx0Cw.[1>V:IH0p]!uRf{uli?FQu}xNEs{2PKvBU~r76d!K.i&L7ssMp.1)nx3' );
define( 'AUTH_SALT',        'TF=?@;wQe ^BGu<f@$1(Xog$thMsVm2qwbI;X=g 0kh*tlzl~~zvN$2(YshlB(EX' );
define( 'SECURE_AUTH_SALT', 'h6Tk9>Z{]I!$[=tadY[_7ggYdNAY59x~3O|LCx/Y2QM3R1LbZ<}IO.yja]?{i Js' );
define( 'LOGGED_IN_SALT',   'XsT2.MjM^;FE3/U.JT*jOz<u:K*Qfd{It<4=4/#G4L8dbM~^a*;dPI&GjCm>8Wh)' );
define( 'NONCE_SALT',       'R*FH`@NO{lw1H}VQ,[rMh^AZ`nT%]x=~2uB~M^dR!.#,UEs8O6/s*)fNE4}7UXp8' );

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
