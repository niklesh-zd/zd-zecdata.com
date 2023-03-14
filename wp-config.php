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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zecdata' );

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
define( 'AUTH_KEY',         '{=Sot!l^2zaXWu:[%_c?pqV%65/<=nhUb-YDf3?GQtDMh63T^sPN}UemGuCmaL3-' );
define( 'SECURE_AUTH_KEY',  'hIymL8ZL}^+f3o(m_5k 9*e@Mc=2?V+<O5JPtA]3M/aU8c1](U0rA86z2osl}-]S' );
define( 'LOGGED_IN_KEY',    ')9W/je7{]G`[5HV;}Ts2o=WV!hTR.)h%(g`S{6F$`,*{?u`;MnNf]4T%-Q%K*|LD' );
define( 'NONCE_KEY',        'I}%clk#4Ftn0EgS^uF_g^$E@}yqA|f19F{;:^op$v;&z*UYViUYn+%i$}g^q) 9H' );
define( 'AUTH_SALT',        'IP%BuHSWF@w!BXgUD*6vvQ_W9n;P27S[6GTyGYxiW0;])sj<6<%V<SA90YBlGXM<' );
define( 'SECURE_AUTH_SALT', 'VS=i;97yJ.*w:9vqQ<`]70*LB?dU[)n$=-|Z!Sf{!f@gdGdIC1ae&hs)c=]f]`S(' );
define( 'LOGGED_IN_SALT',   'H[yy#=0@<H!H2mHz]GYf]/4A?&S5)<jjq;fuX``5S`E5an&XjZZy)G3|[ L$rCYo' );
define( 'NONCE_SALT',       ':Txo,fx4sKzRr3u053XfQy@: K5hT75%~Nl9 }JI5?!G1~//@fPtc9|wLZZtO+*[' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

 define( 'UPLOADS', 'wp-content/uploads' );
 
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('FS_METHOD','direct');

