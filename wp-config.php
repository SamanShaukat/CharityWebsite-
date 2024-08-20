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
define( 'DB_NAME', 'CharityWebsite' );

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
define( 'AUTH_KEY',         '{:!vV_PVk;9,U6`vE*1 HR6ycE1[}-GQ5_saa9NznK.IJ`E_Y=W?|KP!P4$xh>Pg' );
define( 'SECURE_AUTH_KEY',  'QT1zfP-9, S%)e.nVc@!,;i}A0KJ,S @>c>Jj:;3G$SK/@(Fa:~)JTqqnzUl2di6' );
define( 'LOGGED_IN_KEY',    'sk38|1RPG.pTdER696~F )kYUYg~XR>XTlZ*W&_%x-w4ZG(H{)]|p/Mgx>tQCa3f' );
define( 'NONCE_KEY',        '#T@H*fZdkQA16>>!k^u%vzb&lFe+`I<`=)JB]qP?4oV^$ea_DqIw:a9uczxF>J}m' );
define( 'AUTH_SALT',        'rmMpN)o)Y=[-1(]f]bH1WPW(%<_Q}L]Gf&w`14q])A2-4e5&v=JE+n==ufU4}x7r' );
define( 'SECURE_AUTH_SALT', 'z7}C?b^i(L7>3t@-1gRjBc_gcT?f^Zp6O^^%$ZL|2)l#~FS+k~N*`QE+XBv)}[sI' );
define( 'LOGGED_IN_SALT',   '[^ :-_ %mH#^wApU;j^g&}<5#JUm@X%Q jTBy:W^Q{6|qSj}%XU/}^*?q.06Q+eA' );
define( 'NONCE_SALT',       'fEva{^CiFoHbOzJ~ZM`Iy#f%$vf7!qIG!m>&_>F{Z$6/ig/)*z,)DB`jCW]2y$4u' );

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
