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
define( 'DB_NAME', 'Bluebix_project' );

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
define( 'AUTH_KEY',         'p0?%|lXBnC@qv9&M*{uQ]>k!@VwIR#Uwx>qgR}l#BQ(d*VG-FXZxrsQUb(+ea|nJ' );
define( 'SECURE_AUTH_KEY',  '{t1t!e@p#+tTULn|r<(H4?RvF^,5Cl#doi~jgLn([szVO-ntT37z-Qwo32Gh?#pe' );
define( 'LOGGED_IN_KEY',    'C?RUW*#(wB$U8rD(W:-#i4X:0.`z20yKX.4S7Hp5y^sm1wmH<W&R! Oc[$`ZKuv7' );
define( 'NONCE_KEY',        '(/iO,}cR{ z516.CqUca|a @fg{QuQ<IFtz?cz]Oc^$;;0C}-NIVr<%l</W!c30Y' );
define( 'AUTH_SALT',        'YgM.ka$:Hi.V])>XB@3-.~aaIIQGwRUpti~*$!Wf9[{^Le/3zQ2_7mqV5!H7%-gP' );
define( 'SECURE_AUTH_SALT', '8#%7K#RBD5YglPf<{RI#.(TR9|HH*L5hxo6|2<@_5n-{B;{-n1uo[4 w&eO}a?u|' );
define( 'LOGGED_IN_SALT',   '4,0}X])zC$Ye{g/=q?PH`|5DUX5 <ZroL9IA&n%Ix+c*Oot;A6tNxMl)Ffqw3zR^' );
define( 'NONCE_SALT',       '%!lz0t>a^:}@cHRFFx%~pXWcU`k3$!_Y[%mHO7VLLaP$4X[Ae&/qz&hrGk4m|mDM' );

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
