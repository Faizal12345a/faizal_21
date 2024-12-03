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
define( 'DB_NAME', 'faizal.aa' );

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
define( 'AUTH_KEY',         'w%S`|.YI s>#tCuDxl(JD4GnK33Ye$CipBw(Y)/Uef/lW#!fiiaIz(m>^VrD3U1!' );
define( 'SECURE_AUTH_KEY',  'OL+R=U!&%&/#.=11^iUJ67#TL%1*ZBv_gTEJ,Ty@2^PwpVjK`!=[kc3xxN?Y(%Hx' );
define( 'LOGGED_IN_KEY',    '#W%E^U:wqP(-D3,eo<T]kh1SUF[-6sjuFKGKAjgz<{Ckh+g`@?lZ{.;Yk{Wb#M9X' );
define( 'NONCE_KEY',        '!-!CX{I$S[HEX3paM7WaH[qm}/(#$ lo=^t7~_^^v^}|6B$-X*V@k~6m?i*&IP4I' );
define( 'AUTH_SALT',        '#_>$V-/0uCjP1As#S:BwQCi2r64LzSKr|G`]9;Qgv=./-%<Wo>L2B_@Ry?5W;Vn?' );
define( 'SECURE_AUTH_SALT', 'DF(/YXIK}CtB.>Jvl+e%,L<*F*R^kKX`WKwBq{d0@0-|<0&y -`+LtcJvv?!NeG<' );
define( 'LOGGED_IN_SALT',   'WwT82(0Z3HZx:QgDI LdiGhb:}Y#0vjDNpgtaI#RGNW1Z}[33oQu.>:n(H!jzepm' );
define( 'NONCE_SALT',       '1,r;H;qgQO;75>@>Jh[gA]M&d`A]yRDdnCrA6#cOx6;ZR36;rMVSV4/;({AjCWtx' );

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
