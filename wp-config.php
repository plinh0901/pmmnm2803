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
define( 'DB_NAME', 'plinh' );

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
define( 'AUTH_KEY',         '43;0`wP,>yh=0Xa(V;A>eg6YaZg!}u|<Y3wsK@^|||(mb)2uMX]SHh` CGDe4$dh' );
define( 'SECURE_AUTH_KEY',  '-C`Og?0z(6wk:/*@8-h0@(e8(UA=0r05n_iQo.key1_Y$~fJXWVtJZ%XYVhV%`um' );
define( 'LOGGED_IN_KEY',    'cz8csw&7JpSr5B_C~7U_el?3(X/g4|/uEt=CZ/Mfi|hI_>o]xIT<7Z(VKo(1hm3C' );
define( 'NONCE_KEY',        'R<Bz%I/-Bv7M~eP9Xp,(IQ$TwM5W0K;A=C2Jt|D^R0I17t>lXRfY$UKzwl(AQbu3' );
define( 'AUTH_SALT',        'KWeD|^vkR$60_rLfCs(8~h#hhV0{`%B&=N}@ydi)JFzj9]Vel_7vUP#Ts#G %DEX' );
define( 'SECURE_AUTH_SALT', '[y:Q>W-SN5YFU~ ~<kckU>967CwB4{OP(Ry/cs9[hj^QrD}:`8W?Hd3)zageW(z~' );
define( 'LOGGED_IN_SALT',   '5A(<LPNvn&Ve_T2(X6LSw;P4iK*Ig c=5e9;^N[)hOU*Bt`<oY)fiXN0G}RX<{:?' );
define( 'NONCE_SALT',       'J5AvpPSB[2iVPkF7~Kp_.it+N!]z8;OjECT34E:MBr`~p;M7x2ZuO+<yC@T9Z D5' );

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
