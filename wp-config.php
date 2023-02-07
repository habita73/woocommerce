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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vaatatec_wp_epay' );

/** Database username */
define( 'DB_USER', 'vaata_root' );

/** Database password */
define( 'DB_PASSWORD', '@@Database123456' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', 'tg/S|q[wPX9ab)b1s)_-0I/*1u_00gQ/3HJD3_39)/2s3dn67]OegA:U)w58RKIo');
define('SECURE_AUTH_KEY', 'b:G_JK8Pz41oI:8y~V4R36+nb9IExB8o+:91[rh[XV_*75zxX6-1ao-M+%u[Aqyb');
define('LOGGED_IN_KEY', 'qVo14]2OpFHa21:1nAx~0O9~~MP;s)(z1yfR/7D(r4Ms]99bSX]s+chbZ*7Rfu88');
define('NONCE_KEY', '1:2@&d358NvXVPKQazX8%X51X0l]mr*0taL1~(b~3qj5&N07!/4/hUR6-aw[Ku|6');
define('AUTH_SALT', '2bw8Rh]6&GS|54r~BZn/d2udIZ]XS00o6O0+760B636GFe5ifpD5S/M!6Q7rNRw4');
define('SECURE_AUTH_SALT', 'f2kyIK6)@r&q1K1551&a54x788e29h@|S5j9W_4&W![nFKY~e&+93-hl!mX*U)ol');
define('LOGGED_IN_SALT', 'i/W@SUV7;6vGg7~V0%ALB2)m]u1tB/+5]D-)!qg5asZ9%P3EOc-4E~PF0RHV8h)7');
define('NONCE_SALT', 'k_1p4LI&_p8A6/9L1)qA51ee(Q9l1WC-Z-gF[g86971B3/5mSPvXj&5B5V|/94o6');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pCwg2D8_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
