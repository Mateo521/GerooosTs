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
define( 'DB_NAME', 'tienda_bd' );

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
define( 'AUTH_KEY',         'SQI}|kI.kfeN,)Fy107oMP$p=r5m+>8|R#X)vz15g2a~Cp>u5IfX|sq8 +HZikgH' );
define( 'SECURE_AUTH_KEY',  'tSMXHSXFiX@e2>]J1T,gjWvw).T< -NGE0`eM{UnTPVqWc7rZ^Cw7)m[p5vm[py(' );
define( 'LOGGED_IN_KEY',    'J,VbJX)biU/^25u.RW*5!Z10K-U0J7l(@s<tpsO!5x211K;XKER~r7T)M^8p}PMW' );
define( 'NONCE_KEY',        'j63b.A9j?^z!mxGmP_wDva/j]]Ib5]k4n$zX*r%{i3^uI)5KN2>2;RGfQ8c{y-=O' );
define( 'AUTH_SALT',        'ju#3F~H!j|5|np$s9@c5|v- o)?Xjk][2C#?F9j3MMk/LN5QBZF:uA:#`Ml {p6S' );
define( 'SECURE_AUTH_SALT', 'DE9.!cuhUVX5P [gr5x<s)h(U+oi%u2uqVGllE~DmVKc 2qisZb@>Fpf,(k?CwM4' );
define( 'LOGGED_IN_SALT',   '@e=t(:sO#x8[w;AFUwf#RrUCA7aE%G4t*yi3S64,faCH:U:=n~?oLk.QmR3LL(#d' );
define( 'NONCE_SALT',       ',kTah3<xNiz]NaXtRJZba8mD=G]e8%9n339KS=sxjF0yrU^{WiIQ;6j;.U_gW38,' );

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
