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
define( 'DB_NAME', 'amitabh' );

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
define( 'AUTH_KEY',         '^xW>/F&hf) G=3&Rzb4AmkU;XsCOIS%u|,TUD$.0xeeBbJE9-d6]& hb`#1GLk<A' );
define( 'SECURE_AUTH_KEY',  'ma}O||QKCUz6PvmGA]e5ae3fx@-lZflmLHXU[JjAC(~wU^)|N9:D&30G7(ezHYV/' );
define( 'LOGGED_IN_KEY',    '6< q~]k:k?L! GmWf;=[/jklhGNCxdFR{wgevX@|ziG!A0>>Hi`q/0i3gjMRS0{9' );
define( 'NONCE_KEY',        'T}H/!Y|YOr%5YG4{dm!(kJ^~0+k(!1@<,I?iyY[DpR7;)xoreycz{ZAP-{fjt4Zm' );
define( 'AUTH_SALT',        ',N;L2J#:Yf^1A7YzRB*x}Y5*Z^>dZ2>?!)NRmS.Y-ct|#h1&n.&c;HpHfE_#qdCO' );
define( 'SECURE_AUTH_SALT', 'vt*vV+,gT2TI9f~+e@8,a)DN0bE7Jo+yu3,AQzs`2V+9b0#p=(ERH+91yu9 T0pt' );
define( 'LOGGED_IN_SALT',   'ob+OIWc@SY!F&,@?e~+a_Yo@komhFQA:m?4J%rbk/aztb(cQwV.a?[emrs:Gg`EQ' );
define( 'NONCE_SALT',       '&pWC~`N,hW1n.R15TYWuV)oPjOv{E;<(1DB;oXi]0(JNt?N.c5ol@~pSVkGyLaC-' );

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
