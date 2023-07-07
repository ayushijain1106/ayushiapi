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
define( 'DB_NAME', 'api' );

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
define( 'AUTH_KEY',         '=7}1Jz@uwJB#VBc;!NP97lm<y~:DB{lqPA@HEH6AFhf v!6l{qRCL]KQkSr:uOMo' );
define( 'SECURE_AUTH_KEY',  '{hC,BKS0Mc#(_!p:LMRdCIno:ntW1Qq+%EzSt=+X`}<;Ub>{vO60=sY]%Tj.)rL+' );
define( 'LOGGED_IN_KEY',    'rW=<Q%.jYWm&UJk|mTIH#g%*v4>&R-vYg3-=Kf2H;/(d>Wx<[Lx33P!<oXZA.mO?' );
define( 'NONCE_KEY',        'arnG%T$*fC41[64*}{7uR&ohw7LM}:CX`(X+pZo~foaNH5GdQn%*i-b28`g2x}V:' );
define( 'AUTH_SALT',        '3Q @&^qO!yldzbNy:9D#O4h.~4%^q:XDYj7Mul_I/qH>GhK;y>fgQi62dW6,-8;%' );
define( 'SECURE_AUTH_SALT', 'm^QU_jn(.K9dcO{wNF03;c)Y6X~.G>5c/=,ryGKILzi!JLAP^unXvvV>SR!HHkAl' );
define( 'LOGGED_IN_SALT',   'Z{C{sMEOdhajWTzRz:a&@Y}JV~{ow:4C4gkw5(nqkl,^S7(60 kplu7X}lQk#hxe' );
define( 'NONCE_SALT',       'qVaro]fO|$s<v&Nl$5[3PxFEnk^+.IG*Qw;+s};|}4~p0TvtMQ8(r@B_?gq=kp7Z' );

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
