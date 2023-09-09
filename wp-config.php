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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wptest_bd' );

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
define( 'AUTH_KEY',         'U#(!D1OQy{jBew_6n~8F1E_Ko[}zxTG/-AN 5vfTHpck+(|qO-ZJH2U6MxI8Q#oA' );
define( 'SECURE_AUTH_KEY',  '7n%{;#uix&]jJ9Gw}p:D4&@W)TH@.-+xIL0E#2{[m(lE=z_w]+k++mxMSSd}E!Mh' );
define( 'LOGGED_IN_KEY',    '#Ra7$ws,_glC{ezCS> #Wv*@R50%RQ#gCs t;:PL~hC2hf68%>6;!bx0$n}-WBE1' );
define( 'NONCE_KEY',        '8F1q1:7I:qLII=E47I_s$3jZe) TNdAkEh<f$~OEAmz?79~L^:b<R<F$4`:#4GZZ' );
define( 'AUTH_SALT',        'Y-@OpmpiOc0K8PafT-D|ejU5QbsZ*gU)Mp)1;Ov5s2,:%xnJ,mUo=T5YQ5,xOVN ' );
define( 'SECURE_AUTH_SALT', 'B-K9$5.!0(n?R;im-t`.YnqoGD73|5H)~xn0>OF#=f^cQPQ7!FG;Dd{yUh4V6PXO' );
define( 'LOGGED_IN_SALT',   'g/a<P<Dk>cE+o<hND<2>$!Lqu<mk7&iDR*a-BxI5bCYy1_z09tng;>}hbD1f$(:B' );
define( 'NONCE_SALT',       '1.|h{#T#GLXk ZI2#+Qi>3 ]M.SO}C|j-m8u9o3{tHmTV2_o 3AE/5i,?oDh[.<[' );

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
